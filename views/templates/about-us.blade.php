@extends('porto::layouts.master')

@push('css')
<style>
    .custom-text-color {
        color: #939393;
    }

    .mt-timeline-2 {
        position: relative
    }

    .mt-timeline-2 > .mt-timeline-line {
        position: absolute;
        z-index: 1;
        height: 100%;
        width: 1px;
        top: 0;
        left: 50%;
        border-left: 4px solid;
        transform: translateX(-2px)
    }

    .mt-timeline-2 > .mt-container {
        position: relative;
        padding: 0
    }

    .mt-timeline-2 > .mt-container > .mt-item {
        list-style: none;
        padding-bottom: 60px;
        clear: both;
        min-height: 190px;
    }

    .mt-timeline-2 > .mt-container > .mt-item > .mt-timeline-icon {
        width: 70px;
        height: 70px;
        background-color: #fff;
        border-radius: 50% !important;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        z-index: 5;
        border: 0;
        overflow: hidden
    }

    .mt-timeline-2 > .mt-container > .mt-item > .mt-timeline-icon > i {
        top: 50%;
        left: 50%;
        transform: translateY(-50%) translateX(-50%);
        font-size: 70px;
        position: absolute;
        color: #0088cc;
    }

    .mt-timeline-2 > .mt-container > .mt-item > .mt-timeline-left > .mt-content-container {
        text-align: right;
        padding: 20px 60px 0;
    }

    .mt-timeline-2 > .mt-container > .mt-item > .mt-timeline-right > .mt-content-container {
        text-align: left;
        padding: 20px 60px 0;
    }

    .mt-timeline-2 > .mt-container > .mt-item > .mt-timeline-left {
        width: 50%;
        position: absolute;
    }

    .mt-timeline-2 > .mt-container > .mt-item > .mt-timeline-right {
        position: relative;
        width: 50%;
        left: 50%;
    }

    .img-thumbnail {
        border: none;
    }

    @media (max-width: 991px) {
        .custom-sm-timeline .mt-timeline-line{
            left: 23% !important;
            top: 1px !important;
            border-left: 2px solid;
        }

        .custom-sm-timeline .time{
            float: left !important;
            left: 0% !important;
            width: 20% !important;
        }

        .custom-sm-timeline .mt-timeline-icon{
            left: 23% !important;
            width: 30px !important;
            height: 30px !important;
        }

        .custom-sm-timeline .mt-timeline-icon i {
            font-size: 30px !important;
        }

        .custom-sm-timeline .event {
            left: 30% !important;
            width: 70% !important;
            padding-right: 10px;
        }

        .custom-sm-timeline > .mt-container > .mt-item > .mt-timeline-left > .mt-content-container, .custom-sm-timeline > .mt-container > .mt-item > .mt-timeline-right > .mt-content-container {
            padding: 0px;
            text-align: left;
        }
    }

</style>
@endpush

