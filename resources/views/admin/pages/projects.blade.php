@extends('admin.layout.layout')

@section('title')
    Dashboard - HomePage
@endsection

@section('content')
    @include('inc.massage')
    <section class="section novi-background section-md pt-1 text-center">
        <div class="container">
            <h3 class="text-uppercase font-weight-bold wow-outer">
                <span class="wow slideInDown">Our Projects</span>
            </h3>
            <div class="text-right">
                <a type="button" href="{{ route('admin.addProject') }}" class="btn btn-primary">
                    <span class="tf-icons bx bx-plus"></span>&nbsp; Add Project
                </a>
            </div>
            <div class="row row-lg-50 row-35 offset-top-2">
                @foreach ($projects as $project)
                    <div class="col-md-6 wow-outer">
                        <!-- Post Modern-->
                        <article class="post-modern wow slideInLeft">
                            @if (count($project->imgs) == 1)
                                <div class="post-modern-media">
                                    <img src='{{ URL::asset('web/img') }}{{ '/' . $project->imgs[0] }}' alt=""
                                        width="571" height="353" />
                                </div>
                            @else
                                <div id="carouselExample-cf{{ $project->id }}" class="carousel carousel-dark slide carousel-fade"
                                    data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($project->imgs as $img)
                                            @if ($i == 1)
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100" style="height: 353px; width: 571px;"
                                                        src="{{ URL::asset($img) }}"
                                                        alt="Slide {{ $i }}">
                                                </div>
                                            @else
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" style="height: 353px; width: 571px;"
                                                        src='{{ URL::asset($img) }}'
                                                        alt="Slide {{ $i }}">
                                                </div>
                                            @endif
                                            @php
                                                $i++;
                                            @endphp
                                        @endforeach
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExample-cf{{ $project->id }}" role="button"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExample-cf{{ $project->id }}" role="button"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </a>
                                </div>
                            @endif
                            <h4 class="post-modern-title">
                                <a class="post-modern-title" href="#">{{ $project->name }}
                                </a>
                            </h4>
                            <p>{{ $project->desc }}</p>
                        </article>
                        <a type="button" href="{{ route('admin.editProject',  $project->id ) }}" style="text-transform: capitalize"
                            class="px-4 btn btn-primary  mt-3">
                            <i class="bx bx-edit-alt"></i> Edit
                        </a>

                        <a type="button" href="{{ route('admin.deleteProject', $project->id ) }}" style="text-transform: capitalize"
                            class="px-4 btn btn-danger  mt-3">
                            <i class="bx bx-trash"></i> delete
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection




@section('style')
    @include('web.layout.style')
@endsection

@section('script')
    @include('web.layout.script')
@endsection
