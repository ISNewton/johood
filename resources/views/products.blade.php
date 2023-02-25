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
                    @livewire('projects-list')
                 </div>
              </div>
           </div>
        </div>
     </div>
  </div>
</div>

@endsection