@section('content')
    <div class="main">
        <section class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li><a href="#">首页</a></li>
                            <li class="active">关于我们</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1>关于我们</h1>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="heading-primary center"><strong>公司大事记</strong></h2>
                </div>
                <div class="col-md-12">
                    <div class="mt-timeline-2 custom-sm-timeline">
                        <div class="mt-timeline-line"></div>
                        <ul class="mt-container">
                            <li class="mt-item">
                                <div class="mt-timeline-left time" data-appear-animation="slideInLeft">
                                    <div class="mt-content-container">
                                        <h4>1997年</h4>
                                    </div>
                                </div>
                                <div class="mt-timeline-icon">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <div class="mt-timeline-right event" data-appear-animation="slideInRight"
                                     data-appear-animation-delay="600">
                                    <div class="mt-content-container">
                                        <h4>万盛昌实业有限公司引进新项目内部讨论通过并进入筹备期</h4>
                                        <p>“桶装水生产销售项目”获批后，开始筹建厂房，购买设备，开始试生产</p>
                                    </div>
                                </div>
                            </li>
                            <li class="mt-item">
                                <div class="mt-timeline-left event" data-appear-animation="slideInLeft"
                                     data-appear-animation-delay="600">
                                    <div class="mt-content-container">
                                        <h4>与回民区计经委开展合作</h4>
                                        <p>由回民区计经委作为改革试点，确立“已改善市民饮水质量为己任”的办厂宗旨，确立“捆绑销售、买机赠水、买水赠机”的销售战略，并全面铺开桶装水销售</p>
                                    </div>
                                </div>
                                <div class="mt-timeline-icon">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <div class="mt-timeline-right time" data-appear-animation="slideInRight">
                                    <div class="mt-content-container">
                                        <h4>1998年</h4>
                                    </div>
                                </div>
                            </li>
                            <li class="mt-item">
                                <div class="mt-timeline-left time" data-appear-animation="slideInLeft">
                                    <div class="mt-content-container">
                                        <h4>2000年</h4>
                                    </div>
                                </div>
                                <div class="mt-timeline-icon">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <div class="mt-timeline-right event" data-appear-animation="slideInRight"
                                     data-appear-animation-delay="600">
                                    <div class="mt-content-container">
                                        <h4>与“内蒙古晨报”开展合作</h4>
                                        <p>通过送水站与送水员进行报纸配送与礼品派送</p>
                                    </div>
                                </div>
                            </li>
                            <li class="mt-item">
                                <div class="mt-timeline-left event" data-appear-animation="slideInLeft"
                                     data-appear-animation-delay="600">
                                    <div class="mt-content-container">
                                        <h4>与回民区教育局展开合作</h4>
                                        <p>为回民区所属学校提供饮水机，送水服务，试用插卡饮水机等先进设备，把为各学校提供健康饮水作为重点项目</p>
                                    </div>
                                </div>
                                <div class="mt-timeline-icon">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <div class="mt-timeline-right time" data-appear-animation="slideInRight">
                                    <div class="mt-content-container">
                                        <h4>2003年</h4>
                                    </div>
                                </div>
                            </li>
                            <li class="mt-item">
                                <div class="mt-timeline-left time" data-appear-animation="slideInLeft">
                                    <div class="mt-content-container">
                                        <h4>2004年</h4>
                                    </div>
                                </div>
                                <div class="mt-timeline-icon">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <div class="mt-timeline-right event" data-appear-animation="slideInRight"
                                     data-appear-animation-delay="600">
                                    <div class="mt-content-container">
                                        <h4>厂址变迁</h4>
                                        <p>原厂址坝口子村因国家植物园游乐园征用，迁至内蒙古地矿局下属单位水质检测总站内</p>
                                    </div>
                                </div>
                            </li>
                            <li class="mt-item">
                                <div class="mt-timeline-left event" data-appear-animation="slideInLeft"
                                     data-appear-animation-delay="600">
                                    <div class="mt-content-container">
                                        <h4>接手伊利桶装水项目，并购水厂</h4>
                                        <p>内蒙古伊利公司桶装水项目停产，由我公司接受，处理善后，延续过渡供水，同年并购“清源水厂”，“安吉尔水厂”等，维护了呼市水市场的稳定发展</p>
                                    </div>
                                </div>
                                <div class="mt-timeline-icon">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <div class="mt-timeline-right time" data-appear-animation="slideInRight">
                                    <div class="mt-content-container">
                                        <h4>2005年</h4>
                                    </div>
                                </div>
                            </li>
                            <li class="mt-item">
                                <div class="mt-timeline-left event" data-appear-animation="slideInLeft"
                                     data-appear-animation-delay="600">
                                    <div class="mt-content-container">
                                        <h4>更名“呼和浩特市万盛昌水业饮料有限公司”</h4>
                                        <p>我公司成为第一批入驻金山开发区的企业，并更名“呼和浩特市万盛昌水业饮料有限公司”</p>
                                    </div>
                                </div>
                                <div class="mt-timeline-icon">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <div class="mt-timeline-right time" data-appear-animation="slideInRight">
                                    <div class="mt-content-container">
                                        <h4>2006年</h4>
                                    </div>
                                </div>
                            </li>
                            <li class="mt-item">
                                <div class="mt-timeline-left time" data-appear-animation="slideInLeft">
                                    <div class="mt-content-container">
                                        <h4>2009年</h4>
                                    </div>
                                </div>
                                <div class="mt-timeline-icon">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <div class="mt-timeline-right event" data-appear-animation="slideInRight"
                                     data-appear-animation-delay="600">
                                    <div class="mt-content-container">
                                        <h4>水业生产基地二期改造</h4>
                                        <p>扩大生产面积5000平米，扩充为二条生产线，生产能力扩大到日产10000桶桶装水，并通过“环境评价与验收”</p>
                                    </div>
                                </div>
                            </li>
                            <li class="mt-item">
                                <div class="mt-timeline-left event" data-appear-animation="slideInLeft"
                                     data-appear-animation-delay="600">
                                    <div class="mt-content-container">
                                        <h4>呼叫中心平台上线</h4>
                                        <p>公司花巨资引进968288呼叫中心系统，客服系统全面升级，为顾客带来更便捷的服务</p>
                                    </div>
                                </div>
                                <div class="mt-timeline-icon">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <div class="mt-timeline-right time" data-appear-animation="slideInRight">
                                    <div class="mt-content-container">
                                        <h4>2013年</h4>
                                    </div>
                                </div>
                            </li>
                            <li class="mt-item">
                                <div class="mt-timeline-left time" data-appear-animation="slideInLeft">
                                    <div class="mt-content-container">
                                        <h4>2015年</h4>
                                    </div>
                                </div>
                                <div class="mt-timeline-icon">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <div class="mt-timeline-right event" data-appear-animation="slideInRight"
                                     data-appear-animation-delay="600">
                                    <div class="mt-content-container">
                                        <h4>水业生产基地三期改造</h4>
                                        <p>
                                            引进国外最新的水处理设备和技术，完成了制水工艺技术改进，原有生产线升级为3条全自动制水生产线，包括整理、洗桶、热冲洗、无菌灌装、自动套袋、热塑封口、自动码垛装卸等等工艺流程，
                                            使公司水处理能力达到了每小时100吨，成为了本地区最具规模的专业生产瓶、桶装水的基地，成为了城市应急供水综合服务商</p>
                                    </div>
                                </div>
                            </li>
                            <li class="mt-item">
                                <div class="mt-timeline-left event" data-appear-animation="slideInLeft"
                                     data-appear-animation-delay="600">
                                    <div class="mt-content-container">
                                        <h4>内蒙古政协调研组视察万盛昌水业</h4>
                                        <p>内蒙古政协副主席董恒宇、陈羽两位副主席带队，一行二十多人调研组深入呼和浩特市万盛昌水业饮料公司，实地调研企业生产经营状况</p>
                                    </div>
                                </div>
                                <div class="mt-timeline-icon">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <div class="mt-timeline-right time" data-appear-animation="slideInRight">
                                    <div class="mt-content-container">
                                        <h4>2016年</h4>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <div class="container mt-lg mb-lg" data-appear-animation="fadeInLeft">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading heading-border heading-middle-border heading-middle-border-center center">
                        <h2><span class="inverted">经营宗旨</span></h2>
                    </div>
                </div>
                <h4 class="center custom-text-color">已改善市民饮水质量为己认</h4>
            </div>
        </div>
        <div class="container pt-lg pb-lg" data-appear-animation="fadeInLeft">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading heading-border heading-middle-border heading-middle-border-center center">
                        <h2><span class="inverted">企业精神</span></h2>
                    </div>
                </div>
                <h4 class="center custom-text-color">专注、专业、创新、高效</h4>
            </div>
        </div>
        <div class="container pt-lg pb-lg" data-appear-animation="fadeInLeft">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading heading-border heading-middle-border heading-middle-border-center center">
                        <h2><span class="inverted">企业愿景</span></h2>
                    </div>
                </div>
                <h4 class="center custom-text-color">打造一流品牌，争创一流企业，为员工创造一个实现人生价值的平台</h4>
                <h4 class="center custom-text-color">为消费者提供健康、放心的产品，为地区创造一个极富竞争力与影响力的优秀企业</h4>
            </div>
        </div>
        <div class="container pt-lg pb-lg">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading heading-border heading-middle-border heading-middle-border-center center" data-appear-animation="fadeInLeft">
                        <h2><span class="inverted">资质荣誉</span></h2>
                    </div>
                    <div class="lightbox"
                         data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">
                        <div class="owl-carousel owl-theme show-nav-hover"
                             data-plugin-options="{'items': 5, 'autoplay': true, 'autoplayTimeout': 3000, 'loop': false, 'nav': true, 'dots': false}">
                            <div>
                                <a class="img-thumbnail img-thumbnail-hover-icon"
                                   href="{{ asset('images/honor/01.jpg') }}">
                                    <img class="img-responsive" src="{{ asset('images/honor/01.jpg') }}" alt="">
                                </a>
                            </div>
                            <div>
                                <a class="img-thumbnail img-thumbnail-hover-icon"
                                   href="{{ asset('images/honor/02.jpg') }}">
                                    <img class="img-responsive" src="{{ asset('images/honor/02.jpg') }}" alt="">
                                </a>
                            </div>
                            <div>
                                <a class="img-thumbnail img-thumbnail-hover-icon"
                                   href="{{ asset('images/honor/03.jpg') }}">
                                    <img class="img-responsive" src="{{ asset('images/honor/03.jpg') }}" alt="">
                                </a>
                            </div>
                            <div>
                                <a class="img-thumbnail img-thumbnail-hover-icon"
                                   href="{{ asset('images/honor/04.jpg') }}">
                                    <img class="img-responsive" src="{{ asset('images/honor/04.jpg') }}" alt="">
                                </a>
                            </div>
                            <div>
                                <a class="img-thumbnail img-thumbnail-hover-icon"
                                   href="{{ asset('images/honor/05.jpg') }}">
                                    <img class="img-responsive" src="{{ asset('images/honor/05.jpg') }}" alt="">
                                </a>
                            </div>
                            <div>
                                <a class="img-thumbnail img-thumbnail-hover-icon"
                                   href="{{ asset('images/honor/06.jpg') }}">
                                    <img class="img-responsive" src="{{ asset('images/honor/06.jpg') }}" alt="">
                                </a>
                            </div>
                            <div>
                                <a class="img-thumbnail img-thumbnail-hover-icon"
                                   href="{{ asset('images/honor/07.jpg') }}">
                                    <img class="img-responsive" src="{{ asset('images/honor/07.jpg') }}" alt="">
                                </a>
                            </div>
                            <div>
                                <a class="img-thumbnail img-thumbnail-hover-icon"
                                   href="{{ asset('images/honor/08.jpg') }}">
                                    <img class="img-responsive" src="{{ asset('images/honor/08.jpg') }}" alt="">
                                </a>
                            </div>
                            <div>
                                <a class="img-thumbnail img-thumbnail-hover-icon"
                                   href="{{ asset('images/honor/09.jpg') }}">
                                    <img class="img-responsive" src="{{ asset('images/honor/09.jpg') }}" alt="">
                                </a>
                            </div>
                            <div>
                                <a class="img-thumbnail img-thumbnail-hover-icon"
                                   href="{{ asset('images/honor/10.jpg') }}">
                                    <img class="img-responsive" src="{{ asset('images/honor/10.jpg') }}" alt="">
                                </a>
                            </div>
                            <div>
                                <a class="img-thumbnail img-thumbnail-hover-icon"
                                   href="{{ asset('images/honor/11.jpg') }}">
                                    <img class="img-responsive" src="{{ asset('images/honor/11.jpg') }}" alt="">
                                </a>
                            </div>
                            <div>
                                <a class="img-thumbnail img-thumbnail-hover-icon"
                                   href="{{ asset('images/honor/12.jpg') }}">
                                    <img class="img-responsive" src="{{ asset('images/honor/12.jpg') }}" alt="">
                                </a>
                            </div>
                            <div>
                                <a class="img-thumbnail img-thumbnail-hover-icon"
                                   href="{{ asset('images/honor/13.jpg') }}">
                                    <img class="img-responsive" src="{{ asset('images/honor/13.jpg') }}" alt="">
                                </a>
                            </div>
                            <div>
                                <a class="img-thumbnail img-thumbnail-hover-icon"
                                   href="{{ asset('images/honor/14.jpg') }}">
                                    <img class="img-responsive" src="{{ asset('images/honor/14.jpg') }}" alt="">
                                </a>
                            </div>
                            <div>
                                <a class="img-thumbnail img-thumbnail-hover-icon"
                                   href="{{ asset('images/honor/15.jpg') }}">
                                    <img class="img-responsive" src="{{ asset('images/honor/15.jpg') }}" alt="">
                                </a>
                            </div>
                            <div>
                                <a class="img-thumbnail img-thumbnail-hover-icon"
                                   href="{{ asset('images/honor/16.jpg') }}">
                                    <img class="img-responsive" src="{{ asset('images/honor/16.jpg') }}" alt="">
                                </a>
                            </div>
                            <div>
                                <a class="img-thumbnail img-thumbnail-hover-icon"
                                   href="{{ asset('images/honor/17.jpg') }}">
                                    <img class="img-responsive" src="{{ asset('images/honor/17.jpg') }}" alt="">
                                </a>
                            </div>
                            <div>
                                <a class="img-thumbnail img-thumbnail-hover-icon"
                                   href="{{ asset('images/honor/18.jpg') }}">
                                    <img class="img-responsive" src="{{ asset('images/honor/18.jpg') }}" alt="">
                                </a>
                            </div>
                            <div>
                                <a class="img-thumbnail img-thumbnail-hover-icon"
                                   href="{{ asset('images/honor/19.jpg') }}">
                                    <img class="img-responsive" src="{{ asset('images/honor/19.jpg') }}" alt="">
                                </a>
                            </div>
                            <div>
                                <a class="img-thumbnail img-thumbnail-hover-icon"
                                   href="{{ asset('images/honor/20.jpg') }}">
                                    <img class="img-responsive" src="{{ asset('images/honor/20.jpg') }}" alt="">
                                </a>
                            </div>
                            <div>
                                <a class="img-thumbnail img-thumbnail-hover-icon"
                                   href="{{ asset('images/honor/21.jpg') }}">
                                    <img class="img-responsive" src="{{ asset('images/honor/21.jpg') }}" alt="">
                                </a>
                            </div>
                            <div>
                                <a class="img-thumbnail img-thumbnail-hover-icon"
                                   href="{{ asset('images/honor/22.jpg') }}">
                                    <img class="img-responsive" src="{{ asset('images/honor/22.jpg') }}" alt="">
                                </a>
                            </div>
                            <div>
                                <a class="img-thumbnail img-thumbnail-hover-icon"
                                   href="{{ asset('images/honor/23.jpg') }}">
                                    <img class="img-responsive" src="{{ asset('images/honor/23.jpg') }}" alt="">
                                </a>
                            </div>
                            <div>
                                <a class="img-thumbnail img-thumbnail-hover-icon"
                                   href="{{ asset('images/honor/24.jpg') }}">
                                    <img class="img-responsive" src="{{ asset('images/honor/24.jpg') }}" alt="">
                                </a>
                            </div>
                            <div>
                                <a class="img-thumbnail img-thumbnail-hover-icon"
                                   href="{{ asset('images/honor/25.jpg') }}">
                                    <img class="img-responsive" src="{{ asset('images/honor/25.jpg') }}" alt="">
                                </a>
                            </div>
                            <div>
                                <a class="img-thumbnail img-thumbnail-hover-icon"
                                   href="{{ asset('images/honor/26.jpg') }}">
                                    <img class="img-responsive" src="{{ asset('images/honor/26.jpg') }}" alt="">
                                </a>
                            </div>
                            <div>
                                <a class="img-thumbnail img-thumbnail-hover-icon"
                                   href="{{ asset('images/honor/27.jpg') }}">
                                    <img class="img-responsive" src="{{ asset('images/honor/27.jpg') }}" alt="">
                                </a>
                            </div>
                            <div>
                                <a class="img-thumbnail img-thumbnail-hover-icon"
                                   href="{{ asset('images/honor/28.jpg') }}">
                                    <img class="img-responsive" src="{{ asset('images/honor/28.jpg') }}" alt="">
                                </a>
                            </div>
                            <div>
                                <a class="img-thumbnail img-thumbnail-hover-icon"
                                   href="{{ asset('images/honor/29.jpg') }}">
                                    <img class="img-responsive" src="{{ asset('images/honor/29.jpg') }}" alt="">
                                </a>
                            </div>
                            <div>
                                <a class="img-thumbnail img-thumbnail-hover-icon"
                                   href="{{ asset('images/honor/30.jpg') }}">
                                    <img class="img-responsive" src="{{ asset('images/honor/30.jpg') }}" alt="">
                                </a>
                            </div>
                            <div>
                                <a class="img-thumbnail img-thumbnail-hover-icon"
                                   href="{{ asset('images/honor/31.jpg') }}">
                                    <img class="img-responsive" src="{{ asset('images/honor/31.jpg') }}" alt="">
                                </a>
                            </div>
                            <div>
                                <a class="img-thumbnail img-thumbnail-hover-icon"
                                   href="{{ asset('images/honor/32.jpg') }}">
                                    <img class="img-responsive" src="{{ asset('images/honor/32.jpg') }}" alt="">
                                </a>
                            </div>
                            <div>
                                <a class="img-thumbnail img-thumbnail-hover-icon"
                                   href="{{ asset('images/honor/33.jpg') }}">
                                    <img class="img-responsive" src="{{ asset('images/honor/33.jpg') }}" alt="">
                                </a>
                            </div>
                            <div>
                                <a class="img-thumbnail img-thumbnail-hover-icon"
                                   href="{{ asset('images/honor/34.jpg') }}">
                                    <img class="img-responsive" src="{{ asset('images/honor/34.jpg') }}" alt="">
                                </a>
                            </div>
                            <div>
                                <a class="img-thumbnail img-thumbnail-hover-icon"
                                   href="{{ asset('images/honor/35.jpg') }}">
                                    <img class="img-responsive" src="{{ asset('images/honor/35.jpg') }}" alt="">
                                </a>
                            </div>
                            <div>
                                <a class="img-thumbnail img-thumbnail-hover-icon"
                                   href="{{ asset('images/honor/36.jpg') }}">
                                    <img class="img-responsive" src="{{ asset('images/honor/36.jpg') }}" alt="">
                                </a>
                            </div>
                            <div>
                                <a class="img-thumbnail img-thumbnail-hover-icon"
                                   href="{{ asset('images/honor/37.jpg') }}">
                                    <img class="img-responsive" src="{{ asset('images/honor/37.jpg') }}" alt="">
                                </a>
                            </div>
                            <div>
                                <a class="img-thumbnail img-thumbnail-hover-icon"
                                   href="{{ asset('images/honor/38.jpg') }}">
                                    <img class="img-responsive" src="{{ asset('images/honor/38.jpg') }}" alt="">
                                </a>
                            </div>
                            <div>
                                <a class="img-thumbnail img-thumbnail-hover-icon"
                                   href="{{ asset('images/honor/39.jpg') }}">
                                    <img class="img-responsive" src="{{ asset('images/honor/39.jpg') }}" alt="">
                                </a>
                            </div>
                            <div>
                                <a class="img-thumbnail img-thumbnail-hover-icon"
                                   href="{{ asset('images/honor/40.jpg') }}">
                                    <img class="img-responsive" src="{{ asset('images/honor/40.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pt-lg pb-lg">
            <div class="row" data-appear-animation="fadeInLeft">
                <div class="col-md-12">
                    <div class="heading heading-border heading-middle-border heading-middle-border-center center">
                        <h2><span class="inverted">团队风采</span></h2>
                    </div>
                </div>
                <div class="col-md-3">
                    <a class="lightbox"
                       href="{{ asset('images/team/1-3.jpg') }}" data-plugin-options="{'type':'image'}">
                        <img src="{{ asset('images/team/1-3.jpg') }}" alt="" class="img-responsive">
                    </a>
                    <a class="lightbox"
                       href="{{ asset('images/team/1-1.jpg') }}" data-plugin-options="{'type':'image'}">
                        <img src="{{ asset('images/team/1-1.jpg') }}" alt="" class="img-responsive">
                    </a>
                </div>
                <div class="col-md-6">
                    <a class="lightbox"
                       href="{{ asset('images/team/1-2.jpg') }}" data-plugin-options="{'type':'image'}">
                        <img src="{{ asset('images/team/1-2.jpg') }}" alt="" class="img-responsive">
                    </a>
                </div>
                <div class="col-md-3">
                    <a class="lightbox"
                       href="{{ asset('images/team/1-5.jpg') }}" data-plugin-options="{'type':'image'}">
                        <img src="{{ asset('images/team/1-5.jpg') }}" alt="" class="img-responsive">
                    </a>
                    <a class="lightbox"
                       href="{{ asset('images/team/1-4.jpg') }}" data-plugin-options="{'type':'image'}">
                        <img src="{{ asset('images/team/1-4.jpg') }}" alt="" class="img-responsive">
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection