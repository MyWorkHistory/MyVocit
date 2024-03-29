@extends('layouts.app')
@section('seo')
    @php $shareurl = (url('exchange') .'/'. $post->id) @endphp
    <meta property="og:title" content="{!! str_replace('Get', 'I received ', $post->parent_short_description )!!}" />
    <meta property="og:description" content="You can also get yours" />
    <meta property="og:type" content="image/jpeg">
    <meta property="og:image:width" content="1200"/>
    <meta property="og:image:height" content="630"/>
    <meta property="og:url" content="{{$shareurl}}" />
    <meta property="og:image" content="{{$post->lg_url ? $post->lg_url : $post->attachments[0]->url}}" />
@endsection
@section('content')
    <div class="ui container post-details" id="stickyContainer">
        <exchange-component
            :active-post="{{collect($post)}}"
            :is-logged-in="{{json_encode(auth()->check())}}"
            :sandbox-user="{{json_encode(auth()->check() ? auth()->user()->sandbox_user : false)}}"
            :exchange-post="true"
            :share-url="{{json_encode($shareurl)}}"
        ></exchange-component>
    </div>
@endsection

