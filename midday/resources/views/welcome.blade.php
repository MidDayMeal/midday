@extends ('layouts.master')

@section ('content')
      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading display-3">Midday Meal</h1>
          <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
          <p>
            <a href="#" class="btn btn-primary">Order Now</a>
            <a href="#" class="btn btn-secondary">Signup</a>
          </p>
        </div>
      </section>
      
      <section class="album">
        <div class="container" id="about">
          <h2 class="text-center display-4 py-2 my-4">About Us</h2>
          <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
          Excepteur sint occaecat cupidatat non proident, 
          sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </section>
      
      <section class="service">
        <div class="container">
          <h2 class="text-center display-4 py-4 my-4">Our Service</h2>
          <div class="row">
            <div class="col-md-3">
              <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h1 class="text-center"><i class="fa fa-credit-card-alt" aria-hidden="true"></i></h1>
                  <h3 class="card-title text-center">Online-Payment</h3>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h1 class="text-center"><i class="fa fa-paper-plane" aria-hidden="true"></i></h1>
                  <h3 class="card-title text-center">Quick Service</h3>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h1 class="text-center"><i class="fa fa-video-camera" aria-hidden="true"></i></h1>
                  <h3 class="card-title text-center">Live Cooking</h3>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h1 class="text-center"><i class="fa fa-heart" aria-hidden="true"></i></h1>
                  <h3 class="card-title text-center">Made with Love</h3>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="py-4 my-4"></div>
@endsection