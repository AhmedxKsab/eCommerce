@php
    $features = [
        ['number' => 1, 'icon' => 'pencil'],
        ['number' => 2, 'icon' => 'plug'],
        ['number' => 3, 'icon' => 'tv'],
    ];
@endphp

<div class="featurs text-center pt-5 pb-5">
  <div class="container">
    <div class="main-title mb-4 mt-4 position-relative">
      <i class="fa-solid fa-atom mb-2"></i>
      <h2>We are Good at</h2>
      <p class="text-black-50">SOME OF THESE STUFF UNDER</p>
    </div>
    <div class="row">
      @foreach($features as $feature)
        <div class="col-md-6 col-lg-4">
          <div class="feat">
            <div class="icon-holder position-relative">
              <i class="fa-solid fa-{{ $feature['number'] }} position-absolute bottom-0 number"></i>
              <i class="fa-solid fa-{{ $feature['icon'] }} position-absolute bottom-0 icon"></i>
            </div>
            <h4 class="mb-3 mt-3 text-uppercase">GFX</h4>
            <p class="text-black-50 lh-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione facilis illum neque, in tenetur a officia veritatis omnis provident vitae distinctio nesciunt aperiam magnam tempora sit alias sunt unde fugit.</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>