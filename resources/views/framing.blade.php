<x-layout>
    <x-slot name="title">Framing</x-slot>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Some header here - column 1</h1>
                <p>A paragraph or more</p>
                <p>Or even an image</p>
            </div>
            <div class="col">
                <h1>Some header here - column 2</h1>
                <p>A paragraph or more</p>
                <p>Or even an image</p>
            </div>
        </div>


        <div class="row">
            <div class="col">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="/storage/images/20220506_164135.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="/storage/images/bobh30_bob_studio.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="/storage/images/DSCF0298.JPG" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Christmas work party</h5>
                            <p>Richard, me and boss Andy</p>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>


            </div> <!-- end of column -->
        </div> <!-- end of row for carousel -->



    </div>
</x-layout>