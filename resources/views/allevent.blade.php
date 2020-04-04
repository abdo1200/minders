@extends('layouts.app')
<link rel="stylesheet" href="/css/all-events.css">
<script src="/js/allevent.js"></script>

@section('content')
<script>
    document.getElementById('events').classList.add('active');
    document.getElementById("home").classList.remove("active")

</script>
<!--header-->
<section class="row">
    <div class="col-12 head-img">
        <center><img src="img/Mug_Typography.png" alt="" srcset="" width="50%"></center>
    </div>
</section>
<!--up button-->

<!-- Cards -->
<div class="container cards-section">
    <div class="row justify-content-around about-head" style="padding-top: 50px;">
        <div class="col-12 col-md-4">
            <h2 style="text-align: center;color:#3B3B3B;">Our Events</h2>
        </div>
    </div>
    <div class="row eventlinerow justify-content-center">
        <div class="col-4 linecol">
            <div class="line" style="height: 1px;background-color: rgb(255, 190, 37);"></div>
        </div>
    </div>
    <div class="row ml-lg-2 justify-content-around mt-5">
    @foreach($events as $event)
        <div class="col-lg-3 col-md-5 offset-sm-1 offset-md-0 ml-lg-1">
        <div class="card" id="{{$event->id}}">
                <img src="{{asset('/images/events/'.$event->cover)}}" class="card-img-top" alt="..." height="150">
                
                <button style="width: 50px;border-radius: 100%;margin-top: -18px;margin-left: 230px;background-color:#F1C40F;" 
                id="btn2" class="btn" onclick="play('{{'#'.$event->id}}')">
                    <i class="fas fa-arrow-down" style="color: black;"></i>
                </button>
                <h5 class="ml-5">{{$event->name}}</h5>
                <div class="card-body" id="cardbody">
                    <div class="content">
                        <div><i class="fas fa-map-marker-alt"></i> {{$event->place}}</div>
                        <div><i class="fas fa-calendar-week"></i>{{$event->time}}</div>
                        <div><i class="fas fa-clock"></i> {{$event->state}}</div><br>
                        <form method="get" action="{{'/events/'. $event->id }}">
                            @csrf
                            <button class="btn" style="background-color: #F1C40F;">See Event</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>


@endsection


{{-- <section class="row">
		<div class="col-12 event_header MD-cover">	
		  <div class="row">	
			   <div class="col-12 cover_details">
				    <h1>Majors Day</h1>
				    <p>Hurry up and join our event!</p>
            <button class="btn form_btn">The Form is closed</button>
			   </div>
		  </div>
		<div class="row event_header_icons justify-content-center">	
			<div class="col-6 col-md-4">	
				<button type="button" class="btn col-2" data-toggle="tooltip" data-placement="bottom" title="Wednesday, September 2, 2015">
					<i class="fas fa-calendar-week"></i>
				</button>
				<button type="button" class="btn col-2" data-toggle="tooltip" data-placement="bottom" title="Hall 7 - Faculty of computers and information - Helwan university" >
					<i class="fas fa-map-marker-alt"></i>
				</button>
				<button type="button" class="btn col-2" data-toggle="tooltip" data-placement="bottom" title="9:30AM">
					<i class="far fa-clock"></i>
				</button>
			</div>
		</div>	
    <div class="row justify-content-center btn-back">
      <a class="col-md-4 col-6" href="all-events.html">Back to all events</a>
    </div>  
	 </div> 
	</section>	
  <!--up button-->
  <div class="row justify-content-end fixed-bottom">
    <div class=" col-2 col-md-1 offset-md-11">
      <a href="#nav"><button class="btn up-btn"><i class="fas fa-arrow-up"></i></button></a>
    </div>
  </div>

	<!-- Description Section -->
	<section class="description">
	  <div class="container">	
		<div class="row description-header" data-aos="fade-down" data-aos-duration="1000">
			<h2>description</h2>
		</div>
		<div class="row linerow justify-content-center" data-aos="fade-upl" data-aos-duration="1000">
      		<div class="col-6 col-lg-4 linecol">
       			<div class="line"></div>
      		</div>
    	</div>
		<div class="row " id="description-content">
			<div class="col-8 description-content justify-content-start"> 
				<p data-aos="fade-left" data-aos-duration="1000">The main idea is to get level 1 students know about the college system, the subjects that they will study it and how the college life differ from the school life. This event will cover all the steps that the IDEA takes to come to the light which come as following:- -Know about the College credit hours system -Know about the subjects of first year -Make the students know how to deal with first year in college.
				</p>
			</div>
		</div>
	  </div>
	</section>

	<!-- Speakers Section -->
  	<section class="row speakers MD-speakers">
  	  <div class="col-12 container">	
  		<div class="row">
  			<div class="speaker-header" data-aos="fade-down" data-aos-duration="1000">
  				<h2>Event Speakers</h2>
  			</div>
  		</div>
  		<div class="row linerow justify-content-center" data-aos="fade-up" data-aos-duration="1000">
      		<div class="col-6 col-lg-4 linecol">
       			<div class="line"></div>
      		</div>
    	</div>
    	<div class="row" data-aos="fade-down" data-aos-duration="1000">
  			<div class="card col-3" id="scard1">
  				<img src="img/events/Majors Day/MAi_handallah.png" class="card-img-top">
  				<div class="card-body">
    				<p class="card-text">Dr Mai Hamdallah</p>
 	 			</div>
  			</div>
  		</div>
  	  </div>
  	</section>

  	<!-- Start of Agenda section -->
  	<section class="agenda">
        <div class="container">
            <div class="row">	
            	<div class="agenda-header block__headline" data-aos="fade-down" data-aos-duration="1000">	
            		<h2>Event Agenda</h2>	
            	</div>		
            </div>	 
            <div class="row linerow justify-content-center" data-aos="fade-up" data-aos-duration="1000">
      			<div class="col-6 col-lg-4 linecol">
       				<div class="line"></div>
      			</div>
    		</div>
    		<div class="agenda__block" data-aos="fade-left" data-aos-duration="1000">
                <div class="info">
                    <h3 class="name">Registeration</h3>
                    <h3 class="time">10:00AM to 10:30AM</h3>
                </div>                
            </div>
        </div>
    </section>

    <!-- End of Agenda --> --}}