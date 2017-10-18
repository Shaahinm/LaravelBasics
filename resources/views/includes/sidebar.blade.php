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
        <li class="has-sub {{ Request::is('media/*') || Request::is('media') ? 'active' : ''  }}"><a href="javascript:void(0);"><i class="icon-layout"></i><span class="title">پست ها</span></a>
            <ul class="nav collapse">
                <li class="{{ Request::is('media') ? 'active' : ''  }}"><a href="{{route('allMedia')}}" ><span class="title">نمایش پست ها</span></a></li>
                <li class="{{ Request::is('media/new') ? 'active' : ''  }}"><a href="{{route('newMedia')}}"><span class="title">پست جدید</span></a></li>
            </ul>
        </li>
        <li class="has-sub {{ Request::is('statistics/*') || Request::is('statistics') ? 'active' : ''  }}"><a href="javascript:void(0);"><i class="icon-layout"></i><span class="title">آمار</span></a>
            <ul class="nav collapse">
                <li class="{{ Request::is('statistics') ? 'active' : ''  }}"><a href="{{route('allStatistics')}}" ><span class="title">صفحه اصلی</span></a></li>
                <li class="{{ Request::is('statistics/category') ? 'active' : ''  }}"><a href="{{route('categoryStatistics')}}"><span class="title">آمار دسته بندی ها</span></a></li>
            </ul>
        </li>
        <li class="has-sub {{ Request::is('tags/*') || Request::is('tags') ? 'active' : ''  }}"><a href="javascript:void(0);"><i class="icon-layout"></i><span class="title">تگ ها</span></a>
            <ul class="nav collapse">
                <li class="{{ Request::is('tags') ? 'active' : ''  }}"><a href="{{route('allStatistics')}}" ><span class="title">همه تگ ها</span></a></li>
                <li class="{{ Request::is('tags/new') ? 'active' : ''  }}"><a href="{{route('categoryStatistics')}}"><span class="title">تگ جدید</span></a></li>
            </ul>
        </li>
        <li class="has-sub {{ Request::is('category/*') || Request::is('tags') ? 'active' : ''  }}"><a href="javascript:void(0);"><i class="icon-layout"></i><span class="title">دسته بندی ها</span></a>
            <ul class="nav collapse">
                <li class="{{ Request::is('category') ? 'active' : ''  }}"><a href="{{route('allStatistics')}}" ><span class="title">همه دسته بندی ها</span></a></li>
                <li class="{{ Request::is('category/new') ? 'active' : ''  }}"><a href="{{route('categoryStatistics')}}"><span class="title">دسته بندی جدید</span></a></li>
            </ul>
        </li>
    </ul>
</div>