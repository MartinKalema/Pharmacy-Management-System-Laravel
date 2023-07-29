<!DOCTYPE html>
<html lang="en">
 @include('header')
  <body class="nav-md">
            @include('admin-sidebar')
            @include('admin-menufooter')
          </div>
        </div>

        @include('admin-topnav')

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h4><i class="fa fa-medkit"></i> Add Medicine</h3>
              </div>
            </div>

            <div class="clearfix"></div>

                <div class="x_panel">
                  <div class="x_title">
                    <h2>Medicine Information</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="add-medicine">
                  @csrf
                  <div class="row">
                  <div class="col-md-4 col-sm-4">
                    <input type="text" class="form-control has-feedback-left" placeholder="Medicine Code" name="code">
                    <span class="fa fa-medkit form-control-feedback left" aria-hidden="true"></span>
                  </div>
                  <div class="col-md-4 col-sm-4">
                  <select class="form-control" name="category">
                            <option>Select Category</option>
                            @foreach($categories as $category)
                            <option value="{{ $category['name'] }}"> {{ $category['name']}}</option>
                            @endforeach
                          </select>
                  </div>
                  <div class="col-md-4 col-sm-4">
                  <select class="form-control" name="supplier">
                            <option>Select Supplier</option>
                            @foreach($suppliers as $supplier)
                            <option value="{{ $supplier['name'] }}"> {{ $supplier['name']}}</option>
                            @endforeach
                          </select>
                  </div><br><br><br>
                  <div class="col-md-12 col-sm-12">
                    <input type="text" class="form-control has-feedback-left" placeholder="Medicine Name" name="name">
                    <span class="fa fa-medkit form-control-feedback left" aria-hidden="true"></span>
                  </div><br><br><br>
                  <div class="col-md-12 col-sm-12">
                    <textarea class="form-control" placeholder="Medicine Description" name="description"></textarea>
                  </div><br><br><br><br>
                  
                  <div class="col-md-4 col-sm-4">
                    <input type="text" class="form-control has-feedback-left" placeholder="Generic Name" name="genericName">
                    <span class="fa fa-medkit form-control-feedback left" aria-hidden="true"></span>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <input type="text" class="form-control has-feedback-left" placeholder="Purchase Price" name="purchasePrice">
                    <span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <input type="text" class="form-control has-feedback-left" placeholder="Retail Price" name="retailPrice">
                    <span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>
                  </div><br><br><br>
                  <div class="col-md-4 col-sm-4">
                    <input type="text" class="form-control has-feedback-left" placeholder="Quantity" name="quantity">
                    <span class="fa fa-hourglass-o form-control-feedback left" aria-hidden="true"></span>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <input type="text" class="form-control has-feedback-left" placeholder="Unit" name="unit">
                    <span class="fa fa-balance-scale form-control-feedback left" aria-hidden="true"></span>
                  </div>
                  <div class="col-md-4 col-sm-4">
                    <input type="date" class="form-control has-feedback-left" placeholder="" name="expiry">
                    <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                  </div><br><br><br>
                  <br>
                  <div class="col-md-12 col-sm-12 ">
                      <a  href="{{ route('medicine') }}" class="btn btn-primary" type="button">Cancel</a>
                      <button type="submit" class="btn btn-success">Submit</button>
                  </div>
                  </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    @include('footer')
  </body>
</html>
