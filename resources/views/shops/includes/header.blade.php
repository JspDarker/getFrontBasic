<header>
    <div class="header-container">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-4 hidden-xs">
                        <!-- Default Welcome Message -->
                        <div class="welcome-msg ">Welcome to MyStore! </div>
                        <span class="phone hidden-sm">Call Us: +123.456.789</span>
                    </div>

                    <!-- top links -->
                    <div class="headerlinkmenu col-lg-8 col-md-7 col-sm-8 col-xs-12">
                        <div class="links">
                            @guest
                                <div class="myaccount">
                                    <a title="My Account" href="{{ route('register') }}">
                                        <i class="fa fa-user"></i>
                                        <span class="hidden-xs">Register</span>
                                    </a>
                                </div>

                                <div class="login">
                                    <a href="{{ route('login') }}">
                                        <i class="fa fa-unlock-alt"></i>
                                        <span class="hidden-xs">Log In</span>
                                    </a>
                                </div>
                            @else
                                <div class="myaccount">
                                    <a title="My Account">
                                        <i class="fa fa-user"></i>
                                        <span class="hidden-xs">{{ Auth::user()->name }}</span>
                                    </a>
                                </div>
                                <div class="login">
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();
                                    ">
                                        <i class="fa fa-unlock-alt"></i>
                                        <span class="hidden-xs">Log out</span>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            @endguest


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-3 col-xs-12">
                    <!-- Header Logo -->
                    <div class="logo">
                        <a title="e-commerce" href="{{ route('pages') }}">
                            <img alt="responsive theme logo" src="sources/images/logo.png">
                        </a>
                    </div>
                    <!-- End Header Logo -->
                </div>
                <div class="col-xs-9 col-sm-6 col-md-6">
                    <!-- Search -->

                    <div class="top-search">
                        <div id="search">
                            <form>
                                <div class="input-group">
                                    <select class="cate-dropdown hidden-xs" name="category_id">
                                        <option>All Categories</option>
                                        <option>women</option>
                                        <option>Men</option>
                                        <option>Electronics</option>
                                    </select>
                                    <input type="text" class="form-control" placeholder="Search" name="search">
                                    <button class="btn-search" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- End Search -->
                </div>
                <!-- top cart -->

                <div class="col-lg-3 col-xs-3 top-cart">
                    <div class="top-cart-contain">
                        <div class="mini-cart">
                            <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle">
                                <a href="#">
                                    <div class="cart-icon">
                                        <i class="fa fa-shopping-cart"></i>
                                    </div>
                                    <div class="shoppingcart-inner hidden-xs">
                                        <span class="cart-title">Shopping Cart</span>
                                        <span class="cart-total">4 Item(s): $520.00</span>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>