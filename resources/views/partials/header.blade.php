<?php
 $indexs =[
    'characters'=>'characters',
    'comics'=>'comics',
    'movies'=>'movies',
    'tv'=>'tv',
    'games'=>'games',
    'collectibles'=>'collectibles',
    'videos'=>'videos',
    'fans'=>'fans',
    'news'=>'news',
    'shop'=>'shop'
];

 $i=0;
?>

<header>

    <nav class="container">

      <div class="logo">
        <a href="{{route('home')}}"><img src="{{asset('img/dc-logo.png')}}" alt="DC LOGO"></a>
      </div>

      <div class="menu">
        <ul>
        <?php foreach ($indexs as $index):?>
          <li>
            <a class="{{ Route::currentRouteName() === $index ? 'active' : ''}}" href="{{ route($index)}}">{{strtoupper($index)}}</a>
            {{-- <a href="{{ route($index)}}">{{strtoupper($index)}}</a> --}}
          </li>
        <?php endforeach?>
        </ul>
      </div>

    </nav>
  </header>
