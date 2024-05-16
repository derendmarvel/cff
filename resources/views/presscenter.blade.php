@extends('layouts.template')

@section('title', 'Press Center')

@section('content')
    <div class = "row bg-5 padding text-white align-items-center align-middle">
        <h1 class = "fw-bold fs-0 text-shadow" data-aos = "fade-up" data-aos-duration = "1500"> PRESS RELEASES </h1>
        <form method="POST" action="/pressSearch" class = "w-75 justify-content-start border-bottom border-2 border-white" data-aos = "fade-up" data-aos-duration = "1500" data-aos-delay = "250">
            @method('post')
            @csrf
            <div class = "d-flex my-2 align-items-center">
                <div class = "me-auto">
                    <p class = "fw-bold pt-3"> YEAR </p>
                </div>
                <div class="form-group ms-auto">
                    <select class="form-select my-1 fw-bold rounded-0" name="year" required>
                        <option value = "ALL"> ALL </option>
                        <option value = "2022"> 2022 </option>
                        <option value = "2023"> 2023 </option>
                        <option value = "2024"> 2024 </option>
                    </select>
                </div>
                <div class="ms-1">
                    <button type="submit" style="background-color: transparent; border-color: transparent"> <img src = "/images/SearchIcon.png" class = "icon"> </button>
                </div>
            </div> 
        </form>
        <div class = "col-12">
            @foreach ($presses as $press)
            <div class = "row py-4 border-bottom border-2 border-white align-items-center align-middle" data-aos = "fade-up" data-aos-duration = "1500" data-aos-delay = "500"> 
                <div class = "col-12 col-md-2 justify-content-center">
                    @php
                    $date = $press->date;
                    $newDate = date("d/m/Y", strtotime($date));
                    @endphp
                    <p class = "fw-bold fs-5 text-center"> {{ $newDate }} </p>
                </div>
                <div class = "col-12 col-md-7">
                    <h1 class = "fw-bold fs-3"> {{ $press->title }}</h1>
                    <p class = "fw-medium" style = "text-align: justify;"> {{ $press->description }} </p>
                </div>
                <div class = "col-12 col-md-3">
                    <img src = "{{ $press->image }}" class = "w-100">
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection