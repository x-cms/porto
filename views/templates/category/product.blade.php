@extends('porto::layouts.master')

@section('content')
    <div class="main" role="main">
        <section class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li><a href="#">首页</a></li>
                            <li class="active">产品中心</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1>产品中心</h1>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <ul id="portfolioLoadMoreFilter" class="nav nav-pills sort-source" data-sort-id="portfolio"
                data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
                <li data-option-value="*" class="active"><a href="#">全部分类</a></li>
                <li data-option-value=".websites"><a href="#">瓶装水</a></li>
                <li data-option-value=".logos"><a href="#">卡装水</a></li>
                <li data-option-value=".brands"><a href="#">杯装水</a></li>
                <li data-option-value=".medias"><a href="#">桶装水</a></li>
            </ul>
            <hr>
            <div class="row">
                <ul id="portfolioLoadMoreWrapper" class="portfolio-list sort-destination" data-sort-id="portfolio"
                    data-total-pages="3" data-filter="*" style="position: relative; height: 889.5px;">
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item brands"
                        style="position: absolute; left: 0px; top: 0px;">
                        <div class="portfolio-item">
                            <a href="/products/1">
                                <span class="thumb-info thumb-info-lighten">
                                    <span class="thumb-info-wrapper">
                                        <img src="img/projects/project.jpg" class="img-responsive" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner">Presentation</span>
                                            <span class="thumb-info-type">Brand</span>
                                        </span>
                                        <span class="thumb-info-action">
                                            <span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item medias"
                        style="position: absolute; left: 292px; top: 0px;">
                        <div class="portfolio-item">
                            <a href="portfolio-single-small-slider.html">
								<span class="thumb-info thumb-info-lighten thumb-info-no-zoom">
									<span class="thumb-info-wrapper">
										<span class="owl-carousel owl-theme nav-inside m-none owl-loaded owl-drag owl-carousel-init"
                                              data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 3000}">
										<div class="owl-stage-outer"><div class="owl-stage"
                                                                          style="transform: translate3d(-525px, 0px, 0px); transition: 0s; width: 1575px;"><div
                                                        class="owl-item cloned"
                                                        style="width: 252.5px; margin-right: 10px;"><span>
												<img src="img/projects/project-1.jpg" class="img-responsive"
                                                     alt="">
											</span></div><div class="owl-item cloned"
                                                              style="width: 252.5px; margin-right: 10px;"><span>
												<img src="img/projects/project-1-2.jpg" class="img-responsive"
                                                     alt="">
											</span></div><div class="owl-item active"
                                                              style="width: 252.5px; margin-right: 10px;"><span>
												<img src="img/projects/project-1.jpg" class="img-responsive"
                                                     alt="">
											</span></div><div class="owl-item"
                                                              style="width: 252.5px; margin-right: 10px;"><span>
												<img src="img/projects/project-1-2.jpg" class="img-responsive"
                                                     alt="">
											</span></div><div class="owl-item cloned"
                                                              style="width: 252.5px; margin-right: 10px;"><span>
												<img src="img/projects/project-1.jpg" class="img-responsive"
                                                     alt="">
											</span></div><div class="owl-item cloned"
                                                              style="width: 252.5px; margin-right: 10px;"><span>
												<img src="img/projects/project-1-2.jpg" class="img-responsive"
                                                     alt="">
											</span></div></div></div><div class="owl-nav disabled"><div
                                                        class="owl-prev"></div><div
                                                        class="owl-next"></div></div><div class="owl-dots"><div
                                                        class="owl-dot active"><span></span></div><div
                                                        class="owl-dot"><span></span></div></div></span>

										<span class="thumb-info-title">
											<span class="thumb-info-inner">Porto Watch</span>
											<span class="thumb-info-type">Media</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon"><i
                                                        class="fa fa-link"></i></span>
										</span>
									</span>
								</span>
                            </a>
                        </div>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item logos"
                        style="position: absolute; left: 585px; top: 0px;">
                        <div class="portfolio-item">
                            <a href="portfolio-single-small-slider.html">
								<span class="thumb-info thumb-info-lighten">
									<span class="thumb-info-wrapper">
										<img src="img/projects/project-2.jpg" class="img-responsive" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Identity</span>
											<span class="thumb-info-type">Logo</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon"><i
                                                        class="fa fa-link"></i></span>
										</span>
									</span>
								</span>
                            </a>
                        </div>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item brands"
                        style="position: absolute; left: 877px; top: 0px;">
                        <div class="portfolio-item">
                            <a href="portfolio-single-small-slider.html">
								<span class="thumb-info thumb-info-lighten">
									<span class="thumb-info-wrapper">
										<img src="img/projects/project-3.jpg" class="img-responsive" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Watch Mockup</span>
											<span class="thumb-info-type">Brand</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon"><i
                                                        class="fa fa-link"></i></span>
										</span>
									</span>
								</span>
                            </a>
                        </div>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item logos"
                        style="position: absolute; left: 0px; top: 296px;">
                        <div class="portfolio-item">
                            <a href="portfolio-single-small-slider.html">
								<span class="thumb-info thumb-info-lighten">
									<span class="thumb-info-wrapper">
										<img src="img/projects/project-4.jpg" class="img-responsive" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Three Bottles</span>
											<span class="thumb-info-type">Logo</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
										</span>
									</span>
								</span>
                            </a>
                        </div>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item brands"
                        style="position: absolute; left: 292px; top: 296px;">
                        <div class="portfolio-item">
                            <a href="portfolio-single-small-slider.html">
								<span class="thumb-info thumb-info-lighten">
									<span class="thumb-info-wrapper">
										<img src="img/projects/project-5.jpg" class="img-responsive" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Company T-Shirt</span>
											<span class="thumb-info-type">Brand</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
										</span>
									</span>
								</span>
                            </a>
                        </div>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item websites"
                        style="position: absolute; left: 585px; top: 296px;">
                        <div class="portfolio-item">
                            <a href="portfolio-single-small-slider.html">
								<span class="thumb-info thumb-info-lighten">
									<span class="thumb-info-wrapper">
										<img src="img/projects/project-6.jpg" class="img-responsive" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Mobile Mockup</span>
											<span class="thumb-info-type">Website</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
										</span>
									</span>
								</span>
                            </a>
                        </div>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item medias"
                        style="position: absolute; left: 877px; top: 296px;">
                        <div class="portfolio-item">
                            <a href="portfolio-single-small-slider.html">
								<span class="thumb-info thumb-info-lighten">
									<span class="thumb-info-wrapper">
										<img src="img/projects/project-7.jpg" class="img-responsive" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Porto Label</span>
											<span class="thumb-info-type">Media</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
										</span>
									</span>
								</span>
                            </a>
                        </div>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item logos"
                        style="position: absolute; left: 0px; top: 593px;">
                        <div class="portfolio-item">
                            <a href="portfolio-single-small-slider.html">
								<span class="thumb-info thumb-info-lighten">
									<span class="thumb-info-wrapper">
										<img src="img/projects/project-23.jpg" class="img-responsive" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Business Folders</span>
											<span class="thumb-info-type">Logo</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
										</span>
									</span>
								</span>
                            </a>
                        </div>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item websites"
                        style="position: absolute; left: 292px; top: 593px;">
                        <div class="portfolio-item">
                            <a href="portfolio-single-small-slider.html">
								<span class="thumb-info thumb-info-lighten">
									<span class="thumb-info-wrapper">
										<img src="img/projects/project-24.jpg" class="img-responsive" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Tablet Screen</span>
											<span class="thumb-info-type">Website</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
										</span>
									</span>
								</span>
                            </a>
                        </div>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item medias"
                        style="position: absolute; left: 585px; top: 593px;">
                        <div class="portfolio-item">
                            <a href="portfolio-single-small-slider.html">
								<span class="thumb-info thumb-info-lighten">
									<span class="thumb-info-wrapper">
										<img src="img/projects/project-25.jpg" class="img-responsive" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Black Watch</span>
											<span class="thumb-info-type">Media</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
										</span>
									</span>
								</span>
                            </a>
                        </div>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item websites"
                        style="position: absolute; left: 877px; top: 593px;">
                        <div class="portfolio-item">
                            <a href="portfolio-single-small-slider.html">
								<span class="thumb-info thumb-info-lighten">
									<span class="thumb-info-wrapper">
										<img src="img/projects/project-26.jpg" class="img-responsive" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Monitor Mockup</span>
											<span class="thumb-info-type">Website</span>
										</span>
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
										</span>
									</span>
								</span>
                            </a>
                        </div>
                    </li>
                </ul>
                <div class="col-md-12">
                    <div id="portfolioLoadMoreLoader" class="portfolio-load-more-loader" style="display: none;">
                        <div class="bounce-loader">
                            <div class="bounce1"></div>
                            <div class="bounce2"></div>
                            <div class="bounce3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

