@extends('layouts.panalnav')

<div class="container-fluid" style="height: 100%;background-color:steelblue;">
    <div class="row justify-content-center" >
        <div class="my-5 col-10 text-center">
            <table class="my-5 table table-dark">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NAME</th>
                        <th scope="col">COVER</th>
                        <th scope="col">PLACE</th>
                        <th scope="col">TIME</th>
                        <th scope="col">STATE</th>
                        <th scope="col">Edit</th>
                        <th scope="col">DELETE</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($events as $event)
                    <tr>
                        <th scope="row">{{$event->id}}</th>
                        <td>{{$event->name}}</td>
                        <td>{{$event->cover}}</td>
                        <td>{{$event->place}}</td>
                        <td>{{$event->time}}</td>
                        <td>{{$event->state}}</td>
                        <td>
                            <form method="get" action="{{'/events/'. $event->id. '/edit' }}">
                                @csrf
                                <button type="submit" class="btn btn-danger">Edit</button>
                            </form>
                        </td>
                        <td>
                            <form method="POST" action="{{'/events/'. $event->id}}">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    <div class="row justify-content-center" style="background-color:steelblue">
        <div class="col-12 my-5 text-center">
            <a href="/events/addevent.blad.php"><button class="btn btn-dark">Create event</button></a>
        </div>
    </div>
</div>

