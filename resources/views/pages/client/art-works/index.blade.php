<x-layouts.app>
    <x-slot name="header">
        <title>Blogs</title>
    </x-slot>

    <div class="container">
        <x-client.common.title.left-title title="Artworks" />

        <div class="row">
            <div class="col-lg-3">
                <h5>Filter</h5>
                <form action="">
                    <select id="typeEmail" class="form-control mb-3" name="">
                        <option value="" disabled selected>Size</option>
                    </select>
                    <select id="typeEmail" class="form-control mb-3" name="">
                        <option value="" disabled selected>Size</option>
                    </select>
                    <select id="typeEmail" class="form-control mb-3" name="">
                        <option value="" disabled selected>Size</option>
                    </select>
                    <select id="typeEmail" class="form-control mb-3" name="">
                        <option value="" disabled selected>Size</option>
                    </select>

                    <button class="btn btn-md btn-primary">Search</button>
                </form>
            </div>
            <div class="col-lg-9">
                <div class="row mb-5">

                    <div class="col-6 col-lg-4 mb-3">
                        <x-client.art-works.art-card />
                    </div>
                    <div class="col-6 col-lg-4 mb-3">
                        <x-client.art-works.art-card />
                    </div>
                    
                </div>
            </div>
        </div>
        
    </div>
</x-layouts.app>