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
                <h3><i class="fa fa-list"></i> Edit Category Imformation.</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Category Information</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="/edit-category"  method="POST">
                  <?php echo csrf_field(); ?>
                  <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <input type="hidden" class="form-control has-feedback-left"  name="id" value="<?php echo e($data['id']); ?>">
                    <span class="fa fa-medkit form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>
                  <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <input type="text" class="form-control has-feedback-left" placeholder="Category Name" name="name" value="<?php echo e($data['name']); ?>">
                    <span class="fa fa-medkit form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>
                <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <input type="text" class="form-control has-feedback-left" placeholder="Description" name="description" value="<?php echo e($data['description']); ?>">
                    <span class="fa fa-map form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>
                <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                      <a href="<?php echo e(route('category')); ?>" class="btn btn-primary" type="button">Cancel</a>
                      <button type="submit" class="btn btn-success">Submit</button>
                  </div>
                </div>
                  </form>
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
</html><?php /**PATH C:\Users\kalema\Desktop\PharmacyManagement\resources\views/edit-category.blade.php ENDPATH**/ ?>