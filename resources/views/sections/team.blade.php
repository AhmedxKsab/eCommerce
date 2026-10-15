@php
    $team = [
        ['img' => 'team-1.png', 'name' => 'Luke Walter'],
        ['img' => 'team-2.png', 'name' => 'MWalter'],
        ['img' => 'team-3.png', 'name' => 'Mao Walter'],
        ['img' => 'team-4.png', 'name' => 'Pain Walter'],
    ];
@endphp

<div class="our-team text-center pt-5 pb-5">
  <div class="container">
    <h2>Meet The Team</h2>
    <p class="text-black-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores soluta illum sunt harum excepturi doloribus sed laborum sequi, unde quos repellendus porro sit officiis sint in est voluptatibus repellat eum.</p>
    <div class="row">
      @foreach($team as $member)
        <div class="col-md-6 col-lg-3">
          <div class="box bg-white">
            <img src="{{ URL::asset('assets/images/' . $member['img']) }}" class="img-fluid" alt="">
            <h4>{{ $member['name'] }}</h4>
            <blockquote class="text-black-50 p-3">i dont understand what do you want to do with this lessons after study it</blockquote>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>