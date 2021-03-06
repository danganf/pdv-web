@extends('layout')

@section('css')
<style>
    .search{
        padding: 15px 10px !important;
        text-transform: uppercase;
        font-weight: 700;
    }
    .search::placeholder {color: #e0ddd1;}
    small{font-size: .500em;}
    .itens td{padding: 7px 7px !important;}
    .itens th{font-size: .900em;  }
    .itens .list-provider{margin-bottom: 0;}
    .itens .table-responsive{max-height: 500px;overflow-x: hidden;}

    .list-prod{border-bottom: 1px dashed #e0ddd1;padding: 0 0 17px 0;cursor: pointer;}
    .list-prod:hover{background-color: #F4F3EF;}
    .list-prod span{display: block;}
    .list-prod span.name{color: #51cbce;font-size: 1.8em;}
    .list-prod span.price{display: inline;}

    .lds-ellipsis{display: none;}
    .title-item{position: relative;}
    .title-item button{position: absolute;right: 0;top:-16px;font-size: .6em;}
    .card button[data-btn]{display: none;}
    input.error{border: 1px solid red;}

</style>
@endsection

@section('content')
    <div class="col-md-7">
        <div class="card card-user">
            <div class="card-header">
                <h5 class="card-title">
                    Produtos

                    <div class="lds-ellipsis spinner"><div></div><div></div><div></div><div></div></div>

                    <small class="pull-right">pressione Enter para buscar</small>
                </h5>
                <div class="form-group">
                    <input type="text" class="form-control search" id="search" name="search" placeholder="digite nome/sku">
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 pr-1" data-list-prod></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                            <i class="nc-icon nc-money-coins text-success"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">Valor total</p>
                                <p class="card-title">R$ <span data-total>0.00</span></p>
                                <p></p>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>          
            <div class="col-md-12">           
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title title-item">
                            Itens
                            <button type="submit" data-btn class="btn btn-primary btn-round pull-right">Finalizar</button>
                        </h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled team-members">
                            <li class="itens">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead class=" text-primary">
                                            <tr>
                                                <th>Nome</th>
                                                <th>Preço</th>
                                                <th>Fornecedores</th>
                                            </tr>
                                        </thead>
                                        <tbody data-items>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection