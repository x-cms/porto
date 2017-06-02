@extends('porto::layouts.master')

@section('content')
    <div class="main" role="main">
        <section class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li><a href="#">首页</a></li>
                            <li class="active">企业招聘</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1>企业招聘</h1>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <h2><strong>【招贤令】</strong> 全城找人，在线急等!</h2>
            <div class="row">
                <div class="col-md-12">
                    <p class="lead">
                        不需要爸是李刚家在武钢，也不一定五道杠，无所谓介于牛A或牛C之间，也无须各种帝，只要你对生活充满梦想，对行业的向往力像追星那般热情，执行力像城管扫街那般雷厉，敏锐度像发改委调油价那般精细，那就来吧！万盛昌水业需要你！
                    </p>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-md-8">
                    <div class="toggle toggle-primary mt-lg" data-plugin-toggle>
                        <section class="toggle">
                            <label>文案</label>
                            <div class="toggle-content">
                                <p><strong>Location:</strong> New York - <strong>Department:</strong> Engineering</p>
                                <p>Mauris elit velit, lobortis sed interdum at, vestibulum vitae libero. Lorem ipsum
                                    dolor sit amet, consectetur adipiscing elit. Quisque iaculis ligula ut ipsum mattis
                                    viverra. </p>
                                <p><a class="btn btn-primary mb-xl" href="#">现在申请</a></p>
                            </div>
                        </section>
                        <section class="toggle">
                            <label>销售专员</label>
                            <div class="toggle-content">
                                <p><strong>人数:</strong> 6人 </p>
                                <p><strong>职位要求:</strong></p>
                                <p>专业不限</p>
                                <p>有半年至1年工作经验者优先</p>
                                <p>对于潜在客户、意向客户等有记录，并及时回访</p>
                                <p>语言表达能力（沟通能力）强</p> 　　
                            </div>
                        </section>
                        <section class="toggle">
                            <label>PHP软件工程师</label>
                            <div class="toggle-content">
                                <p><strong>Location:</strong> New York - <strong>Department:</strong> Engineering</p>
                                <p>Mauris elit velit, lobortis sed interdum at, vestibulum vitae libero. Lorem ipsum
                                    dolor sit amet, consectetur adipiscing elit. Quisque iaculis ligula ut ipsum mattis
                                    viverra. </p>
                                <p><a class="btn btn-primary mb-xl" href="#">现在申请</a></p>
                            </div>
                        </section>
                        <section class="toggle">
                            <label>商场导购</label>
                            <div class="toggle-content">
                                <p><strong>Location:</strong> New York - <strong>Department:</strong> Engineering</p>
                                <p>Mauris elit velit, lobortis sed interdum at, vestibulum vitae libero. Lorem ipsum
                                    dolor sit amet, consectetur adipiscing elit. Quisque iaculis ligula ut ipsum mattis
                                    viverra. </p>
                                <p><a class="btn btn-primary mb-xl" href="#">现在申请</a></p>
                            </div>
                        </section>
                        <section class="toggle">
                            <label>移动开发</label>
                            <div class="toggle-content">
                                <p><strong>Location:</strong> New York - <strong>Department:</strong> Engineering</p>
                                <p>Mauris elit velit, lobortis sed interdum at, vestibulum vitae libero. Lorem ipsum
                                    dolor sit amet, consectetur adipiscing elit. Quisque iaculis ligula ut ipsum mattis
                                    viverra. </p>
                                <p><a class="btn btn-primary mb-xl" href="#">现在申请</a></p>
                            </div>
                        </section>
                        <section class="toggle">
                            <label>客服</label>
                            <div class="toggle-content">
                                <p><strong>Location:</strong> New York - <strong>Department:</strong> Engineering</p>
                                <p>Mauris elit velit, lobortis sed interdum at, vestibulum vitae libero. Lorem ipsum
                                    dolor sit amet, consectetur adipiscing elit. Quisque iaculis ligula ut ipsum mattis
                                    viverra. </p>
                                <p><a class="btn btn-primary mb-xl" href="#">现在申请</a></p>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="featured-box featured-box-primary">
                        <div class="box-content">
                            <h4 class="text-uppercase">办公环境</h4>
                            <ul class="thumbnail-gallery" data-plugin-lightbox
                                data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
                                <li>
                                    <a title="Benefits 1" href="img/benefits/benefits-1.jpg">
												<span class="thumbnail mb-none">
													<img src="{{ Theme::asset('images/DSC08248.jpg') }}" alt="">
												</span>
                                    </a>
                                </li>
                                <li>
                                    <a title="Benefits 2" href="img/benefits/benefits-2.jpg">
												<span class="thumbnail mb-none">
													<img src="{{ Theme::asset('images/IMG_3122----.jpg') }}" alt="">
												</span>
                                    </a>
                                </li>
                                <li>
                                    <a title="Benefits 3" href="img/benefits/benefits-3.jpg">
												<span class="thumbnail mb-none">
													<img src="{{ Theme::asset('images/IMG_31150000000.jpg') }}" alt="">
												</span>
                                    </a>
                                </li>
                                <li>
                                    <a title="Benefits 4" href="img/benefits/benefits-4.jpg">
												<span class="thumbnail mb-none">
													<img src="{{ Theme::asset('images/timg0000.jpg') }}" alt="">
												</span>
                                    </a>
                                </li>
                                <li>
                                    <a title="Benefits 5" href="img/benefits/benefits-5.jpg">
												<span class="thumbnail mb-none">
													<img src="img/benefits/benefits-5-thumb.jpg" alt="">
												</span>
                                    </a>
                                </li>
                                <li>
                                    <a title="Benefits 6" href="img/benefits/benefits-6.jpg">
												<span class="thumbnail mb-none">
													<img src="img/benefits/benefits-6-thumb.jpg" alt="">
												</span>
                                    </a>
                                </li>
                            </ul>

                            <hr>

                            <ul class="list list-icons align-left">
                                <li><i class="fa fa-check"></i>Health insurance</li>
                                <li><i class="fa fa-check"></i>Retirement investment plans</li>
                                <li><i class="fa fa-check"></i>Vacation time</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection