@php
    $socialIcons = ['fa-facebook', 'fa-instagram', 'fa-twitter', 'fa-youtube','','', 'fa-spotify', 'fa-whatsapp', 'fa-weibo', 'fa-tiktok'];
    $forClients=[
        'Purchase Art',
        'Rent Art',
        'Commision Art',
        'Consultancy Services',
        'E-Gift Cards',
        'Live Performance',
        'Try Your Art Tool',
        'Join Newsletter',
    ];
    $aboutUs=[
        'Our Story',
        'Our mission',
        'Artists',
        'Blog',
        'careers',
        'Press|Testimonial',
        'Magazine',
    ];

    $forArtists=[
        'Join Our Family',
        'Seminars',
        'Consultancy',
        'vanish',
        'Seminars II',
        'Consultancy II',
        'V4U Exhibition',
    ];

    $shops = [
        'Paintings',
        'Drawings',
        'Photographs',
        'Mixed Media',
        'Sustainable Art',
        'Help Ukrainian Artists',
        'Digital Art',
        'Summer Curation',
    ];

    $helpAndInformations=[
        'Contact Us',
        'Terms and Conditions & Privacy',
        'Cookies Policy',
        'Return Policy',
        'FAQs',
        'For Business',
        'For Designers',
    ];

@endphp

<div class="mt-auto container-fluid px-100 position-relative" style="padding-top:120px;padding-bottom: 20px" id="footer">
    <div style="position: absolute;top: 0;left: 0;right: 0;bottom: 0;z-index: -1;">
        <svg width="100%" height="100%" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" overflow="auto" shape-rendering="auto" fill="#ffffff">
            <defs>
             <path id="wavepath" d="M 0 2000 0 500 Q 148.5 315 297 500 t 297 0 297 0 297 0 297 0 297 0  v1000 z" />
             <path id="motionpath" d="M -594 0 0 0" /> 
            </defs>
            <g >
             <use xlink:href="#wavepath" y="-316" fill="#491f01">
             <animateMotion
              dur="5s"
              repeatCount="indefinite">
              <mpath xlink:href="#motionpath" />
             </animateMotion>
             </use>
            </g>
          </svg>
    </div>

    <div class="row pt-3 px-5 justify-content-between">
        <div class="col-lg-2">
            <h5 class="fw-bolder">Follow Us</h5>
            <div class="row pt-2 mb-3">
                @foreach ($socialIcons as $icon)
                    <div class="col-2">
                        <i class="fa-brands cursor-pointer {{ $icon }} footer-social-icon"></i>
                    </div>
                @endforeach
            </div>
            <p>Join the "Beginner's Guide to Art Collecting" community of Facebook!</p>
        </div>
        <div class="col-lg-2">
            <h5 class="fw-bolder">For Clients</h5>
            <ul>
                @foreach ($forClients as $item)
                    <li><a href="#">{{$item}}</a></li>
                @endforeach 
            </ul>
        </div>
        <div class="col-lg-2">
            <h5 class="fw-bolder">For Artisst</h5>
            <ul>
                @foreach ($forArtists as $item)
                    <li><a href="#">{{$item}}</a></li>
                @endforeach 
            </ul>
        </div>
        <div class="col-lg-2">
            <h5  class="fw-bolder">About Us</h5>
            <ul>
                @foreach ($aboutUs as $item)
                    <li><a href="#">{{$item}}</a></li>
                @endforeach 
            </ul>
        </div>
        <div class="col-lg-2">
            <h5 class="fw-bolder">Shop</h5>
            <ul>
                @foreach ($shops as $item)
                    <li><a href="#">{{$item}}</a></li>
                @endforeach 
            </ul>
        </div>
        <div class="col-lg-2">
            <h5 class="fw-bolder">Help and Information</h5>
            <ul>
                @foreach ($helpAndInformations as $help)
                    <li><a href="#">{{$help}}</a></li>
                @endforeach 
            </ul>

        </div>
    </div>
    <div class="row justify-content-center">
            <center class="fw-bolder">CONTACT</center>
            <center>
                <p class="p-0">
                    Art Gallery |
                    +950795889472 |
                    art(@)ArtGallery.eu
                </p>
            </center>
    </div>
    <div class="row">
        <p class="text-muted m-0 text-center">
            <small>
                Copyright © 2023 Art Gallery
            </small>
        </p>
    </div>
</div>
