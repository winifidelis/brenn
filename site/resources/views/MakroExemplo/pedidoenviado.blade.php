@extends('layouts.site.siteLayout')

@section('content')

<nav aria-label="breadcrumb" class="breadcrumb-nav">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route ('inicio')}}"><i class="icon-home"></i></a></li>
            <li class="breadcrumb-item active" aria-current="page">Carrinho</li>
        </ol>
    </div>
</nav>
<?php
$totalDeItens = count($itens);
?>

<div class="container">
    <ul class="checkout-progress-bar">
        <li class="active">
            <span>Seu pedido foi enviado a loja</span>
        </li>
        <!--
        <li>
            <span>Review &amp; Payments</span>
        </li>
        !-->
    </ul>
    <div class="row">
        <div class="col-lg-8">
            <ul class="checkout-steps">
                <li>
                    <h2 class="step-title">Seu pedido foi enviado a loja com sucesso, em breve um representante irá entrar em contato!</h2>
                </li>

                <li>
                    <div class="checkout-step-shipping">
                        <h2 class="step-title">Sua lista</h2>

                        <table class="table table-step-shipping">
                            <tbody>
                                @foreach($itens as $item)
                                <?php
                                $produto = App\Models\Produto::find($item['produto_id']);
                                ?>
                                <tr>
                                    <td>{{$produto->nomeecommerce}}</td>
                                    <td>{{$item['produtoQuantidade']}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </li>
            </ul>
        </div>

        <div class="col-lg-4">
            <div class="cart-summary">
                <h3>Sumário</h3>
                <!--
                <h4>
                    <a data-toggle="collapse" href="#total-estimate-section" class="collapsed" role="button" aria-expanded="false" aria-controls="total-estimate-section">Estimate Shipping and Tax</a>
                </h4>
                <div class="collapse" id="total-estimate-section">
                    <form action="#">
                        <div class="form-group form-group-sm">
                            <label>Country</label>
                            <div class="select-custom">
                                <select class="form-control form-control-sm">
                                    <option value="USA">United States</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="China">China</option>
                                    <option value="Germany">Germany</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label>State/Province</label>
                            <div class="select-custom">
                                <select class="form-control form-control-sm">
                                    <option value="CA">California</option>
                                    <option value="TX">Texas</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group form-group-sm">
                            <label>Zip/Postal Code</label>
                            <input type="text" class="form-control form-control-sm">
                        </div>

                        <div class="form-group form-group-custom-control">
                            <label>Flat Way</label>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="flat-rate">
                                <label class="custom-control-label" for="flat-rate">Fixed $5.00</label>
                            </div>
                        </div>

                        <div class="form-group form-group-custom-control">
                            <label>Best Rate</label>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="best-rate">
                                <label class="custom-control-label" for="best-rate">Table Rate $15.00</label>
                            </div>
                        </div>
                    </form>
                </div>
                !-->
                <!--
                <table class="table table-totals">
                    <tbody>
                        <tr>
                            <td>Subtotal</td>
                            <td>$17.90</td>
                        </tr>
                        <tr>
                            <td>Tax</td>
                            <td>$0.00</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td>Order Total</td>
                            <td>$17.90</td>
                        </tr>
                    </tfoot>
                </table>
                !-->
                <table class="table table-totals">
                    <tbody>
                        <tr>
                            <td>Total de itens</td>
                            <td>{{$totalDeItens}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div><!-- End .row -->
</div><!-- End .container -->

<div class="mb-6"></div><!-- margin -->

@endsection