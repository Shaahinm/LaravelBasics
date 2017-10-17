<div class="sidebar-fixed">

    <!-- Site header  -->
    <header class="site-header">
        <div class="site-logo"><a href="{{route('home')}}"><img src="/images/logo.png" alt="Logo" title="IMS"></a></div>
        <div class="sidebar-collapse hidden-xs"><a class="sidebar-collapse-icon" href="#"><i class="icon-menu"></i></a></div>
        <div class="sidebar-mobile-menu visible-xs"><a data-target="#side-nav" data-toggle="collapse" class="mobile-menu-icon" href="#"><i class="icon-menu"></i></a></div>
    </header>
    <!-- /site header -->

    <!-- Main navigation -->
    <ul id="side-nav" class="main-menu navbar-collapse collapse">
        <li class="{{ Request::is('/') ? 'active' : ''  }}"><a href="{{ route('home') }}"><i class="icon-gauge"></i><span class="title">داشبورد</span></a></li>
        <li class="{{ Request::is('media') ? 'active' : ''  }}"><a href="{{route('allMedia')}}"><i class="icon-layout"></i><span class="title">پست ها</span></a></li>
    </ul>
</div>