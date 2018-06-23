@extends('shops.layouts.master')



@section('content')
    <!-- Home Slider Start -->





    <!-- Main Container -->
    <div class="main-container col2-left-layout">
        <div class="container">
            <div class="row">
                <div class="col-main col-sm-9 col-xs-12 col-sm-push-3">
                    <div class="category-description std">
                        <div class="slider-items-products">
                            <div id="category-desc-slider" class="product-flexslider hidden-buttons">
                                <div class="slider-items slider-width-col1 owl-carousel owl-theme">

                                    <!-- Item -->
                                    <div class="item">
                                        <a href="#x">
                                            <img alt="" src="sources/images/cat-slider-img1.jpg">
                                        </a>
                                        <div class="inner-info">
                                            <div class="cat-img-title">
                                                <span>Our new range of</span>
                                                <h2 class="cat-heading">
                                                    <strong>Smartphone</strong>
                                                </h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                                <a class="info" href="#">Shop Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Item -->

                                    <!-- Item -->
                                    <div class="item">
                                        <a href="#x">
                                            <img alt="" src="sources/images/cat-slider-img2.jpg">
                                        </a>
                                    </div>

                                    <!-- End Item -->

                                </div>
                            </div>
                        </div>
                    </div>

                    <!--this is include gird-inner -->

                        @include('shops.grid-product.gird-inner')

                </div>


                <aside class="sidebar col-sm-3 col-xs-12 col-sm-pull-9">
                    <div class="block category-sidebar">
                        <div class="sidebar-title">
                            <h3>Categories</h3>
                        </div>
                        <ul class="product-categories">
                            <li class="cat-item current-cat cat-parent">
                                <a href="shop_grid.html">Women</a>
                                <ul class="children">
                                    <li class="cat-item cat-parent">
                                        <a href="shop_grid.html">
                                            <i class="fa fa-angle-right"></i>&nbsp; Accessories</a>
                                        <ul class="children">
                                            <li class="cat-item">
                                                <a href="shop_grid.html">
                                                    <i class="fa fa-angle-right"></i>&nbsp; Dresses</a>
                                            </li>
                                            <li class="cat-item cat-parent">
                                                <a href="shop_grid.html">
                                                    <i class="fa fa-angle-right"></i>&nbsp; Handbags</a>
                                                <ul style="display: none;" class="children">
                                                    <li class="cat-item">
                                                        <a href="shop_grid.html">
                                                            <i class="fa fa-angle-right"></i>&nbsp; Beaded Handbags</a>
                                                    </li>
                                                    <li class="cat-item">
                                                        <a href="shop_grid.html">
                                                            <i class="fa fa-angle-right"></i>&nbsp; Sling bag</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="cat-item cat-parent">
                                        <a href="shop_grid.html">
                                            <i class="fa fa-angle-right"></i>&nbsp; Handbags</a>
                                        <ul class="children">
                                            <li class="cat-item">
                                                <a href="shop_grid.html">
                                                    <i class="fa fa-angle-right"></i>&nbsp; backpack</a>
                                            </li>
                                            <li class="cat-item">
                                                <a href="shop_grid.html">
                                                    <i class="fa fa-angle-right"></i>&nbsp; Beaded Handbags</a>
                                            </li>
                                            <li class="cat-item">
                                                <a href="shop_grid.html">
                                                    <i class="fa fa-angle-right"></i>&nbsp; Fabric Handbags</a>
                                            </li>
                                            <li class="cat-item">
                                                <a href="shop_grid.html">
                                                    <i class="fa fa-angle-right"></i>&nbsp; Sling bag</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="cat-item">
                                        <a href="shop_grid.html">
                                            <i class="fa fa-angle-right"></i>&nbsp; Jewellery</a>
                                    </li>
                                    <li class="cat-item">
                                        <a href="shop_grid.html">
                                            <i class="fa fa-angle-right"></i>&nbsp; Swimwear</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="cat-item cat-parent">
                                <a href="shop_grid.html">Men</a>
                                <ul class="children">
                                    <li class="cat-item cat-parent">
                                        <a href="shop_grid.html">
                                            <i class="fa fa-angle-right"></i>&nbsp; Dresses</a>
                                        <ul class="children">
                                            <li class="cat-item">
                                                <a href="shop_grid.html">
                                                    <i class="fa fa-angle-right"></i>&nbsp; Casual</a>
                                            </li>
                                            <li class="cat-item">
                                                <a href="shop_grid.html">
                                                    <i class="fa fa-angle-right"></i>&nbsp; Designer</a>
                                            </li>
                                            <li class="cat-item">
                                                <a href="shop_grid.html">
                                                    <i class="fa fa-angle-right"></i>&nbsp; Evening</a>
                                            </li>
                                            <li class="cat-item">
                                                <a href="shop_grid.html">
                                                    <i class="fa fa-angle-right"></i>&nbsp; Hoodies</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="cat-item">
                                        <a href="shop_grid.html">
                                            <i class="fa fa-angle-right"></i>&nbsp; Jackets</a>
                                    </li>
                                    <li class="cat-item">
                                        <a href="shop_grid.html">
                                            <i class="fa fa-angle-right"></i>&nbsp; Shoes</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="cat-item">
                                <a href="shop_grid.html">Electronics</a>
                            </li>
                            <li class="cat-item">
                                <a href="shop_grid.html">Furniture</a>
                            </li>
                            <li class="cat-item">
                                <a href="shop_grid.html">KItchen</a>
                            </li>
                        </ul>
                    </div>
                    <div class="block shop-by-side">
                        <div class="sidebar-bar-title">
                            <h3>Shop By</h3>
                        </div>
                        <div class="block-content">
                            <p class="block-subtitle">Shopping Options</p>
                            <div class="layered-Category">
                                <h2 class="saider-bar-title">Categories</h2>
                                <div class="layered-content">
                                    <ul class="check-box-list">
                                        <li>
                                            <input type="checkbox" id="jtv1" name="jtvc">
                                            <label for="jtv1">
                                                <span class="button"></span> Camera & Photo
                                                <span class="count">(12)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="jtv2" name="jtvc">
                                            <label for="jtv2">
                                                <span class="button"></span> Computers
                                                <span class="count">(18)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="jtv3" name="jtvc">
                                            <label for="jtv3">
                                                <span class="button"></span> Apple Store
                                                <span class="count">(15)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="jtv4" name="jtvc">
                                            <label for="jtv4">
                                                <span class="button"></span> Car Electronic
                                                <span class="count">(03)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="jtv5" name="jtvc">
                                            <label for="jtv5">
                                                <span class="button"></span> Accessories
                                                <span class="count">(04)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="jtv7" name="jtvc">
                                            <label for="jtv7">
                                                <span class="button"></span> Game & Video
                                                <span class="count">(07)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="jtv8" name="jtvc">
                                            <label for="jtv8">
                                                <span class="button"></span> Best selling
                                                <span class="count">(05)</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="block product-price-range ">
                        <div class="sidebar-bar-title">
                            <h3>Price</h3>
                        </div>
                        <div class="block-content">
                            <div class="slider-range">
                                <div data-label-reasult="Range:" data-min="0" data-max="500" data-unit="$" class="slider-range-price" data-value-min="50"
                                     data-value-max="350"></div>
                                <div class="amount-range-price">Range: $10 - $550</div>
                                <ul class="check-box-list">
                                    <li>
                                        <input type="checkbox" id="p1" name="cc" />
                                        <label for="p1">
                                            <span class="button"></span> $20 - $50
                                            <span class="count">(0)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="p2" name="cc" />
                                        <label for="p2">
                                            <span class="button"></span> $50 - $100
                                            <span class="count">(0)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="p3" name="cc" />
                                        <label for="p3">
                                            <span class="button"></span> $100 - $250
                                            <span class="count">(0)</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="block sidebar-cart">
                        <div class="sidebar-bar-title">
                            <h3>My Cart</h3>
                        </div>
                        <div class="block-content">
                            <p class="amount">There are
                                <a href="shopping_cart.html">2 items</a> in your cart.</p>
                            <ul>
                                <li class="item">
                                    <a href="shopping_cart.html" title="Sample Product" class="product-image">
                                        <img src="sources/images/products/img07.jpg" alt="Sample Product ">
                                    </a>
                                    <div class="product-details">
                                        <div class="access">
                                            <a href="#" title="Remove This Item" class="remove-cart">
                                                <i class="icon-close"></i>
                                            </a>
                                        </div>
                                        <p class="product-name">
                                            <a href="shopping_cart.html">Lorem ipsum dolor sit amet Consectetur</a>
                                        </p>
                                        <strong>1</strong> x
                                        <span class="price">$19.99</span>
                                    </div>
                                </li>
                                <li class="item last">
                                    <a href="#" title="Sample Product" class="product-image">
                                        <img src="sources/images/products/img08.jpg" alt="Sample Product">
                                    </a>
                                    <div class="product-details">
                                        <div class="access">
                                            <a href="#" title="Remove This Item" class="remove-cart">
                                                <i class="icon-close"></i>
                                            </a>
                                        </div>
                                        <p class="product-name">
                                            <a href="shopping_cart.html">Consectetur utes anet adipisicing elit</a>
                                        </p>
                                        <strong>1</strong> x
                                        <span class="price">$8.00</span>
                                        <!--access clearfix-->
                                    </div>
                                </li>
                            </ul>
                            <div class="summary">
                                <p class="subtotal">
                                    <span class="label">Cart Subtotal:</span>
                                    <span class="price">$27.99</span>
                                </p>
                            </div>
                            <div class="cart-checkout">
                                <button class="button button-checkout" title="Submit" type="submit">
                                    <i class="fa fa-check"></i>
                                    <span>Checkout</span>
                                </button>
                            </div>
                        </div>
                    </div>


                    <div class="single-img-add sidebar-add-slider ">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="sources/images/add-slide1.jpg" alt="slide1">
                                    <div class="carousel-caption">
                                        <h3>
                                            <a href="single_product.html" title=" Sample Product">Sale Up to 50% off</a>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        <a href="#" class="info">shopping Now</a>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="sources/images/add-slide2.jpg" alt="slide2">
                                    <div class="carousel-caption">
                                        <h3>
                                            <a href="single_product.html" title=" Sample Product">Smartwatch Collection</a>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        <a href="#" class="info">All Collection</a>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="sources/images/add-slide3.jpg" alt="slide3">
                                    <div class="carousel-caption">
                                        <h3>
                                            <a href="single_product.html" title=" Sample Product">Summer Sale</a>
                                        </h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="block special-product">
                        <div class="sidebar-bar-title">
                            <h3>Special Products</h3>
                        </div>
                        <div class="block-content">
                            <ul>
                                <li class="item">
                                    <div class="products-block-left">
                                        <a href="single_product.html" title="Sample Product" class="product-image">
                                            <img src="sources/images/products/img01.jpg" alt="Sample Product ">
                                        </a>
                                    </div>
                                    <div class="products-block-right">
                                        <p class="product-name">
                                            <a href="single_product.html">Lorem ipsum dolor sit amet Consectetur</a>
                                        </p>
                                        <span class="price">$19.99</span>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="products-block-left">
                                        <a href="single_product.html" title="Sample Product" class="product-image">
                                            <img src="sources/images/products/img02.jpg" alt="Sample Product ">
                                        </a>
                                    </div>
                                    <div class="products-block-right">
                                        <p class="product-name">
                                            <a href="single_product.html">Consectetur utes anet adipisicing elit</a>
                                        </p>
                                        <span class="price">$89.99</span>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <a class="link-all" href="shop_grid.html">All Products</a>
                        </div>
                    </div>


                </aside>
            </div>
        </div>
    </div>
    <!-- Main Container End -->
    <!-- category area start TODO: Khong can lam cai nay -->

    <!-- category-area end -->

@endsection

@section('script-ajax')

@endsection



@section('title')
    Page@Index
@endsection