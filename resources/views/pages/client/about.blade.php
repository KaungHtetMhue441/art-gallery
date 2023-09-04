<x-layouts.app>
    <x-slot name="header">
        
    </x-slot>
    <div class="container-fluid px-100 justify-between " style="height: 85vh;">
        <div class="row w-100 h-100 justify-content-center align-items-center">
            <div class="col-lg-6 p-3">
                <div id="carouselExampleAutoplaying" class="carousel slide w-100" data-bs-ride="carousel">
                    <div class="carousel-inner border shadow">
                          <div class="carousel-item active">
                            <img src="{{asset('assets/images/about.jpeg')}}" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="{{asset('assets/images/about3.jpeg')}}" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="{{asset('assets/images/about2.jpeg')}}" class="d-block w-100" alt="...">
                          </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
            <div class="col-lg-6 p-3 " style="text-align: justify!important;">
                <h1 class="mb-3 text-center text_primary pt-0" style="font-size: 4rem">
                    About US
                </h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat voluptates, temporibus aliquid exercitationem nihil itaque minima ut perspiciatis ullam dicta, voluptas inventore quam asperiores corporis est dolor vitae necessitatibus. Corrupti.
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad distinctio incidunt laborum. Quisquam corrupti quis ullam non fugiat sint eaque, quibusdam officia dolores voluptas fugit vero dignissimos tenetur! Architecto, deserunt!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis beatae voluptatum possimus, dicta quod ea amet natus, iste eius eum, officia quibusdam molestias porro expedita placeat recusandae animi obcaecati. Error?
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem excepturi tempore assumenda quasi, optio cupiditate beatae nisi perferendis soluta culpa sequi fugiat dolores dignissimos officiis, dolorem cumque! Recusandae, vero quibusdam?
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam libero, delectus consectetur debitis natus at commodi molestiae officia, a, non deserunt eveniet explicabo ratione. Est perspiciatis magnam minima voluptatem porro.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, natus? Nobis quam laboriosam numquam. Velit ut, quas quidem necessitatibus est blanditiis fuga? Quia harum beatae doloribus modi voluptas perferendis optio.
                </p>

            </div>
        </div>
    </div>


</x-layouts.app>