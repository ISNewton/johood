
@forelse ($projects as $project)
<div class="col-md-6">
    <div class="testimonial_box">
      <div class="jonimo_taital_main">
        <h4 class="jonimo_text">{{ $project->title }}</h4>
        <div class="quick_icon"><img src="images/quick-icon.png"></div>
        <div class="quick_icon_1"><img src="images/quick-icon1.png"></div>
      </div>
      <p class="dummy_text">{!! $project->description !!}</p>
      <div class="read_bt" style="margin-right:150px;"><a href="blog.html">ديجي شباب</a></div>
    </div>
  </div>
  @empty

@endforelse
