

@extends('layouts.app')

@section('content')
    {{-- <ul>
        @foreach($links as $link)
            <li><a href="{{ route('home.show', $link->id) }}">{{ $link->href }}</a></li>
        @endforeach
    </ul> --}}
  
     <!-- Main Carousel Section Start -->
     <div id="main-slide" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#main-slide" data-slide-to="0" class="active"></li>
          <li data-target="#main-slide" data-slide-to="1"></li>
          <li data-target="#main-slide" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
       
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach($photos as $key => $photo)
                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                            <img src="{{ asset($photo->vpath) }}" class="d-block w-100" alt="{{ $photo->alt }}">
                            <div class="carousel-caption d-md-block">
                                <p class="fadeInUp wow" data-wow-delay=".6s">Our Global Grand Event </p>
                                <h1 class="wow fadeInDown heading" data-wow-delay=".4s">Jeruse 2025</h1>
                                <a href="#" class="fadeInLeft wow btn btn-common btn-lg" data-wow-delay=".6s">Get Ticket</a>
                                <a href="#" class="fadeInRight wow btn btn-border btn-lg" data-wow-delay=".6s">Explore More</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            
                <!-- Add navigation controls if needed -->
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            
      </div>
      <!-- Main Carousel Section End -->

    </header>
    <!-- Header Area wrapper End -->

    <!-- Coundown Section Start -->
    <section class="countdown-timer section-padding">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="heading-count">
              <h2 class="wow fadeInDown" data-wow-delay="0.2s">Event Will Start In</h2>
            </div>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="row time-countdown justify-content-center wow fadeInUp" data-wow-delay="0.2s">
              <div id="clock" class="time-count"></div>
            </div>
            <a href="https://www.google.com/calendar/render?action=TEMPLATE&text=Design%20Thinking%20Conference&dates=20240101T120000Z/20240101T130000Z&details=Global%20Grand%20Event%20on%20Digital%20Design&location=Your%20Event%20Location&sf=true&output=xml" target="_blank" class="btn btn-common btn-lg">
               
            Add to My Calender</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Coundown Section End -->

  

    <!-- About Section Start -->
    <section id="about" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">About This Events</h1>
              <p class="wow fadeInDown" data-wow-delay="0.2s">JURSE 2024 Tunis, Tunisia</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-md-6 col-lg-4">
            <div class="about-item">
              <img class="img-fluid" src="{{ asset('importHome/assets/img/about/img1.jpg')}}" alt="">
              <div class="about-text">
                <h3><a href="#">Wanna Know Our Mission?</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetuer commodo ligula eget dolor.</p>
                <a class="btn btn-common btn-rm" href="#">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-md-6 col-lg-4">
            <div class="about-item">
              <img class="img-fluid" src="{{ asset('importHome/assets/img/about/img2.jpg')}}" alt="">
              <div class="about-text">
                <h3><a href="#">What you will learn?</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetuer commodo ligula eget dolor.</p>
                <a class="btn btn-common btn-rm" href="#">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-md-6 col-lg-4">
            <div class="about-item">
              <img class="img-fluid" src="{{ asset('importHome/assets/img/about/img3.jpg')}}" alt="">
              <div class="about-text">
                <h3><a href="#">What are the benifits?</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetuer commodo ligula eget dolor.</p>
                <a class="btn btn-common btn-rm" href="#">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About Section End -->

    <!-- Counter Area Start-->
    <section class="counter-section section-padding">
      <div class="container">
        <div class="row">
          <!-- Counter Item -->
          <div class="col-md-6 col-lg-3 col-xs-12 work-counter-widget text-center">
            <div class="counter wow fadeInRight" data-wow-delay="0.3s">
              <div class="icon"><i class="lni-map"></i></div>
              <p>Wst. Conference Center</p>
              <span>San Francisco, CA</span>
            </div>
          </div>
          <!-- Counter Item -->
          <div class="col-md-6 col-lg-3 col-xs-12 work-counter-widget text-center">
            <div class="counter wow fadeInRight" data-wow-delay="0.6s">
              <div class="icon"><i class="lni-timer"></i></div>
              <p>February 14 - 19, 2018</p>
              <span>09:00 AM – 05:00 PM</span>
            </div>
          </div>
          <!-- Counter Item -->
          <div class="col-md-6 col-lg-3 col-xs-12 work-counter-widget text-center">
            <div class="counter wow fadeInRight" data-wow-delay="0.9s">
              <div class="icon"><i class="lni-users"></i></div>
              <p>343 Available Seats</p>       
              <span>Hurryup! few tickets are left</span>
            </div>
          </div>
          <!-- Counter Item -->
          <div class="col-md-6 col-lg-3 col-xs-12 work-counter-widget text-center">
            <div class="counter wow fadeInRight" data-wow-delay="1.2s">
              <div class="icon"><i class="lni-coffee-cup"></i></div>
              <p>Free Lunch & Snacks</p>
              <span>Don’t miss it</span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Counter Area End-->

    <!-- Schedule Section Start -->
    <section id="schedules" class="schedule section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Event Schedules</h1>
              <p class="wow fadeInDown" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, consectetur adipiscing <br> elit, sed do eiusmod tempor</p>
            </div>
          </div>
        </div>
        <div class="schedule-area row wow fadeInDown" data-wow-delay="0.3s">
          <div class="schedule-tab-title col-md-3 col-lg-3 col-xs-12">
            <div class="table-responsive">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="monday-tab" data-toggle="tab" href="#monday" role="tab" aria-controls="monday" aria-expanded="true">
                    <div class="item-text">
                      <h4>Monday</h4>
                      <h5>14 February</h5>
                    </div>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="tuesday-tab" data-toggle="tab" href="#tuesday" role="tab" aria-controls="tuesday">
                    <div class="item-text">
                      <h4>Tuesday</h4>
                      <h5>15 February</h5>
                    </div>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="wednesday-tab" data-toggle="tab" href="#wednesday" role="tab" aria-controls="wednesday">
                    <div class="item-text">
                      <h4>Wednesday</h4>
                      <h5>16 February</h5>
                    </div>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="thursday-tab" data-toggle="tab" href="#thursday" role="tab" aria-controls="thursday">
                    <div class="item-text">
                      <h4>Thursday</h4>
                      <h5>17 February</h5>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="schedule-tab-content col-md-9 col-lg-9 col-xs-12 clearfix">
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="monday" role="tabpanel" aria-labelledby="monday-tab">
                <div id="accordion">
                  <div class="card">
                    <div id="headingOne">
                      <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                          
                        <span class="time">10am - 12:30pm</span>
                        <h4>Web Design Principles and Best Practices</h4>
                        <h5 class="name">David Warner</h5>
                      </div>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                      <div class="card-body">
                        <p>Consectetur adipisicing elit. Quod distinctio impedit sint accusantium ducimus lites consequuntur innobisl dolores saepe.Proin sit amet turpis lobortis.</p>
                        <div class="location">
                          <span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div id="headingTwo">
                      <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                         
                        <span class="time">10am - 12:30pm</span>
                        <h4>15 Free Productive Design Tools</h4>
                        <h5 class="name">David Warner</h5>
                      </div>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                      <div class="card-body">
                        <p>Consectetur adipisicing elit. Quod distinctio impedit sint accusantium ducimus lites consequuntur innobisl dolores saepe.Proin sit amet turpis lobortis.</p>
                        <div class="location">
                          <span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div id="headingThree">
                      <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                     
                        
                        <span class="time">10am - 12:30pm</span>
                        <h4>Getting Started With SketchApp</h4>
                        <h5 class="name">David Warner</h5>
                      </div>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                      <div class="card-body">
                        <p>Consectetur adipisicing elit. Quod distinctio impedit sint accusantium ducimus lites consequuntur innobisl dolores saepe.Proin sit amet turpis lobortis.</p>
                        <div class="location">
                          <span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="tuesday" role="tabpanel" aria-labelledby="tuesday-tab">
                <div id="accordion2">
                  <div class="card">
                    <div id="headingOne1">
                      <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1">
                                      
                        <span class="time">10am - 12:30pm</span>
                        <h4>Web Design Principles and Best Practices</h4>
                        <h5 class="name">David Warner</h5>
                      </div>
                    </div>
                    <div id="collapseOne1" class="collapse show" aria-labelledby="headingOne1" data-parent="#accordion2">
                      <div class="card-body">
                        <p>Consectetur adipisicing elit. Quod distinctio impedit sint accusantium ducimus lites consequuntur innobisl dolores saepe.Proin sit amet turpis lobortis.</p>
                        <div class="location">
                          <span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div id="headingTwo2">
                      <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                         
                        <span class="time">10am - 12:30pm</span>
                        <h4>Web Design Principles and Best Practices</h4>
                        <h5 class="name">David Warner</h5>
                      </div>
                    </div>
                    <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo2" data-parent="#accordion2">
                      <div class="card-body">
                        <p>Consectetur adipisicing elit. Quod distinctio impedit sint accusantium ducimus lites consequuntur innobisl dolores saepe.Proin sit amet turpis lobortis.</p>
                        <div class="location">
                          <span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="wednesday" role="tabpanel" aria-labelledby="wednesday-tab">
                <div id="accordion3">
                  <div class="card">
                    <div id="headingOne3">
                      <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseOne3" aria-expanded="false" aria-controls="collapseOne3">
                                    
                        <span class="time">10am - 12:30pm</span>
                        <h4>Web Design Principles and Best Practices</h4>
                        <h5 class="name">David Warner</h5>
                      </div>
                    </div>
                    <div id="collapseOne3" class="collapse show" aria-labelledby="headingOne3" data-parent="#accordion3">
                      <div class="card-body">
                        <p>Consectetur adipisicing elit. Quod distinctio impedit sint accusantium ducimus lites consequuntur innobisl dolores saepe.Proin sit amet turpis lobortis.</p>
                        <div class="location">
                          <span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div id="headingTwo3">
                      <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseTwo3" aria-expanded="false" aria-controls="collapseTwo3">
                                             
                        <span class="time">10am - 12:30pm</span>
                        <h4>Web Design Principles and Best Practices</h4>
                        <h5 class="name">David Warner</h5>
                      </div>
                    </div>
                    <div id="collapseTwo3" class="collapse" aria-labelledby="headingTwo3" data-parent="#accordion3">
                      <div class="card-body">
                        <p>Consectetur adipisicing elit. Quod distinctio impedit sint accusantium ducimus lites consequuntur innobisl dolores saepe.Proin sit amet turpis lobortis.</p>
                        <div class="location">
                          <span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div id="headingThree3">
                      <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
                                          
                        <span class="time">10am - 12:30pm</span>
                        <h4>Web Design Principles and Best Practices</h4>
                        <h5 class="name">David Warner</h5>
                      </div>
                    </div>
                    <div id="collapseThree3" class="collapse" aria-labelledby="headingThree3" data-parent="#accordion3">
                      <div class="card-body">
                        <p>Consectetur adipisicing elit. Quod distinctio impedit sint accusantium ducimus lites consequuntur innobisl dolores saepe.Proin sit amet turpis lobortis.</p>
                        <div class="location">
                          <span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="thursday" role="tabpanel" aria-labelledby="thursday-tab">
                <div id="accordion4">
                  <div class="card">
                    <div id="headingOne">
                      <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseOne4" aria-expanded="false" aria-controls="collapseOne4">
                                       
                        <span class="time">10am - 12:30pm</span>
                        <h4>Web Design Principles and Best Practices</h4>
                        <h5 class="name">David Warner</h5>
                      </div>
                    </div>
                    <div id="collapseOne4" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion4">
                      <div class="card-body">
                        <p>Consectetur adipisicing elit. Quod distinctio impedit sint accusantium ducimus lites consequuntur innobisl dolores saepe.Proin sit amet turpis lobortis.</p>
                        <div class="location">
                          <span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div id="headingTwo">
                      <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseTwo4" aria-expanded="false" aria-controls="collapseTwo4">
                                            
                        <span class="time">10am - 12:30pm</span>
                        <h4>Web Design Principles and Best Practices</h4>
                        <h5 class="name">David Warner</h5>
                      </div>
                    </div>
                    <div id="collapseTwo4" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion4">
                      <div class="card-body">
                        <p>Consectetur adipisicing elit. Quod distinctio impedit sint accusantium ducimus lites consequuntur innobisl dolores saepe.Proin sit amet turpis lobortis.</p>
                        <div class="location">
                          <span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div id="headingThree4">
                      <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseThree4" aria-expanded="false" aria-controls="collapseThree4">
                                            
                        <span class="time">10am - 12:30pm</span>
                        <h4>Web Design Principles and Best Practices</h4>
                        <h5 class="name">David Warner</h5>
                      </div>
                    </div>
                    <div id="collapseThree4" class="collapse" aria-labelledby="headingThree" data-parent="#accordion4">
                      <div class="card-body">
                        <p>Consectetur adipisicing elit. Quod distinctio impedit sint accusantium ducimus lites consequuntur innobisl dolores saepe.Proin sit amet turpis lobortis.</p>
                        <div class="location">
                          <span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="friday" role="tabpanel" aria-labelledby="friday-tab">
                <div id="accordion">
                  <div class="card">
                    <div id="headingOne">
                      <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                          
                        <span class="time">10am - 12:30pm</span>
                        <h4>Web Design Principles and Best Practices</h4>
                        <h5 class="name">David Warner</h5>
                      </div>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                      <div class="card-body">
                        <p>Consectetur adipisicing elit. Quod distinctio impedit sint accusantium ducimus lites consequuntur innobisl dolores saepe.Proin sit amet turpis lobortis.</p>
                        <div class="location">
                          <span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div id="headingTwo">
                      <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            
                        <span class="time">10am - 12:30pm</span>
                        <h4>Web Design Principles and Best Practices</h4>
                        <h5 class="name">David Warner</h5>
                      </div>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                      <div class="card-body">
                        <p>Consectetur adipisicing elit. Quod distinctio impedit sint accusantium ducimus lites consequuntur innobisl dolores saepe.Proin sit amet turpis lobortis.</p>
                        <div class="location">
                          <span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div id="headingThree">
                      <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            
                        <span class="time">10am - 12:30pm</span>
                        <h4>Web Design Principles and Best Practices</h4>
                        <h5 class="name">David Warner</h5>
                      </div>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                      <div class="card-body">
                        <p>Consectetur adipisicing elit. Quod distinctio impedit sint accusantium ducimus lites consequuntur innobisl dolores saepe.Proin sit amet turpis lobortis.</p>
                        <div class="location">
                          <span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Schedule Section End -->

    <!-- Team Section Start -->
    <section id="team" class="section-padding text-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Who's Speaking?</h1>
              <p class="wow fadeInDown" data-wow-delay="0.2s">JURSE 2024 Tunis, Tunisia</p>
            </div>
          </div>
        </div>
        <div class="row">
        @foreach($speakers as $items)
        <div class="col-sm-6 col-md-6 col-lg-4">
          <!-- Team Item Starts -->
          <div class="team-item wow fadeInUp" data-wow-delay="0.2s">
            <div class="team-img">
              <img class="img-fluid" src="{{ asset('importHome/assets/img/team/avatar.jpg')}}" alt="">
             
            </div>
            <div class="info-text">
              <h3><a href="#">{{$items->firstname}} ,{{$items->lastname}}</a></h3>
              <p>{{$items->description}}</p>
              <p>{{$items->website}}</p>
            </div>
          </div>
          <!-- Team Item Ends -->
        </div>


        @endforeach
        </div>
        <a href="speakers.html" class="btn btn-common mt-30 wow fadeInUp" data-wow-delay="1.9s">All Speakers</a>
      </div>
    </section>
    <!-- Team Section End -->

    <!-- Gallary Section Start -->
    <section id="gallery" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">our event gallery</h1>
              <p class="wow fadeInDown" data-wow-delay="0.2s">JURSE 2024 Tunis, Tunisia</p>
            </div>
          </div> 
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-6 col-lg-4">
            <div class="gallery-box">
              <div class="img-thumb">
                <img class="img-fluid" src="{{ asset('importHome/assets/img/gallery/img-1.jpg')}}" alt="">
              </div>
              <div class="overlay-box text-center">
                <a class="lightbox" href="{{ asset('importHome/assets/img/gallery/img-1.jpg')}}">
                  <i class="lni-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="ccol-md-6 col-sm-6 col-lg-4">
            <div class="gallery-box">
              <div class="img-thumb">
                <img class="img-fluid" src="{{ asset('importHome/assets/img/gallery/img-2.jpg')}}" alt="">
              </div>
              <div class="overlay-box text-center">
                <a class="lightbox" href="{{ asset('importHome/assets/img/gallery/img-2.jpg')}}">
                  <i class="lni-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="ccol-md-6 col-sm-6 col-lg-4">
            <div class="gallery-box">
              <div class="img-thumb">
                <img class="img-fluid" src="{{ asset('importHome/assets/img/gallery/img-3.jpg')}}" alt="">
              </div>
              <div class="overlay-box text-center">
                <a class="lightbox" href="{{ asset('importHome/assets/img/gallery/img-3.jpg')}}">
                  <i class="lni-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="ccol-md-6 col-sm-6 col-lg-4">
            <div class="gallery-box">
              <div class="img-thumb">
                <img class="img-fluid" src="{{ asset('importHome/assets/img/gallery/img-4.jpg')}}" alt="">
              </div>
              <div class="overlay-box text-center">
                <a class="lightbox" href="{{ asset('importHome/assets/img/gallery/img-4.jpg')}}">
                  <i class="lni-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="ccol-md-6 col-sm-6 col-lg-4">
            <div class="gallery-box">
              <div class="img-thumb">
                <img class="img-fluid" src="{{ asset('importHome/assets/img/gallery/img-5.jpg')}}" alt="">
              </div>
              <div class="overlay-box text-center">
                <a class="lightbox" href="{{ asset('importHome/assets/img/gallery/img-5.jpg')}}">
                  <i class="lni-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="ccol-md-6 col-sm-6 col-lg-4">
            <div class="gallery-box">
              <div class="img-thumb">
                <img class="img-fluid" src="{{ asset('importHome/assets/img/gallery/img-6.jpg')}}" alt="">
              </div>
              <div class="overlay-box text-center">
                <a class="lightbox" href="{{ asset('importHome/assets/img/gallery/img-6.jpg')}}">
                  <i class="lni-plus"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center mt-3">
          <div class="col-xs-12">
            <a href="#" class="btn btn-common">Browse All</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Gallary Section End -->

    <!-- Ask Question Section Start -->
    <section id="faq" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Ask Question?</h1>
              <p class="wow fadeInDown" data-wow-delay="0.2s">JURSE 2024 Tunis, Tunisia</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
            <div class="accordion">
              <div class="card">
                <div class="card-header" id="headingOne">
                  <div class="header-title" data-toggle="collapse" data-target="#questionOne" aria-expanded="true" aria-controls="collapseOne">
                    <i class="lni-pencil"></i> How to make a new event?
                  </div>
                </div>
                <div id="questionOne" class="collapse" aria-labelledby="headingOne" data-parent="#question">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingTwo">
                    <div class="header-title" data-toggle="collapse" data-target="#questionTwo" aria-expanded="false" aria-controls="questionTwo">
                      <i class="lni-pencil"></i>  Which payment methods do you accept? 
                    </div>
                </div>
                <div id="questionTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#question">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingThree">
                  <div class="header-title" data-toggle="collapse" data-target="#questionThree" aria-expanded="false" aria-controls="questionThree">
                    <i class="lni-pencil"></i>  Which document can i bring to meeting?   
                  </div>
                </div>
                <div id="questionThree" class="collapse" aria-labelledby="headingThree" data-parent="#question">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingThree">
                  <div class="header-title" data-toggle="collapse" data-target="#questionFour" aria-expanded="false" aria-controls="questionFour">
                   <i class="lni-pencil"></i> Who can join at the live event venue?
                  </div>
                </div>
                <div id="questionFour" class="collapse" aria-labelledby="headingThree" data-parent="#question">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
            <div class="accordion">
              <div class="card">
                <div class="card-header" id="headingOne2">
                  <div class="header-title" data-toggle="collapse" data-target="#questionOne2" aria-expanded="true" aria-controls="collapseOne">
                    <i class="lni-pencil"></i> How to make a new event?
                  </div>
                </div>
                <div id="questionOne2" class="collapse" aria-labelledby="headingOne" data-parent="#question">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingTwo2">
                    <div class="header-title" data-toggle="collapse" data-target="#questionTwo2" aria-expanded="false" aria-controls="questionTwo">
                      <i class="lni-pencil"></i>  Which payment methods do you accept? 
                    </div>
                </div>
                <div id="questionTwo2" class="collapse" aria-labelledby="headingTwo" data-parent="#question">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingThree">
                  <div class="header-title" data-toggle="collapse" data-target="#questionFive" aria-expanded="false" aria-controls="questionFive">
                    <i class="lni-pencil"></i>How to set price? 
                  </div>
                </div>
                <div id="questionFive" class="collapse" aria-labelledby="headingThree" data-parent="#question">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingThree">
                  <div class="header-title" data-toggle="collapse" data-target="#questionSix" aria-expanded="false" aria-controls="questionSix">
                    <i class="lni-pencil"></i>  What our price list? 
                  </div>
                </div>
                <div id="questionSix" class="collapse" aria-labelledby="headingThree" data-parent="#question">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Ask Question Section End -->

    <!-- Sponsors Section Start -->
    <section id="sponsors" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Sponsores</h1>
              <p class="wow fadeInDown" data-wow-delay="0.2s">JURSE 2024 Tunis, Tunisia</p>
            </div>
          </div>
        </div>
        <div class="row mb-30 text-center wow fadeInDown" data-wow-delay="0.3s">
          @foreach($sponcors as $items)
              <div class="col-md-3 col-sm-3 col-xs-12">
                  <div class="spnsors-logo">
                      <a href="#">
                          <img class="img-fluid" src="{{ asset($items->src) }}" alt="{{ $items->alt }}">
                      </a>
                  </div>
              </div>
          @endforeach
          <div class="col-12 text-center">
              <a href="#" class="btn btn-common">Become a sponsor</a>
          </div>
      </div>
      
      
      </div>
    </section>
    <!-- Sponsors Section End -->




    <!-- Blog Section Start -->
    <section id="blog" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Our Latest News & Articles</h1>
              <p class="wow fadeInDown" data-wow-delay="0.2s">JURSE 2024 Tunis, Tunisia</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="blog-item">
              <div class="blog-image">
                <a href="#">
                  <img class="img-fluid" src="{{ asset('importHome/assets/img/blog/img-1.jpg')}}" alt="">
                </a>
              </div>
              <div class="descr">
                <div class="tag">Design</div>
                <h3 class="title">
                  <a href="single-blog.html">
                    The 9 Design Trends You Need to Know
                  </a>
                </h3>
                <div class="meta-tags">
                  <span class="date">Jan 20, 2018</span>
                  <span class="comments">| <a href="#"> by Cindy Jefferson</a></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="blog-item">
              <div class="blog-image">
                <a href="#">
                  <img class="img-fluid" src="{{ asset('importHome/assets/img/blog/img-2.jpg')}}" alt="">
                </a>
              </div>
              <div class="descr">
                <div class="tag">Design</div>
                <h3 class="title">
                  <a href="single-blog.html">
                    The 9 Design Trends You Need to Know
                  </a>
                </h3>
                <div class="meta-tags">
                  <span class="date">Jan 20, 2018 </span>
                  <span class="comments">| <a href="#"> by Cindy Jefferson</a></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="blog-item">
              <div class="blog-image">
                <a href="#">
                  <img class="img-fluid" src="{{ asset('importHome/assets/img/blog/img-3.jpg')}}" alt="">
                </a>
              </div>
              <div class="descr">
                <div class="tag">Design</div>
                <h3 class="title">
                  <a href="single-blog.html">
                    The 9 Design Trends You Need to Know
                  </a>
                </h3>
                <div class="meta-tags">
                  <span class="date">Jan 20, 2018</span> 
                  <span class="comments">| <a href="#"> by Cindy Jefferson</a></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 text-center">
            <a href="#" class="btn btn-common">Read More News</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Blog Section End -->

    <!-- Subscribe Area Start -->
    <div id="subscribe" class="section-padding">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-10 col-lg-7">
            <div class="subscribe-inner wow fadeInDown" data-wow-delay="0.3s">
              <h2 class="subscribe-title">Sign Up For Our Newsletter</h2>
              <form class="text-center form-inline">
                <input class="mb-20 form-control" name="email" placeholder="Enter Your Email Here">
                <button type="submit" class="btn btn-common sub-btn" data-style="zoom-in" data-spinner-size="30" name="submit" id="submit">
                <span class="ladda-label"><i class="lni-check-box"></i> Submit</span>
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Subscribe Area End -->

    <!-- Map Section Start -->
    <section id="google-map-area">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div id="conatiner-map"></div>
          </div>
        </div>
      </div>
    </section>
    <!-- Map Section End -->

    <!-- Contact Us Section -->
    <section id="contact-map" class="section-padding">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Drop A Message</h1>
              <p class="wow fadeInDown" data-wow-delay="0.2s">JURSE 2024 Tunis, Tunisia</p>
            </div>
          </div>
          <div class="col-lg-7 col-md-12 col-xs-12">
            <div class="container-form wow fadeInLeft" data-wow-delay="0.2s">
              <div class="form-wrapper">
                
                 
                  <form method="POST" action="/contact" id="contactForm" name="contact-form" data-toggle="validator">
                    @csrf
                    <div class="row">
                    <div class="col-md-6 form-line">
                      <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="First Name" required data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-md-6 form-line">
                      <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required data-error="Please enter your Email">
                        <div class="help-block with-errors"></div>
                      </div> 
                    </div>
               
                    <div class="col-md-12">
                      <div class="form-group">
                        <textarea class="form-control" rows="4" id="message" name="message" required data-error="Write your message"></textarea>
                      </div>
                      <div class="form-submit">
                        <button type="submit" class="btn btn-common" id="form-submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Send Us Now</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Us Section End -->

@endsection

