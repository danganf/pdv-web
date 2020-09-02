<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>PDV WEB</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="./assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
   @yield('css')
</head>

<body class="">
    <div class="wrapper ">
        <!-- sidebar -->
        <div class="sidebar" data-color="white" data-active-color="danger">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text logo-mini">
                <div class="logo-image-small">
                    <img src="./assets/img/logo-small.png">
                </div>
                </a>
                <a href="http://www.creative-tim.com" class="simple-text logo-normal">PDV WEB</a>
            </div>
        </div>
        <!-- end sidebar -->
        
        <!-- main-painel -->
        <div class="main-panel">

            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">                        
                        <a class="navbar-brand" href="#pablo">{{$title}}</a>
                    </div>
                </div>
            </nav>
            <!-- end Navbar -->

            <div class="content">
                <div class="row">
                    @yield('content')
                </div>
            </div>

        </div>
        <!-- end main-painel -->

    </div>
    <script src="./assets/js/order.js"></script>
    <script>
        let order = new Order();
        order.init();
    </script>    
</body>