
@extends('includemain')
    <div class="footer_fixator">

      @include('header')
      
<div id="status">
</div>
      <div class="search_bg">
        <div class="container">

          <form class="" action="index.html" method="post">

            <select placeholder="ბრენდი" class="search_test" multiple="multiple" >
             <option value="volvo">Apple</option>
             <option value="saab">Samsung</option>
             <option value="audi">Nokia</option>
             <option value="porsche">HTC</option>
             <option value="ferrari">Lenovo</option>
             <option value="mitsubishi">Huawei</option>
             <option value="volvo">Apple</option>
             <option value="saab">Samsung</option>
             <option value="audi">Nokia</option>
             <option value="porsche">HTC</option>
             <option value="ferrari">Lenovo</option>
             <option value="mitsubishi">Huawei</option>
           </select>

           <select placeholder="მოდელი" class="search_test" multiple="multiple" >
            <option value="volvo">Apple</option>
            <option value="saab">Samsung</option>
            <option value="audi">Nokia</option>
            <option value="porsche">HTC</option>
            <option value="ferrari">Lenovo</option>
            <option value="mitsubishi">Huawei</option>
          </select>

            <input type="text" name="name" value="" class="main_input" placeholder="მინ ფასი">
            <input type="text" name="name" value="" class="main_input" placeholder="მაქს ფასი">
            <div class="pull-right">
              <a href="#" class="more_details">დეტალური ძიება</a>
              <button type="submit" class="submit_btn"><div class="icon"></div><span>ძებნა</span></button>
            </div>

          </form>


        </div>
      </div>

      <div class="mor_details ">
        <div class="container">
          <!-- 2Sim -->
          <div class="single two_sim">
            <h3>ორი სიმი</h3>
            <div class="slider">
              <input type="checkbox" class="sliderButton" id="sliderButton">
              <label for="sliderButton"></label>
            </div>
          </div>
          <!-- 2Sim -->
          <div class="single checkboxes">
            <h3>კომუნიკაცია</h3>
            <input type="checkbox" id="3g" /> <label for="3g">3G</label>
            <input type="checkbox" id="4g" /> <label for="4g">4G</label>
          </div>
          <div class="single checkboxes">
            <h3>კამერა</h3>
            <input type="checkbox" id="5MP" /> <label for="5MP">5MP</label>
            <input type="checkbox" id="8MP" /> <label for="8MP">8MP</label>
            <input type="checkbox" id="12MP" /> <label for="12MP">12MP</label>
            <input type="checkbox" id="16MP" /> <label for="16MP">16MP</label>
            <input type="checkbox" id="41MP" /> <label for="41MP">41MP</label>
          </div>
        </div>
      </div>

      <div class="container">
       

        <!-- Single Product -->
        <div class="single_mob">
        
          <div class="img_space">
          
            <img src="http://images.thehollywoodgossip.com/iu/s--_jtYGA2x--/t_large_p/f_auto,fl_lossy,q_75/v1424706438/irina-shayk-oscar-photo.jpg" alt="" />

          </div>
          
          <div class="info">
            <h2>iPhone 7</h2>
            <p>Apple</p>
          </div>
          <span class="price">650$</span>
          <!-- Hover -->
          <div class="hover">
            <div class="details">
              <!-- mps -->
              <div class="single col-xs-12">
                <div class="icon apple"></div>
                <span>iOS</span>
              </div>
              <!-- mps -->
              <!-- mps -->
              <div class="single col-xs-4">
                <div class="icon mp"></div>
                <span>12MP</span>
              </div>
              <!-- mps -->
              <!-- gb -->
              <div class="single col-xs-4">
                <div class="icon gb"></div>
                <span>32GB</span>
              </div>
              <!-- gb -->
              <!-- inch -->
              <div class="single col-xs-4">
                <div class="icon inch"></div>
                <span>5.2 <span>inch</span></span>
              </div>
              <!-- inch -->
              <!-- gb -->
              <div class="single col-xs-4 col-xs-offset-2">
                <div class="icon mah"></div>
                <span>2700 <span>mAh</span></span>
              </div>
              <!-- gb -->
              <!-- inch -->
              <div class="single col-xs-4">
                <div class="icon ram"></div>
                <span>2 GB</span>
              </div>
              <!-- inch -->
            </div>
            <div class="view">
              <a href="/mobile"><span>დეტალურად</span></a>
            </div>
          </div>
          <!-- Hover (END) -->
        </div>
        <!-- Single Product (END) -->


      </div>

    </div><!--Footer Fixator -->

@include('footer')

</html>
