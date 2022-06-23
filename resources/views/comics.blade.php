@extends('layouts.main')

@section('content')
@include('partials.jumbo')

<main>
    <div class="container">
        <div class="current">
        <div>
            <h2>CURRENT SERIES</h2>
        </div>
        </div>

        <div>
            <div class="com-cont">
                @foreach ( $comics as $comic)
                    <div class="com-div">
                        <div class="comics">
                            <img src="{{$comic->image}}" alt="{{$comic->title}}">
                        </div>
                        <p>{{$comic->title}}</p>
                    </div>
                @endforeach
            </div>

        <div class="button-div">
            <button>LOAD MORE</button>
        </div>
    </div>

</div>
@include('partials.shop')
</main>
    {{-- @dump($comics) --}}
@endsection
