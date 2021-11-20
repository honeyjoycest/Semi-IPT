@extends('layouts.app')

@section('content')

<div class="container d-flex align-items-center justify-content-center mt-1">
    <img src="{{ asset('res/image.png') }}" alt="">
</div>

<div class="container-fluid">
    <div class="d-flex flex-wrap justify-content-center">
        <div class="d-flex flex-row">
            <img src="https://source.unsplash.com/1000x500/?lamborghini,car" class="img-fluid" alt="connect to internet to view the image">
        </div>

        <div class="d-flex flex-row">
            <img src="https://source.unsplash.com/1000x500/?ferrari,car" class="img-fluid" alt="connect to internet to view the image">
        </div>
        <div class="d-flex flex-row">
            <img src="https://source.unsplash.com/1000x500/?wrangler,car" class="img-fluid" alt="connect to internet to view the image">
        </div>


    </div>
</div>


@endsection
