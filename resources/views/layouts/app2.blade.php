<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--------------- Bootstrap link up ---------------->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />

    <!--------------- js link up ---------------->
    <script src="./js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/d0b80760b6.js" crossorigin="anonymous"></script>
    <!--------------- Main css link up ---------------->
    <link rel="stylesheet" href="{{asset('assets/css/style2.css')}}" />
    <title>@yield('title')</title>
  </head>
  <html>
    <!------------ Header secotion start here--------------->
    @include('Components.carNav')
   <!---------- main section is start here-------- -->
   <section class="py-5">
    <div class="row container-fluid">
        @yield('content')
    </div>
   </section>
  </body>
</html>
