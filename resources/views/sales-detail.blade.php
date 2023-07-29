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
                <h3><i class="fa fa-desktop"></i> Sales Details</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><strong></strong> <small class="text-success">{{ $now}}</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Medicine Name</th>
                          <th>Quantity</th>
                          <th>Total Amount</th>
                          <th>Cashier Name</th>
                          <th>Date</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                        @foreach($sales as $sale)
                        <tr>
                          <td>{{ $sale['medicineName']}}</td>
                          <td>{{ $sale['quantity']}}</td>
                          <td>{{ $sale['totalAmount']}}</td>
                          <td>{{ $sale['cashierName']}}</td>
                          <td>{{ $sale['date']}}</td>
                          <td>
                              <a href="{{"editSale/".$sale['id'] }}" class="btn btn-sm btn-success text-white"><i class="fa fa-edit"></i> edit</a>
                              <a href="{{"deleteSale/".$sale['id'] }}" class="btn btn-sm btn-danger text-white"><i class="fa fa-trash"></i> delete</a>
                          </td>
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
