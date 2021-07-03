<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashboard</title>

  <!-- Favicons -->
  <link href="daishoassets/img/favicon.png" rel="icon">
  <link href="daishoassets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
<link href="<?php echo e(asset('daishoassets/lib/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <!--external css-->
  <link href="<?php echo e(asset('daishoassets/lib/font-awesome/css/font-awesome.css')); ?>" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="<?php echo e(asset('daishoassets/css/style.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('daishoassets/css/style-responsive.css')); ?>" rel="stylesheet">
  
   <!-- Favicons -->
   <link href="userassets/img/favicon.png" rel="icon">
   <link href="userassets/img/apple-touch-icon.png" rel="apple-touch-icon">
 
   <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
 
   <!-- Vendor CSS Files -->
   <link href="userassets/vendor/animate.css/animate.min.css" rel="stylesheet">
   <link href="userassets/vendor/aos/aos.css" rel="stylesheet">
   <link href="userassets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link href="userassets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
   <link href="userassets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
   <link href="userassets/vendor/remixicon/remixicon.css" rel="stylesheet">
   <link href="userassets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
 
   <!-- Template Main CSS File -->
   <link href="userassets/css/style.css" rel="stylesheet">
  
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
     <!--header start-->
     <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="/" class="logo"><b>SAND<span>BOX</span></b></a>
      
    
   
    
    
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li> 
            <form class="logout">
          <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.responsive-nav-link','data' => ['style' => 'color: black','href' => ''.e(route('profile.show')).'','active' => request()->routeIs('profile.show')]]); ?>
<?php $component->withName('jet-responsive-nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['style' => 'color: black','href' => ''.e(route('profile.show')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('profile.show'))]); ?>
            <?php echo e(__('Profile')); ?>

         <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
      
        <?php if(Laravel\Jetstream\Jetstream::hasApiFeatures()): ?>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.responsive-nav-link','data' => ['href' => ''.e(route('api-tokens.index')).'','active' => request()->routeIs('api-tokens.index')]]); ?>
<?php $component->withName('jet-responsive-nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => ''.e(route('api-tokens.index')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('api-tokens.index'))]); ?>
                <?php echo e(__('API Tokens')); ?>

             <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
        <?php endif; ?>
            </form>
            </li>
          <li><form class="logout" method="POST" action="<?php echo e(route('logout')); ?>">
            <?php echo csrf_field(); ?>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.responsive-nav-link','data' => ['style' => 'color: black','href' => ''.e(route('logout')).'','onclick' => 'event.preventDefault();
                            this.closest(\'form\').submit();']]); ?>
<?php $component->withName('jet-responsive-nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['style' => 'color: black','href' => ''.e(route('logout')).'','onclick' => 'event.preventDefault();
                            this.closest(\'form\').submit();']); ?>
                <?php echo e(__('Log Out')); ?>

             <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
        </form></li>
        </ul>
      </div>
      
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
       <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                <p class="centered"><a href="<?php echo e(route('profile.show')); ?>"><img src="<?php echo e(asset('daishoassets/img/ui-sam.jpg')); ?>" class="img-circle" width="80"></a></p>
                <h5 class="centered"> <?php echo e(Auth::user()->name); ?></h5>
                <li class="mt">
                  <a href="/redirects">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                    </a>
                </li>
                
                <li class="sub-menu">
                  <a href="/redirects/keranjang">
                    <i class="fa fa-tasks"></i>
                    <span>Keranjangku</span>
                    </a>
                </li>
              </ul>
              <!-- sidebar menu end-->
            </div>
          </aside>
          <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">
        <div class="row">
          
          <?php $__currentLoopData = $dataKelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $langganan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="userassets/img/events-1.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href=""><?php echo e($langganan->nama_kelas); ?></a></h5>
                <p class="fst-italic text-center"><?php echo e($langganan->harga); ?></p>
                <p class="card-text"><?php echo e($langganan->keterangan); ?></p>
                <div class="col text-center">
                  <?php $check=0 ?>
                  <?php $__currentLoopData = $langganan->users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php if($iduser == $p->pivot->user_id && $langganan->id == $p->pivot->kelas_id): ?>
                <?php $check++ ?>  
                    <a href="/redirects/<?php echo e($langganan->id); ?>/kelas  " class="btn btn-success btn-lg">buka</a>
                               
                  <?php endif; ?>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php if($check == 0): ?>
                  <div id="beli<?php echo e($langganan->nama_langganan); ?>">
                  <form action="" method="POST" enctype="multipart/from-data">
                    <?php echo csrf_field(); ?>
                   <input type="hidden" name="user_id" value="<?php echo e($iduser); ?>">
                   <input type="hidden" name="nama_order" value="<?php echo e($langganan->nama_kelas); ?>">
                   <input type="hidden" name="harga" value="<?php echo e($langganan->harga); ?>">
                    <input type="submit" href="/redirects/keranjang" class="btn btn-success" value="Beli">
                   </form>
                  </div>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        </div>

      </div>
    </section><!-- End Events Section -->
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>sandbox</strong>. 
        </p>
        <a href="blank.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="<?php echo e(asset('daishoassets/lib/jquery/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('daishoassets/lib/bootstrap/js/bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(asset('daishoassets/lib/jquery-ui-1.9.2.custom.min.js')); ?>"></script>
  <script src="<?php echo e(asset('daishoassets/lib/jquery.ui.touch-punch.min.js')); ?>"></script>
  <script class="include" type="text/javascript" src="<?php echo e(asset('daishoassets/lib/jquery.dcjqaccordion.2.7.js')); ?>"></script>
  <script src="<?php echo e(asset('daishoassets/lib/jquery.scrollTo.min.js')); ?>"></script>
  <script src="<?php echo e(asset('daishoassets/lib/jquery.nicescroll.js')); ?>" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="<?php echo e(asset('daishoassets/lib/common-scripts.js')); ?>"></script>
  <!--script for this page-->
  
  <!-- Vendor JS Files -->
  <script src="userassets/vendor/aos/aos.js"></script>
  <script src="userassets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="userassets/vendor/php-email-form/validate.js"></script>
  <script src="userassets/vendor/purecounter/purecounter.js"></script>
  <script src="userassets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="userassets/js/main.js"></script>
</body>

</html>
<?php /**PATH C:\Users\Iskandar\Documents\GitHub\laravelpolos\resources\views/users/dashboard.blade.php ENDPATH**/ ?>