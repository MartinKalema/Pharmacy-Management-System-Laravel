<div class="container body" >
      <div class="main_container">
        <div class="col-md-3 left_col" >
          <div class="left_col scroll-view">
            <div class="navbar nav_title" >
            </div>
            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix" >
              <div class="profile_pic">
              <center><img src="<?php echo e(asset('build/images/logo.png')); ?>" alt="..." width="200" style="margin-top:-50px"></center>
              </div>
            </div>
            <!-- /menu profile quick info -->
            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                <li><a href="<?php echo e(route('admin-index')); ?>"><i class="fa fa-tachometer"></i> Dashboard</a></li>
                <li><a href="<?php echo e(route('category')); ?>"><i class="fa fa-list"></i> Medicine Category</a></li>
                <li><a href="<?php echo e(route('supplier')); ?>"><i class="fa fa-truck"></i> Supplier</a></li>
                <li><a href="<?php echo e(route('cashier')); ?>"><i class="fa fa-user"></i> Cashier</a></li>
                <li><a href="<?php echo e(route('medicine')); ?>"><i class="fa fa-medkit"></i> Medicine</a></li>
                <li><a href="<?php echo e(route('sales-detail')); ?>"><i class="fa fa-desktop"></i> Sales</a></li>
                <li><a href="<?php echo e(route('report')); ?>"><i class="fa fa-bar-chart"></i> Report</a></li>
                <li><a href="<?php echo e(route('company')); ?>"><i class="fa fa-building-o"></i> Company</a></li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu --><?php /**PATH C:\Users\kalema\Documents\Pharmacy Management System\resources\views/admin-sidebar.blade.php ENDPATH**/ ?>