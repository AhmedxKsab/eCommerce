@php
    $works = ['download (1).jpg', 'download (2).jpg', 'download (3).jpg', 'download (4).jpg', 'download.jpg', 'download (1).jpg', 'download (1).jpg', 'download (1).jpg'];
@endphp

<div class="our-work text-center pt-5 pb-5">
  <div class="container">
    <div class="main-title mb-4 mt-4 position-relative">
      <i class="fa-solid fa-atom mb-2"></i>
      <h2>We Make this</h2>
      <p class="text-black-50">Prepare To be Amazed</p>
    </div>
    <ul class="list-unstyled d-flex justify-content-center mt-5 mb-5">
      <li class="active rounded-pill">All</li>
      <li>Code</li>
      <li>Design</li>
      <li>Photo</li>
      <li>App</li>
    </ul>
    <div class="row">
      @foreach($works as $img)
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box mb-3 bg-white" data-work="Application">
            <img src="{{ URL::asset('assets/images/' . $img) }}" alt="" class="img-fluid">
          </div>
        </div>
      @endforeach
    </div>
    <div class="d-flex justify-content-center mt-5">
      <a href="#" class="btn rounded-pill main-btn text-uppercase">I Want More</a>
    </div>
  </div>
</div>