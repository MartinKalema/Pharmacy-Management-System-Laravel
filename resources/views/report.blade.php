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
                        @foreach($sales as $sale)
                        <tr>
                          <td>{{ $sale->cashierName}}</td>
                          <td>{{ $sale->totalGenerated}}</td>
                        </tr>
                        @endforeach
                        <tr>
                          <td><strong>Total</strong></td>
                          <td><strong>{{ $total}}</strong></td>
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

    @include('footer')
   
  </body>
</html>
