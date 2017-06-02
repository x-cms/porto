@extends('porto::layouts.master')

@section('content')
<div class="main">
    <section class="page-header mb-none">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">首页</a></li>
                        <li class="active">{{ $page->title }}</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>{{ $page->title }}</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="section mb-none mt-none">
        <div class="container">
            {!! $page->content or '' !!}
        </div>
    </div>
</div>
@endsection