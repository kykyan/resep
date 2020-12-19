@extends('master')

@section('content')

<!-- Header -->
<header>
    <div class="container mt-5 mb-5">
        <h1 class="text-capitalize">ResepKu</h1>
    </div>
</header>
<!-- Akhir Header -->
<!-- card Resep -->
<section class="card-resep mb-4">
    <div class="container">
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