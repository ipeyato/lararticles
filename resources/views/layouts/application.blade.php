<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <meta httpequiv="XUACompatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>MDwikuntobayu</title>
      <link href="/assets/css/bootstrap.css" rel="stylesheet" />
      <link href="/assets/css/bootstrap-material-design.min.css" rel="stylesheet" />
      <link href="/assets/css/ripples.min.css" rel="stylesheet" />
      <link href="/assets/css/costum/layouts.css" rel="stylesheet" />
      <script src="/assets/js/jquery-1.11.1.js"></script>
      <script src="/assets/js/bootstrap.min.js"></script>
      <script src="/assets/js/material.min.js"></script>
      <script src="/assets/js/ripples.min.js"></script>
      <!-- <link rel="stylesheet" type="text/css" href="/assets/css/sweetalert.css"> -->
    </head>
    <body style="padding-top:60px;">
      <!--bagian navigation-->
      @include('shared.head_nav')
      <!-- Bagian Content -->
      <div class="container clearfix">
        <div class="row row-offcanvas row-offcanvas-left ">
          <!--Bagian Kiri-->
          @include("shared.left_nav")

          <!--Bagian Kanan-->
          <div id="main-content" class="col-xs-12 col-sm-9 main pull-right">
            <div class="panel-body">
              @if (Session::has('error'))
                <div class="session-flash alert-danger">
                    {{Session::get('error')}}
                </div>
              @endif
              @if (Session::has('notice'))
                <div class="session-flash alert-info">
                    {{Session::get('notice')}}
                </div>
              @endif
              @yield("content")
            </div>
          </div>
        </div>
      </div>
      <script src="/assets/js/costum/layouts.js"></script>    
      <script src="/assets/js/costum/costum.js"></script>
    </body>
  </html>