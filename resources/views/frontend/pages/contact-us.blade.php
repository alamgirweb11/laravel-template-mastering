@extends('frontend.layouts.maintemplate')
@section('main-content')
<div class="container">
    <ul class="breadcrumb">
      <li><a href="index.html"><i class="fa fa-home"></i></a></li>
      <li><a href="contact.html">Contact Us</a></li>
    </ul>
    <div class="row">
      <div id="column-left" class="col-sm-3 hidden-xs column-left">
        <div class="column-block">
          <div class="column-block">
            <div class="columnblock-title">Categories</div>
            <div class="category_block">
              <ul class="box-category treeview-list treeview">
                <li><a href="#" class="activSub">Desktops</a>
                  <ul>
                    <li><a href="#">PC</a></li>
                    <li><a href="#">MAC</a></li>
                  </ul>
                </li>
                <li><a href="#" class="activSub">Laptops &amp; Notebooks</a>
                  <ul>
                    <li><a href="#">Macs</a></li>
                    <li><a href="#">Windows</a></li>
                  </ul>
                </li>
                <li><a href="#" class="activSub">Components</a>
                  <ul>
                    <li><a href="#">Mice and Trackballs</a></li>
                    <li><a href="#" class="activSub" >Monitors</a>
                      <ul>
                        <li><a href="#"  >test 1</a></li>
                        <li><a href="#"  >test 2</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Windows</a></li>
                  </ul>
                </li>
                <li><a href="#">Tablets</a></li>
                <li><a href="#">Software</a></li>
                <li><a href="#">Phones & PDAs</a></li>
                <li><a href="#">Cameras</a></li>
                <li><a href="#">MP3 Players</a></li>
              </ul>
            </div>
          </div>
          <h3 class="productblock-title">Bestsellers</h3>
          <div class="row bestseller-grid product-grid">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 product-grid-item">
              <div class="product-thumb transition">
                <div class="image product-imageblock"> <a href="#"> <img src="image/product/2product50x59.jpg" alt="women's New Wine is an alcoholic" title="women's New Wine is an alcoholic" class="img-responsive" /> </a>
                  <div class="button-group">
                    <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                    <button type="button" class="addtocart-btn">Add to Cart</button>
                    <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                  </div>
                </div>
                <div class="caption product-detail">
                  <h4 class="product-name"> <a href="product.html" title="women's New Wine is an alcoholic">New Wine is an alcoholic</a> </h4>
                  <p class="price product-price"> <span class="price-new">$254.00</span><span class="price-tax">Ex Tax: $210.00</span> </p>
                </div>
                <div class="button-group">
                  <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                  <button type="button" class="addtocart-btn">Add to Cart</button>
                  <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 product-grid-item">
              <div class="product-thumb transition">
                <div class="image product-imageblock"> <a href="#"> <img src="image/product/3product50x59.jpg" alt="women's New Wine is an alcoholic" title="women's New Wine is an alcoholic" class="img-responsive" /> </a>
                  <div class="button-group">
                    <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                    <button type="button" class="addtocart-btn">Add to Cart</button>
                    <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                  </div>
                </div>
                <div class="caption product-detail">
                  <h4 class="product-name"> <a href="product.html" title="women's New Wine is an alcoholic">New Wine is an alcoholic</a> </h4>
                  <p class="price product-price"> <span class="price-new">$254.00</span><span class="price-tax">Ex Tax: $210.00</span> </p>
                </div>
                <div class="button-group">
                  <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                  <button type="button" class="addtocart-btn">Add to Cart</button>
                  <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 product-grid-item">
              <div class="product-thumb transition">
                <div class="image product-imageblock"> <a href="#"> <img src="image/product/4product50x59.jpg" alt="women's New Wine is an alcoholic" title="women's New Wine is an alcoholic" class="img-responsive" /> </a>
                  <div class="button-group">
                    <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                    <button type="button" class="addtocart-btn">Add to Cart</button>
                    <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                  </div>
                </div>
                <div class="caption product-detail">
                  <h4 class="product-name"> <a href="product.html" title="women's New Wine is an alcoholic">New Wine is an alcoholic</a> </h4>
                  <p class="price product-price"> <span class="price-new">$254.00</span><span class="price-tax">Ex Tax: $210.00</span> </p>
                </div>
                <div class="button-group">
                  <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                  <button type="button" class="addtocart-btn">Add to Cart</button>
                  <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-9" id="content">
        <h1>Contact Us</h1>
        <h3>Our Location</h3>
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="row">
              <div class="col-sm-4 left">
                <address>
                <strong> Store Name: </strong>Hot Wine privated limited <br>
                <br>
                <strong>Address:</strong>
                <div class="address"> Warehouse & Offices 12345 Street name,California</div>
                <br>
                <strong>Country:</strong> USA <br>
                <br>
                <strong>Phone: </strong>+ 0987-654-321
                </address>
              </div>
              <div class="col-sm-8 rigt">
                <div class="map">
                  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
                  <div style="overflow:hidden;height:200px;width:100%;">
                    <div id="gmap_canvas" style="height:200px;width:600px;"></div>
  
                    <a class="google-map-code" href="http://www.pureblack.de/google-maps/" id="get-map-data">pureblack.de</a></div>
                  <script type="text/javascript"> function init_map(){var myOptions = {zoom:14, scrollwheel:false,center:new google.maps.LatLng(36.778261,-119.41793239999998),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(36.778261, -119.41793239999998)});infowindow = new google.maps.InfoWindow({content:"<b>Fresh Food privated limited</b><br/>Warehouse &amp; Offices 12345<br/> California " });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                </div>
              </div>
            </div>
          </div>
        </div>
        <form class="form-horizontal" enctype="multipart/form-data" method="post" action="#">
          <fieldset>
            <h3>Contact Form</h3>
            <div class="form-group required">
              <label for="input-name" class="col-sm-2 control-label">Your Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="input-name" value="" name="name">
              </div>
            </div>
            <div class="form-group required">
              <label for="input-email" class="col-sm-2 control-label">E-Mail Address</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="input-email" value="" name="email">
              </div>
            </div>
            <div class="form-group required">
              <label for="input-enquiry" class="col-sm-2 control-label">Enquiry</label>
              <div class="col-sm-10">
                <textarea class="form-control" id="input-enquiry" rows="10" name="enquiry"></textarea>
              </div>
            </div>
          </fieldset>
          <div class="buttons">
            <div class="pull-right">
              <input type="submit" value="Submit" class="btn btn-primary">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div> 
@endsection