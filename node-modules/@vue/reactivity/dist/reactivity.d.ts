
declare type BaseTypes = string | number | boolean;

declare type Builtin = Primitive | Function | Date | Error | RegExp;

declare type CollectionTypes = IterableCollections | WeakCollections;

export declare function computed<T>(getter: ComputedGetter<T>): ComputedRef<T>;

export declare function computed<T>(options: WritableComputedOptions<T>): WritableComputedRef<T>;

export declare type ComputedGetter<T> = (ctx?: any) => T;

export declare interface ComputedRef<T = any> extends WritableComputedRef<T> {
    readonly value: T;
}

export declare type ComputedSetter<T> = (v: T) => void;

export declare function customRef<T>(factory: CustomRefFactory<T>): Ref<T>;

declare type CustomRefFactory<T> = (track: () => void, trigger: () => void) => {
    get: () => T;
    set: (value: T) => void;
};

export declare type DebuggerEvent = {
    effect: ReactiveEffect;
    target: object;
    type: TrackOpTypes | TriggerOpTypes;
    key: any;
} & DebuggerEventExtraInfo;

declare interface DebuggerEventExtraInfo {
    newValue?: any;
    oldValue?: any;
    oldTarget?: Map<any, any> | Set<any>;
}

export declare type DeepReadonly<T> = T extends Builtin ? T : T extends Map<infer K, infer V> ? ReadonlyMap<DeepReadonly<K>, DeepReadonly<V>> : T extends ReadonlyMap<infer K, infer V> ? ReadonlyMap<DeepReadonly<K>, DeepReadonly<V>> : T extends WeakMap<infer K, infer V> ? WeakMap<DeepReadonly<K>, DeepReadonly<V>> : T extends Set<infer U> ? ReadonlySet<DeepReadonly<U>> : T extends ReadonlySet<infer U> ? ReadonlySet<DeepReadonly<U>> : T extends WeakSet<infer U> ? WeakSet<DeepReadonly<U>> : T extends Promise<infer U> ? Promise<DeepReadonly<U>> : T extends {} ? {
    readonly [K in keyof T]: DeepReadonly<T[K]>;
} : Readonly<T>;

declare type Dep = Set<ReactiveEffect>;

export declare function effect<T = any>(fn: () => T, options?: ReactiveEffectOptions): ReactiveEffect<T>;

export declare function enableTracking(): void;

export declare function isProxy(value: unknown): boolean;

export declare function isReactive(value: unknown): boolean;

export declare function isReadonly(value: unknown): boolean;

export declare function isRef<T>(r: Ref<T> | unknown): r is Ref<T>;

declare type IterableCollections = Map<any, any> | Set<any>;

export declare const ITERATE_KEY: unique symbol;

export declare function markRaw<T extends object>(value: T): T;

export declare function pauseTracking(): void;

declare type Primitive = string | number | boolean | bigint | symbol | undefined | null;

export declare function proxyRefs<T extends object>(objectWithRefs: T): ShallowUnwrapRef<T>;

/**
 * Creates a reactive copy of the original object.
 *
 * The reactive conversion is "deep"—it affects all nested properties. In the
 * ES2015 Proxy based implementation, the returned proxy is **not** equal to the
 * original object. It is recommended to work exclusively with the reactive
 * proxy and avoid relying on the original object.
 *
 * A reactive object also automatically unwraps refs contained in it, so you
 * don't need to use `.value` when accessing and mutating their value:
 *
 * ```js
 * const count = ref(0)
 * const obj = reactive({
 *   count
 * })
 *
 * obj.count++
 * obj.count // -> 1
 * count.value // -> 1
 * ```
 */
export declare function reactive<T extends object>(target: T): UnwrapNestedRefs<T>;

export declare interface ReactiveEffect<T = any> {
    (): T;
    _isEffect: true;
    id: number;
    active: boolean;
    raw: () => T;
    deps: Array<Dep>;
    options: ReactiveEffectOptions;
    allowRecurse: boolean;
}

