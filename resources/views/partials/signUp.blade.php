<?php
 $socials =[
    [
        'img'=> '../img/footer-facebook.png',
        'alt'=> 'FACEBOOK'
    ],
    [
        'img'=> '../img/footer-twitter.png',
        'alt'=> 'TWITTER'
    ],
    [
        'img'=> '../img/footer-youtube.png',
        'alt'=> 'YOUTUBE'
    ],
    [
        'img'=> '../img/footer-pinterest.png',
        'alt'=> 'PINTEREST'
    ],
    [
        'img'=> '../img/footer-periscope.png',
        'alt'=> 'PERISCOPE'
    ],
 ]
?>

<div class="signUp">
    <div class="container-sig">
      <button> SIGN-UP NOW!</button>
      <div class="social">
        <h3>FOLLOW US</h3>
        @foreach ($socials as $social)
            <img src="{{$social['img']}}" alt="{{$social['alt']}}">
        @endforeach
      </div>
    </div>
</div>
