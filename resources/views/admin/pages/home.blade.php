@extends('admin.layout.layout')

@section('title')
    Dashboard - HomePage
@endsection

@section('content')
    @include('inc.massage')
    <div class="divider mt-0">
        <div class="divider-text"> Section 1 </div>
    </div>
    <section class="section swiper-container swiper-slider swiper-slider-minimal" data-loop="true" data-slide-effect="fade"
        data-autoplay="4759" data-simulate-touch="true">
        <div class="swiper-wrapper">
            @php
                $i = 1;
            @endphp
            @foreach ($sliders as $slider)
                @if ($i == 1)
                    <div class="swiper-slide swiper-slide_video" data-slide-bg="{{ URL::asset($slider->value->img) }}">
                        <div class="container">
                            <div class="jumbotron-classic-content">
                                <div class="wow-outer">
                                    <div
                                        class="title-docor-text font-weight-bold title-decorated text-uppercase wow slideInLeft text-white">
                                        {{ $slider->value->title1 }}</div>
                                </div>
                                <h1 class="text-uppercase text-white font-weight-bold wow-outer"><span
                                        class="wow slideInDown" data-wow-delay=".2s">{{ $slider->value->title2 }}</span>
                                </h1>
                                <p class="text-white wow-outer"><span class="wow slideInDown"
                                        data-wow-delay=".35s">{{ $slider->value->text }}</span></p>

                                <div class="wow-outer button-outer"><a
                                        class="button button-md button-primary button-winona wow slideInDown"
                                        href="{{ route('admin.pages.home.editSlider', $slider->id) }}" data-wow-delay=".4s">
                                        <i class='bx bx-edit-alt'></i>
                                        Edit</a>
                                </div>

                            </div>
                        </div>
                    </div>
                @else
                    <div class="swiper-slide" data-slide-bg="{{ URL::asset($slider->value->img) }}">
                        <div class="container">
                            <div class="jumbotron-classic-content">
                                <div class="wow-outer">
                                    <div
                                        class="title-docor-text font-weight-bold title-decorated text-uppercase wow slideInLeft text-white">
                                        {{ $slider->value->title1 }}</div>
                                </div>
                                <h1 class="text-uppercase text-white font-weight-bold wow-outer"><span
                                        class="wow slideInDown" data-wow-delay=".2s">{{ $slider->value->title2 }}</span>
                                </h1>
                                <p class="text-white wow-outer"><span class="wow slideInDown"
                                        data-wow-delay=".35s">{{ $slider->value->text }}</span></p>
                                <div class="wow-outer button-outer"><a
                                        class="button button-md button-primary button-winona wow slideInDown"
                                        href="{{ route('admin.pages.home.editSlider', $slider->id) }}"
                                        data-wow-delay=".4s"><i class='bx bx-edit-alt'></i> Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @php
                    $i++;
                @endphp
            @endforeach
        </div>
        <div class="swiper-pagination-outer container">
            <div class="swiper-pagination swiper-pagination-modern swiper-pagination-marked" data-index-bullet="true">
            </div>
        </div>
    </section>

    <div class="divider">
        <div class="divider-text"> Section 2 </div>
    </div>
    <section class="section novi-background section-lg bg-gray-100">
        <div class="container">
            <div class="row row-30">
                @foreach ($services as $serves)  
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Box Minimal-->
                    <article class="box-minimal">
                        <div class="box-chloe__icon novi-icon {{ $serves->value->icon }} wow fadeIn"></div>
                        <div class="box-minimal-main wow-outer">
                            <h4 class="box-minimal-title wow slideInDown">{{ $serves->value->title }}</h4>
                            <p class="wow fadeInUpSmall">{{ $serves->value->text }}</p>
                        </div>
                    </article>
                    <div class="wow-outer button-outer text-center"><a
                            class="button button-md button-primary button-winona wow slideInDown"
                            href="{{ route('admin.pages.home.editServes', $serves->id) }}" data-wow-delay=".4s"><i
                                class='bx bx-edit-alt'></i> Edit</a>
                    </div>
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