export declare interface ReactiveEffectOptions {
    lazy?: boolean;
    scheduler?: (job: ReactiveEffect) => void;
    onTrack?: (event: DebuggerEvent) => void;
    onTrigger?: (event: DebuggerEvent) => void;
    onStop?: () => void;
    /**
     * Indicates whether the job is allowed to recursively trigger itself when
     * managed by the scheduler.
     *
     * By default, a job cannot trigger itself because some built-in method calls,
     * e.g. Array.prototype.push actually performs reads as well (#1740) which
     * can lead to confusing infinite loops.
     * The allowed cases are component update functions and watch callbacks.
     * Component update functions may update child component props, which in turn
     * trigger flush: "pre" watch callbacks that mutates state that the parent
     * relies on (#1801). Watch callbacks doesn't track its dependencies so if it
     * triggers itself again, it's likely intentional and it is the user's
     * responsibility to perform recursive state mutation that eventually
     * stabilizes (#1727).
     */
    allowRecurse?: boolean;
}

export declare const enum ReactiveFlags {
    SKIP = "__v_skip",
    IS_REACTIVE = "__v_isReactive",
    IS_READONLY = "__v_isReadonly",
    RAW = "__v_raw"
}

/**
 * Creates a readonly copy of the original object. Note the returned copy is not
 * made reactive, but `readonly` can be called on an already reactive object.
 */
export declare function readonly<T extends object>(target: T): DeepReadonly<UnwrapNestedRefs<T>>;

export declare interface Ref<T = any> {
    value: T;
    /**
     * Type differentiator only.
     * We need this to be in public d.ts but don't want it to show up in IDE
     * autocomplete, so we use a private Symbol instead.
     */
    [RefSymbol]: true;
    /* Excluded from this release type: _shallow */
}

export declare function ref<T extends object>(value: T): ToRef<T>;

export declare function ref<T>(value: T): Ref<UnwrapRef<T>>;

export declare function ref<T = any>(): Ref<T | undefined>;

declare const RefSymbol: unique symbol;

/**
 * This is a special exported interface for other packages to declare
 * additional types that should bail out for ref unwrapping. For example
 * \@vue/runtime-dom can declare it like so in its d.ts:
 *
 * ``` ts
 * declare module '@vue/reactivity' {
 *   export interface RefUnwrapBailTypes {
 *     runtimeDOMBailTypes: Node | Window
 *   }
 * }
 * ```
 *
 * Note that api-extractor somehow refuses to include `declare module`
 * augmentations in its generated d.ts, so we have to manually append them
 * to the final generated d.ts in our build process.
 */
export declare interface RefUnwrapBailTypes {
}

export declare function resetTracking(): void;

/**
 * Return a shallowly-reactive copy of the original object, where only the root
 * level properties are reactive. It also does not auto-unwrap refs (even at the
 * root level).
 */
export declare function shallowReactive<T extends object>(target: T): T;

/**
 * Returns a reactive-copy of the original object, where only the root level
 * properties are readonly, and does NOT unwrap refs nor recursively convert
 * returned properties.
 * This is used for creating the props proxy object for stateful components.
 */
export declare function shallowReadonly<T extends object>(target: T): Readonly<{
    [K in keyof T]: UnwrapNestedRefs<T[K]>;
}>;

export declare function shallowRef<T extends object>(value: T): T extends Ref ? T : Ref<T>;

export declare function shallowRef<T>(value: T): Ref<T>;

export declare function shallowRef<T = any>(): Ref<T | undefined>;

export declare type ShallowUnwrapRef<T> = {
    [K in keyof T]: T[K] extends Ref<infer V> ? V : T[K];
};

declare function stop_2(effect: ReactiveEffect): void;
export { stop_2 as stop }

