@extends('layouts.app')
<link rel="stylesheet" href="/css/all-events.css">
<script src="/js/allevent.js"></script>
@section('content')
<script>
    document.getElementById('team').classList.add('active');
    document.getElementById("home").classList.remove("active")

</script>
<!--header-->
<section class="row">
    <div class="col-12 head-img">
        <center><img src="img/Mug_Typography.png" alt="" srcset="" width="50%"></center>
    </div>
</section>
<!--up button-->
<div class="row justify-content-end fixed-bottom">
    <div class=" col-2 col-md-1 offset-md-11">
        <a href="#nav"><button class="btn up-btn"><i class="fas fa-arrow-up"></i></button></a>
    </div>
</div>
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
    @foreach($members as $member)
        <div class="col-lg-3 col-md-5 offset-sm-1 offset-md-0 ml-lg-1">
            <div class="card" id="1">
                <img src="{{$member->image}}" class="card-img-top" alt="...">
  
                <button style="width: 50px;border-radius: 100%;margin-top: -18px;margin-left: 230px;background-color:#F1C40F;" 
                id="btn2" class="btn" onclick="play('#1')">
                    <i class="fas fa-arrow-down" style="color: black;"></i>
                </button>
                <h5 class="ml-5">{{$member->name}}</h5>
            </div>
        </div>
    @endforeach
    </div>
</div>


@endsection
