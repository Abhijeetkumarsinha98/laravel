<div class="page-header-inner ">
    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
        data-target=".navbar-collapse">
        <span></span>
    </a>
    <div class="top-menu">
        <ul class="nav navbar-nav pull-right">
            <li><a href="javascript:;" class="fullscreen-btn"><i class="fa fa-arrows-alt"></i></a></li>



            <li class="dropdown dropdown-user">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                    data-close-others="true">
                    <span class="username username-hide-on-mobile"> {{Auth::user()->name}} </span>

                    <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-default">
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="icon-logout"></i> Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>