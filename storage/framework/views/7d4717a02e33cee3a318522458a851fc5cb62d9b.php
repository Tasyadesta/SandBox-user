<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Keranjang</title>

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
      <section class="wrapper site-min-height">
        
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <style>
          body {
              color: #566787;
              background: #f5f5f5;
              font-family: 'Varela Round', sans-serif;
              font-size: 13px;
          }
          .table-responsive {
              margin: 30px 0;
          }
          .table-wrapper {
              min-width: 1000px;
              background: #fff;
              padding: 20px 25px;
              border-radius: 3px;
              box-shadow: 0 1px 1px rgba(0,0,0,.05);
          }
          .table-title {
              padding-bottom: 15px;
              background: #299be4;
              color: #fff;
              padding: 16px 30px;
              margin: -20px -25px 10px;
              border-radius: 3px 3px 0 0;
          }
          .table-title h2 {
              margin: 5px 0 0;
              font-size: 24px;
          }
          .table-title .btn {
              color: #566787;
              float: right;
              font-size: 13px;
              background: #fff;
              border: none;
              min-width: 50px;
              border-radius: 2px;
              border: none;
              outline: none !important;
              margin-left: 10px;
          }
          .table-title .btn:hover, .table-title .btn:focus {
              color: #566787;
              background: #f2f2f2;
          }
          .table-title .btn i {
              float: left;
              font-size: 21px;
              margin-right: 5px;
          }
          .table-title .btn span {
              float: left;
              margin-top: 2px;
          }
          table.table tr th, table.table tr td {
              border-color: #e9e9e9;
              padding: 12px 15px;
              vertical-align: middle;
          }
          table.table tr th:first-child {
              width: 60px;
          }
          table.table tr th:last-child {
              width: 100px;
          }
          table.table-striped tbody tr:nth-of-type(odd) {
              background-color: #fcfcfc;
          }
          table.table-striped.table-hover tbody tr:hover {
              background: #f5f5f5;
          }
          table.table th i {
              font-size: 13px;
              margin: 0 5px;
              cursor: pointer;
          }	
          table.table td:last-child i {
              opacity: 0.9;
              font-size: 22px;
              margin: 0 5px;
          }
          table.table td a {
              font-weight: bold;
              color: #566787;
              display: inline-block;
              text-decoration: none;
          }
          table.table td a:hover {
              color: #2196F3;
          }
          table.table td a.settings {
              color: #2196F3;
          }
          table.table td a.delete {
              color: #F44336;
          }
          table.table td i {
              font-size: 19px;
          }
          table.table .avatar {
              border-radius: 50%;
              vertical-align: middle;
              margin-right: 10px;
          }
          .status {
              font-size: 30px;
              margin: 2px 2px 0 0;
              display: inline-block;
              vertical-align: middle;
              line-height: 10px;
          }
          .text-success {
              color: #10c469;
          }
          .text-info {
              color: #62c9e8;
          }
          .text-warning {
              color: #FFC107;
          }
          .text-danger {
              color: #ff5b5b;
          }
          .pagination {
              float: right;
              margin: 0 0 5px;
          }
          .pagination li a {
              border: none;
              font-size: 13px;
              min-width: 30px;
              min-height: 30px;
              color: #999;
              margin: 0 2px;
              line-height: 30px;
              border-radius: 2px !important;
              text-align: center;
              padding: 0 6px;
          }
          .pagination li a:hover {
              color: #666;
          }	
          .pagination li.active a, .pagination li.active a.page-link {
              background: #03A9F4;
          }
          .pagination li.active a:hover {        
              background: #0397d6;
          }
          .pagination li.disabled i {
              color: #ccc;
          }
          .pagination li i {
              font-size: 16px;
              padding-top: 6px
          }
          .hint-text {
              float: left;
              margin-top: 10px;
              font-size: 13px;
          }
          </style>
          <script>
          $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
          });
          </script> 
        
        
        <div class="container-xl">
          <div class="table-responsive">
              <div class="table-wrapper">
                  <div class="table-title">
                      <div class="row">
                          <div class="col-sm-5">
                              <h2><b>Keranjangku</b></h2>
                          </div>
    
                      </div>
                  </div>
                  <table class="table table-striped table-hover">
                      <thead>
                          <tr>
                              <th>ID Order</th>
                             			
                              <th>Order</th>
                              <th>Harga</th>
                              <th>Status</th>
                              <th>Dibuat Pada </th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                         <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <tr>
                          <td><?php echo e($d->id); ?></td>
                          <td><a><?php echo e($d->nama_order); ?></a></td>
                          <td><?php echo e($d->harga); ?></td>
                          <td><?php echo e($d->status); ?></td>
                          <td><?php echo e($d->created_at); ?></td>
                          <td>
                               
                          <a class="btn btn-primary" data-toggle="modal" data-target="#tambah<?php echo e($d->id); ?>"><i class="material-icons" style="color: white">&#xe8cc;</i> <span style="color: white">Checkout</span></a>
                          <div id="tambah<?php echo e($d->id); ?>" class="modal fade" role="dialog">
                       <div class="modal-dialog">
                           <div class="modal-content">
                               <div class="modal-header">
                                   <button type="button" class="close" data-dismiss="modal">&times;</button>
                                   
                               </div>
                               <form action="" method="POST" enctype="multipart/from-data">  
                                               
                               <?php echo csrf_field(); ?>
                                   <div class="modal-body">
                                       <input type="hidden" name="order_id" value="<?php echo e($d->id); ?>">
                                                 <div class="from-group">
                                           <label class="control-label" for="hrg_brg" style="color: black"> Bukti Pembayaran: </label>
                                           <input type="text" name="bukti" class="from-control" id="hrg_brg" style="color: black" required>
                                   </div>
                                   <div class="modal-footer">
                                       <button type="reset" class="btn btn-danger">Reset</button>
                                       <input type="submit" class="btn btn-success" value="Save">
                                   </div>
                                   </div>
                                   </form>
                                   </div>
                                   </div>
                                   </div>
                                   	
                               <!-- ini tombol hapus -->
                               <a class="btn btn-danger" data-toggle="modal" data-target="#hapus<?php echo e($d->id); ?>"><i class="material-icons" style="color: white">&#xe872;</i> <span style="color: white">Hapus</span></a>
                      <div id="hapus<?php echo e($d->id); ?>" class="modal fade" role="dialog" id="<?php echo e($d->id); ?>">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                  <form action="" method="POST" enctype="multipart/from-data">
                                  <?php echo method_field('DELETE'); ?>
                                  <?php echo csrf_field(); ?>
                                  <input type="hidden" name="id" value="<?php echo e($d->id); ?>">
                                  <h4 class="modal-title">yakin Hapus?</h4>
                                          <input type="submit" class="btn btn-success pull-right" value="Hapus">
                                    
                                      </form>
                                  </div>
                                      </div>
                                      </div>
                                      </div>
                                      
                          </td>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         
                      </tbody>
                  </table>
                  
              </div>
          </div>
      </div> 
        
      </section>
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

</body>

</html>
<?php /**PATH C:\Users\Iskandar\Documents\GitHub\laravelpolos\resources\views/users/keranjang.blade.php ENDPATH**/ ?>