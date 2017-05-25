@extends('front.layouts.master')

@section('content')
    <div class="main" role="main">
        <div class="slider-container light rev_slider_wrapper">
            <div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider
                 data-plugin-options="{'sliderLayout': 'fullscreen'}">
                <ul>
                    <li data-transition="fade">
                        <img src="img/slides/light-cover.jpg"
                             alt=""
                             data-bgposition="center center"
                             data-bgfit="cover"
                             data-bgrepeat="no-repeat"
                             class="rev-slidebg">
                        <div class="rs-background-video-layer"
                             data-forcerewind="on"
                             data-volume="mute"
                             data-videowidth="100%"
                             data-videoheight="100%"
                             data-videomp4="video/light.mp4"
                             data-videopreload="preload"
                             data-videoloop="loop"
                             data-forceCover="1"
                             data-aspectratio="16:9"
                             data-autoplay="true"
                             data-autoplayonlyfirsttime="false"
                             data-nextslideatend="true"></div>

                        <div class="tp-caption"
                             data-x="center" data-hoffset="-150"
                             data-y="center" data-voffset="-95"
                             data-start="1000"
                             style="z-index: 5"
                             data-transform_in="x:[-300%];opacity:0;s:500;"><img src="img/slide-title-border.png"
                                                                                 alt=""></div>

                        <div class="tp-caption top-label"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="-95"
                             data-start="500"
                             style="z-index: 5"
                             data-transform_in="y:[-300%];opacity:0;s:500;">空气无法选择
                        </div>

                        <div class="tp-caption"
                             data-x="center" data-hoffset="150"
                             data-y="center" data-voffset="-95"
                             data-start="1000"
                             style="z-index: 5"
                             data-transform_in="x:[300%];opacity:0;s:500;"><img src="img/slide-title-border.png"
                                                                                alt=""></div>

                        <div class="tp-caption main-label"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="-45"
                             data-start="1500"
                             data-whitespace="nowrap"
                             data-transform_in="y:[100%];s:500;"
                             data-transform_out="opacity:0;s:500;"
                             style="z-index: 5"
                             data-mask_in="x:0px;y:0px;">但健康好水可以选择
                        </div>

                        <div class="tp-caption bottom-label"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="5"
                             data-start="2000"
                             style="z-index: 5"
                             data-transform_in="y:[100%];opacity:0;s:500;">此刻开启美好生活
                        </div>

                        <a class="tp-caption btn btn-lg btn-primary btn-slider-action"
                           data-hash
                           data-hash-offset="85"
                           href="#home-intro"
                           data-x="center" data-hoffset="0"
                           data-y="center" data-voffset="80"
                           data-start="2200"
                           data-whitespace="nowrap"
                           data-transform_in="y:[100%];s:500;"
                           data-transform_out="opacity:0;s:500;"
                           style="z-index: 5"
                           data-mask_in="x:0px;y:0px;">马上开始!</a>

                    </li>
                </ul>
            </div>
        </div>
        <div class="home-intro" id="home-intro">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <p>
                            为了能更好的展示万盛昌水业形象、产品及服务
                            <span>让广大合作伙伴和用户获得更好的体验，万盛昌网站全新改版上线！</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <section class="container">
            <div class="row mb-xl">
                <div class="col-md-8">
                    <h2 class="mb-xl">关于我们</h2>
                    <p>
                        万盛昌水业成立于1998年，专注水业20年，拥有独立的花园式水厂、覆盖全市的水站网点、独家的配送团队以及专业的呼叫中心，一直坚持“只为一杯健康好水”的理念，服务于千家万户。
                    </p>

                    <blockquote class="ml-lg blockquote-secondary">
                        <p>健康饮水、安全用水、服务周到、方便快捷、专注专业是我们的服务宗旨。</p>
                    </blockquote>

                    <a class="btn btn-primary mt-md mb-sm" href="#">查看更多</a>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="img-responsive mt-xl mb-xl" src="img/DSC08248.jpg" alt="Office">
                            <img class="img-responsive mb-xl" src="img/IMG_3122----.jpg" alt="Office">
                        </div>
                        <div class="col-md-6">
                            <img class="img-responsive mb-xl" src="img/IMG_31150000000.jpg" alt="Office">
                            <img class="img-responsive mb-xl" src="img/timg0000.jpg" alt="Office">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 center">
                        <h2 class="heading-dark mb-none"><strong>为什么选择万盛昌</strong></h2>
                        <p class="mb-xl">“专注、专业、创新、高效”</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4" data-appear-animation="fadeInLeft" data-appear-animation-delay="0">
                        <div class="feature-box">
                            <div class="feature-box-icon">
                                <i class="fa fa-tint"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="mb-sm">优质水源</h4>
                                <p class="mb-lg">源自阴山南麓地下岩层，国家鉴定为优质天然矿泉水</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" data-appear-animation="fadeInLeft" data-appear-animation-delay="0">
                        <div class="feature-box">
                            <div class="feature-box-icon">
                                <i class="fa fa-trophy"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="mb-sm">优势品牌</h4>
                                <p class="mb-lg">二十年专业制水，内蒙古著名品牌，内蒙古著名商标</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" data-appear-animation="fadeInLeft" data-appear-animation-delay="0">
                        <div class="feature-box">
                            <div class="feature-box-icon">
                                清真
                            </div>
                            <div class="feature-box-info">
                                <h4 class="mb-sm">清真企业</h4>
                                <p class="mb-lg">更健康、更科学、更卫生、更绿色、更安全</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4" data-appear-animation="fadeInLeft" data-appear-animation-delay="300">
                        <div class="feature-box">
                            <div class="feature-box-icon">
                                <i class="glyphicon glyphicon-cog"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="mb-sm">先进设备</h4>
                                <p class="mb-lg">德国进口纳滤机组，</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" data-appear-animation="fadeInLeft" data-appear-animation-delay="300">
                        <div class="feature-box">
                            <div class="feature-box-icon">
                                <i class="glyphicon glyphicon-headphones "></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="mb-sm">专业客服</h4>
                                <p class="mb-lg">968288呼叫中心平台，7x24小时专业客服团队</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" data-appear-animation="fadeInLeft" data-appear-animation-delay="300">
                        <div class="feature-box">
                            <div class="feature-box-icon">
                                <i class="fa fa-truck"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="mb-sm">快速配送</h4>
                                <p class="mb-lg">高效物流配送体系为您提供送水入户优质服务</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container">
            <div class="row counters">
                <div class="col-md-3">
                    <div class="counter counter-dark">
                        <strong data-to="100">100 </strong>
                        <label>每小时水处理能力( 吨 )</label>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="counter counter-dark">
                        <strong data-to="80">80 </strong>
                        <label>站点( 个 )</label>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="counter counter-dark">
                        <strong data-to="100000" data-append="+">100000 </strong>
                        <label>会员( 个 )</label>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="counter counter-dark">
                        <strong data-to="120" data-append="+">120 </strong>
                        <label>配送员( 名 )</label>
                    </div>
                </div>
            </div>
        </section>
        <hr class="tall">
        <div class="row center">
            <div class="col-md-12">
                <h2 class="mb-none word-rotator-title mt-xl">
                    <strong>我们的产品</strong>
                </h2>
                <p class="lead mb-xl">
                    高品质 好口碑 有保障 可信赖
                </p>
            </div>
        </div>
        <div class="owl-carousel full-width mb-none"
             data-plugin-options="{'items': 5, 'loop': false, 'nav': true, 'dots': false}">
            <div class="owl-item">
                <div>
                    <a href="portfolio-single-small-slider.html">
							<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
								<span class="thumb-info-wrapper">
									<img src="img/products/01.jpg" class="img-responsive" alt="">
									<span class="thumb-info-title">
										<span class="thumb-info-inner">杯装水</span>
										<span class="thumb-info-type">查看更多</span>
									</span>
									<span class="thumb-info-action">
										<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
									</span>
								</span>
							</span>
                    </a>
                </div>
            </div>
            <div class="owl-item">
                <div>
                    <a href="portfolio-single-small-slider.html">
							<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
								<span class="thumb-info-wrapper">
									<img src="img/products/02.jpg" class="img-responsive" alt="">
									<span class="thumb-info-title">
										<span class="thumb-info-inner">卡装水</span>
										<span class="thumb-info-type">查看更多</span>
									</span>
									<span class="thumb-info-action">
										<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
									</span>
								</span>
							</span>
                    </a>
                </div>
            </div>
            <div class="owl-item">
                <div>
                    <a href="portfolio-single-small-slider.html">
							<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
								<span class="thumb-info-wrapper">
									<img src="img/products/03.jpg" class="img-responsive" alt="">
									<span class="thumb-info-title">
										<span class="thumb-info-inner">瓶装水</span>
										<span class="thumb-info-type">查看更多</span>
									</span>
									<span class="thumb-info-action">
										<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
									</span>
								</span>
							</span>
                    </a>
                </div>
            </div>
            <div class="owl-item">
                <div>
                    <a href="portfolio-single-small-slider.html">
							<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
								<span class="thumb-info-wrapper">
									<img src="img/products/04.jpg" class="img-responsive" alt="">
									<span class="thumb-info-title">
										<span class="thumb-info-inner">桶装水</span>
										<span class="thumb-info-type">查看更多</span>
									</span>
									<span class="thumb-info-action">
										<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
									</span>
								</span>
							</span>
                    </a>
                </div>
            </div>
            <div class="owl-item">
                <div>
                    <a href="portfolio-single-small-slider.html">
							<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
								<span class="thumb-info-wrapper">
									<img src="img/products/05.jpg" class="img-responsive" alt="">
									<span class="thumb-info-title">
										<span class="thumb-info-inner">饮水机</span>
										<span class="thumb-info-type">查看更多</span>
									</span>
									<span class="thumb-info-action">
										<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
									</span>
								</span>
							</span>
                    </a>
                </div>
            </div>
        </div>
        <section class="parallax section section-text-light section-parallax section-center mt-none"
                 data-plugin-parallax
                 data-plugin-options="{'speed': 1.5}" data-image-src="img/parallax-2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="owl-carousel owl-theme owl-loaded owl-drag owl-carousel-init"
                             data-plugin-options="{'items': 1}">
                            <div class="owl-item">
                                <div>
                                    <div class="col-md-12">
                                        <div class="testimonial testimonial-style-2 testimonial-with-quotes mb-none">
                                            <blockquote>
                                                <p>
                                                    世界上家族企业往往是长盛不衰的，美国企业有百分之九十以上是家族企业，但是如果家族企业享有特权，不按企业规则行事，则是可怕的。而所有员工都按规则行为时，家族企业更优秀，绩效更高，企业发展更稳健。</p>
                                            </blockquote>
                                            <div class="testimonial-author">
                                                <p><strong>张俊</strong><span>董事长</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container">
            <div class="row center">
                <div class="col-md-12">
                    <h2 class="mb-none word-rotator-title mt-lg">
                        不只700000+
                        <strong>
									<span class="word-rotate active"
                                          data-plugin-options="{'delay': 3500, 'animDelay': 400}">
										<span class="word-rotate-items">
											<span>家庭用户</span>
										  <span>个人消费者</span>
                    </span>
									</span>
                        </strong>
                        选择万盛昌
                    </h2>
                    <p class="lead">还有100000+政府机构、企事业单位选择我们</p>
                </div>
            </div>
            <div class="row center mt-xl">
                <div class="owl-carousel owl-theme owl-loaded owl-drag owl-carousel-init"
                     data-plugin-options="{'items': 6, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">
                    <div class="owl-item">
                        <div>
                            <img class="img-responsive" src="img/bs.png" alt="包商银行">
                        </div>
                    </div>
                    <div class="owl-item">
                        <div>
                            <img class="img-responsive" src="img/cyq.png" alt="草原情">
                        </div>
                    </div>
                    <div class="owl-item">
                        <div>
                            <img class="img-responsive" src="img/dmc.png" alt="大牧场">
                        </div>
                    </div>
                    <div class="owl-item">
                        <div>
                            <img class="img-responsive" src="img/ht.png" alt="河套集团">
                        </div>
                    </div>
                    <div class="owl-item">
                        <div>
                            <img class="img-responsive" src="img/mys.png" alt="蒙伊萨">
                        </div>
                    </div>
                    <div class="owl-item">
                        <div>
                            <img class="img-responsive" src="img/nmgyh.png" alt="内蒙古银行">
                        </div>
                    </div>
                    <div class="owl-item">
                        <div>
                            <img class="img-responsive" src="img/tm.png" alt="田牧集团">
                        </div>
                    </div>
                    <div class="owl-item">
                        <div>
                            <img class="img-responsive" src="img/wdl.png" alt="维多利集团">
                        </div>
                    </div>
                    <div class="owl-item">
                        <div>
                            <img class="img-responsive" src="img/mn.png" alt="蒙牛">
                        </div>
                    </div>
                    <div class="owl-item">
                        <div>
                            <img class="img-responsive" src="img/yl.png" alt="伊利集团">
                        </div>
                    </div>
                    <div class="owl-item">
                        <div>
                            <img class="img-responsive" src="img/yd.png" alt="内蒙古移动">
                        </div>
                    </div>
                    <div class="owl-item">
                        <div>
                            <img class="img-responsive" src="img/lt.png" alt="内蒙古联通">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection