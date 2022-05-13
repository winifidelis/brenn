<div class="product-single-container product-single-default product-quick-view">
    <div class="row row-sparse">
        <div class="col-lg-6 product-single-gallery">
            <div class="product-slider-container">
                <div class="product-single-carousel owl-carousel owl-theme">
                    <div class="product-item">
                        <img src="{{asset('uploads/'.$imagem)}}">
                    </div>
                </div>
                <!-- End .product-single-carousel -->
            </div>
        </div><!-- End .product-single-gallery -->

        <div class="col-lg-6 product-single-details">
            <h1 class="product-title">{{$produto->nomeecommerce}}</h1>

            <!--
            <div class="ratings-container">
                <div class="product-ratings">
                    <span class="ratings" style="width:60%"></span>
                </div>
                <a href="#" class="rating-link">( 6 Reviews )</a>
            </div>
            !-->
            <div class="ratings-container">
                {{$produto->codprod}}
            </div>

            <!--
            <div class="price-box">
                <span class="old-price">$81.00</span>
                <span class="product-price">$101.00</span>
            </div>
            !-->

            <div class="product-desc">
                <p>
                    <?php
                    if ($produto->informacoestecnicas != "<CLOB>") {
                        echo $produto->informacoestecnicas;
                    }
                    ?>
                </p>
            </div>

            <div class="product-filters-container">
                <div class="product-single-filter mb-2">
                    <label>Unidade:</label>
                    <label><b>{{$produto->unidade}}</b></label>
                </div>
            </div>

            <!--
            <div class="product-filters-container">
                <div class="product-single-filter">
                    <label>Colors:</label>
                    <ul class="config-swatch-list">
                        <li class="active">
                            <a href="#" style="background-color: #0188cc;"></a>
                        </li>
                        <li>
                            <a href="#" style="background-color: #ab6e6e;"></a>
                        </li>
                        <li>
                            <a href="#" style="background-color: #ddb577;"></a>
                        </li>
                        <li>
                            <a href="#" style="background-color: #6085a5;"></a>
                        </li>
                    </ul>
                </div>
            </div>
            !-->

            <hr class="divider">

            <div class="product-action">
                <div class="product-single-qty">
                    <input class="horizontal-quantity form-control" type="text" id="qtdeSelecionada" name="qtdeSelecionada">
                </div>
                <a href="javascript:adicionarProdutoAoCarrinho()" class="btn btn-dark add-cart icon-shopping-cart" title="Add to Cart">Adicionar ao orçamento</a>
            </div>
            <form method="POST" id="addItem" name="addItem" action="{{ route('addItemNocarrinho') }}">
                @csrf
                <input type="hidden" class="form-control" name="produto_id" id="produto_id" value="{{ $produto->id }}">
                <input type="hidden" class="form-control" name="produtoQuantidade" id="produtoQuantidade" value="">
            </form>
            <script>
                function adicionarProdutoAoCarrinho() {
                    //alert(document.getElementById('qtdeSelecionada').value);
                    document.getElementById('produtoQuantidade').value = document.getElementById('qtdeSelecionada').value;
                    document.getElementById('addItem').submit();
                }
            </script>

            <hr class="divider">

            <!--
            <div class="product-single-share">
                <label class="sr-only">Share:</label>
                <div class="addthis_inline_share_toolbox"></div>
                <a href="#" class="add-wishlist" title="Add to Wishlist">Add to Wishlist</a>
            </div>
            !-->
        </div>
    </div>
</div>