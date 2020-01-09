<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('/img/apple-icon.png')}}">
        <link rel="icon" type="image/png" href="{{asset('/img/favicon.png')}}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>
          Web-App
        </title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
        <!-- CSS Files -->
        <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet" />
        <link href="{{asset('/css/paper-dashboard.css?v=2.0.0')}}" rel="stylesheet" />
        <link href="{{asset('/demo/demo.css')}}" rel="stylesheet" />
        <link href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet" />

    </head>
    <body class="">
        @include("layouts.sidebar")
         <div class="header text-center">
            <h2 class="title">Notifications</h2>
            <p class="category">Handcrafted by our friend <a target="_blank" href="https://github.com/mouse0270">Robert McIntosh</a>. Please checkout the <a href="http://bootstrap-notify.remabledesigns.com/" target="_blank">full documentation.</a></p>
        </div>

      </div> -->
            <div class="content">
              <div class="row">
                @yield('content')

              </div>
            </div>
        @include('layouts.footer')
          </div>
        </div>
        <!--   Core JS Files   -->
        <script src="{{asset('/js/core/jquery.min.js')}}"></script>
        <script src="{{asset('/js/core/popper.min.js')}}"></script>
        <script src="{{asset('/js/core/bootstrap.min.js')}}"></script>
        <script src="{{asset('/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
        <script src="{{asset('/js/plugins/chartjs.min.js')}}"></script>
        <!--  Notifications Plugin    -->
        <script src="{{asset('/js/plugins/bootstrap-notify.js')}}"></script>
        <script src="{{asset('/js/paper-dashboard.min.js?v=2.0.0')}}" type="text/javascript"></script>

        <script src="{{asset('/demo/demo.js')}}"></script>
        <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

        <script type="text/javascript">
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                @if(Session::has('msj'))
                demo.showNotification('success','{{Session::pull('msj')}}')
                @endif
                  @if(Session::has('err'))
               demo.showNotification('warning','{{Session::pull('err')}}')
                  @endif
                @yield('extraJS')
        </script>
      </body>
</html>
