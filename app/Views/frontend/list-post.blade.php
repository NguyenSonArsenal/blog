@extends('layouts.frontend.main')

@section('content')
    <div class="wrapper">
        <!-- Content: List posts -->
        <div class="rowx post" id="post">
            <div class="container">
                <p class="color-red f18 title">
                    <marquee><strong><i>Mãi là anh em. Hoặc là chúng ta cùng trên một con thuyền, hoặc chúng ta chẳng là gì của nhau cả. Tôi có quá nhiều bạn rồi.</i></strong></marquee>
                </p>

                <div class="contact-cover">
                    <img src="<?php assetsFrontend('assets/images/posts/cover.jpg')?>" alt="Nguyen Son Arsenal posts cover">
                </div>

                <div class="list_post_wrapper">
                    <ul class="list_post_ul">
                        @foreach($posts as $post)
                            <li class="list_post_item">
                                <a href="{{ frontendRouter('post.detail', ['id' => $post->getKey()]) }}" class="item_title">{{ $post->title }}</a>
                                <br>
                                <small class="item-time">{{ $post->displayTimePost() }}</small>
                                <p class="item-description">{{ $post->short_description }}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Pagination -->
                {{ $posts->appends(\Illuminate\Support\Facades\Request::all())->links('layouts.frontend.elements.structures._pagination')}}
            </div>
        </div>

    </div>
@endsection
