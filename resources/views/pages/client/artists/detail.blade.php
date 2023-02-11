<x-layouts.app>
    <x-slot name="header">
        <title>Detail</title>
    </x-slot>

    <div class="container">
        <div>
            <div class="w-100 ratio rounded" style="height : 300px;z-index: -1;">
                <img class="object-fit-cover rounded" src="https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp" alt="">
            </div>
            <div class="w-100 d-flex flex-column justify-content-center align-items-center" style="margin-top : -8%;z-index: 20;">
                <div class="rounded-circle overflow-hidden hover-zoom" style="width : 200px; height : 200px;"> 
                    <img class="object-fit-cover" width="100%" height="100%" src="https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp" alt="">
                </div>
                <h5 class="mt-2 fs-4 text-muted">Name</h5>
                <div>
                    <span class="badge rounded-pill badge-primary">Region</span>
                    <span class="badge rounded-pill badge-primary">Primary</span>
                </div>
            </div>
        </div>
    </div>

</x-layouts.app>