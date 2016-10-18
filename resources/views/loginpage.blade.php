@extends('includemain')
  <body>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '651824411666150',
      xfbml      : true,
      version    : 'v2.8'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>


<div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div>
    <div class="login_regi_bg">
      <div class="col-xs-12 with_logo">
      <a href="/">
        <div class="logo"></div>
        </a>
      </div>

      <ul id="registration" class="nav nav-tabs">
        <li class="active col-xs-12 col-sm-6"><a href="#home" data-toggle="tab" class="text-right">ავტორიზაცია</a></li>
        <li class="col-xs-12 col-sm-6"><a href="#profile" data-toggle="tab">რეგისტრაცია</a></li>
      </ul>

      <div id="myTabContent" class="tab-content">

        <div class="tab-pane fade active in" id="home">

          <form class="login_form" action="index.html" method="post">

            <div class="input">
              <div class="icon user"></div>
              <input type="email" name="name" value="" placeholder="ელ.ფოსტა" autocomplete="off">
            </div>

            <div class="input">
              <div class="icon psw"></div>
              <input type="password" name="name" value="" placeholder="პაროლი..." autocomplete="off">
            </div>

            <button type="submit" name="button" class="login_btn">შესვლა</button>

          </form>

          <p class="choose_login">ან</p>
          <ul class="fb_google">
            <li class="mobito_button facebook"><div class="icon"></div><span>Facebook</span></li>
            <li class="mobito_button google"><div class="icon"></div><span>Google</span></li>
          </ul>

        </div>

        <div class="tab-pane fade" id="profile">
          <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid.</p>
        </div>

      </div>

    </div>