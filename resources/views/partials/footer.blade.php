<?php
$links=[
    [
      'linkTitle'=> 'DC COMICS',
      'link'=>[
        [
          'txt'=> 'Characters',
          'href'=> '#'
        ],
        [
          'txt'=> 'Comics',
          'href'=> '#'
        ],
        [
          'txt'=> 'Movies',
          'href'=> '#'
        ],
        [
          'txt'=> 'TV',
          'href'=> '#'
        ],
        [
          'txt'=> 'Games',
          'href'=> '#'
        ],
        [
          'txt'=> 'Videos',
          'href'=> '#'
        ],
        [
          'txt'=> 'Characters',
          'href'=> '#'
        ],
      ]
    ],
    [
      'linkTitle'=> 'SHOP',
      'link'=>[
        [
          'txt'=> 'Shop DC',
          'href'=> '#'
        ],
        [
          'txt'=> 'Shop DC Collectables',
          'href'=> '#'
        ],

      ]
    ],
    [
      'linkTitle'=> 'DC',
      'link'=>[
        [
          'txt'=> 'Terns of Use',
          'href'=> '#'
        ],
        [
          'txt'=> 'Privacy policy (NEW)',
          'href'=> '#'
        ],
        [
          'txt'=> 'Ad Choices',
          'href'=> '#'
        ],
        [
          'txt'=> 'Advertising',
          'href'=> '#'
        ],
        [
          'txt'=> 'Jobs',
          'href'=> '#'
        ],
        [
          'txt'=> 'Subscriptions',
          'href'=> '#'
        ],
        [
          'txt'=> 'Talent Workshops',
          'href'=> '#'
        ],
        [
          'txt'=> 'CPSC Certificates',
          'href'=> '#'
        ],
        [
          'txt'=> 'Ratings',
          'href'=> '#'
        ],
        [
          'txt'=> 'Shop Help',
          'href'=> '#'
        ],
        [
          'txt'=> 'Contact Us',
          'href'=> '#'
        ],
      ]
    ],
    [
      'linkTitle'=> 'SITES',
      'link'=>[
        [
          'txt'=> 'DC',
          'href'=> '#'
        ],
        [
          'txt'=> 'MAD Magazines',
          'href'=> '#'
        ],
        [
          'txt'=> 'DC Kids',
          'href'=> '#'
        ],
        [
          'txt'=> 'DC Universe',
          'href'=> '#'
        ],
        [
          'txt'=> 'DC Power Visa',
          'href'=> '#'
        ],
      ]
    ],
]
?>

<footer>
    <div class="footerLinks">
        <div class="container">
            <div class="links">
              <ul>
                @foreach ($links as $link)
                <li>
                  <h3>{{$link['linkTitle']}}</h3>
                </li>
                @foreach ($link['link'] as $el)
                    <li>
                        <a href="{{$el['href']}}">{{$el['txt']}}</a>
                    </li>
                @endforeach
                @endforeach

              </ul>
            </div>
        </div>
    </div>
    <img src="../img/dc-logo-bg.png" alt="">
</footer>

{{-- @dump($link['link']) --}}
