
@extends('includemain')


     @include('header')
      <div class="blue_space">
        <div class="container">
          <p class="add_new">განცხადების დამატება</p>
        </div>
      </div>



      <div class="add_news_page">

        <!-- Left Side -->
        <div class="container_for_inputs">
          <div class="half_container">

            <form class="add_new_phone_form" action="index.html" method="post">

            <select placeholder="ბრენდი" class="search_test" >
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

            <select placeholder="მოდელი" class="search_test" >
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

              <textarea name="name" placeholder="აღწერეთ რა მდგომარეობაშია ტელეფონი..."></textarea>
              <input class="price" type="text" name="name" value="" placeholder="შეიყვანეთ ფასი">
              <div class="upload_images">

              </div>
            </form>

          </div>
        </div>
        <!-- Left Side (END) -->

        <!-- Right Side  -->
        <div class="container_for_information">
          <div class="half_container second">
            <div class="icon_phone"></div>
            <p class="text-center">ბრენდის და მოდელის არჩევის შემდეგ <br> მობილურის მონაცემები ავტომატურად შეივსება</p>
          </div>
        </div>


      </div><!-- add_news_page (END) -->





@include('footer')
  

