@extends('layouts.master')

@section('content')
  {{-- Carousel --}}
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div style="width: 100%; height:100vh;">
          <img src="{{ asset('image/default-img.png') }}" class="w-100 h-auto" alt="Gambar 1">
        </div>
      </div>
      <div class="carousel-item">
        <div style="width: 100%; height:100vh;">
          <img src="{{ asset('image/default-img.png') }}" class="w-100 h-auto" alt="Gambar 2">
        </div>
      </div>
      <div class="carousel-item">
        <div style="width: 100%; height:100vh;">
          <img src="{{ asset('image/default-img.png') }}" class="w-100 h-auto" alt="Gambar 3">
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

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">{{ __('Sejarah') }}</div>

          <div class="card-body">
            <div class="row">

              <div class="col-md-4">
                <img src="{{ asset('image/default-img.png') }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Sejarah</h5>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore expedita odit
                    dolorum reprehenderit, delectus perspiciatis ipsa sapiente recusandae laboriosam repellat, dicta
                    incidunt natus, facilis suscipit dolore consectetur exercitationem at fugit? Incidunt, voluptatem nemo
                    ad quas nesciunt quis similique culpa iusto dicta doloribus temporibus totam rerum, saepe quam
                    accusantium, minima itaque repellat ipsum magni. Doloremque, perferendis minima? In eaque quisquam
                    maxime vel itaque, doloremque culpa assumenda, est impedit molestias expedita non natus nemo magni
                    ratione. Deserunt quod aperiam nulla assumenda libero exercitationem iste fugit molestiae quis,
                    laudantium iusto architecto eligendi unde ex sit possimus rem at nostrum voluptates laborum vero
                    obcaecati!</p>
                  <p class="card-text">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam quasi et vero doloribus quis eligendi,
                    nemo ad blanditiis itaque architecto. Repellat rerum quibusdam labore asperiores ullam esse commodi.
                    Molestias dolorem beatae expedita, laboriosam eveniet voluptas facilis adipisci vitae deserunt.
                    Mollitia
                    obcaecati fugiat reiciendis cupiditate velit aspernatur similique quia nihil at.
                  </p>
                  <p class="card-text"><small class="text-muted">Banyuwangi 11-02-2022</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
