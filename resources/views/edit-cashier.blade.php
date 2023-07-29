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
                <h3><i class="fa fa-user-plus"></i> Edit Cashier Information</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Cashier Information</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="/edit-cashier" method="POST">
                  @csrf
                  <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <label><i class="fa fa-user"></i> Cashier Information</label>
                  </div>
                </div>
                <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <input type="hidden" class="form-control has-feedback-left"  name="id" value="{{ $data['id'] }}">
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>
                <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <input type="text" class="form-control has-feedback-left" placeholder="Full Name" name="name" value="{{ $data['name'] }}">
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>
                <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <input type="text" class="form-control has-feedback-left" placeholder="ex. 09809879797" name="contact" value="{{ $data['contact'] }}">
                    <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>
                <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <input type="text" class="form-control has-feedback-left" placeholder="ex. supplier@gmail.com" name="email" value="{{ $data['email'] }}">
                    <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>
                
                <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <label><i class="fa fa-key"></i> Account Information</label>
                  </div>
                </div>
                <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <input type="text" class="form-control has-feedback-left" placeholder="Username" name="username" value="{{ $data['username'] }}">
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>
                
                <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                    <input type="text" class="form-control has-feedback-left" placeholder="************" name="password" value="{{ $data['password'] }}">
                    <span class="fa fa-lock form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>
                
                <div class="item form-group">
                  <div class="col-md-8 col-sm-8 offset-md-2">
                      <a href="{{ route('cashier') }}" class="btn btn-primary" type="button">Cancel</a>
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
