<!-- top navigation -->

        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <?php if(auth()->guard()->check()): ?>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo e(asset('/cashier/images/picture.jpg')); ?>" alt=""><?php echo e(auth()->user()->username); ?>

                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    
                    <a class="dropdown-item"  href="<?php echo e(route('cashier-login')); ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>
              </ul>
            </nav>
            <?php endif; ?>
          </div>
        </div>
        <!-- /top navigation --><?php /**PATH C:\Users\kalema\Documents\Pharmacy Management System\resources\views/cashier-topnav.blade.php ENDPATH**/ ?>