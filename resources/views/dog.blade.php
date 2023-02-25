@extends('layouts.main')
@section('content')
<div class="blog_section layout_padding" style="text-align:right;">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <div class="blog_img"><img src="images/blog-img.jpg"></div>
         </div>
         <div class="col-md-6">
            <h1 class="blog_taital">مجموعات جهود للتواصل الإداري والاجتماعي للمؤسسة</h1>
            <p class="blog_text">يدعم التواصل الإداري والاجتماعي بين المؤسسة
               ومنسوبيها من جهة وبين المنسوبين من الجهة الأخرى باستخدام شريحة انترنت واتصالات مقدمة من شركة زين
               لمجموعات منسوبي المؤسسات بتخفيض خاص للمشروع يصل الى 56 % من قيمة استخدام الإنترنت إضافة
               لتخفيض المكالمات داخل وخارج شبكة زين والمكالمات مجانا داخل المجموعة، بالإضافة الى جهاز كمبيوتر لوحي يستوعب شريحة البيانات والاتصالات بنظام التمويل الأصغر بالأقساط.</p>
         </div>
      </div>
   </div>
</div>
   
<div class="testimonial_section layout_padding" dir="rtl" lang="ar">
   <div id="my_carousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
         <li data-target="#my_carousel" data-slide-to="0" class=""></li>
         <li data-target="#my_carousel" data-slide-to="1" class="active"></li>
      </ol>
      <div class="carousel-inner">
         <div class="carousel-item">
            <div class="container" style="text-align:right;">
               <h1 class="testimonial_taital">منتجات مجموعات جهود للتواصل الاداري والاجتماعي للمؤسسة</h1>
               <p class="testimonial_text">خدمات مدفوعة</p>
               <div class="testimonial_section_2">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="testimonial_box">
                           <div class="jonimo_taital_main">
                              <h4 class="jonimo_text">المنتج 1</h4>
                              <div class="quick_icon"><img src="images/quick-icon.png"></div>
                              <div class="quick_icon_1"><img src="images/quick-icon1.png"></div>
                           </div>
                           <p class="dummy_text">شريحة انترنت ومكالمات بتخفيض 60% للانترنت والمكالمات ومجانية داخل الشبكة الشريحة مقدمة من شركة زين</p>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="testimonial_box">
                           <div class="jonimo_taital_main">
                              <h4 class="jonimo_text">المنتج 2</h4>
                              <div class="quick_icon"><img src="images/quick-icon.png"></div>
                              <div class="quick_icon_1"><img src="images/quick-icon1.png"></div>
                           </div>
                           <p class="dummy_text">جهاز كمبيوتر لوحي من شركة سامسونغ اي 7 بذاكرة وصول عشوائية 3 قيقا بايت وسعة تخزين 32 قيقا بايت ايضا بإمكانيته استيعاب شريحة زين</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="carousel-item active">
            <div class="container" style="text-align:right;">
               <h1 class="testimonial_taital">منتجات مجموعات جهود للتواصل الاداري والاجتماعي للمؤسسة</h1>
               <p class="testimonial_text">خدمات مجانية</p>
               <div class="testimonial_section_2">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="testimonial_box">
                           <div class="jonimo_taital_main">
                              <h4 class="jonimo_text">المنتج 3</h4>
                              <div class="quick_icon"><img src="images/quick-icon.png"></div>
                              <div class="quick_icon_1"><img src="images/quick-icon1.png"></div>
                           </div>
                           <p class="dummy_text">خدمة رسائل SMS مجانية تخدم تواصل المؤسسة العام مع المجموعة والتواصل الاجتماعي بين الافراد. خدمة رسائل أسبوعية غير اعلانية SMS في ثقافة الإدارة الإلكترونية والصحة والأخبار العامة.</p>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="testimonial_box">
                           <div class="jonimo_taital_main">
                              <h4 class="jonimo_text">المنتج 4</h4>
                              <div class="quick_icon"><img src="images/quick-icon.png"></div>
                              <div class="quick_icon_1"><img src="images/quick-icon1.png"></div>
                           </div>
                           <p class="dummy_text">تصميم وتسجيل موقع الكتروني خاص بالمجموعة والاشراف على إدارته وتطويره بالتنسيق مع المجموعة
                              والمؤسسة وتدريب عدد 3 من افراد المجموعة على إدارة المحتوى.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="read_bt" style="margin-right:125px;"><a href="{{ route('form') }}">سجل الآن</a></div>
</div>
@endsection