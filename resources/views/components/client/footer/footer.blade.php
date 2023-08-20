@php
    $socialIcons = ['fa-facebook', 'fa-instagram', 'fa-twitter', 'fa-youtube', 'fa-spotify', 'fa-whatsapp', 'fa-weibo', 'fa-tiktok'];
@endphp
<div class="mt-auto container-fluid px-100" style="padding-top:120px;padding-bottom: 40px" id="footer">
    <div class="row py-3 px-5 justify-content-between">
        <div class="col-lg-2">
            <h5 class="fw-bolder">Follow Us</h5>
            <div class="row pt-2">
                @foreach ($socialIcons as $icon)
                    <div class="col-3">
                        <i class="fa-brands {{ $icon }} fa-2x"></i>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-lg-2">
            <h5>Contact</h5>
            <div>
                <div style="width: 50px;height : 50px" class="rounded-circle">
                    <i class="fa-brands fa-facebook"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <h5>Contact</h5>
            <div>
                <div style="width: 50px;height : 50px" class="rounded-circle">
                    <i class="fa-brands fa-facebook"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <h5>Contact</h5>
            <div>
                <div style="width: 50px;height : 50px" class="rounded-circle">
                    <i class="fa-brands fa-facebook"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="row p-2">
        <p class="text-muted m-0 text-center">
            <small>
                Copyright © 2023 Khant Art Gallery
            </small>
        </p>
    </div>
</div>
