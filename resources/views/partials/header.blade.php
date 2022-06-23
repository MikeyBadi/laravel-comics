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
 ]
?>

<header>

    <nav class="container">

      <div class="logo">
        <a href=""><img src="" alt="DC LOGO"></a>
      </div>

      <div class="menu">
        <ul>
        <?php foreach ($indexs as $index):?>
          <li>
            {{-- <a href="{{ route($index)}}"></a> --}}
            <a href="/comics"><?php echo strtoupper($index)?></a>
          </li>
        <?php endforeach?>
        </ul>
      </div>

    </nav>
  </header>
