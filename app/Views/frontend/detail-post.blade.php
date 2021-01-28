@extends('layouts.frontend.main')

@section('content')
    <!-- Content: Post detail-->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="content__heading">
                        <div class="content__title">
                            <h1 class="color-red">{{ $post->title }}</h1>
                        </div>
                        <div class="content__time"><span>{{ $post->displayTimePost() }}</span></div>
                    </div>
                    <div class="content_body text-justify">

                       {!! $post->content !!}

                        <div class="action">
                            @if (!empty($previousPost))
                                <a class="color-red" href="{{ frontendRouter('post.detail', ['id' => $previousPost->getKey()]) }}">
                                    <small><< {{ $previousPost->title }}</small>
                                </a>
                                <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            @endif

                            @if (!empty($nextPost))
                                <a class="color-red" href="{{ frontendRouter('post.detail', ['id' => $nextPost->getKey()]) }}">
                                    <small>{{ $nextPost->title }} >></small>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
