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
                <h3><i class="fa fa-dashboard"></i> Dashboard</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_content">
                  <div class="row">
                    <center>
                    <div class="tile_count">
                      <div class="col-md-6 col-sm-6  tile_stats_count">
                        <span class="count_top"><i class="fa fa-money"></i> Number of Sales</span>
                        <div class="count">{{ $numberOfSales }}</div>
                      </div>
                      <div class="col-md-6 col-sm-6  tile_stats_count">
                        <span class="count_top"><i class="fa fa-dollar"></i> Total Sales</span>
                        <div class="count">{{ $totalSales }}</div>
                      </div>
                    </div>
                  </center>
</div>
                             
              <div class="col-md-6 col-sm-6  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Top 5 Selling Items</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <table class="table table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Item Name</th>
                          <th>Quantity</th>
                          <th>Price</th>
                          <th>Total</th>
                        </tr>
                      </thead>


                      <tbody>
                        @foreach($sales as $sale)
                        <tr>
                          <td>{{ $sale->medicineName}}</td>
                          <td>{{ $sale->totalQuantity}}</td>
                          <td>{{ $sale->price}}</td>
                          <td>{{ $sale->totalAmount}}</td>
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
        </div>
      </div>
    </div>

    @include('footer')
  </body>
</html>
