@extends('porto::layouts.master')

@section('content')
    <div class="main">
        <section class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li><a href="#">首页</a></li>
                            <li class="active">{{ $category->name }}</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1>{{ $category->name }}</h1>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <ul class="nav nav-pills sort-source" data-sort-id="portfolio" data-option-key="filter"
                data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
                <li data-option-value="*" class="active"><a href="#">全部</a></li>
                @foreach($category->children as $child)
                    <li data-option-value=".{{ array_get($child, 'slug') }}"><a
                                href="#">{{ array_get($child, 'name') }}</a></li>
                @endforeach
            </ul>
            <hr>
            <div class="row">
                <div class="sort-destination-loader sort-destination-loader-showing">
                    <ul class="portfolio-list sort-destination" data-sort-id="portfolio">
                        @foreach($category->children as $child)
                            <li class="col-md-12 isotope-item mt-xl {{ array_get($child, 'slug') }}">
                                @php $posts = get_posts_by_category(array_get($child, 'id')); @endphp
                                @foreach($posts as $post)
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="portfolio-item">
                                                <a href="portfolio-single-small-slider.html">
                                                <span class="thumb-info thumb-info-no-zoom thumb-info-lighten">
                                                    <span class="thumb-info-wrapper">
                                                        <img src="img/projects/project-short.jpg"
                                                             class="img-responsive" alt="">
                                                        <span class="thumb-info-action">
                                                            <span class="thumb-info-action-icon"><i
                                                                        class="fa fa-link"></i></span>
                                                        </span>
                                                    </span>
                                                </span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="portfolio-info">
                                                <div class="row">
                                                    <div class="col-md-12 center">
                                                        <ul>
                                                            <li>
                                                                <i class="fa fa-calendar"></i> {{ $post->publish_at }}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <h4 class="heading-primary">{{ $post->title }}</h4>
                                            <p class="mt-xlg">{{ $post->description }}</p>
                                            <a href="{{ $post->slug }}"
                                               class="btn btn-primary">查看详情</a>
                                        </div>
                                    </div>
                                @endforeach
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection