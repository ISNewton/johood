@extends('layouts.main')

@section('content')
<div class="testimonial_section layout_padding" dir="rtl" lang="ar">
  <div id="my_carousel" class="carousel slide" data-ride="carousel">
     <div class="carousel-inner">
        <div class="carousel-item active">
           <div class="container" style="text-align:right;">
              <h1 class="testimonial_taital">مشروعات جهود لترقية الاستثمار التنموي بالمحليات</h1>
              <p class="testimonial_text">التحول الرقمي</p>
              <div class="testimonial_section_2">
                 <div class="row">
                    <div class="col-md-6">
                       <div class="testimonial_box">
                          <div class="jonimo_taital_main">
                             <h4 class="jonimo_text">المشروع 1</h4>
                             <div class="quick_icon"><img src="images/quick-icon.png"></div>
                             <div class="quick_icon_1"><img src="images/quick-icon1.png"></div>
                          </div>
                          <p class="dummy_text">برنامج جهود القومي لتطوير الادارة الاليكترونية</p>
                          <div class="read_bt" style="margin-right:150px;"><a href="blog.html">ديجي شباب</a></div>
                       </div>
                    </div>
                    <div class="col-md-6">
                       <div class="testimonial_box">
                          <div class="jonimo_taital_main">
                             <h4 class="jonimo_text">المشروع 2</h4>
                             <div class="quick_icon"><img src="images/quick-icon.png"></div>
                             <div class="quick_icon_1"><img src="images/quick-icon1.png"></div>
                          </div>
                          <p class="dummy_text">برنامج جهود القومي لتطوير الادارة الاليكترونية</p>
                          <div class="read_bt" style="margin-right:150px;"><a href="DCG.html">DCG</a></div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </div>
</div>

@endsection