<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Kelas;
use App\Models\Materi;
use App\Models\Order;
use App\Models\Pembayaran;
use App\Models\UserKelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    // :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::fungsi crud order:::::::::::::::::::::::::::::::::::::::::::: //
    public function order(){
        $role=Auth::user()->role;
        if($role == '1'){
            $dataOrder = Order::get();
            $dataUser = User::get();
            // dd($order);
            return view('admin/order')->with(compact('dataOrder','dataUser'));
        }else {
            return redirect('/redirects');
        }
    }
    public function updateOrder(Request $request)
    {
        // dd($request);
        $order = Order::findOrFail($request->id);
        $order->update($request->all());
        return redirect('redirects/order')->with('sukses', 'Data berhasil diupdate');
    }
    public function destroyOrder(Request $request)
    {
        $order = Order::findOrFail($request->id);
        $order->delete();
        return redirect('redirects/order')->with('sukses', 'Data berhasil dihapus');
    }
    // :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::fungsi crud pembayaran :::::::::::::::::::::::::::::::::::::: //
    public function pembayaran(){
        $role=Auth::user()->role;
        if($role == '1'){
            $dataPembayaran = Pembayaran::get();
            // dd($order);
            return view('admin/pembayaran')->with(compact('dataPembayaran'));
        }else {
            return redirect('/redirects');
        }
    }
    public function updatePembayaran(Request $request)
    {
        // dd($request);
        $pembayaran = Pembayaran::findOrFail($request->id);
        $pembayaran->update($request->all());
        return redirect('redirects/pembayaran')->with('sukses', 'Data berhasil diupdate');
    }
    public function destroyPembayaran(Request $request)
    {
        $pembayaran = Pembayaran::findOrFail($request->id);
        $pembayaran->delete();
        return redirect('redirects/pembayaran')->with('sukses', 'Data berhasil dihapus');
    }
    // :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::fungsi crud kelas:::::::::::::::::::::::::::::::::::::::::::: //
    public function kelas(){
        $role=Auth::user()->role;
        if($role == '1'){
            $datakelas = Kelas::get();
            // dd($order);
            return view('admin/kelas')->with(compact('datakelas'));
        }else {
            return redirect('/redirects');
        }
    }
    public function storeKelas(Request $request)
    {
        // dd($request);
        Kelas::create($request->all());
        return redirect('redirects/kelas')->with('sukses', 'Data berhasil diinput');
    }

    public function updateKelas(Request $request)
    {
        // dd($request);
        $kelas = Kelas::findOrFail($request->id);
        $kelas->update($request->all());
        return redirect('redirects/kelas')->with('sukses', 'Data berhasil diupdate');
    }
    public function destroyKelas(Request $request)
    {
        $kelas = Kelas::findOrFail($request->id);
        $kelas->delete();
        return redirect('redirects/kelas')->with('sukses', 'Data berhasil dihapus');
    }
    // :::::::::::::::::::::::::::::::::::::::::::::::::::;fungsi crud materi :::::::::::::::::::::::::::::::::::::::::::::::::: //
    public function materi(){
        $role=Auth::user()->role;
        if($role == '1'){
            $dataMateri = Materi::get();
            $datakelas = Kelas::get();
            // dd($order);
            return view('admin/materi')->with(compact('dataMateri','datakelas'));
        }else {
            return redirect('/redirects');
        }
    }
    public function storeMateri(Request $request)
    {
        // dd($request);
        Materi::create($request->all());
        return redirect('redirects/materi')->with('sukses', 'Data berhasil diinput');
    }

    public function updateMateri(Request $request)
    {
        // dd($request);
        $materi = Materi::findOrFail($request->id);
        $materi->update($request->all());
        return redirect('redirects/materi')->with('sukses', 'Data berhasil diupdate');
    }
    public function destroyMateri(Request $request)
    {
        $materi = Materi::findOrFail($request->id);
        $materi->delete();
        return redirect('redirects/materi   ')->with('sukses', 'Data berhasil dihapus');
    }
    public function user(){
        $role=Auth::user()->role;
        if($role == '1'){
            $dataUser = User::get();
            // dd($order);
            return view('admin/users')->with(compact('dataUser'));
        }else {
            return redirect('/redirects');
        }
    }
    public function destroyUser(Request $request)
    {
        $user = User::findOrFail($request->id);
        $user->delete();
        return redirect('redirects/users
           ')->with('sukses', 'Data berhasil dihapus');
    }
    public function apply(){
        $role=Auth::user()->role;
        if($role == '1'){
            $dataUser = User::get();
            $datakelas = Kelas::get();
            $datauserkelas = UserKelas::get();
            // dd($order);
            return view('admin/apply')->with(compact('dataUser','datakelas','datauserkelas'));
        }else {
            return redirect('/redirects');
        }
    }
    public function destroyapply(Request $request)
    {
        $user = UserKelas::findOrFail($request->id);
        $user->delete();
        return redirect('redirects/apply
           ')->with('sukses', 'Data berhasil dihapus');
    }
    public function storeapply(Request $request)
    {
        // dd($request);
        $userIds = User::find($request->user_id); 
        $kelas = Kelas::find($request->kelas_id);   
        $kelas->users()->attach($userIds);
        // UserKelas::create($kelas);

        return redirect('redirects/apply')->with('sukses', 'Data berhasil diinput');
    }

}
