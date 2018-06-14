<!-- Main Container -->
<div class="main-container col1-layout">
    <div class="container">
        <div class="row">
            <div class="col-main">
                <div class="product-view-area">
                    <div class="product-big-image col-xs-12 col-sm-5 col-lg-5 col-md-5">
                        <div class="icon-sale-label sale-left">Sale</div>
                        <div class="large-image">
                            <a href="sources/images/products/img03.jpg" class="cloud-zoom" id="zoom1" rel="useWrapper: false, adjustY:0, adjustX:20">
                                <img class="zoom-img" src="sources/images/products/img03.jpg" alt="products"> </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-7 col-lg-7 col-md-7 product-details-area">

                        <div class="product-name">
                            <h1>Lorem Ipsum is simply</h1>
                        </div>
                        <div class="price-box">
                            <p class="special-price">
                                <span class="price-label">Special Price</span>
                                <span class="price"> $329.99 </span>
                            </p>
                            <p class="old-price">
                                <span class="price-label">Regular Price:</span>
                                <span class="price"> $359.99 </span>
                            </p>
                        </div>

                        <div class="short-description">
                            <h2>Quick Overview</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor.
                                Donec non est at libero vulputate rutrum.
                            <p> Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti
                                sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere
                                at ultricies eu, placerat a felis. Suspendisse aliquet urna pretium eros convallis interdum. Quisque
                                in arcu id dui vulputate mollis eget non arcu. Aenean et nulla purus. Mauris vel tellus non nunc mattis
                                lobortis.
                            </p>

                        </div>

                        <div class="product-variation">
                            <form action="#" method="post">
                                <div class="cart-plus-minus">
                                    <label for="qty">Quantity:</label>
                                    <div class="numbers-row">
                                        <div   class="dec qtybutton">
                                            <i class="fa fa-minus">&nbsp;</i>
                                        </div>
                                        <input type="text" class="qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                                        <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;"
                                             class="inc qtybutton">
                                            <i class="fa fa-plus">&nbsp;</i>
                                        </div>
                                    </div>
                                </div>
                                <button class="button pro-add-to-cart" title="Add to Cart" type="button">
                      <span>
                        <i class="fa fa-shopping-cart"></i> Add to Cart</span>
                                </button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Main Container End -->