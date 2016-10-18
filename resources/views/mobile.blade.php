@extends('includemain')
  <body>

    <div class="footer_fixator">

     @include('header')
      <div class="blue_space small">
        <div class="container">
          <p><a href="www.mobito.ge">მთავარი</a> > Samsung > Galaxy > s7</p>
        </div>
      </div>



    <div class="container">
      <!-- Slider -->
        <div class="row">

        <div class="inside_page_carousel col-sm-2" id="slider-thumbs">
          <!-- Bottom switcher of slider -->
          <ul class="hide-bullets">

            <li class="col-sm-12">
              <a id="carousel-selector-0"><img src="assets/imgs/image.png"></a>
            </li>

            <li class="col-sm-12">
              <a id="carousel-selector-1"><img src="assets/imgs/image.png"></a>
            </li>

            <li class="col-sm-12">
              <a id="carousel-selector-2"><img src="assets/imgs/image.png"></a>
            </li>

            <li class="col-sm-12">
              <a id="carousel-selector-3"><img src="assets/imgs/image.png"></a>
            </li>

          </ul>
        </div>


        <div class="col-sm-5">
          <div class="col-xs-12" id="slider">
            <!-- Top part of the slider -->
            <div class="row">
              <div class="inside_page_carousel col-sm-12" id="carousel-bounding-box">
                <div class="carousel slide carousel-fade" id="myCarousel">
                  <!-- Carousel items -->
                  <div class="carousel-inner">

                    <div class="active item" data-slide-number="0">
                      <img src="assets/imgs/image.png">
                    </div>

                    <div class="item" data-slide-number="1">
                      <img src="assets/imgs/image.png">
                    </div>

                    <div class="item" data-slide-number="2">
                      <img src="assets/imgs/image.png">
                    </div>

                    <div class="item" data-slide-number="4">
                      <img src="assets/imgs/image.png">
                    </div>


                    <!-- Carousel nav -->
                    <a class="left carousel-control " href="#myCarousel" role="button" data-slide="prev">
                      <span class="arrow arow-left"></span>
                    </a>
                    <a class="right carousel-control " href="#myCarousel" role="button" data-slide="next">
                      <span class="arrow arow-right"></span>
                    </a>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--/Slider-->
        </div>

        <!-- Info -->
        <div class="mobile_info col-xs-6">
          <h2>Nexus 6</h2>
          <p>Samsung</p>
          <span class="price">$523</span>
          <p class="text">
            არანაირი ჩინური, არის იაპონური, დიდი ზომის სკუტერი, არ საჭროებს მართვის მოწმობას, არის 4 ტაქტიანი, თითქმის ახალი. სულ ახალი ღირს 2100
          </p>
          <div class="user_box">
            <ul class="user_info">
              <li><div class="avatar"><img src="http://images.thehollywoodgossip.com/iu/s--_jtYGA2x--/t_large_p/f_auto,fl_lossy,q_75/v1424706438/irina-shayk-oscar-photo.jpg" alt="" /></div><span>ტატო ბექთაშაშვილი</span></li>
              <li><span>555 38 68 48</span></li>
            </ul>
          </div>
        </div>
        <!-- Info (END) -->


      </div>


    </div><!--Container -->


    <div class="specifications_bg container-fluid">
      <div class="container">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#specifications" aria-controls="home" role="tab" data-toggle="tab">სპეციფიკაციები</a></li>
          <li role="presentation"><a href="#comments" aria-controls="comments" role="tab" data-toggle="tab">კომენტარები</a></li>
          <li role="presentation"><a href="#other_news" aria-controls="other_news" role="tab" data-toggle="tab">მსგავსი განცხადებები</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane fade in active specifications_tab" id="specifications">

            <!-- Single Spec -->
            <div class="col-xs-6 col-sm-4 single_spec">
              <div class="icon os apple"></div>
              <p>OS</p>
              <h2>Android</h2>
            </div>
            <!-- Single Spec (END) -->
            <!-- Single Spec -->
            <div class="col-xs-6 col-sm-4 single_spec">
              <div class="icon screen"></div>
              <p>ეკრანი</p>
              <h2>5.2"</h2>
            </div>
            <!-- Single Spec (END) -->
            <!-- Single Spec -->
            <div class="col-xs-6 col-sm-4 single_spec">
              <div class="icon memory"></div>
              <p>მეხსიერება</p>
              <h2>32GB</h2>
            </div>
            <!-- Single Spec (END) -->
            <!-- Single Spec -->
            <div class="col-xs-6 col-sm-4 single_spec">
              <div class="icon camera"></div>
              <p>კამერა</p>
              <h2>12MP</h2>
            </div>
            <!-- Single Spec (END) -->
            <!-- Single Spec -->
            <div class="col-xs-6 col-sm-4 single_spec">
              <div class="icon battary"></div>
              <p>ბატარია</p>
              <h2>2700mAh</h2>
            </div>
            <!-- Single Spec (END) -->
            <!-- Single Spec -->
            <div class="col-xs-6 col-sm-4 single_spec">
              <div class="icon ram"></div>
              <p>RAM</p>
              <h2>2GB</h2>
            </div>
            <!-- Single Spec (END) -->

          </div>
          <div role="tabpanel" class="tab-pane fade" id="comments">.
            tato
          </div>

          <div role="tabpanel" class="tab-pane fade" id="other_news">.
            tato
          </div>


        </div>
        <!--Tab Panes (END)  -->

      </div>



    </div>



    </div><!--Footer Fixator -->




@include('footer')