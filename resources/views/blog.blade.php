@extends('layouts.main')

@section('content')
<div class="blog_section layout_padding" style="text-align:right;">
  <div class="container">
     <div class="row">
        <div class="col-md-6">
           <div class="blog_img"><img src="images/blog-img.jpg"></div>
        </div>
        <div class="col-md-6">
           <h1 class="blog_taital">مشروع ديجي شباب لتيسير وسائل التكنولوجيا الرقمية</h1>
           <p class="blog_text">مشروع ديجي شباب في نسخته للتعليم العالي يهدف الى توفير بنية تحتية اساسية للعملية التعليمية الإلكترونية
              بجميع الجامعات السودانية وهي جهاز كمبيوتر لابتوب لكل من الأستاذ والطالب والموظف بنظام التمويل الأصغر
              مع شريحة اتصالات وبيانات من شركة زين بتخفيض يصل الى 60 % من فاتورة الاستخدام، ونظام يونيسوفت للكلية
              الإلكترونية.</p>
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
              <h1 class="testimonial_taital">المنتجات التي توفرها ديجي شباب</h1>
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
                          <p class="dummy_text"> جهاز كمبيوتر لابتوب بالأقساط من شركة لينوفو بمعالج كور اي 5 بذاكرة وصول عشوائي 6 قيقا بايت وقرص صلب بسعة 512 اس اس دي الجيل الحادي عشر</p>
                       </div>
                    </div>
                    <div class="col-md-6">
                       <div class="testimonial_box">
                          <div class="jonimo_taital_main">
                             <h4 class="jonimo_text">المنتج 2</h4>
                             <div class="quick_icon"><img src="images/quick-icon.png"></div>
                             <div class="quick_icon_1"><img src="images/quick-icon1.png"></div>
                          </div>
                          <p class="dummy_text">جهاز كمبيوتر لابتوب بالأقساط بمعالج كور اي 3 بذاكرة وصول عشوائي 6 قيقا بايت وقرص صلب بسعة 512 اس اس دي الجيل الحادي عشر</p>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
        <div class="carousel-item active">
           <div class="container" style="text-align:right;">
              <h1 class="testimonial_taital">المنتجات التي توفرها ديجي شباب</h1>
              <p class="testimonial_text">خدمات مدفوعة</p>
              <div class="testimonial_section_2">
                 <div class="row">
                    <div class="col-md-6">
                       <div class="testimonial_box">
                          <div class="jonimo_taital_main">
                             <h4 class="jonimo_text">المنتج 3</h4>
                             <div class="quick_icon"><img src="images/quick-icon.png"></div>
                             <div class="quick_icon_1"><img src="images/quick-icon1.png"></div>
                          </div>
                          <p class="dummy_text">شريحة انترنت ومالمات بتخفيض 60% للانترنت والمكالمات ومجانية داخل الشبكة الشريحة مقدمة من شركة زين</p>
                       </div>
                    </div>
                    <div class="col-md-6">
                       <div class="testimonial_box">
                          <div class="jonimo_taital_main">
                             <h4 class="jonimo_text">المنتج 4</h4>
                             <div class="quick_icon"><img src="images/quick-icon.png"></div>
                             <div class="quick_icon_1"><img src="images/quick-icon1.png"></div>
                          </div>
                          <p class="dummy_text">ترخيص تطبيق تدريس للتعليم الإلكتروني وهو تطبيق يساعد على اكمال العملية الاليكترونية من تسجيل وتعليم اليكتروني واستخراج النتائج</p>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </div>
  <div class="read_bt" style="margin-right:125px;"><a href="personal_info.html">سجل الآن</a></div>
</div>
@endsection