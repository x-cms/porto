@extends('porto::layouts.master')

@section('content')
    <div class="main">
        <section class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li><a href="#">首页</a></li>
                            <li class="active">联系我们</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1>联系我们</h1>
                    </div>
                </div>
            </div>
        </section>
        <div id="baiduMap" class="google-map"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="alert alert-success hidden mt-lg" id="contactSuccess">
                        <strong>Success!</strong> Your message has been sent to us.
                    </div>
                    <div class="alert alert-danger hidden mt-lg" id="contactError">
                        <strong>Error!</strong> There was an error sending your message.
                        <span class="font-size-xs mt-sm display-block" id="mailErrorMessage"></span>
                    </div>
                    <h2 class="mb-sm mt-sm"><strong>留言</strong></h2>
                    <form id="contactForm" action="php/contact-form.php" method="POST" novalidate="novalidate">
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label>姓名 *</label>
                                    <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required="" aria-required="true">
                                </div>
                                <div class="col-md-6">
                                    <label>邮箱 *</label>
                                    <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required="" aria-required="true">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label>主题</label>
                                    <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required="" aria-required="true">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label>内容 *</label>
                                    <textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message" required="" aria-required="true"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" value="提交" class="btn btn-primary btn-lg mb-xlg" data-loading-text="Loading...">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <h4 class="heading-primary mt-lg"><strong>如果感兴趣，赶快联系我们吧！</strong></h4>
                    <p>凭借先进的设备和完善的体系，优质的水源地和有序的生产线，专业的呼叫中心和高效的配送团队，为您提供最便捷最有价值的服务</p>
                    <hr>
                    <h4 class="heading-primary"><strong>办公地点</strong></h4>
                    <ul class="list list-icons list-icons-style-3 mt-xlg">
                        <li><i class="fa fa-phone"></i> <strong>电话：</strong> 0471-6633445</li>
                        <li><i class="fa fa-fax"></i> <strong>传真：</strong> 0471-6210308</li>
                        <li><i class="fa fa-map-marker"></i> <strong>地址：</strong> 呼和浩特市回民区南马路26号</li>
                    </ul>
                    <hr>
                    <h4 class="heading-primary"><strong>营业时间</strong></h4>
                    <ul class="list list-icons list-dark mt-xlg">
                        <li><i class="fa fa-clock-o"></i>上午8:00 ~ 下午18:00</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
<script>
    /**
     * 异步加载
     */
    function asyncLoading()
    {
        let script = document.createElement("script");
        script.type = "text/javascript";
        script.src = "http://api.map.baidu.com/api?v=2.0&ak=tI706mHYCX6oXoUCsZDsfUIOy42KDcFf&callback=initMap";
        document.body.appendChild(script);
    }

    /**
     * 初始化地图
     */
    function initMap()
    {
        let map = new BMap.Map('baiduMap');
        map.centerAndZoom(new BMap.Point(111.66368,40.830809), 10);
        let local = new BMap.LocalSearch(map, {
            renderOptions: {map: map, panel: "r-result"}
        });
        local.search("万盛昌客服配送中心");
    }
    window.onload = asyncLoading;  //异步加载地图
</script>
@endpush