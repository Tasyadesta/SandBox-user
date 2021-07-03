<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Dashboard - SandBox Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="<?php echo e(asset('adminassets/css/bootstrap.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('adminassets/css/bootstrap-responsive.min.css')); ?>" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">   
<link href="<?php echo e(asset('adminassets/css/font-awesome.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('adminassets/css/style.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('adminassets/css/pages/dashboard.css')); ?>" rel="stylesheet">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="redirects">SandBox Admin </a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-user"></i> <?php echo e(Auth::user()->name); ?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.dropdown-link','data' => ['href' => ''.e(route('profile.show')).'']]); ?>
<?php $component->withName('jet-dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => ''.e(route('profile.show')).'']); ?>
                                <?php echo e(__('Profile')); ?>

                             <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?></li>
              <li> <form method="POST" action="<?php echo e(route('logout')); ?>">
                                <?php echo csrf_field(); ?>

                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.dropdown-link','data' => ['href' => ''.e(route('logout')).'','onclick' => 'event.preventDefault();
                                                this.closest(\'form\').submit();']]); ?>
<?php $component->withName('jet-dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => ''.e(route('logout')).'','onclick' => 'event.preventDefault();
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
          </li>
        </ul>
       
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li class="dropdown"><a href="/redirects"><i class="icon-dashboard"></i><span>Dashboard</span> </a> </li>
        <li class=""><a href="/redirects/users"><i class="icon-list-alt"></i><span>Users</span> </a> </li>
        <li class="dropdown active"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-dollar"></i><span>Transaksi</span> <b class="caret"></b></a>
          <ul class="dropdown-menu ">
            <li><a href="/redirects/order">Order</a></li>
            <li><a href="/redirects/pembayaran">Pembayaran</a></li>
            <li><a href="/redirects/apply">Apply</a></li>
          </ul>
        </li>
        <li class=" dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-long-arrow-down"></i><span>Drop</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="/redirects/kelas">Kelas</a></li>
            <li><a href="/redirects/materi">Materi</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->
<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        
          <!-- /widget -->
          <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>User Kelas</h3>
              
              <a class="btn btn-primary pull-right" data-toggle="modal" data-target="#tambah">Tambah User Kelas</a>
              <div id="tambah" class="modal fade" role="dialog">
           <div class="modal-dialog">
               <div class="modal-content">
                   <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal">&times;</button>
                       
                   </div>
                   <form action="" method="POST" enctype="multipart/from-data">  
                                   
                   <?php echo csrf_field(); ?>
                       <div class="modal-body">
                         <div class="from-group">
                             <label class="control-label" for="nm_brg" style="color: black"> ID User: </label>
                             <select class="from-control" name="user_id" style="color: black">
                                        <?php $__currentLoopData = $dataUser; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($l->id); ?>" style="color: black"><?php echo e($l->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                     </select>
                         </div>
                         <div class="from-group">
                           <label class="control-label" for="nm_brg" style="color: black"> ID Kelas: </label>
                           <select class="from-control" name="kelas_id" style="color: black">
                                        <?php $__currentLoopData = $datakelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($l->id); ?>" style="color: black"><?php echo e($l->nama_kelas); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                     </select>
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
                       	
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                 
                    <th> ID User </th>
                    <th> ID Kelas </th>
                   

                    <th class="td-actions"> </th>
                  </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $datauserkelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                 
                    <td><?php echo e($user->user_id); ?></td>
                    <td><?php echo e($user->kelas_id); ?></td>
               
                    <td class="td-actions">
                      
                      <!-- <a class="btn btn-small btn-warning" data-toggle="modal" data-target="#edit<?php echo e($user->id); ?>"><i class="btn-icon-only icon-pencil"> </i></a> -->
                      <div id="edit<?php echo e($user->id); ?>" class="modal fade" role="dialog">
                   <div class="modal-dialog">
                       <div class="modal-content">
                           <div class="modal-header">
                               <button type="button" class="close" data-dismiss="modal">&times;</button>
                               
                           </div>
                           <form action="" method="POST" enctype="multipart/from-data">  
                            <?php echo method_field('PUT'); ?>  
                           <?php echo csrf_field(); ?>
                               <div class="modal-body">
                                 
                                <input type="hidden" name="id" value="<?php echo e($user->id); ?>">
                                <div class="from-group">
                                    <label class="control-label" for="kelas_id" style="color: black">Nama Kelas: </label>
                                     <select class="from-control" name="kelas_id" style="color: black">
                                        <?php $__currentLoopData = $dataUser; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($l->id); ?>" style="color: black"><?php echo e($l->nama_kelas); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                     </select>
                                  </div>
                                 <div class="from-group">
                                     <label class="control-label" for="nm_brg" style="color: black"> Nama Materi: </label>
                                     <input type="text" name="nama_materi" class="from-control" id="nm_brg" style="color: black" value="<?php echo e($user->nama_materi); ?>" required>
                                 </div>
                                 <div class="from-group">
                                   <label class="control-label" for="nm_brg" style="color: black"> Keterangan: </label>
                                   <input type="text" name="keterangan" class="from-control" id="nm_brg" style="color: black" value="<?php echo e($user->keterangan); ?>" required>
                               </div>
                               <div class="from-group">
                                <label class="control-label" for="nm_brg" style="color: black"> Link Foto: </label>
                                <input type="text" name="foto" class="from-control" id="nm_brg" style="color: black" placeholder="" value="<?php echo e($user->foto); ?>" required>
                            </div>
                               <div class="from-group">
                                 <label class="control-label" for="nm_brg" style="color: black"> Link Video: </label>
                                 <input type="text" name="video" class="from-control" id="nm_brg" style="color: black" placeholder="Youtube (embed)" value="<?php echo e($user->video); ?>"required>
                             </div>
                             <div class="from-group">
                                <label class="control-label" for="nm_brg" style="color: black"> Link modul: </label>
                                <input type="text" name="modul" class="from-control" id="nm_brg" style="color: black" value="<?php echo e($user->modul); ?>" required>
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
                               	
                      
                      <a class="btn btn-small btn-danger" data-toggle="modal" data-target="#delete<?php echo e($user->id); ?>"><i class="btn-icon-only icon-trash"> </i></a>
                      <div id="delete<?php echo e($user->id); ?>" class="modal fade" role="dialog">
                   <div class="modal-dialog">
                       <div class="modal-content">
                           <div class="modal-header">
                               <button type="button" class="close" data-dismiss="modal">&times;</button>
                               
                           </div>
                           <form action="" method="POST" enctype="multipart/from-data">  
                            <?php echo method_field('DELETE'); ?> 
                           <?php echo csrf_field(); ?>
                               <div class="modal-body">
                                <input type="hidden" name="id" value="<?php echo e($user->id); ?>">
                                 <div class="from-group">
                                     <label class="control-label" for="nm_brg" style="color: black"> Yakin Hapus? </label>
                                    
                                 </div>
                              
                               <div class="modal-footer">
                                   <input type="submit" class="btn btn-success" value="Yes">
                               </div>
                               </div>
                               </form>
                               </div>
                               </div>
                               </div>
                               	
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>
            <!-- /widget-content --> 
          </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
<!-- /footer -->
<div class="footer">
  <div class="footer-inner">
    <div class="container">
      <div class="row">
        <div class="span12"> &copy; 2021 <a href="#">SandBox Admin</a>. </div>
        <!-- /span12 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /footer-inner --> 
</div>
<!-- /footer --> 
<!-- Le javascript
================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="<?php echo e(asset('adminassets/js/jquery-1.7.2.min.js')); ?>"></script> 
<script src="<?php echo e(asset('adminassets/js/excanvas.min.js')); ?>"></script> 
<script src="<?php echo e(asset('adminassets/js/chart.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('adminassets/js/bootstrap.js')); ?>"></script>
<script language="javascript" type="text/javascript" src="<?php echo e(asset('adminassets/js/full-calendar/fullcalendar.min.js')); ?>"></script>
 
<script src="<?php echo e(asset('adminassets/js/base.js')); ?>"></script> 
<script>     

        var lineChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
				{
				    fillColor: "rgba(220,220,220,0.5)",
				    strokeColor: "rgba(220,220,220,1)",
				    pointColor: "rgba(220,220,220,1)",
				    pointStrokeColor: "#fff",
				    data: [65, 59, 90, 81, 56, 55, 40]
				},
				{
				    fillColor: "rgba(151,187,205,0.5)",
				    strokeColor: "rgba(151,187,205,1)",
				    pointColor: "rgba(151,187,205,1)",
				    pointStrokeColor: "#fff",
				    data: [28, 48, 40, 19, 96, 27, 100]
				}
			]

        }

        var myLine = new Chart(document.getElementById("area-chart").getContext("2d")).Line(lineChartData);


        var barChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
				{
				    fillColor: "rgba(220,220,220,0.5)",
				    strokeColor: "rgba(220,220,220,1)",
				    data: [65, 59, 90, 81, 56, 55, 40]
				},
				{
				    fillColor: "rgba(151,187,205,0.5)",
				    strokeColor: "rgba(151,187,205,1)",
				    data: [28, 48, 40, 19, 96, 27, 100]
				}
			]

        }    

        $(document).ready(function() {
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();
        var calendar = $('#calendar').fullCalendar({
          header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
          },
          selectable: true,
          selectHelper: true,
          select: function(start, end, allDay) {
            var title = prompt('Event Title:');
            if (title) {
              calendar.fullCalendar('renderEvent',
                {
                  title: title,
                  start: start,
                  end: end,
                  allDay: allDay
                },
                true // make the event "stick"
              );
            }
            calendar.fullCalendar('unselect');
          },
          editable: true,
          events: [
            {
              title: 'All Day Event',
              start: new Date(y, m, 1)
            },
            {
              title: 'Long Event',
              start: new Date(y, m, d+5),
              end: new Date(y, m, d+7)
            },
            {
              id: 999,
              title: 'Repeating Event',
              start: new Date(y, m, d-3, 16, 0),
              allDay: false
            },
            {
              id: 999,
              title: 'Repeating Event',
              start: new Date(y, m, d+4, 16, 0),
              allDay: false
            },
            {
              title: 'Meeting',
              start: new Date(y, m, d, 10, 30),
              allDay: false
            },
            {
              title: 'Lunch',
              start: new Date(y, m, d, 12, 0),
              end: new Date(y, m, d, 14, 0),
              allDay: false
            },
            {
              title: 'Birthday Party',
              start: new Date(y, m, d+1, 19, 0),
              end: new Date(y, m, d+1, 22, 30),
              allDay: false
            },
            {
              title: 'EGrappler.com',
              start: new Date(y, m, 28),
              end: new Date(y, m, 29),
              url: 'http://EGrappler.com/'
            }
          ]
        });
      });
    </script><!-- /Calendar -->
</body>
</html>
<?php /**PATH F:\polos\resources\views/admin/apply.blade.php ENDPATH**/ ?>