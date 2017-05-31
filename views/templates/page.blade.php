@extends('porto::layouts.master')

@section('content')
<div class="container">
    <article>
        {!! $object->content or '' !!}
    </article>
</div>
@endsection