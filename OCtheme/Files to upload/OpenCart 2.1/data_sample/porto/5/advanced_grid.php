<?php 

$language_id = 2;
foreach($data['languages'] as $language) {
	if($language['language_id'] != 1) {
		$language_id = $language['language_id'];
	}
}

$output = array();
$output["advanced_grid_module"] = array (
  1 => 
  array (
    'custom_class' => '',
    'margin_top' => '0',
    'margin_right' => '0',
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '0',
    'padding_right' => '0',
    'padding_bottom' => '0',
    'padding_left' => '0',
    'force_full_width' => '0',
    'background_color' => '',
    'background_image_type' => '0',
    'background_image' => '',
    'background_image_position' => 'top left',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '99999',
    'position' => 'footer',
    'status' => '1',
    'sort_order' => '',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      1 => 
      array (
        'status' => '1',
        'width' => '3',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '1',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'html',
            'html' => 
            array (
              $language_id => '<div class="widget contact-info">
    <h3 class="widget-title">Contact Information</h3>
    <ul class="contact-details">
        <li>
            <i class="fa fa-map-marker"></i> <strong>Address:</strong> <span>1234 Street Name, City Name, United States</span>
        </li>
        <li>
            <i class="fa fa-phone"></i> <strong>Phone:</strong> <span>(123) 456-7890</span>
        </li> 
        <li>
            <i class="fa fa-envelope"></i> <strong>Email:</strong> <span><a href="mailto:mail@example.com">mail@example.com</a></span>
        </li>
        <li>
            <i class="fa fa-clock-o"></i> <strong>Working Days/Hours:</strong> <span>Mon - Sun / 9:00 AM - 8:00 PM</span>
        </li>
    </ul>
</div><!-- End .widget -->',
              1 => '<div class="widget contact-info">
    <h3 class="widget-title">Contact Information</h3>
    <ul class="contact-details">
        <li>
            <i class="fa fa-map-marker"></i> <strong>Address:</strong> <span>1234 Street Name, City Name, United States</span>
        </li>
        <li>
            <i class="fa fa-phone"></i> <strong>Phone:</strong> <span>(123) 456-7890</span>
        </li> 
        <li>
            <i class="fa fa-envelope"></i> <strong>Email:</strong> <span><a href="mailto:mail@example.com">mail@example.com</a></span>
        </li>
        <li>
            <i class="fa fa-clock-o"></i> <strong>Working Days/Hours:</strong> <span>Mon - Sun / 9:00 AM - 8:00 PM</span>
        </li>
    </ul>
</div><!-- End .widget -->',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'status' => '1',
        'width' => '3',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '2',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'latest_blogs',
            'latest_blogs' => 
            array (
              'module_layout' => 'default.tpl',
              'title' => 
              array (
                $language_id => 'Latest Posts',
                1 => 'Latest Posts',
              ),
              'width' => '50',
              'height' => '50',
              'limit' => '3',
            ),
          ),
        ),
      ),
      3 => 
      array (
        'status' => '1',
        'width' => '3',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '3',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'html',
            'html' => 
            array (
              $language_id => '<div class="widget">
    <h3 class="widget-title">Product Tags</h3>
    <div class="tagcloud">
        <a href="#" title="5 Topics">Accessories</a>
        <a href="#" title="5 Topics">Apple</a>
        <a href="#" title="5 Topics">Armchair</a>
        <a href="#" title="5 Topics">Bag</a>
        <a href="#" title="5 Topics">Benchi</a>
        <a href="#" title="5 Topics">Blouse</a>
        <a href="#" title="5 Topics">Clothes</a>
        <a href="#" title="5 Topics">Denim</a>
        <a href="#" title="5 Topics">Dress</a>
        <a href="#" title="5 Topics">Furniture</a>
        <a href="#" title="5 Topics">Gallaxy</a>
        <a href="#" title="5 Topics">Hub</a>
        <a href="#" title="5 Topics">iPhone</a>
        <a href="#" title="5 Topics">iPad</a>
        <a href="#" title="5 Topics">Jacket</a>
        <a href="#" title="5 Topics">Jeans</a>
        <a href="#" title="5 Topics">Knit</a>
        <a href="#" title="5 Topics">Luggage</a>
        <a href="#" title="5 Topics">Men</a>
        <a href="#" title="5 Topics">Nokia</a>
        <a href="#" title="5 Topics">Onepiece</a>
        <a href="#" title="5 Topics">Phone</a>
        <a href="#" title="5 Topics">Polo</a>
        <a href="#" title="5 Topics">Red</a>
        <a href="#" title="5 Topics">Samsung</a>
        <a href="#" title="5 Topics">Shirt</a>
        <a href="#" title="5 Topics">Short</a>
        <a href="#" title="5 Topics">Skirt</a>
        <a href="#" title="5 Topics">Sweater</a>
        <a href="#" title="5 Topics">T-shirt</a>
        <a href="#" title="5 Topics">Tee</a>
        <a href="#" title="5 Topics">Top</a>
        <a href="#" title="5 Topics">Touch</a>
        <a href="#" title="5 Topics">Women</a>
    </div><!-- End .tagcloud -->
</div><!-- End .widget -->',
              1 => '<div class="widget">
    <h3 class="widget-title">Product Tags</h3>
    <div class="tagcloud">
        <a href="#" title="5 Topics">Accessories</a>
        <a href="#" title="5 Topics">Apple</a>
        <a href="#" title="5 Topics">Armchair</a>
        <a href="#" title="5 Topics">Bag</a>
        <a href="#" title="5 Topics">Benchi</a>
        <a href="#" title="5 Topics">Blouse</a>
        <a href="#" title="5 Topics">Clothes</a>
        <a href="#" title="5 Topics">Denim</a>
        <a href="#" title="5 Topics">Dress</a>
        <a href="#" title="5 Topics">Furniture</a>
        <a href="#" title="5 Topics">Gallaxy</a>
        <a href="#" title="5 Topics">Hub</a>
        <a href="#" title="5 Topics">iPhone</a>
        <a href="#" title="5 Topics">iPad</a>
        <a href="#" title="5 Topics">Jacket</a>
        <a href="#" title="5 Topics">Jeans</a>
        <a href="#" title="5 Topics">Knit</a>
        <a href="#" title="5 Topics">Luggage</a>
        <a href="#" title="5 Topics">Men</a>
        <a href="#" title="5 Topics">Nokia</a>
        <a href="#" title="5 Topics">Onepiece</a>
        <a href="#" title="5 Topics">Phone</a>
        <a href="#" title="5 Topics">Polo</a>
        <a href="#" title="5 Topics">Red</a>
        <a href="#" title="5 Topics">Samsung</a>
        <a href="#" title="5 Topics">Shirt</a>
        <a href="#" title="5 Topics">Short</a>
        <a href="#" title="5 Topics">Skirt</a>
        <a href="#" title="5 Topics">Sweater</a>
        <a href="#" title="5 Topics">T-shirt</a>
        <a href="#" title="5 Topics">Tee</a>
        <a href="#" title="5 Topics">Top</a>
        <a href="#" title="5 Topics">Touch</a>
        <a href="#" title="5 Topics">Women</a>
    </div><!-- End .tagcloud -->
</div><!-- End .widget -->',
            ),
          ),
        ),
      ),
      4 => 
      array (
        'status' => '1',
        'width' => '3',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '4',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'newsletter',
            'newsletter' => 
            array (
              'module_layout' => 'default.tpl',
              'title' => 
              array (
                $language_id => 'Newsletter',
                1 => 'Newsletter',
              ),
              'text' => 
              array (
                $language_id => 'Keep up on our always evolving product features and technology. Enter your e-mail and subscribe to our newsletter.',
                1 => 'Keep up on our always evolving product features and technology. Enter your e-mail and subscribe to our newsletter.',
              ),
              'input_placeholder' => 
              array (
                $language_id => 'Email Address',
                1 => 'Email Address',
              ),
              'subscribe_text' => 
              array (
                $language_id => 'Subscribe',
                1 => 'Subscribe',
              ),
              'unsubscribe_text' => 
              array (
                $language_id => '',
                1 => '',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  2 => 
  array (
    'custom_class' => '',
    'margin_top' => '0',
    'margin_right' => '0',
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '0',
    'padding_right' => '0',
    'padding_bottom' => '0',
    'padding_left' => '0',
    'force_full_width' => '0',
    'background_color' => '',
    'background_image_type' => '0',
    'background_image' => '',
    'background_image_position' => 'top left',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '3',
    'position' => 'column_left',
    'status' => '1',
    'sort_order' => '10',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      5 => 
      array (
        'status' => '1',
        'width' => 'advanced',
        'disable_on_mobile' => '0',
        'width_xs' => 'hidden',
        'width_sm' => 'hidden',
        'width_md' => '12',
        'width_lg' => '12',
        'sort' => '1',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'products',
            'products' => 
            array (
              'module_layout' => 'default.tpl',
              'title' => 
              array (
                $language_id => 'Featured',
                1 => 'Featured',
              ),
              'get_products_from' => 'most_viewed',
              'product' => '',
              'products' => '',
              'category' => '',
              'categories' => '',
              'width' => '75',
              'height' => '100',
              'limit' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  3 => 
  array (
    'custom_class' => '',
    'margin_top' => '0',
    'margin_right' => '0',
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '0',
    'padding_right' => '0',
    'padding_bottom' => '0',
    'padding_left' => '0',
    'force_full_width' => '0',
    'background_color' => '',
    'background_image_type' => '0',
    'background_image' => '',
    'background_image_position' => 'top left',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '2',
    'position' => 'column_right',
    'status' => '1',
    'sort_order' => '1',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      6 => 
      array (
        'status' => '1',
        'width' => '12',
        'disable_on_mobile' => '1',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '1',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'products',
            'products' => 
            array (
              'module_layout' => 'default.tpl',
              'title' => 
              array (
                $language_id => 'Top Rated',
                1 => 'Top Rated',
              ),
              'get_products_from' => 'most_viewed',
              'product' => '',
              'products' => '',
              'category' => '',
              'categories' => '',
              'width' => '75',
              'height' => '100',
              'limit' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  4 => 
  array (
    'custom_class' => '',
    'margin_top' => '0',
    'margin_right' => '0',
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '0',
    'padding_right' => '15',
    'padding_bottom' => '0',
    'padding_left' => '15',
    'force_full_width' => '0',
    'background_color' => '#fff',
    'background_image_type' => '0',
    'background_image' => '',
    'background_image_position' => 'top left',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '1',
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '10',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      7 => 
      array (
        'status' => '1',
        'width' => '12',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '1',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '',
            'type' => 'html',
            'html' => 
            array (
              $language_id => '                    <div class="xlg-margin"></div><!-- space -->
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="vinfo-box">
                                <span class="vinfo-box-icon"><i class="fa fa-star"></i></span>
                                <h3 class="vinfo-box-title">DEDICATED SERVICE</h3>
                                <p class="vinfo-box-desc">Consult our specialists for help with an order, customization, or design advice.<a class="icon-read" href="#">Get in Touch&nbsp;»</a></p>
                            </div>
                        </div><!-- End .col-sm-4-->
                        <div class="col-sm-4">
                            <div class="vinfo-box">
                                <span class="vinfo-box-icon"><i class="fa fa-reply"></i></span>
                                <h3 class="vinfo-box-title">FREE RETURNS</h3>
                                <p class="vinfo-box-desc">We stand behind our goods and services and want you to be satisfied with them.<a class="icon-read" href="#">Get in Touch&nbsp;»</a></p>
                            </div>
                        </div><!-- End .col-sm-4-->
                        <div class="col-sm-4">
                            <div class="vinfo-box">
                                <span class="vinfo-box-icon"><i class="fa fa-plane"></i></span>
                                <h3 class="vinfo-box-title">INTERNATIONAL SHIPPING</h3>
                                <p class="vinfo-box-desc">Currently over 50 countries qualify for express international shipping.<a class="icon-read" href="#">Get in Touch&nbsp;»</a></p>
                            </div>
                        </div><!-- End .col-sm-4-->
                    </div><!-- End .row -->

                    <div class="brands-carousel-container">
                        <div class="owl-carousel brands-carousel">
                            <div class="brand">
                                <a href="#"><img src="image/catalog/porto/index5/brand1.png" alt="Brand name"></a>
                            </div><!-- End .brand -->
                            <div class="brand">
                                <a href="#"><img src="image/catalog/porto/index5/brand2.png" alt="Brand name"></a>
                            </div><!-- End .brand -->
                            <div class="brand">
                                <a href="#"><img src="image/catalog/porto/index5/brand3.png" alt="Brand name"></a>
                            </div><!-- End .brand -->
                            <div class="brand">
                                <a href="#"><img src="image/catalog/porto/index5/brand4.png" alt="Brand name"></a>
                            </div><!-- End .brand -->
                            <div class="brand">
                                <a href="#"><img src="image/catalog/porto/index5/brand5.png" alt="Brand name"></a>
                            </div><!-- End .brand -->
                            <div class="brand">
                                <a href="#"><img src="image/catalog/porto/index5/brand2.png" alt="Brand name"></a>
                            </div><!-- End .brand -->
                            <div class="brand">
                                <a href="#"><img src="image/catalog/porto/index5/brand1.png" alt="Brand name"></a>
                            </div><!-- End .brand -->
                        </div><!-- End brands-carousel -->
                    </div><!-- end .brands-carousel-container -->

                    <div class="md-margin"></div><!-- space -->',
              1 => '                    <div class="xlg-margin"></div><!-- space -->
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="vinfo-box">
                                <span class="vinfo-box-icon"><i class="fa fa-star"></i></span>
                                <h3 class="vinfo-box-title">DEDICATED SERVICE</h3>
                                <p class="vinfo-box-desc">Consult our specialists for help with an order, customization, or design advice.<a class="icon-read" href="#">Get in Touch&nbsp;»</a></p>
                            </div>
                        </div><!-- End .col-sm-4-->
                        <div class="col-sm-4">
                            <div class="vinfo-box">
                                <span class="vinfo-box-icon"><i class="fa fa-reply"></i></span>
                                <h3 class="vinfo-box-title">FREE RETURNS</h3>
                                <p class="vinfo-box-desc">We stand behind our goods and services and want you to be satisfied with them.<a class="icon-read" href="#">Get in Touch&nbsp;»</a></p>
                            </div>
                        </div><!-- End .col-sm-4-->
                        <div class="col-sm-4">
                            <div class="vinfo-box">
                                <span class="vinfo-box-icon"><i class="fa fa-plane"></i></span>
                                <h3 class="vinfo-box-title">INTERNATIONAL SHIPPING</h3>
                                <p class="vinfo-box-desc">Currently over 50 countries qualify for express international shipping.<a class="icon-read" href="#">Get in Touch&nbsp;»</a></p>
                            </div>
                        </div><!-- End .col-sm-4-->
                    </div><!-- End .row -->

                    <div class="brands-carousel-container">
                        <div class="owl-carousel brands-carousel">
                            <div class="brand">
                                <a href="#"><img src="image/catalog/porto/index5/brand1.png" alt="Brand name"></a>
                            </div><!-- End .brand -->
                            <div class="brand">
                                <a href="#"><img src="image/catalog/porto/index5/brand2.png" alt="Brand name"></a>
                            </div><!-- End .brand -->
                            <div class="brand">
                                <a href="#"><img src="image/catalog/porto/index5/brand3.png" alt="Brand name"></a>
                            </div><!-- End .brand -->
                            <div class="brand">
                                <a href="#"><img src="image/catalog/porto/index5/brand4.png" alt="Brand name"></a>
                            </div><!-- End .brand -->
                            <div class="brand">
                                <a href="#"><img src="image/catalog/porto/index5/brand5.png" alt="Brand name"></a>
                            </div><!-- End .brand -->
                            <div class="brand">
                                <a href="#"><img src="image/catalog/porto/index5/brand2.png" alt="Brand name"></a>
                            </div><!-- End .brand -->
                            <div class="brand">
                                <a href="#"><img src="image/catalog/porto/index5/brand1.png" alt="Brand name"></a>
                            </div><!-- End .brand -->
                        </div><!-- End brands-carousel -->
                    </div><!-- end .brands-carousel-container -->

                    <div class="md-margin"></div><!-- space -->',
            ),
          ),
        ),
      ),
    ),
  ),
  5 => 
  array (
    'custom_class' => '',
    'margin_top' => '0',
    'margin_right' => '0',
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '0',
    'padding_right' => '0',
    'padding_bottom' => '0',
    'padding_left' => '0',
    'force_full_width' => '0',
    'background_color' => '',
    'background_image_type' => '0',
    'background_image' => '',
    'background_image_position' => 'top left',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '2',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      8 => 
      array (
        'status' => '1',
        'width' => '4',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '1',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'products',
            'products' => 
            array (
              'module_layout' => 'index5.tpl',
              'title' => 
              array (
                $language_id => 'FEATURED',
                1 => 'FEATURED',
              ),
              'get_products_from' => 'products',
              'product' => '',
              'products' => '42,47,41',
              'category' => '',
              'categories' => '',
              'width' => '300',
              'height' => '400',
              'limit' => '3',
            ),
          ),
        ),
      ),
      9 => 
      array (
        'status' => '1',
        'width' => '4',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '2',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'products',
            'products' => 
            array (
              'module_layout' => 'index5.tpl',
              'title' => 
              array (
                $language_id => 'SALES',
                1 => 'SALES',
              ),
              'get_products_from' => 'most_viewed',
              'product' => '',
              'products' => '',
              'category' => '',
              'categories' => '',
              'width' => '300',
              'height' => '400',
              'limit' => '3',
            ),
          ),
        ),
      ),
      10 => 
      array (
        'status' => '1',
        'width' => '4',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '3',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'products',
            'products' => 
            array (
              'module_layout' => 'index5.tpl',
              'title' => 
              array (
                $language_id => 'NEW ARRIVALS',
                1 => 'NEW ARRIVALS',
              ),
              'get_products_from' => 'latest',
              'product' => '',
              'products' => '',
              'category' => '',
              'categories' => '',
              'width' => '300',
              'height' => '400',
              'limit' => '3',
            ),
          ),
        ),
      ),
    ),
  ),
  6 => 
  array (
    'custom_class' => 'skin5-products',
    'margin_top' => '0',
    'margin_right' => '0',
    'margin_bottom' => '15',
    'margin_left' => '0',
    'padding_top' => '15',
    'padding_right' => '15',
    'padding_bottom' => '15',
    'padding_left' => '15',
    'force_full_width' => '0',
    'background_color' => '#fff',
    'background_image_type' => '0',
    'background_image' => '',
    'background_image_position' => 'top left',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '1',
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '0',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      11 => 
      array (
        'status' => '1',
        'width' => '12',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '1',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'products',
            'products' => 
            array (
              'module_layout' => 'products_grid.tpl',
              'title' => 
              array (
                $language_id => '',
                1 => '',
              ),
              'get_products_from' => 'most_viewed',
              'product' => '',
              'products' => '',
              'category' => '',
              'categories' => '',
              'width' => '300',
              'height' => '400',
              'limit' => '8',
            ),
          ),
        ),
      ),
    ),
  ),
); 

$this->model_setting_setting->editSetting( "advanced_grid", $output );	

?>