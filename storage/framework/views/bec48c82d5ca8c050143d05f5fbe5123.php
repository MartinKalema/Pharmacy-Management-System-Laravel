<!DOCTYPE html>
<html lang="en">
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <body class="nav-md">
            <?php echo $__env->make('cashier-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('cashier-menufooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          </div>
        </div>

        <?php echo $__env->make('cashier-topnav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><i class="fa fa-shopping-cart"></i> Order</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Order Information</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-3 col-sm-3  profile_left">
                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker"></i> <?php echo e($company['address']); ?>

                        </li>

                        <li>
                          <i class="fa fa-phone"></i> <?php echo e($company['contact']); ?>

                        </li>
                        <li>
                          <i class="fa fa-envelope"></i> <?php echo e($company['email']); ?>

                        </li>
                        <li>
                          <i class="fa fa-globe"></i> <?php echo e($company['name']); ?>

                        </li>
                      </ul>
                    </div>
                    <div class="col-md-9 col-sm-9  profile_left">
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left form2" method="POST" action="save-sales">
                      <?php echo csrf_field(); ?>
                      <?php $__errorArgs = ['quantity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <div style="color: Red" class="col-form-label col-md-3 col-sm-3 label-align"> <?php echo e($message); ?></div>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" >Order Number <span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 ">
                      <input type="text" required="required" class="form-control" placeholder="ORD-001" name="salesNo">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" >Payment Type <span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-8 ">
                      <input type="text" required="required" class="form-control" placeholder="Cash"  name="paymentType">
                    </div>
                  </div>
                  
                    </div>
                    <div class="col-md-12 col-sm-12 ">
                    <table class="table table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th></th>
                          <th>Product</th>
                          <th>Quantity</th>
                          <th>Price <span class="required">($)</span></th>
                          <th>Discount<span class="required">(%)</span></th>
                          <th>Total Amount</th>
                          <th><a  class="btn btn-sm btn-success text-white add_more"><i class="fa fa-plus"></i> </a></th>
                        </tr>
                      </thead>
                      <tbody class="addMoreProduct">
                        <tr>
                          <td>1</td>
                          <td>
                          <select class="form-control product_id" name="medicineName" >
                            <option >Select Drug</option>
                            <?php $__currentLoopData = $drugs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $drug): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option data-price="<?php echo e($drug['retailPrice']); ?>" value="<?php echo e($drug['name']); ?>"><?php echo e($drug['name']); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                        </td>
                          <td><input type="number"  class="form-control quantity" placeholder="Enter Quantity"  name="quantity"></td>
                          <td><input type="number"  class="form-control price1" placeholder="Unit Price"  name="price"></td>
                          <td><input type="number"  class="form-control discount" placeholder="Discount"  name="discount"></td>
                          <td><input type="number"  class="form-control total_amount" placeholder="0.00"  name="totalAmount"></td>
                          <td><a  class="btn btn-sm btn-danger text-white "><i class="fa fa-trash"></i></a></td>
                        </tr>
                      </tbody>
                    </table>
                  
                    <br><br>
                    </div>
                    <div class="col-md-3 col-sm-3  profile_left">
                    </div>
                    <div class="col-md-9 col-sm-9  profile_left">
                    
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Grand Total <span class="required">($)</span>
                        </label>
                        <div class="col-md-8 col-sm-8 ">
                          <label class="form-control total" placeholder="0.00"></label>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Amount Received <span class="required">($)</span>
                        </label>
                        <div class="col-md-8 col-sm-8 ">
                          <input type="number" class="form-control amount_received" placeholder="0.00" >
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Balance <span class="required">($)</span>
                        </label>
                        <div class="col-md-8 col-sm-8 ">
                          <label class=" form-control balance"  >0.00</label>
                        </div>
                      </div>
                  
                  <div class="form-group">
                        <div class="col-md-9 col-sm-9  offset-md-3">
                          <button type="submit" class="btn btn-success">Submit Order</button>
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
    </div>

    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
  </body>
</html>


                  <script src="https://code.jquery.com/jquery-3.7.0.slim.js" integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>
                  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
                  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
                  <script>
                    $('.add_more').on('click', function(){
                      var product = $('.product_id').html();
                      var numberofrow = ($('.addMoreProduct tr').length - 0) + 1;
                      var tr = "<tr><td>" + numberofrow + "</td>" + 
                               "<td><select class='form-control product_id' name='medicineName[]' >" + product +
                               "</select></td>" +
                               "<td> <input type='number' name='quantity[]' class='form-control quantity' placeholder='Enter Quantity'></td>" +
                               "<td> <input type='number' name='price[]' class='form-control price1' placeholder='Unit Price'></td>" +
                               "<td> <input type='number' name='discount[]' class='form-control discount' placeholder='Discount'></td>" +
                               "<td> <input type='number' name='totalAmount[]' class='form-control total_amount' placeholder='0.00'></td>" +
                               "<td> <a class='btn btn-sm btn-danger text-white delete'><i class='fa fa-trash'></i></a></td>";
                      $('.addMoreProduct').append(tr);

                      
                    });

                    $('.addMoreProduct').delegate('.delete', 'click', function(){
                      $(this).parent().parent().remove();
                    });

                    function TotalAmount(){
                      var total = 0;
                      $('.total_amount').each(function(i, e){
                        var amount = $(this).val() - 0;
                        total += amount;
                      });

                      $('.total').html(total);

                    }

                    $('.addMoreProduct').delegate('.product_id', 'change', function(){
                      var tr = $(this).parent().parent();
                      var price = tr.find('.product_id option:selected').attr('data-price');
                      tr.find('.price1').val(price);
                      var qty = tr.find('.quantity').val() - 0;
                      var disc = tr.find('.discount').val() - 0;
                      var price = tr.find('.price1').val() - 0;
                      var total_amount = (qty * price) - ((qty * price * disc)/ 100);
                      tr.find('.total_amount').val(total_amount);
                      TotalAmount();
                    });

                    $('.addMoreProduct').delegate('.quantity, .discount', 'keyup', function(){
                      var tr = $(this).parent().parent();
                      var qty = tr.find('.quantity').val() - 0;
                      var disc = tr.find('.discount').val() - 0;
                      var price = tr.find('.price1').val() - 0;
                      var total_amount = (qty * price) - ((qty * price * disc)/ 100);
                      tr.find('.total_amount').val(total_amount);
                      TotalAmount();
                    });

                    $('.amount_received').keyup(function(){
                       var total = $('.total').html();
                       var received = $(this).val();
                       var tot = received - total;
                       $('.balance').html(tot);
                    });
                  </script>
                  <?php /**PATH C:\Users\kalema\Documents\Pharmacy Management System\resources\views/cashier-sales.blade.php ENDPATH**/ ?>