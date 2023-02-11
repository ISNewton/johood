<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products Page</title>
  <!-- Stylesheet -->
  <link rel="stylesheet" href="{{ asset('css/products.css') }}">
  <!---Boxicons CDN Setup for icons-->
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
  @foreach ($products as $product)
    <div class="container">
      <div class="single-product">
        <div class="row">
          <div class="col-6">
            <div class="product-image">
              <div class="product-image-main">
                <img
                  src="https://www.tradeinn.com/f/13880/138802176_3/hp-255-4k7z8ea-15.6-r3-5300u-8gb-256gb-ssd-laptop.jpg"
                  alt="" id="product-main-image">
              </div>

            </div>
          </div>
          <div class="col-6">
            <div class="breadcrumb">
              <span><a href="#">الجهاز {{ $loop->index + 1 }}</a></span>
            </div>

            <div class="product">
              <div class="product-title">
                <h2>{{ $product->title }}</h2>
              </div>
              <div class="product-price">
                <span class="offer-price">{{ $product->price }} SDG</span>
              </div>

              <div class="product-details">
                <h3>وصف الجهاز</h3>
                <p>{!! $product->description !!}</p>
              </div>

              <div class="product-color">
                <h4>اختيار طريقة التقسيط</h4>
                <div class="color-layout">
                  <input type="radio" name="color" value="black" class="color-input">
                  <label for="black" class="black"></label>
                  <h4>القسط الشهري ل 24 شهر 20 ألف</h4>

                  <input type="radio" name="color" value="blue" class="color-input">
                  <label for="blue" class="blue"></label>
                  <h4>القسط الشهري ل 12 شهر 18 ألف</h4>
                </div>
              </div>
              <br>
              <br>
              <fieldset style="text-align:right;">
                <legend style="font-size: 18px; font-weight: 500;">اذا كنت ترغب في امتلاك شريحة بيانات ومكالمات</legend>
                <div>
                  <input type="checkbox" id="coding" name="interest" value="coding" />
                  <label for="coding">شريحة بيانات مخفضة بنسبة 60% ومكالمات مجانية داخل الشبكة وتخفيض 60% خارج
                    الشبكة</label>
                </div>
              </fieldset>
              <span class="divider"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endforeach

  <div class="container">
    <div class="single-product">
      <div class="row">
        <div class="col-6">
          <div class="product-image">
            <div class="product-image-main">
              <img
                src="https://www.tradeinn.com/f/13880/138802176_3/hp-255-4k7z8ea-15.6-r3-5300u-8gb-256gb-ssd-laptop.jpg"
                alt="" id="product-main-image">
            </div>

          </div>
        </div>
        <br>
        <br>
        <div class="col-6">
          <div class="breadcrumb">
            <span><a href="#">الجهاز 2</a></span>
          </div>

          <div class="product">
            <div class="product-title">
              <h2>HP Core i5</h2>
            </div>

            <div class="product-price">
              <span class="offer-price">600000 SUG</span>
            </div>

            <div class="product-details">
              <h3>وصف الجهاز</h3>
              <p>الجيل الحادي عشر بتخزين 512 أس أس دي ، حجم الشاشة 13 بوصة ، نظام التشغيل ويندوز</p>
            </div>

            <div class="product-color">
              <h4>اختيار طريقة التقسيط</h4>
              <div class="color-layout">
                <input type="radio" name="color" value="black" class="color-input">
                <label for="black" class="black"></label>
                <h4>القسط الشهري ل 24 شهر 20 ألف</h4>


                <input type="radio" name="color" value="blue" class="color-input">
                <label for="blue" class="blue"></label>
                <h4>القسط الشهري ل 12 شهر 28 ألف</h4>
              </div>
              <br>
              <fieldset>
                <legend style="font-size: 18px;
    font-weight: 500;">اذا كنت ترغب في امتلاك شريحة بيانات ومكالمات</legend>
                <div>
                  <input type="checkbox" id="coding1" name="interest1" value="coding1" />
                  <label for="coding1">شريحة بيانات مخفضة بنسبة 60% ومكالمات مجانية داخل الشبكة وتخفيض 60% خارج
                    الشبكة</label>
                </div>
              </fieldset>
            </div>
            <span class="divider"></span>


          </div>
        </div>
      </div>
      <br>
      <br>
      <div class="product-image-slider">
        <img src="gift.jpg" alt="" class="image-list">
        <img src="mouse.png" alt="" class="image-list">
        <img src="bag2.jpg" alt="" class="image-list">

      </div>
      <button class="favorite styled" type="button">
        اشتراك
      </button>
    </div>

  </div>

  <!--script-->
  <script src="script.js"></script>
</body>

</html>