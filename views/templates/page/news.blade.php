@extends('porto::layouts.master')

@push('css')
<style>
    .new .col-md-3{
        padding: 0px;
    }

    hr.tall {
        margin: 22px 0;
    }

    .custom-thumb-info-2 {
        border: none;
        overflow: initial;
        padding: 45px 15px;
        border-radius: 0px;
    }

    .custom-thumb-info-2 .thumb-info-caption {
        display: block;
    }

    .thumb-info img, .thumb-info .thumb-info-wrapper{
        border-radius: 0px;
    }

    #footer {
        margin-top: 0;
    }
</style>
@endpush

@section('content')
    <div class="main">
        <section class="page-header mb-none">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li><a href="#">首页</a></li>
                            <li class="active">新闻资讯</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1>新闻资讯</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="section mb-none mt-none">
            <div class="container new">
                <div class="row">
                    <div class="col-md-3" data-appear-animation="flipInY">
                        <div class="thumb-info custom-thumb-info-2 thumb-info-hide-wrapper-bg">
                            <h4 class="center">公司新闻</h4>
                            <span class="thumb-info-wrapper m-none">
                                <img src="{{ Theme::asset('images/cj6.jpg') }}" class="img-responsive" alt="">
                            </span>
                            <span class="thumb-info-caption background-color-light center">
                                <h4 class="align-left">万盛昌水业荣获知名商标</h4>
                                <p class="text-color-dark p-none align-left">近日，呼和浩特市万盛昌水业饮料有限公司注册商标“万盛昌”被呼和浩特市知名商标认定委员会认定为知名商标</p>
                                <hr class="solid tall">
                                <a class="btn btn-primary"
                                   href="/news/list.html#company" title="Learn More">了解更多</a>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-3" data-appear-animation="flipInY">
                        <div class="thumb-info custom-thumb-info-2 background-color-primary text-color-light">
                            <h4 class="center text-color-light">行业资讯</h4>
                            <span class="thumb-info-wrapper m-none">
                                <img src="{{ Theme::asset('images/cj6.jpg') }}" class="img-responsive" alt="">
                            </span>
                            <span class="thumb-info-caption center">
                                <h4 class="align-left text-color-light">万盛昌水业荣获知名商标</h4>
                                <p class="text-color-dark p-none align-left text-color-light">近日，呼和浩特市万盛昌水业饮料有限公司注册商标“万盛昌”被呼和浩特市知名商标认定委员会认定为知名商标</p>
                                <hr class="solid tall">
                                <a class="btn btn-default"
                                   href="/news/list.html#industry" title="Learn More">了解更多</a>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-3 background-color-secondary" data-appear-animation="flipInY">
                        <div class="thumb-info custom-thumb-info-2 thumb-info-hide-wrapper-bg">
                            <h4 class="center">媒体报道</h4>
                            <span class="thumb-info-wrapper m-none">
                                <img src="{{ Theme::asset('images/cj6.jpg') }}" class="img-responsive" alt="">
                            </span>
                            <span class="thumb-info-caption background-color-light center">
                                <h4 class="align-left">万盛昌水业荣获知名商标</h4>
                                <p class="text-color-dark p-none align-left">近日，呼和浩特市万盛昌水业饮料有限公司注册商标“万盛昌”被呼和浩特市知名商标认定委员会认定为知名商标</p>
                                <hr class="solid tall">
                                <a class="btn btn-primary "
                                   href="/news/list.html#media" title="Learn More">了解更多</a>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="thumb-info custom-thumb-info-2 background-color-primary" data-appear-animation="flipInY">
                            <h4 class="center text-color-light">最新活动</h4>
                            <span class="thumb-info-wrapper m-none">
                                <img src="{{ Theme::asset('images/cj6.jpg') }}" class="img-responsive" alt="">
                            </span>
                            <span class="thumb-info-caption center">
                                <h4 class="align-left text-color-light">万盛昌水业荣获知名商标</h4>
                                <p class="text-color-dark p-none align-left text-color-light">近日，呼和浩特市万盛昌水业饮料有限公司注册商标“万盛昌”被呼和浩特市知名商标认定委员会认定为知名商标</p>
                                <hr class="solid tall">
                                <a class="btn btn-default"
                                   href="/news/list.html#activity" title="Learn More">了解更多</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection