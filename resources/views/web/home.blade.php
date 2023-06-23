@extends('web.layout.layout')

@section('title')
    Home
@endsection

@section('content')
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
                                        class="button button-md button-primary button-winona wow slideInDown" href="#"
                                        data-wow-delay=".4s">View Properties</a>
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
                                        class="button button-md button-primary button-winona wow slideInDown" href="#"
                                        data-wow-delay=".4s">View Properties</a>
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

    <section class="section novi-background section-md text-center">
        <div class="container">
            <h3 class="text-uppercase font-weight-bold wow-outer"><span class="wow slideInDown">Popular
                    properties</span>
            </h3>
            <div class="row row-lg-50 row-35 offset-top-2">
                <div class="col-md-6 wow-outer">
                    <!-- Post Modern-->
                    <article class="post-modern wow slideInLeft"><a class="post-modern-media" href="#"><img
                                src="{{ URL::asset('web/img/grid-blog-1-571x353.jpg') }}" alt="" width="571"
                                height="353" /></a>
                        <h4 class="post-modern-title"><a class="post-modern-title" href="#">5619 Walnut Hill
                                Ln,
                                Dallas, TX 75229</a></h4>
                        <ul class="post-modern-meta">
                            <li><a class="button-winona" href="#">$1500/mon</a></li>
                            <li>30 Sq. Ft.</li>
                            <li>3 Bedrooms</li>
                        </ul>
                        <p>A comfortable residential property located in a quiet and cozy area.</p>
                    </article>
                </div>
                <div class="col-md-6 wow-outer">
                    <!-- Post Modern-->
                    <article class="post-modern wow slideInLeft"><a class="post-modern-media" href="#"><img
                                src="{{ URL::asset('web/img/grid-blog-2-571x353.jpg') }}" alt="" width="571"
                                height="353" /></a>
                        <h4 class="post-modern-title"><a class="post-modern-title" href="#">1808 Bolingbroke
                                Pl,
                                Fort Worth, TX 76140</a></h4>
                        <ul class="post-modern-meta">
                            <li><a class="button-winona" href="#">$1300/mon</a></li>
                            <li>40 Sq. Ft.</li>
                            <li>2 Bedrooms</li>
                        </ul>
                        <p>Perfect for those who love both city life and the countryside.</p>
                    </article>
                </div>
                <div class="col-md-6 wow-outer">
                    <!-- Post Modern-->
                    <article class="post-modern wow slideInLeft"><a class="post-modern-media" href="#"><img
                                src="{{ URL::asset('web/img/grid-blog-3-571x353.jpg') }}" alt="" width="571"
                                height="353" /></a>
                        <h4 class="post-modern-title"><a class="post-modern-title" href="#">924 Bel Air Rd, Los
                                Angeles, CA 90077</a></h4>
                        <ul class="post-modern-meta">
                            <li><a class="button-winona" href="#">1800/mon</a></li>
                            <li>50 Sq. Ft.</li>
                            <li>4 Bedrooms</li>
                        </ul>
                        <p>Located in 5 mins from downtown, this property is great for anyone.</p>
                    </article>
                </div>
                <div class="col-md-6 wow-outer">
                    <!-- Post Modern-->
                    <article class="post-modern wow slideInLeft"><a class="post-modern-media" href="#"><img
                                src="{{ URL::asset('web/img/grid-blog-4-571x353.jpg') }}" alt="" width="571"
                                height="353" /></a>
                        <h4 class="post-modern-title"><a class="post-modern-title" href="#">13510 W Cheery Lynn
                                Rd,
                                Avondale, AZ 85392</a></h4>
                        <ul class="post-modern-meta">
                            <li><a class="button-winona" href="#">$2700/mon</a></li>
                            <li>90 Sq. Ft.</li>
                            <li>2 Bedrooms</li>
                        </ul>
                        <p>A luxury mansion for people who enjoy the high-end amenities.</p>
                    </article>
                </div>
                <div class="col-md-12 wow-outer"><a class="button button-primary button-winona button-md"
                        href="#">view More properties</a></div>
            </div>
        </div>
    </section>

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
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Services-->
    <section class="section novi-background section-lg text-center">
        <div class="container">
            <h3 class="text-uppercase">Residential property categories</h3>
            <p><span class="text-width-1">At our agency, we work with various types of residential real estate
                    property.
                    You can find out more about our properties by browsing our website.</span></p>
            <div class="row row-35 row-xxl-70 offset-top-2">
                <div class="col-sm-6 col-lg-3">
                    <!-- Thumbnail Light-->
                    <article class="thumbnail-light"><a class="thumbnail-light-media" href="#"><img
                                class="thumbnail-light-image"
                                src="{{ URL::asset('web/img/service-thumbnail-1-270x300.jpg') }}" alt=""
                                width="270" height="300" /></a>
                        <h4 class="thumbnail-light-title"><a href="#">Single-Family Homes</a></h4>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <!-- Thumbnail Light-->
                    <article class="thumbnail-light"><a class="thumbnail-light-media" href="#"><img
                                class="thumbnail-light-image"
                                src="{{ URL::asset('web/img/service-thumbnail-2-270x300.jpg') }}" alt=""
                                width="270" height="300" /></a>
                        <h4 class="thumbnail-light-title"><a href="#">Townhouses</a></h4>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <!-- Thumbnail Light-->
                    <article class="thumbnail-light"><a class="thumbnail-light-media" href="#"><img
                                class="thumbnail-light-image"
                                src="{{ URL::asset('web/img/service-thumbnail-3-270x300.jpg') }}" alt=""
                                width="270" height="300" /></a>
                        <h4 class="thumbnail-light-title"><a href="#">Multi-Family Homes</a></h4>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <!-- Thumbnail Light-->
                    <article class="thumbnail-light"><a class="thumbnail-light-media" href="#"><img
                                class="thumbnail-light-image"
                                src="{{ URL::asset('web/img/service-thumbnail-4-270x300.jpg') }}" alt=""
                                width="270" height="300" /></a>
                        <h4 class="thumbnail-light-title"><a href="#">Condominiums</a></h4>
                    </article>
                </div>
                <div class="col-md-12 wow-outer"><a class="button button-primary button-winona button-md"
                        href="#">view all properties</a></div>
            </div>
        </div>
    </section>

    <section class="section novi-background section-lg text-center bg-gray-100">
        <div class="container">
            <h3 class="text-uppercase wow-outer"><span class="wow slideInUp">Our Team</span></h3>
            <div class="row row-lg-50 row-35 row-xxl-70 justify-content-center justify-content-lg-start">
                <div class="col-md-10 col-lg-6 wow-outer">
                    <!-- Profile Creative-->
                    <article class="profile-creative wow slideInLeft">
                        <figure class="profile-creative-figure"><img class="profile-creative-image"
                                src="{{ URL::asset('web/img/team-1-270x273.jpg') }}" alt="" width="270"
                                height="273" />
                        </figure>
                        <div class="profile-creative-main">
                            <h5 class="profile-creative-title"><a href="#">Nathalie Porter</a></h5>
                            <p class="profile-creative-position">Founder, Broker</p>
                            <div class="profile-creative-contacts">
                                <div class="object-inline"><span class="icon novi-icon icon-md mdi mdi-phone"></span><a
                                        href="tel:#">1-800-1324-567</a></div>
                            </div>
                            <p>Ms. Porter founded our company in 1989 with a vision to help guests and residents of the
                                USA
                                to easily find and buy or rent real estate in all 50 states.</p>
                        </div>
                    </article>
                </div>
                <div class="col-md-10 col-lg-6 wow-outer">
                    <!-- Profile Creative-->
                    <article class="profile-creative wow slideInLeft" data-wow-delay=".2s">
                        <figure class="profile-creative-figure"><img class="profile-creative-image"
                                src="{{ URL::asset('web/img/team-2-270x273.jpg') }}" alt="" width="270"
                                height="273" />
                        </figure>
                        <div class="profile-creative-main">
                            <h5 class="profile-creative-title"><a href="#">John Thompson</a></h5>
                            <p class="profile-creative-position">Sales Associate</p>
                            <div class="profile-creative-contacts">
                                <div class="object-inline"><span class="icon novi-icon icon-md mdi mdi-phone"></span><a
                                        href="tel:#">1-800-1324-567</a></div>
                            </div>
                            <p>John has been in sales and marketing for the past 15 years. He has excellent knowledge
                                about
                                the local market both residential and commercial.</p>
                        </div>
                    </article>
                </div>
                <div class="col-md-10 col-lg-6 wow-outer">
                    <!-- Profile Creative-->
                    <article class="profile-creative wow slideInLeft">
                        <figure class="profile-creative-figure"><img class="profile-creative-image"
                                src="{{ URL::asset('web/img/team-3-270x273.jpg') }}" alt="" width="270"
                                height="273" />
                        </figure>
                        <div class="profile-creative-main">
                            <h5 class="profile-creative-title"><a href="#">Brian Payne</a></h5>
                            <p class="profile-creative-position">Realtor</p>
                            <div class="profile-creative-contacts">
                                <div class="object-inline"><span class="icon novi-icon icon-md mdi mdi-phone"></span><a
                                        href="tel:#">1-800-1324-567</a></div>
                            </div>
                            <p>Brian is not only a Licensed Realtor but also holds the Title Producers and Mortgage
                                Licenses, which makes him a very knowledgeable real estate expert.</p>
                        </div>
                    </article>
                </div>
                <div class="col-md-10 col-lg-6 wow-outer">
                    <!-- Profile Creative-->
                    <article class="profile-creative wow slideInLeft" data-wow-delay=".2s">
                        <figure class="profile-creative-figure"><img class="profile-creative-image"
                                src="{{ URL::asset('web/img/team-4-270x273.jpg') }}" alt="" width="270"
                                height="273" />
                        </figure>
                        <div class="profile-creative-main">
                            <h5 class="profile-creative-title"><a href="#">Marie Fernandez</a></h5>
                            <p class="profile-creative-position">Broker</p>
                            <div class="profile-creative-contacts">
                                <div class="object-inline"><span class="icon novi-icon icon-md mdi mdi-phone"></span><a
                                        href="tel:#">1-800-1324-567</a></div>
                            </div>
                            <p>Marie’s goal is to provide clients with the highest level of marketing expertise and
                                customer
                                service to help them reach their uppermost real estate goals.</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- Best offer-->
    <section class="section novi-background section-1 bg-primary-darker text-center"
        style="background-image: url({{ URL::asset('web/img/bg-1-1920-455.jpg') }});">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-lg-7 col-xl-6">
                    <h3 class="wow-outer"><span class="wow slideInDown text-uppercase">Best offers</span></h3>
                    <p class="heading-subtitle">of September</p>
                    <p class="wow-outer offset-top-4"><span class="wow slideInDown" data-wow-delay=".05s">With a
                            variety
                            of accountants available at our company, you can always choose one that fits your corporate
                            requirements.</span></p>
                    <div class="wow-outer button-outer"><a
                            class="button button-primary-white button-winona wow slideInDown" href="#"
                            data-wow-delay=".1s">Read more</a></div>
                </div>
            </div>
        </div>
    </section>

    <section class="section novi-background section-lg text-center">
        <div class="container">
            <h3 class="wow-outer"><span class="wow slideInDown text-uppercase">Testimonials</span></h3>
            <!-- Owl Carousel-->
            <div class="owl-carousel wow fadeIn" data-items="1" data-md-items="2" data-lg-items="3" data-dots="true"
                data-nav="false" data-loop="true" data-autoplay="true" data-autoplay-speed="731"
                data-autoplay-timeout="4268" data-margin="30" data-stage-padding="0" data-mouse-drag="false">
                <blockquote class="quote-classic">
                    <div class="quote-classic-meta">
                        <div class="quote-classic-avatar"><img
                                src="{{ URL::asset('web/img/testimonials-person-6-96x96.jpg') }}" alt=""
                                width="96" height="96" />
                        </div>
                        <div class="quote-classic-info">
                            <cite class="quote-classic-cite">Albert Webb</cite>
                            <p class="quote-classic-caption">Regular Client</p>
                        </div>
                    </div>
                    <div class="quote-classic-text">
                        <p>I have just bought an apartment in LA thanks to you and your brokers. Everything went smooth
                            and
                            easy, the price was quite affordable, and I’m sure I will use your services again in the
                            future.
                        </p>
                    </div>
                </blockquote>
                <blockquote class="quote-classic">
                    <div class="quote-classic-meta">
                        <div class="quote-classic-avatar"><img
                                src="{{ URL::asset('web/img/testimonials-person-1-96x96.jpg') }}" alt=""
                                width="96" height="96" />
                        </div>
                        <div class="quote-classic-info">
                            <cite class="quote-classic-cite">Kelly McMillan</cite>
                            <p class="quote-classic-caption">Regular Client</p>
                        </div>
                    </div>
                    <div class="quote-classic-text">
                        <p>I have recently sold my rental property in Nelson via inHouse. Everything about the sale was
                            made
                            seamless by your team. You gave me great advice about what was necessary to expedite the
                            sale.
                        </p>
                    </div>
                </blockquote>
                <blockquote class="quote-classic">
                    <div class="quote-classic-meta">
                        <div class="quote-classic-avatar"><img
                                src="{{ URL::asset('web/img/testimonials-person-2-96x96.jpg') }}" alt=""
                                width="96" height="96" />
                        </div>
                        <div class="quote-classic-info">
                            <cite class="quote-classic-cite">Harold Barnett</cite>
                            <p class="quote-classic-caption">Regular Client</p>
                        </div>
                    </div>
                    <div class="quote-classic-text">
                        <p>I really appreciate your time and expertise in helping me find and buy my current home in
                            Seattle, WA. Hope we can do business again in the future and I will recommend you to family
                            and
                            friends.</p>
                    </div>
                </blockquote>
                <blockquote class="quote-classic">
                    <div class="quote-classic-meta">
                        <div class="quote-classic-avatar"><img
                                src="{{ URL::asset('web/img/testimonials-person-3-96x96.jpg') }}" alt=""
                                width="96" height="96" />
                        </div>
                        <div class="quote-classic-info">
                            <cite class="quote-classic-cite">Bill Warner</cite>
                            <p class="quote-classic-caption">Regular Client</p>
                        </div>
                    </div>
                    <div class="quote-classic-text">
                        <p>I have just sold a property with inHouse and I can’t thank them enough. Their team has great
                            communication skills and they have regularly communicated with me throughout the whole
                            process.
                        </p>
                    </div>
                </blockquote>
                <blockquote class="quote-classic">
                    <div class="quote-classic-meta">
                        <div class="quote-classic-avatar"><img
                                src="{{ URL::asset('web/img/testimonials-person-4-96x96.jpg') }}" alt=""
                                width="96" height="96" />
                        </div>
                        <div class="quote-classic-info">
                            <cite class="quote-classic-cite">Ann Lee</cite>
                            <p class="quote-classic-caption">Regular Client</p>
                        </div>
                    </div>
                    <div class="quote-classic-text">
                        <p>Your skilled team helped me make the dream of selling my old property a reality. The sale
                            went
                            smoothly, and I just closed on an ideal new place I am excited to call home. Thank you for
                            your
                            great services!</p>
                    </div>
                </blockquote>
                <blockquote class="quote-classic">
                    <div class="quote-classic-meta">
                        <div class="quote-classic-avatar"><img
                                src="{{ URL::asset('web/img/testimonials-person-5-96x96.jpg') }}" alt=""
                                width="96" height="96" />
                        </div>
                        <div class="quote-classic-info">
                            <cite class="quote-classic-cite">Peter Clarkson</cite>
                            <p class="quote-classic-caption">Regular Client</p>
                        </div>
                    </div>
                    <div class="quote-classic-text">
                        <p>I have to say that inHouse has the best brokers we've ever worked with. Their
                            professionalism,
                            personality, attention to detail, responsiveness and ability to close the deal are
                            outstanding!
                        </p>
                    </div>
                </blockquote>
            </div>
        </div>
    </section>
@endsection
