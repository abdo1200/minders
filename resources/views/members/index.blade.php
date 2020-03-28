@extends('layouts.panalnav')

<div class="container-fluid" style="height: 100%;background-color:steelblue;">
    <div class="row justify-content-center">
        <div class="my-5 col-11 text-center">
            <table class="my-5 table table-dark">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NAME</th>
                        <th scope="col">IMAGE</th>
                        <th scope="col">PHONE NUMBER</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">POSITION</th>
                        <th scope="col">Edit</th>
                        <th scope="col">DELETE</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($members as $member)
                    <tr>
                        <th scope="row">{{$member->id}}</th>
                        <td>{{$member->name}}</td>
                        <td>{{$member->image}}</td>
                        <td>{{$member->phone_number}}</td>
                        <td>{{$member->gmail}}</td>
                        <td>{{$member->postion}}</td>
                        <td>
                            <form method="get" action="{{'/members/'. $member->id. '/edit' }}">
                                @csrf
                                <button type="submit" class="btn btn-danger">Edit</button>
                            </form>
                        </td>
                        <td>
                            <form method="POST" action="{{'/members/'. $member->id}}">
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
            <a href="/members/create.blade.php"><button class="btn btn-dark">Create Member</button></a>
        </div>
    </div>
</div>
