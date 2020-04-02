@extends('layouts.panalnav')
<div class="container-fluid" style="height: 100%;background-color:steelblue;">
    <div class="row justify-content-center">
        <div class="mt-5 col-6 r">
            <form method="POST" action="{{'/events/'. $event->id }}" style="padding:30px;" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="name">NAME :</label>
                    <input type="text" class="form-control" id="title" name="name"  maxlength="20" value="{{$event->name}}">
                </div>
                <div class="form-group">
                    <label for="cover">COVER PHOTO :</label>
                <input type="text" value="{{ $event->cover}}" disabled>                
                </div>
                <div class="form-group">
                    <label for="place">PLACE :</label>
                    <input type="text" maxlength="25" class="form-control" id="place" name="place" value="{{$event->place}}">
                </div>
                <div class="form-group">
                    <label for="time">TIME :</label>
                    <input type="date" maxlength="25" class="form-control" id="time" name="time" value="{{$event->time}}">
                </div>
                <div class="form-group">
                    <label for="state">STATE :</label>
                    <select class="form-control" id="state" name="state">
                        <option selected>{{$event->state}}</option>
                        <option>Now</option>
                        <option>Soon</option>
                        <option>Closed</option>
                    </select>
                </div>
                @include('layouts.message')
                <button id="save" type="submit" class="mt-3 btn btn-dark">Submit</button>
            </form>
        </div>
    </div>
</div>
