<html>
    <head>
        @include('includes.head')
        <title>IMS - @yield('title')</title>
    </head>
    <body>
        <div class="page-container">

            <div class="page-sidebar">
                @include('includes.sidebar')
            </div>



            <div class="main-container">
                <div class="main-header row">
                    @include('includes.mainheader')
                </div>


                <div class="main-content">
                    @yield('content')
                </div>


                <footer class="footer-main">
                    © 2016 <strong>Mouldifi</strong> Admin Theme by <a target="_blank" href="#/">G-axon</a>
                </footer>

            </div>
        </div>

        {{--footer--}}
        @include('includes.footer')
    </body>
</html>