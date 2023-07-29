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
                <h3><i class="fa fa-cog"></i> Company Settings</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>System Configuration</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="update-company">
                    @csrf
                    @error('sucess')
                    <div style="color: Green" class="item form-group"> {{ $message }}</div>
                    @enderror
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" >Company Name <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                      <input type="text" required="required" class="form-control" placeholder="Company Name" name="name">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" >Address <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                      <input type="text" class="form-control " placeholder="Company Address" name="address">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Email</label>
                    <div class="col-md-6 col-sm-6 ">
                      <input class="form-control" type="text" placeholder="support@gmail.com" name="email">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Contact</label>
                    <div class="col-md-6 col-sm-6 ">
                      <input class="form-control" type="text" placeholder="09486087489" name="contact">
                    </div>
                  </div>
                  
                  <div class="ln_solid"></div>
                  <div class="item form-group">
                    <div class="col-md-6 col-sm-6 offset-md-3">
                      <a href="{{route('admin-index')}}" class="btn btn-primary" >Cancel</a>
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

    @include('footer')
  </body>
</html>
