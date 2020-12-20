@extends('master')

@section('content')

<!-- Header -->
<header>
    <div class="container mt-5 mb-5">
        <h1 class="text-capitalize">Mari tulis resep terlezat anda</h1>
            @if(Route::has('login'))
                @auth
                    <a href="{{ route('tulisresep') }}" class="btn btn-custom-primary my-2 my-sm-0">
                        <i class="fas fa-plus pr-2" aria-hidden="true"></i>Tulis Resep
                    </a>
                    @else
                    <a href="{{ route('login') }}" class="btn btn-custom-primary my-2 my-sm-0">
                        <i class="fas fa-plus pr-2" aria-hidden="true"></i>Tulis Resep
                    </a>
                @endauth
            @endif
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade mt-5" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner ">
                <div class="carousel-item active">
                <img src="img/makanan/1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="img/makanan/2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="img/makanan/1.jpg" class="d-block w-100" alt="...">
                </div>
                
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
    </div>
</header>
<!-- Akhir Header -->
<!-- card Resep -->
<section class="card-resep mb-4">
    <div class="container">
        <div class="row title">
            <div class="col-md-6 col-lg-12">
                <h1>cari resep yang akan anda buat</h1>
                <p>Masak makan dengan resep yang pas akan membuat makanan anda terasa nikmat dan puas</p>
            </div>
        </div>
        <div class="row">
            @foreach($recipes as $recipe)
                <div class="col-md-6 col-12 col-lg-4">
                    <div class="card">
                        <div class="carousel slide carousel-fade" data-ride="carousel" id="carouselItem1">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/makanan/1.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/makanan/2.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselItem1" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselItem1" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $recipe->recipe_name }}</h5>
                        <p class="card-text">{{ $recipe->description }}</p>
                            <hr>
                            <div class="text-right">
                            <a href="{{ route('recipe.show', $recipe->id) }}" class="btn btn-detail">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- akhir card resep -->

@endsection