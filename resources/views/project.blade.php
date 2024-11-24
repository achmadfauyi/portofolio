@extends('layouts.appstack')

@section('content')
    <section class="py-6 bg-white">
        <div class="container position-relative z-3">
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3>Project</h3>
                </div>
            </div>
            <div class="row">
                @foreach($projek as $pj)
                    <div class="col-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">{{ $pj['nama'] }}</h5>
                                <p>{{ $pj['detail'] }}</p>
                                @foreach($pj['teknologi'] as $pjt)
                                    <a href="#" class="badge bg-primary me-1 my-1">{{ $pjt }}</a>
                                @endforeach
                            </div>
                            <div class="card-body pt-0">
                                <div id="carouselExampleIndicators{{ $loop->index }}" class="carousel slide" data-bs-ride="carousel">
                                    <ol class="carousel-indicators">
                                        @foreach($pj['gambar'] as $key => $pjg)
                                            <li data-bs-target="#carouselExampleIndicators{{ $loop->parent->index }}"
                                                data-bs-slide-to="{{ $key }}" class="{{ $key === 0 ? 'active' : '' }}"></li>
                                        @endforeach
                                    </ol>
                                    <div class="carousel-inner">
                                        @foreach($pj['gambar'] as $key => $pjg)
                                            <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                                                <img class="d-block w-100" src="{{ $pjg }}" alt="Slide {{ $key }}">
                                            </div>
                                        @endforeach
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators{{ $loop->index }}" role="button" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators{{ $loop->index }}" role="button" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </a>
                                </div>

                            </div>
                            <div class="card-footer">
                                <div class="mt-auto">
                                    <a href="{{ $pj['situs'] }}" class="btn btn-sm btn-outline-secondary float-end"
                                       target="_blank">Live</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
