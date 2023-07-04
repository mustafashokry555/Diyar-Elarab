@extends('web.layout.layout')

@section('title')
    Projects
@endsection

@section('content')
    <!-- Breadcrumbs -->
    <section class="section novi-background breadcrumbs-custom bg-image context-dark"
        style="background-image: url(images/breadcrumbs-image-1.jpg);">
        <div class="breadcrumbs-custom-inner">
            <div class="container breadcrumbs-custom-container">
                <div class="breadcrumbs-custom-main">
                    <h6 class="breadcrumbs-custom-subtitle title-decorated">Projects</h6>
                    <h2 class="text-uppercase breadcrumbs-custom-title">Projects</h2>
                </div>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="">Home</a></li>
                    <li class="active">Projects</li>
                </ul>
            </div>
        </div>
    </section>
    
    <section class="section novi-background section-md text-center">
        <div class="container">
            <h3 class="text-uppercase font-weight-bold wow-outer">
                <span class="wow slideInDown">Our Projects</span>
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
            </div>
        </div>
    </section>

@endsection
