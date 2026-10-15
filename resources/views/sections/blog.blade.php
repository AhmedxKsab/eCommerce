@php
    $posts = ['blog-1.jpg', 'blog-2.jpg', 'blog-3.jpg'];
@endphp

<div class="blog pt-4 pb-4">
  <div class="container">
    <div class="main-title mb-4 mt-4 position-relative text-center">
      <img src="{{ URL::asset('assets/images/title.png') }}" class="img-fluid" alt="">
      <h2>Read Our Blog</h2>
      <p class="text-black-50">New Stories</p>
    </div>
    <div class="row pt-5 pb-5">
      @foreach($posts as $post)
        <div class="col-md-6 col-lg-4">
          <div class="card">
            <img src="{{ URL::asset('assets/images/' . $post) }}" class="card-img-top" alt="">
            <div class="card-body">
              <span>Jan 17, 2022</span>
              <h5 class="card-title">Some Awesome Title Here</h5>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    <div class="d-flex justify-content-center mt-5">
      <a href="#" class="btn rounded-pill main-btn text-uppercase">I Want TO End</a>
    </div>
  </div>
</div>