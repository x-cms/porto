@extends('porto::layouts.master')

@push('css')
<style>
    .custom-thumb-info-2 {
        border: none;
        overflow: initial;
        margin-bottom: 25px;
    }

    .custom-thumb-info-2 .thumb-info-caption {
        display: block;
    }

    .custom-thumb-info-2 .thumb-info-caption a.btn {
        position: absolute;
        bottom: -25px;
        left: 50%;
        -webkit-transform: translateX(-50%);
        -moz-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        -o-transform: translateX(-50%);
        transform: translateX(-50%);
    }

    #footer {
        margin-top: 0px;
    }

    @media (max-width: 991px) {
        .custom-sm-margin-1 {
            margin-top: 30px;
        }

        .custom-sm-margin-2 {
            margin-top: 60px;
        }

        .custom-sm-mb-none {
            margin-bottom: 0 !important;
        }
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
                            <li class="active">解决方案</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1>解决方案</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="section mb-none mt-none">
            <div class="container">
                <div class="row mb-xlg custom-sm-mb-none">
                    <div class="col-md-4 col-sm-8 col-sm-offset-2 col-md-offset-0" data-appear-animation="flipInY">
                        <span class="thumb-info custom-thumb-info-2 thumb-info-hide-wrapper-bg">
                            <span class="thumb-info-wrapper m-none">
                                <img src="{{ Theme::asset('images/cj1.jpg') }}" class="img-responsive" alt="">
                            </span>
                            <span class="thumb-info-caption background-color-light center p-xlg">
                                <h4 class="font-weight-bold text-color-quaternary mb-lg">商务净饮水产品解决方案</h4>
                                <hr>
                                <p class="text-color-dark p-none mb-md">很多商务净饮水设备采购人员，都不清楚应该选用哪种产品。对于商务净饮水工程设备，只要是供水需求量超过10人以上，那就需要大出水量的净水器，而家用净水器是无法达到的。</p>
                                <a class="btn btn-primary custom-btn-style-1 text-uppercase text-color-light custom-font-weight-medium"
                                   href="demo-gym-classes-detail.html" title="Learn More">查看更多</a>
                            </span>
                        </span>
                    </div>
                    <div class="col-md-4 col-sm-8 col-sm-offset-2 col-md-offset-0 custom-sm-margin-2" data-appear-animation="flipInY" data-appear-animation-delay="100">
                        <span class="thumb-info custom-thumb-info-2 thumb-info-hide-wrapper-bg">
                            <span class="thumb-info-wrapper m-none">
                                <img src="{{ Theme::asset('images/cj6.jpg') }}" class="img-responsive" alt="">
                            </span>
                            <span class="thumb-info-caption background-color-light center p-xlg">
                                <h4 class="font-weight-bold text-color-quaternary mb-md">聚集场所（学校、工厂）直饮水解解决方案</h4>
                                <hr>
                                <p class="text-color-dark p-none">背景以学校、工厂为代表的聚集场所，人群高度集中，高频率的群发性事故为学校、工厂带来极其不良的负面影响。这一场所的人群需要进行大量的</p>
                                <a class="btn btn-primary custom-btn-style-1 text-uppercase text-color-light custom-font-weight-medium"
                                   href="demo-gym-classes-detail.html" title="Learn More">查看更多</a>
                            </span>
                        </span>
                    </div>
                    <div class="col-md-4 col-sm-8 col-sm-offset-2 col-md-offset-0 custom-sm-margin-2" data-appear-animation="flipInY" data-appear-animation-delay="300">
                        <span class="thumb-info custom-thumb-info-2 thumb-info-hide-wrapper-bg">
                            <span class="thumb-info-wrapper m-none">
                                <img src="{{ Theme::asset('images/cj2.jpg') }}" class="img-responsive" alt="">
                            </span>
                            <span class="thumb-info-caption background-color-light center p-xlg">
                                <h4 class="font-weight-bold text-color-quaternary mb-md">高端场所（写字楼、银行）直饮水解决方案</h4>
                                <hr>
                                <p class="text-color-dark p-none">背景以写字楼、银行为代表的高端场所，地处城市中央商务区（Central Business District，简称CBD），CBD作为城市的核心，高度集中了城市</p>
                                <a class="btn btn-primary custom-btn-style-1 text-uppercase text-color-light custom-font-weight-medium"
                                   href="demo-gym-classes-detail.html" title="Learn More">查看更多</a>
                            </span>
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-8 col-sm-offset-2 col-md-offset-0 custom-sm-margin-1" data-appear-animation="flipInY" data-appear-animation-delay="600">
                        <span class="thumb-info custom-thumb-info-2 thumb-info-hide-wrapper-bg">
                            <span class="thumb-info-wrapper m-none">
                                <img src="{{ Theme::asset('images/cj3.jpg') }}" class="img-responsive" alt="">
                            </span>
                            <span class="thumb-info-caption background-color-light center p-xlg">
                                <h4 class="font-weight-bold text-color-quaternary mb-md">民生场所（政府、医院）直饮水解决方案</h4>
                                <hr>
                                <p class="text-color-dark p-none">背景以政府、医院为代表的民生场所，面向大众，服务于民生，以对人民负责为基本原则、良好的公信力保证其在社会中的信任度、权威性和影响力</p>
                                <a class="btn btn-primary custom-btn-style-1 text-uppercase text-color-light custom-font-weight-medium"
                                   href="demo-gym-classes-detail.html" title="Learn More">查看更多</a>
                            </span>
                        </span>
                    </div>
                    <div class="col-md-4 col-sm-8 col-sm-offset-2 col-md-offset-0 custom-sm-margin-2 custom-xs-margin-1" data-appear-animation="flipInY" data-appear-animation-delay="900">
                        <span class="thumb-info custom-thumb-info-2 thumb-info-hide-wrapper-bg">
                            <span class="thumb-info-wrapper m-none">
                                <img src="{{ Theme::asset('images/cj5.jpg') }}" class="img-responsive" alt="">
                            </span>
                            <span class="thumb-info-caption background-color-light center p-xlg">
                                <h4 class="font-weight-bold text-color-quaternary mb-md">公共场所（机场、车站）直饮水解决方案</h4>
                                <hr>
                                <p class="text-color-dark p-none">背景以机场、车站、地铁为代表的公共场所，服务于不同性别、年龄、职业、民族或国籍、不同健康状况的流动人群；也是一个城市最直接的</p>
                                <a class="btn btn-primary custom-btn-style-1 text-uppercase text-color-light custom-font-weight-medium"
                                   href="demo-gym-classes-detail.html" title="Learn More">查看更多</a>
                            </span>
                        </span>
                    </div>
                    <div class="col-md-4 col-sm-8 col-sm-offset-2 col-md-offset-0 custom-sm-margin-2" data-appear-animation="flipInY" data-appear-animation-delay="1200">
                        <span class="thumb-info custom-thumb-info-2 thumb-info-hide-wrapper-bg">
                            <span class="thumb-info-wrapper m-none">
                                <img src="{{ Theme::asset('images/cj4.jpg') }}" class="img-responsive" alt="">
                            </span>
                            <span class="thumb-info-caption background-color-light center p-xlg">
                                <h4 class="font-weight-bold text-color-quaternary mb-md">消费场所（酒店、餐饮、美容院）直饮水解决方案</h4>
                                <hr>
                                <p class="text-color-dark p-none">背景以酒店、快餐店、茶室、影院、美容院等为代表的消费场所，属于供人们娱乐放松的休闲消费性场所。高消费促使顾客对高品质服务的必然追求</p>
                                <a class="btn btn-primary custom-btn-style-1 text-uppercase text-color-light custom-font-weight-medium"
                                   href="demo-gym-classes-detail.html" title="Learn More">查看更多</a>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection