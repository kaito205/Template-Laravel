@extends('layouts.layout')
@section('main')

{{--  Logout button  --}}
<div class="d-flex justify-content-center mt-5">
    <a href="{{ route('logout') }}" class="float-start btn btn-primary" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</div>
    <div class="container mx-auto w-75" style="margin-top: 100px">
        <img src="https://storage.googleapis.com/s.mysch.id/picture/96654442img-20200917-wa0037.jpg" alt=""
            srcset="" width="400px" class="mx-auto d-flex">
        <h3 class="text-center mt-5">LIBRARY MANAGEMENT SYSTEM</h3>
    </div>

@endsection
