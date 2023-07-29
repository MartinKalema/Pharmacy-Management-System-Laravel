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
                <h3><i class="fa fa-user"></i> Cashier</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List of Cashiers</h2>
                    <ul class="nav navbar-right panel_toolbox">
                    <a href="{{ route('add-cashier') }}" class="btn btn-sm btn-info text-white"><i class="fa fa-user-plus"></i> Add Cashier</a>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Full Name</th>
                          <th>Contact</th>
                          <th>Email</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                        @foreach($cashiers as $cashier)
                        <tr>
                          <td>{{ $cashier['name'] }}</td>
                          <td>{{ $cashier['contact'] }}</td>
                          <td>{{ $cashier['email'] }}</td>
                          <td>
                              <a href="{{"editCashier/".$cashier['id'] }}" class="btn btn-sm btn-success text-white"><i class="fa fa-edit"></i> edit</a>
                              <a href="{{"deleteCashier/".$cashier['id'] }}" class="btn btn-sm btn-danger text-white"><i class="fa fa-trash"></i> delete</a>
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
