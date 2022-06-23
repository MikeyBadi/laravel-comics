<?php
 $merchs =[
    [
      'img'=> '../img/buy-comics-digital-comics.png',
      'name'=>'DIGITAL COMICS',
      'href'=>'#',
      'class'=>''
    ],
    [
      'img'=> '../img/buy-comics-merchandise.png',
      'name'=>'DC MERCHANDISE',
      'href'=>'#',
      'class'=>''
    ],
    [
      'img'=> '../img/buy-comics-subscriptions.png',
      'name'=>'SUBSCRIPTION',
      'href'=>'#',
      'class'=>''
    ],
    [
      'img'=> '../img/buy-comics-shop-locator.png',
      'name'=>'COMIC SHOP LOCATOR',
      'href'=>'#',
      'class'=>''
    ],
    [
      'img'=> '../img/buy-dc-power-visa.svg',
      'name'=>'DC POWER VISA',
      'href'=>'#',
      'class'=>'short'
    ]
 ]
?>


<div class="shopping">
    <div class="container">

      <div class="merch">
        <ul>
            <?php foreach ($merchs as $merch):?>
            <li>
                <img src="{{$merch['img']}}" alt="{{$merch['name']}}" class="{{$merch['class']}}">
                <a href="shop.href">{{$merch['name']}}</a>
            </li>
            <?php endforeach?>
        </ul>
      </div>

    </div>
  </div>
