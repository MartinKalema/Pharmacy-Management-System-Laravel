<!DOCTYPE html>
<html lang="en">
@include('header')

  <body class="nav-md">
            @include('cashier-sidebar')
            @include('cashier-menufooter')
          </div>
        </div>

        @include('cashier-topnav')

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><i class="fa fa-shopping-cart"></i> Daily Sales Details</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><strong></strong> <small class="text-success">{{ $now}}</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                    <a href="add-sale" class="btn btn-sm btn-info text-white"><i class="fa fa-plus"></i> Add Sales</a>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Medicine Name</th>
                          <th>Quantity</th>
                          <th>Price</th>
                          <th>Total Amount</th>
                          
                        </tr>
                      </thead>


                      <tbody>
                        @foreach($sales as $sale)
                        <tr>
                          <td>{{ $sale['medicineName']}}</td>
                          <td>{{ $sale['quantity']}}</td>
                          <td>{{ $sale['price']}}</td>
                          <td>{{ $sale['totalAmount']}}</td>
                          
                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    @include('footer')
  </body>
</html>
