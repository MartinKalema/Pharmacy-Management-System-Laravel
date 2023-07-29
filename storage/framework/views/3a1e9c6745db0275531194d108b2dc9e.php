<!DOCTYPE html>
<html lang="en">
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <body class="nav-md">
            <?php echo $__env->make('admin-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('admin-menufooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          </div>
        </div>

        <?php echo $__env->make('admin-topnav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><i class="fa fa-bar-chart"></i> Today's Sales Report</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Sales Report Table</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
              <!-- graph area -->
              <div class="col-md-4 col-sm-4">
              <table class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Cashier Name</th>
                          <th>Sales Amount</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td><?php echo e($sale->cashierName); ?></td>
                          <td><?php echo e($sale->totalGenerated); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td><strong>Total</strong></td>
                          <td><strong><?php echo e($total); ?></strong></td>
                        </tr>
                      </tbody>
                    </table>
              </div>
              
              
              <!-- /graph area -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   
  </body>
</html>
<?php /**PATH C:\Users\kalema\Documents\Pharmacy Management System\resources\views/report.blade.php ENDPATH**/ ?>