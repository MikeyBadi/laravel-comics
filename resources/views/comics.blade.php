@extends('layouts.main')

@section('content')
@include('partials.jumbo')
    <div class="container">
        <div class="current">
        <div>
            <h2>CURRENT SERIES</h2>
        </div>
        </div>

        <div>
            <div class="com-cont">
                <div class="com-div">
                <div class="comics">
                    <img src="" alt="">
                </div>
                    <p></p>
                </div>
            </div>

        <div class="button-div">
            <button>LOAD MORE</button>
        </div>

        </div>

    </div>
    {{-- @dump($comics) --}}
@endsection
