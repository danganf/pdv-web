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
    <section class="modal-container" data-modal="container">
    <div class="my-modal">
      <button data-modal="fechar" class="fechar">X</button>
      <form action="" id="form-modal" class="form-modal">
            <h4>Endereço de entrega</h4>
            <div class="row">
                <div class="col-md-4 pr-1 div">
                    <div class="form-group">
                        <label for="zip_code">
                            CEP*
                            <div class="lds-ellipsis spinner-cep" required style="top: -29px;"><div></div><div></div><div></div><div></div></div>
                        </label>
                        <input type="text" class="form-control" maxlength="9" id="zip_code" name="zip_code" placeholder="99999-999" required>
                    </div>
                </div>
                <div class="col-md-8 pr-1 div">
                    <div class="form-group">
                        <label for="address">Endereço*</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 pr-1 div">
                    <div class="form-group">
                        <label for="number">Número</label>
                        <input type="text" class="form-control" id="number" name="number" placeholder="">
                    </div>
                </div>
                <div class="col-md-6 pr-1 div">
                    <div class="form-group">
                        <label for="comp">Complemento</label>
                        <input type="text" class="form-control" id="comp" name="comp" placeholder="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 pr-1 div">
                    <div class="form-group">
                        <label for="city">Cidade*</label>
                        <input type="text" class="form-control" id="city" name="city" placeholder="" required>
                    </div>
                </div>
                <div class="col-md-6 pr-1 div">
                    <div class="form-group">
                        <label for="neighborhood">Bairro*</label>
                        <input type="text" class="form-control" id="neighborhood" name="neighborhood" placeholder="" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 pr-1 div">
                    <div class="form-group">
                        <label for="uf">UF*</label>
                        <input type="text" class="form-control" id="uf" name="uf" placeholder="" required>
                    </div>
                </div>
                <div class="col-md-8 pr-1 div">
                    <div class="form-group">
                    <button type="submit" data-create class="btn btn-info btn-round pull-right show">Fechar pedido</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 pr-1 div error"></div>
            </div>
      </form>
    </div>
  </section>
    <script src="./assets/js/order.js"></script>
    <script>
        let order = new Order();
        order.init();
    </script>    
</body>