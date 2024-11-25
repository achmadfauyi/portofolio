@extends('layouts.appstack')

@section('content')
    <section class="py-6 bg-white">
        <div class="container position-relative z-3">
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3>About</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-xl-3">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Profile Details</h5>
                        </div>
                        <div class="card-body d-flex flex-column align-items-center text-center">
                            <img src="{{ asset('appstack/img') }}/avatars/profil.jpg" alt="{{ $profil['nama'] }}"
                                 class="img-fluid rounded-circle mb-2" width="128" height="128"/>
                            <h5 class="card-title mb-0">{{ $profil['nama'] }}</h5>
                            <div class="text-muted mb-2">{{ $profil['sebagai'] }}</div>
                        </div>
                        <div class="mb-3 text-center">
                            <a href="https://github.com/achmadfauyi" target="_blank" class="btn btn-sm btn-github"><i class="align-middle fab fa-github"></i> Github</a>
                            <a href="https://www.linkedin.com/in/achmad-fauzi-a60719165/" target="_blank" class="btn btn-sm btn-primary"><i class="align-middle fab fa-linkedin-in"></i> Linkedin</a>
                        </div>
                        <hr class="my-0"/>
                        <div class="card-body">
                            <h5 class="h6 card-title">Skills</h5>
                            @foreach($keahlian as $kh)
                                <a href="#" class="badge bg-primary me-1 my-1">{{ $kh}}</a>
                            @endforeach
                        </div>
                        <hr class="my-0"/>
                        <div class="card-body">
                            <h5 class="h6 card-title">About</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-1"><span data-feather="home" class="feather-sm me-1"></span> Lives in <a
                                        href="#">{{ $profil['domisili'] }}</a></li>
                                <li class="mb-1"><span data-feather="briefcase" class="feather-sm me-1"></span> Works at
                                    <a href="#">{{ $kerja['nama'] }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 col-xl-9">
                    <div class="card flex-fill w-100">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Experience</h5>
                        </div>
                        <div class="card-body">
                            <ul class="timeline">
                                <li class="timeline-item" style="padding-left: 7%">
                                    <strong>{{ $kerja['nama'] }}</strong>
                                    <span class="float-end text-muted text-sm">{{ $kerja['waktu'] }}</span>
                                    <p>{{ $kerja['sebagai'] }}</p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="card flex-fill w-100">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Education</h5>
                        </div>
                        <div class="card-body">
                            <ul class="timeline">
                                <li class="timeline-item" style="padding-left: 7%">
                                    <strong>{{ $pendidikan['nama'] }}</strong>
                                    <span class="float-end text-muted text-sm">{{ $pendidikan['waktu'] }}</span>
                                    <p>{{ $pendidikan['strata'] }} - {{ $pendidikan['prodi'] }} <strong>({{ $pendidikan['ipk'] }}/4.00)</strong></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
