        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"> <span>Admin</span></a>
            </div>

            <div class="clearfix"></div>
            <div class="profile clearfix">
              <div class="profile_pic">
              
              </div>
              @if(isset($user))
                    <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{$user->name}}</h2>
              </div>>
              @endif
              
            </div>
            <br />

            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-edit"></i> Dashboard <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('size') }}">Size</a></li>
                      <li><a href="{{ route('color') }}">Color</a></li>
                      <li><a href="{{ route('company') }}">Company</a></li>
                      <li><a  href="{{ route('customer') }}">Customer</a>
                      <li><a href="{{ route('typeproduct') }}">Type Product</a></li>
                      <li><a href="{{ route('property') }}">Property</a></li>
                      <li> <a href="{{ route('feedback')}}"> Feedback</a></li>
                    </ul>
                  </li>
                  <li><a href="{{ route('bill') }}"><i class="fa fa-money"></i> Bill </span></a></li>
                  <li><a href="{{ route('product') }}"><i class="fa fa-check"></i> Product </span></a></li>
                  <li><a  href="{{ route('report') }}"><i class="fa fa-flag"></i> Report </span></a>
                  <li><a  href="{{ route('user') }}"><i class="fa fa-male"></i> User </span></a>
                  </li>
                  <li><a href="{{ route('admin-acount') }}" ><i class="fa fa-user"></i>Acount </span></a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('logout') }}">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
          </div>
        </div>