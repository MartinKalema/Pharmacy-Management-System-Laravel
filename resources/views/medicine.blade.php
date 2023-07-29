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
                <h3><i class="fa fa-medkit"></i> Medicine</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List of Medicines</h2>
                    <ul class="nav navbar-right panel_toolbox">
                    <a href="add-drugs" class="btn btn-sm btn-info text-white"><i class="fa fa-plus"></i> Add Medicine</a>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Medicine Code</th>
                          <th>Image</th>
                          <th>Name</th>
                          <th>Purchase Price</th>
                          <th>Retail Price</th>
                          <th>Quantity</th>
                          <th>Unit</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                        
                        @foreach($drugs as $drug)
                        <tr>
                          <td>{{ $drug['code'] }}</td>
                          @if($drug['unit'] == "Boxes")
                          <td><img src="{{ asset('/admin/images/alaxan.png') }}" width="50" style="border-radius:10px" alt="Image"></td>
                          @else
                          <td><img src="{{ asset('/admin/images/vial.png') }}" width="50" style="border-radius:10px" alt="Image"></td>
                          @endif
                          <td>{{ $drug['name'] }}</td>
                          <td>{{ $drug['purchasePrice'] }} </td>
                          <td>{{ $drug['retailPrice'] }}</td>
                          <td>{{ $drug['quantity'] }}</td>
                          <td>{{ $drug['unit'] }}</td>
                          <td>
                              <a href="{{"editMedicine/".$drug['id'] }}" class="btn btn-sm btn-success text-white"><i class="fa fa-edit"></i> edit</a>
                              <a href="{{"deleteMedicine/".$drug['id'] }}" class="btn btn-sm btn-danger text-white"><i class="fa fa-trash"></i> delete</a>
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
