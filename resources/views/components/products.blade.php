<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="/themes/Eshopper/css/bootstrap.min.css" rel="stylesheet">
    <link href="/themes/Eshopper/css/font-awesome.min.css" rel="stylesheet">
    <link href="/themes/Eshopper/css/prettyPhoto.css" rel="stylesheet">
    <link href="/themes/Eshopper/css/price-range.css" rel="stylesheet">
    <link href="/themes/Eshopper/css/animate.css" rel="stylesheet">
    <link href="/themes/Eshopper/css/main.css" rel="stylesheet">
    <link href="/themes/Eshopper/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="/themes/Eshopper/js/html5shiv.js"></script>
    <script src="/themes/Eshopper/js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<!--/head-->

<body>

    @include ('partials.header')

    @include ('partials.advertisement')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Category</h2>
                        <div class="panel-group category-products" id="accordian">
                            <!--category-productsr-->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            Sportswear
                                        </a>
                                    </h4>
                                </div>
                                <div id="sportswear" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="">Nike </a></li>
                                            <li><a href="">Under Armour </a></li>
                                            <li><a href="">Adidas </a></li>
                                            <li><a href="">Puma</a></li>
                                            <li><a href="">ASICS </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            Mens
                                        </a>
                                    </h4>
                                </div>
                                <div id="mens" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="">Fendi</a></li>
                                            <li><a href="">Guess</a></li>
                                            <li><a href="">Valentino</a></li>
                                            <li><a href="">Dior</a></li>
                                            <li><a href="">Versace</a></li>
                                            <li><a href="">Armani</a></li>
                                            <li><a href="">Prada</a></li>
                                            <li><a href="">Dolce and Gabbana</a></li>
                                            <li><a href="">Chanel</a></li>
                                            <li><a href="">Gucci</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#womens">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            Womens
                                        </a>
                                    </h4>
                                </div>
                                <div id="womens" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="">Fendi</a></li>
                                            <li><a href="">Guess</a></li>
                                            <li><a href="">Valentino</a></li>
                                            <li><a href="">Dior</a></li>
                                            <li><a href="">Versace</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Kids</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Fashion</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Households</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Interiors</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Clothing</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Bags</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Shoes</a></h4>
                                </div>
                            </div>
                        </div>
                        <!--/category-productsr-->

                        <div class="brands_products">
                            <!--brands_products-->
                            <h2>Brands</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href=""> <span class="pull-right">(50)</span>Acne</a></li>
                                    <li><a href=""> <span class="pull-right">(56)</span>Gr??ne Erde</a></li>
                                    <li><a href=""> <span class="pull-right">(27)</span>Albiro</a></li>
                                    <li><a href=""> <span class="pull-right">(32)</span>Ronhill</a></li>
                                    <li><a href=""> <span class="pull-right">(5)</span>Oddmolly</a></li>
                                    <li><a href=""> <span class="pull-right">(9)</span>Boudestijn</a></li>
                                    <li><a href=""> <span class="pull-right">(4)</span>R??sch creative culture</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--/brands_products-->

                        <div class="price-range">
                            <!--price-range-->
                            <h2>Price Range</h2>
                            <div class="well">
                                <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600"
                                    data-slider-step="5" data-slider-value="[250,450]" id="sl2"><br />
                                <b>$ 0</b> <b class="pull-right">$ 600</b>
                            </div>
                        </div>
                        <!--/price-range-->

                        <div class="shipping text-center">
                            <!--shipping-->
                            <img src="/themes/Eshopper/images/home/shipping.jpg" alt="" />
                        </div>
                        <!--/shipping-->

                    </div>
                </div>

                <div class="col-sm-9 padding-right">
                    <div class="features_items">
                        <!--features_items-->
                        <h2 class="title text-center">Features Items</h2>

                        @foreach ($products as $product)
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <a href="{{ route('products.show' , $product->id ) }}">
                                            <img src="/themes/Eshopper/images/shop/{{ $product->image }}.jpg" alt="" />
                                        </a>
                                        <h2>{{ $product->price }}</h2>
                                        <p>{{ $product->name }}</p>
                                        <a href="#" class="btn btn-default add-to-cart" data-product-id="cart"><i
                                                class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                        <li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        {{ $products->links('partials.my-paginate')}}
                    </div>
                    <!--features_items-->
                </div>
            </div>
        </div>
    </section>

    @include ('partials.footer')

    <script src="/themes/Eshopper/js/jquery.js"></script>
    <script src="/themes/Eshopper/js/bootstrap.min.js"></script>
    <script src="/themes/Eshopper/js/jquery.scrollUp.min.js"></script>
    <script src="/themes/Eshopper/js/price-range.js"></script>
    <script src="/themes/Eshopper/js/jquery.prettyPhoto.js"></script>
    <script src="/themes/Eshopper/js/main.js"></script>
    <script src="{{ asset('js/order.js') }}"></script>
</body>

</html>