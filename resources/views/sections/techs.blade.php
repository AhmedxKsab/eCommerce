@php
    $techs = ['tech-1.png', 'tech-2.png', 'tech-3.png', 'tech-4.png', 'tech-3.png', 'tech-4.png'];
@endphp

<div class="techs pt-5 pb-5 text-center">
  <div class="container">
    <div class="row align-items-center">
      @foreach($techs as $tech)
        <div class="col-sm-6 col-md-4 col-lg-2 mt-3 mb-3">
          <img src="{{ URL::asset('assets/images/' . $tech) }}" alt="" class="img-fluid">
        </div>
      @endforeach
    </div>
  </div>
</div>