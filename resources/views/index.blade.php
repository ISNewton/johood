@extends('layouts.main')
@section('content')
  
<div class="banner_section layout_padding">
  <div class="container-fluid">
     <section class="slide-wrapper">
        <div class="container-fluid">
           <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                 <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                 <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                 <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>
              <!-- Wrapper for slides -->
              <div class="carousel-inner" style="text-align:right;">
                 <div class="carousel-item">
                    <div class="container">
                       <div class="banner_main">
                          <h1 class="banner_taital">ايزوتك الاستشارية وشركاء النهضة </h1>
                          <p class="banner_text">مبادرة جهود لترقية الاستثمار التنموي بالتعاون مع وزارة العمل الاصلاحي</p>
                          <div class="btn_main">
                             <div class="contact_bt active "><a href="contact.html">تواصل معنا</a></div>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="carousel-item active">
                    <div class="container">
                       <div class="banner_main">
                          <h1 class="banner_taital">ايزوتك الاستشارية وشركاء النهضة</h1>
                          <p class="banner_text">برنامج جهود القومي لتطوير الادارة الاليكتروني ولتيسير وسائل التكنولوجيا الرقمية</p>
                          <div class="btn_main">
                             <div class="contact_bt active "><a href="contact.html">تواصل معنا</a></div>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="carousel-item">
                    <div class="container">
                       <div class="banner_main">
                          <h1 class="banner_taital">ايزوتك الاستشارية وشركاء النهضة</h1>
                          <p class="banner_text">معا نقفز بالتكنولوجيا ونرقي الاداء المؤسسي</p>
                          <div class="btn_main">
                             <div class="contact_bt active "><a href="#">تواصل معنا</a></div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
  </div>
</div>

  <!-- blog section start -->
  <div class="blog_section layout_padding" style="text-align:right;">
     <div class="container">
        <div class="row">
           <div class="col-md-6">
              <div class="blog_img"><img src="images/blog-img.jpg"></div>
           </div>
           <div class="col-md-6">
              <h1 class="blog_taital">عن الشركة</h1>
              <p class="blog_text">تقدم هذه المنظمات لعملائها خدمات استشارية مختلفة. في معظم الحالات ، تكون شركة خارجية وترتبط مباشرة بشركات عملائها. الاستشارات هي تقديم المشورة اللازمة للبائعين والمصنعين وكذلك للمشترين. يمكنهم الحصول على المساعدة في المجالات الفنية والتكنولوجية والخبراء في عملهم. وتتمثل المهمة الرئيسية لمثل هذه الشركة في تقديم المساعدة الإدارية فيما يتعلق بالقضايا التي يطرحها العملاء لأنفسهم</p>
              <div class="read_bt"><a href="#">قراءة المزيد</a></div>
           </div>
        </div>
     </div>
  </div>
  <!-- blog section end -->
  <br>
  <br>
  <!-- services section start -->
  <div class="services_section layout_padding" dir="rtl" lang="ar">
     <div class="container" dir="rtl" lang="ar">
        <h1 class="services_taital" style="text-align:right;">خدمات الشركة</h1>
        <div class="services_section_2">
           <div class="row">
              <div class="col-lg-4">
                 <div class="icon_box">
                    <div class="icon_1"><img src="images/icon-1.png"></div>
                 </div>
                 <h4 class="selection_text" style="text-align:right;">العمارة والتخطيط المصرفي</h4>
                 <p class="ipsum_text" style="text-align:right;">دراسات التصميم الاولية والمسوحات بأنواعها، دراسات الجدوى للمشروعات، التصميمات المعمارية والانشائية لجميع المنشئات، التصميم الحضري والريفي، الاشراف على التنفيذ، التخطيط والمتابعة الادارية للمشروعات، متابعة اجراءات تصديق المشروعات</p>
                 <div class="icon_box">
                    <div class="icon_1"><img src="images/icon-4.png"></div>
                 </div>
                 <h4 class="selection_text" style="text-align:right;">تقييم الاصول</h4>
                 <p class="ipsum_text" style="text-align:right;">تقييم المنشءات والمباني بأنواعها، تقييم الأراضي والمخططات بأنواعها، تقييم الآليات والمعدات، تقييم المشروعات</p>
              </div>
              <div class="col-lg-4">
                 <div class="icon_box">
                    <div class="icon_1"><img src="images/icon-2.png"></div>
                 </div>
                 <h4 class="selection_text" style="text-align:right;">دراسات البيئة</h4>
                 <p class="ipsum_text" style="text-align:right;">دراسات الأثر البيئي للمشروعات، دراسات تصميم محطات مياه الشرب، دراسة ادراة التلوث البيئي بأنواعه، دراسة معالجة المخلفات بأنواعها، دراسات ادارة مياه الأمطار والسيول</p>
                 <div class="icon_box">
                    <div class="icon_1"><img src="images/icon-5.png"></div>
                 </div>
                 <h4 class="selection_text" style="text-align:right;">التخصصات الهندسية</h4>
                 <p class="ipsum_text" style="text-align:right;">دراسات التصميم الأولية والمسوحات الهندسية، تصميم المنشئات الهندسية، دراسات تقييم الوضع الراهن لمنشئات الهندسية، دراسات اعادة تأهيل المنشئات الهندسية الصناعية، دراسات الجدوى الفنية للآليات والمعدات</p>
              </div>
              <div class="col-lg-4">
                 <div class="icon_box">
                    <div class="icon_1"><img src="images/icon-3.png"></div>
                 </div>
                 <h4 class="selection_text" style="text-align:right;">الادارة الاليكترونية</h4>
                 <p class="ipsum_text" style="text-align:right;">تقييم الوضع الاداري الحالي ودراسات تحديد الفجوة، التخطيط الاستراتيجي للاداري نحو الفضاء الرقمي، الاشراف على تنفيذ التحول التكنولوجي، التصميم والاشراف على تنفيذ مشروعات الحوسبة</p>
              </div>
           </div>
        </div>
     </div>
  </div>
  <!-- services section end -->
  <!-- testimonial section start -->
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
  <!-- testimonial section end -->
  <!-- contact section start -->
  <div class="contact_section layout_padding" dir="rtl" lang="ar">
     <div class="container">
        <h1 class="contact_taital" style="text-align:right;">تواصل معنا</h1>
        <p class="contact_text" style="text-align:right;">نحن نسعى ان نقدم لك الأفضل اذا واجهتك اي مشكلة لا تتردد في التواصل معنا</p>
        <div class="contact_section_2 layout_padding">
           <div class="row">
              <div class="col-md-6">
                 <div class="contact_main">
                    <input type="text" class="mail_text" placeholder="الاسم بالكامل" name="Full Name">
                    <input type="text" class="mail_text" placeholder="رقم الهاتف" name="Phone Number">
                    <input type="text" class="mail_text" placeholder="البريد الاليكتروني" name="Email">
                    <textarea class="massage-bt" placeholder="الرسالة" rows="5" id="comment" name="Massage"></textarea>
                    <div class="send_bt"><a href="#">ارسال</a></div>
                 </div>
              </div>
              <div class="col-md-6">
                 <div class="map_main">
                    <div class="map-responsive">
                       <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" style="border:0; width: 100%;" allowfullscreen="" width="600" height="400" frameborder="0"></iframe>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </div>
  <!-- contact section end -->
  
@endsection
