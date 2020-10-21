<header>
    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="top-left pull-left">
              <div class="language">
                <form action="#" method="post" enctype="multipart/form-data" id="language">
                  <div class="btn-group">
                    <button class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <img src="image/flags/gb.png" alt="English" title="English">English <i class="fa fa-caret-down"></i></button>
                    <ul class="dropdown-menu">
                      <li><a href="#"><img src="image/flags/lb.png" alt="Arabic" title="Arabic"> Arabic</a></li>
                      <li><a href="#"><img src="image/flags/gb.png" alt="English" title="English"> English</a></li>
                    </ul>
                  </div>
                </form>
              </div>
              <div class="currency">
                <form action="#" method="post" enctype="multipart/form-data" id="currency">
                  <div class="btn-group">
                    <button class="btn btn-link dropdown-toggle" data-toggle="dropdown"> <strong>$</strong> <i class="fa fa-caret-down"></i> </button>
                    <ul class="dropdown-menu">
                      <li>
                        <button class="currency-select btn btn-link btn-block" type="button" name="EUR">€ Euro</button>
                      </li>
                      <li>
                        <button class="currency-select btn btn-link btn-block" type="button" name="GBP">£ Pound Sterling</button>
                      </li>
                      <li>
                        <button class="currency-select btn btn-link btn-block" type="button" name="USD">$ US Dollar</button>
                      </li>
                    </ul>
                  </div>
                </form>
              </div>
            </div>
            <div class="top-right pull-right">
              <div id="top-links" class="nav pull-right">
                <ul class="list-inline">
                  <li class="dropdown account"><a href="#" title="My Account" class="  dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-user"></i><span>My Account</span> <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li><a href="{{ route('register')}}">Register</a></li>
                      <li><a href="{{ route('login')}}">Login</a></li>
                    </ul>
                  </li>
                  <li><a href="#" id="wishlist-total" title="Wish List (0)"><i class="fa fa-heart"></i><span>Wish List</span><span> (0)</span></a></li>
                </ul>
                <div class="search-box">
                  <input class="input-text" placeholder="Search By Products.." type="text">
                  <button class="search-btn"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="header-inner">
        <div class="col-sm-4 col-xs-6 header-left">
          <div class="shipping">
            <div class="shipping-img"></div>
            <div class="shipping-text">(+91) 000-1233<br>
              <span class="shipping-detail">24/7 Online Support</span></div>
          </div>
        </div>
        <div class="col-sm-4 col-xs-12 header-middle">
          <div class="header-middle-top">
            <div id="logo"> <a href="{{ route('index') }}"><img src="{{ asset('frontend/image/logo.png')}}" title="E-Commerce" alt="E-Commerce" class="img-responsive" /></a> </div>
          </div>
        </div>
        <div class="col-sm-4 col-xs-12 header-right">
          <div id="cart" class="btn-group btn-block">
            <button type="button" class="btn btn-inverse btn-block btn-lg dropdown-toggle cart-dropdown-button"> <span id="cart-total"><span class="cart-title">Shopping Cart</span><br>
            0 item(s) - $0.00</span> </button>
            <ul class="dropdown-menu pull-right cart-dropdown-menu">
              <li>
                <table class="table table-striped">
                  <tbody>
                    <tr>
                      <td class="text-center"><a href="#"><img class="img-thumbnail" title="lorem ippsum dolor dummy" alt="lorem ippsum dolor dummy" src="image/product/7product50x59.jpg"></a></td>
                      <td class="text-left"><a href="#">lorem ippsum dolor dummy</a></td>
                      <td class="text-right">x 1</td>
                      <td class="text-right">$254.00</td>
                      <td class="text-center"><button class="btn btn-danger btn-xs" title="Remove" type="button"><i class="fa fa-times"></i></button></td>
                    </tr>
                  </tbody>
                </table>
              </li>
              <li>
                <div>
                  <table class="table table-bordered">
                    <tbody>
                      <tr>
                        <td class="text-right"><strong>Sub-Total</strong></td>
                        <td class="text-right">$210.00</td>
                      </tr>
                      <tr>
                        <td class="text-right"><strong>Eco Tax (-2.00)</strong></td>
                        <td class="text-right">$2.00</td>
                      </tr>
                      <tr>
                        <td class="text-right"><strong>VAT (20%)</strong></td>
                        <td class="text-right">$42.00</td>
                      </tr>
                      <tr>
                        <td class="text-right"><strong>Total</strong></td>
                        <td class="text-right">$254.00</td>
                      </tr>
                    </tbody>
                  </table>
                  <p class="text-right"> <span class="btn-viewcart"><a href="cart.html"><strong><i class="fa fa-shopping-cart"></i> View Cart</strong></a></span> <span class="btn-checkout"><a href="checkout.html"><strong><i class="fa fa-share"></i> Checkout</strong></a></span> </p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <nav id="menu" class="navbar">
        <div class="nav-inner">
          <div class="navbar-header"><span id="category" class="visible-xs">Categories</span>
            <button type="button" class="btn btn-navbar navbar-toggle" ><i class="fa fa-bars"></i></button>
          </div>
          <div class="navbar-collapse">
            <ul class="main-navigation">
              <li><a href="{{ route('index') }}"   class="parent"  >Home</a> </li>
              <li><a href="{{ route('category') }}"   class="parent"  >Collection</a> </li>
              <li><a href="{{ route('category') }}"   class="parent"  >Women</a> </li>
              <li><a href="{{ route('category') }}"   class="parent"  >Men</a> </li>
              <li><a href="{{ route('category') }}"   class="parent"  >Accessories</a> </li>
              <li><a href="#" class="active parent">Page</a>
                <ul>
                  <li><a href="{{ route('category') }}">Category Page</a></li>
                  <li><a href="cart.html">Cart Page</a></li>
                  <li><a href="checkout.html">Checkout Page</a></li>
                  <li><a href="{{ route('blog') }}" >Blog Page</a></li>
                  <li><a href="singale-blog.html" >Singale Blog Page</a></li>
                  <li><a href="register.html">Register Page</a></li>
                  <li><a href="contact.html">Contact Page</a></li>
                </ul>
              </li>
              <li><a href="{{ route('blog') }}" class="parent"  >Blog</a></li>
              <li><a href="{{ route('about') }} " >About us</a></li>
              <li><a href="{{ route('contact') }}" >Contact Us</a> </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>