@extends('layouts.panalnav')
<div class="container-fluid" style="height: 100%;background-color:steelblue;">
    <div class="row justify-content-center">
        <div class="mt-5 col-6 r">
            <form method="POST" enctype="multipart/form-data" action="{{'/events/index.blade.php'}}" style="padding:30px;">
                @csrf
                <div class="form-group">
                    <label for="name">NAME :</label>
                    <input type="text" class="form-control" id="title" name="name"  maxlength="20">
                </div>
                <div class="form-group">
                    <label for="cover">COVER PHOTO :</label>
                    <input type="file" maxlength="25" class="form-control-file" id="cover" name="cover">                   
                </div>
                <div class="form-group">
                    <label for="place">PLACE :</label>
                    <input type="text" maxlength="25" class="form-control" id="place" name="place" >
                </div>
                <div class="form-group">
                    <label for="time">TIME :</label>
                    <input type="date" maxlength="25" class="form-control" id="time" name="time" >
                </div>
                <div class="form-group">
                    <label for="state">STATE :</label>
                    <select class="form-control" id="state" name="state" >
                        <option selected>Now</option>
                        <option selected>Soon</option>
                        <option selected>Closed</option>
                    </select>
                </div>
                @include('layouts.message')
                <button type="submit" class="mt-3 btn btn-dark">Submit</button>
            </form>
        </div>
    </div>
</div>