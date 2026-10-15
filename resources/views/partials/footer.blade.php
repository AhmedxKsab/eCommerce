<div class="subscribe text-center text-md-start pt-5 pb-5">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-md-6 col-lg-3">
        <div class="fw-bold fs-5">Subscribe to our Newsletter:</div>
      </div>
      <div class="col-md-6 col-lg-7 mb-4">
        <input class="w-100 bg-transparent text-light p-2" type="text" placeholder="enter your email-address">
      </div>
      <div class="col-md-6 col-lg-2 mt-3">
        <input class="btn rounded-pill" type="button" value="subscribe">
      </div>
    </div>
  </div>
</div>

<div class="footer pt-5 pb-5 text-center text-md-start text-white-50">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-4">
        <div class="info">
          <img src="{{ URL::asset('assets/images/logo.png') }}" alt="" class="mb-4">
          <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis doloremque quisquam fugit accusamus vel, nesciunt quae id ducimus itaque velit, odio quis vero voluptates ullam?</p>
          <div class="copyright">
            Created By <span>GraphicMomo</span>
            <div>&copy; 2026-<span>MoMo.inc</span></div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-2">
        <div class="links mt-3">
          <h5 class="text-light">links</h5>
          <ul class="list-unstyled lh-lg">
            <li>Home</li>
            <li>Portfolio</li>
            <li>Testimonials</li>
            <li>Support</li>
            <li>Tearms and Conditions</li>
          </ul>
        </div>
      </div>
      <div class="col-md-6 col-lg-2">
        <div class="links">
          <h5 class="text-light">About Us</h5>
          <ul class="list-unstyled lh-lg">
            <li>Sing in</li>
            <li>Register</li>
            <li>About Us</li>
            <li>Blog</li>
            <li>Contact us</li>
          </ul>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="contactus">
          <h5 class="text-light">Contact Us</h5>
          <p class="lh-lg mt-3">Get in Touch with us if you need any kind of edits or new works just click and Call ur welcome at anytime</p>
          <a href="#" class="btn main-btn rounded-pill w-100">Graphics Momo@momo.gmail.com</a>
          <ul class="list-unstyled mt-5 gap-3 d-flex justify-content-center align-items-center">
            @foreach(['facebook', 'twitter', 'youtube', 'tiktok', 'linkedin'] as $social)
              <li>
                <a href="#" class="d-block text-light">
                  <i class="fa-brands fa-{{ $social }} rounded-circle p-2 fa-lg"></i>
                </a>
              </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>