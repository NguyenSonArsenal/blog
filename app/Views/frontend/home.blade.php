@extends('layouts.frontend.main')

@section('content')
    <div class="wrapper">
        <div class="container">
            <!-- Description: Top page -->
            <div id="home">
                <div id="top" class="text-center">
                    <h1><a href="" class="link-profile"><span class="name">Nguyen Son Arsenal</span></a></h1>
                    <h3>
                        <span class="sp-break-line fadeInUp animated">Tự nhận mình là người khá hài hước. Cảm ơn bạn đã ghé thăm tường nhà Sơn</span>
                    </h3>
                    <p class="fadeInDown animated sort-description">
                        Bạn chỉ cần siêng thôi, bạn càng dễ đạt được. <br>
                        Còn bạn lười, chắc chắn bạn sẽ mãi như thời điểm vô tình đọc được những dòng này.
                    </p>
                </div>
                <div class="link-inline-block bounceIn animated">
                    <h2><a href="" class="">Xem thêm</a></h2>
                </div>
            </div>
        </div>

        <div class="block introduction block-bg ">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 sp">
                        <div class="user text-center">
                            <img src="<?php assetsFrontend('assets/images/posts/nguyen_son.jpg') ?>" width="100%" alt="me">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="intro-content text-justify">
                            <h2 class="homepage__title color-red">Xin chào</h2>
                            Mình là <b class="color-red">Nguyen Son Arsenal</b>. Tác giả là một người vui tính, sôi nổi, và hòa đồng. Đam mê lập trình web, thích
                            chơi thể thao và đi du lịch. <br><br>
                            Qua blog, tác giả mong muốn được chia sẻ thật nhiều những kiến thức cuộc sống dựa trên những kinh nghiệm,
                            những trải nghiệm thực tế trên con đường đời của chính bản thân cũng như các bài post từ những người bạn của tác giả.
                            Các bài viết đều mang tính cá nhân, và mong muốn lan tỏa sự chia sẻ tới tất cả mọi người.
                            <br><br>
                            Có bất kì liên hệ nào, xin vui lòng ping ngay cho tác giả tại địa chỉ: <a
                                    href="https://www.facebook.com/nguyen.son.9615" class="color-red">NguyenSonArsenal</a> <br>
                            Tác giả ngàn lần cúi đầu đội ơn💗.
                        </div>
                    </div>
                    <div class="col-sm-4 pc">
                        <div class="user text-center">
                            <img src="<?php assetsFrontend('assets/images/posts/nguyen_son.jpg') ?>" width="100%" alt="me">
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Content post -->
        <div id="blog" class="block blog home__blog">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <img class="img-fluid" src="<?php assetsFrontend('assets/images/home/1.jpg') ?>" alt="image name">
                    </div>
                    <div class="col-sm-6">
                        <h2 class="title color-red">Nhật kí sưu tầm</h2><br>
                        <ul class="list">
                            @foreach($lastPosts as $post)
                                <li>
                                    <a class="blog__item" href="{{ frontendRouter('post.detail', ['id' => $post->getKey()]) }}">
                                        <h4 class="item-title f18">{{ $post->title }}</h4>
                                        <small class="item-time">{{ $post->displayTimePost() }}</small>
                                        <p class="item-description">{{ $post->short_description }}</p>
                                    </a>
                                </li>
                                <br>
                            @endforeach
                        </ul>
                        <div class="text-right">
                            <a class="more color-black-default " href="{{ frontendRouter('post.list') }}">» Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
