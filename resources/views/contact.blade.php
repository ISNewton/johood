@extends('layouts.main')

@section('content')
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
@endsection