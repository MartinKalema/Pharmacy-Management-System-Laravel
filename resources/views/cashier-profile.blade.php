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
                <h3><i class="fa fa-user"></i> Profile</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Profile Information</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-3 col-sm-3  profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="{{ asset('cashier/images/picture.jpg') }}" alt="Avatar" style="border-radius:10px">
                        </div>
                      </div>
                      <h3>Anne Smith</h3>

                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i> San Francisco, California, USA
                        </li>

                        <li>
                          <i class="fa fa-user user-profile-icon"></i> Cashier
                        </li>

                        <li class="m-top-xs">
                          <i class="fa fa-external-link user-profile-icon"></i>
                          <a href="#" target="_blank">www.facebook.com</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-9 col-sm-9  profile_left">
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                      
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align"><strong><i class="fa fa-user"></i> Profile Information</strong></label>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" >Full Name <span class="required">*</span>
                    </label>
                    <div class="col-md-4 col-sm-4 ">
                      <input type="text" required="required" class="form-control" placeholder="First Name">
                    </div>
                    <div class="col-md-4 col-sm-4 ">
                      <input type="text" required="required" class="form-control" placeholder="Last Name">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Email</label>
                    <div class="col-md-8 col-sm-8 ">
                      <input class="form-control" type="text" placeholder="support@gmail.com">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Contact</label>
                    <div class="col-md-8 col-sm-8 ">
                      <input class="form-control" type="text" placeholder="09486087489">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align"><strong><i class="fa fa-key"></i> Account Information</strong></label>
                  </div>

                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Username</label>
                    <div class="col-md-8 col-sm-8 ">
                      <input class="form-control" type="text" placeholder="Username">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Password</label>
                    <div class="col-md-8 col-sm-8 ">
                      <input class="form-control" type="text" placeholder="************">
                    </div>
                  </div>
                  <div class="ln_solid"></div>
                  <div class="item form-group">
                    <div class="col-md-6 col-sm-6 offset-md-3">
                      <button class="btn btn-primary" type="button">Cancel</button>
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
    </div>

    @include('footer')
  </body>
</html>
