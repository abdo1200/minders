@extends('layouts.panalnav')
    <div class="container-fluid admin-header mt-" style="background-color:black;height:100%">
        <div class="row justify-content-center mt-5">
            <div class="col-3 head-col text-center mt-5">
                <a href="members/index.blade.php"><button class="btn mt-5">Members</button></a>
            </div>
            <div class="col-3 head-col text-center mt-5">
                <a href="events/index.blade.php"><button class="btn mt-5">Events</button></a>
            </div>
        </div>
        <div class="row">
            <div class="col-3 head-col text-center mt-5">
                <a href="/minders"><button class="btn mt-5">Minders Page</button></a>
            </div>
            <div class="col-3 head-col text-center mt-5">
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    <button class="btn mt-5">{{ __('Logout') }}</button>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div> 

    