declare type SymbolExtract<T> = (T extends {
    [Symbol.asyncIterator]: infer V;
} ? {
    [Symbol.asyncIterator]: V;
} : {}) & (T extends {
    [Symbol.hasInstance]: infer V;
} ? {
    [Symbol.hasInstance]: V;
} : {}) & (T extends {
    [Symbol.isConcatSpreadable]: infer V;
} ? {
    [Symbol.isConcatSpreadable]: V;
} : {}) & (T extends {
    [Symbol.iterator]: infer V;
} ? {
    [Symbol.iterator]: V;
} : {}) & (T extends {
    [Symbol.match]: infer V;
} ? {
    [Symbol.match]: V;
} : {}) & (T extends {
    [Symbol.matchAll]: infer V;
} ? {
    [Symbol.matchAll]: V;
} : {}) & (T extends {
    [Symbol.replace]: infer V;
} ? {
    [Symbol.replace]: V;
} : {}) & (T extends {
    [Symbol.search]: infer V;
} ? {
    [Symbol.search]: V;
} : {}) & (T extends {
    [Symbol.species]: infer V;
} ? {
    [Symbol.species]: V;
} : {}) & (T extends {
    [Symbol.split]: infer V;
} ? {
    [Symbol.split]: V;
} : {}) & (T extends {
    [Symbol.toPrimitive]: infer V;
} ? {
    [Symbol.toPrimitive]: V;
} : {}) & (T extends {
    [Symbol.toStringTag]: infer V;
} ? {
    [Symbol.toStringTag]: V;
} : {}) & (T extends {
    [Symbol.unscopables]: infer V;
} ? {
    [Symbol.unscopables]: V;
} : {});

export declare function toRaw<T>(observed: T): T;

declare type ToRef<T> = [T] extends [Ref] ? T : Ref<UnwrapRef<T>>;

export declare function toRef<T extends object, K extends keyof T>(object: T, key: K): ToRef<T[K]>;

export declare type ToRefs<T = any> = {
    [K in keyof T]: T[K] extends Ref ? T[K] : Ref<UnwrapRef<T[K]>>;
};

export declare function toRefs<T extends object>(object: T): ToRefs<T>;

export declare function track(target: object, type: TrackOpTypes, key: unknown): void;

export declare const enum TrackOpTypes {
    GET = "get",
    HAS = "has",
    ITERATE = "iterate"
}

export declare function trigger(target: object, type: TriggerOpTypes, key?: unknown, newValue?: unknown, oldValue?: unknown, oldTarget?: Map<unknown, unknown> | Set<unknown>): void;

export declare const enum TriggerOpTypes {
    SET = "set",
    ADD = "add",
    DELETE = "delete",
    CLEAR = "clear"
}

export declare function triggerRef(ref: Ref): void;

export declare function unref<T>(ref: T): T extends Ref<infer V> ? V : T;

export declare type UnwrapNestedRefs<T> = T extends Ref ? T : UnwrapRef<T>;

declare type UnwrappedObject<T> = {
    [P in keyof T]: UnwrapRef<T[P]>;
} & SymbolExtract<T>;

export declare type UnwrapRef<T> = T extends Ref<infer V> ? UnwrapRefSimple<V> : UnwrapRefSimple<T>;

declare type UnwrapRefSimple<T> = T extends Function | CollectionTypes | BaseTypes | Ref | RefUnwrapBailTypes[keyof RefUnwrapBailTypes] ? T : T extends Array<any> ? {
    [K in keyof T]: UnwrapRefSimple<T[K]>;
} : T extends object ? UnwrappedObject<T> : T;

declare type WeakCollections = WeakMap<any, any> | WeakSet<any>;

export declare interface WritableComputedOptions<T> {
    get: ComputedGetter<T>;
    set: ComputedSetter<T>;
}

export declare interface WritableComputedRef<T> extends Ref<T> {
    readonly effect: ReactiveEffect<T>;
}

export { }
