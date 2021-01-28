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
                            <li>
                                <a class="blog__item" href="v-blog/arsenal-arteta-dung-nguoi-dung-thoi-diem">
                                    <h4 class="item-title f18">Arsenal - Arteta đúng người đúng thời điểm.</h4>
                                    <small class="item-time">Ngày 13 tháng 1 năm 2020</small>
                                    <p class="item-description">
                                        Arsenal - Mikel Arteta - người mang trong mình 3 bộ não - sự kết hợp đúng người lẫn thời điểm để hy vọng.
                                    </p>
                                </a>
                            </li>
                            <br>

                            <li>
                                <a class="blog__item" href="v-blog/ngay-cuoi-thap-ki">
                                    <h4 class="item-title f18">Ngày cuối thập kỉ.</h4>
                                    <small class="item-time">Ngày 31 tháng 12 năm 2019</small>
                                    <p class="item-description">
                                        Ngày cuối của thập kỉ, dành trọn sự iu thương cho bản thân mình.
                                    </p>
                                </a>
                            </li>
                            <br>

                            <li>
                                <a class="blog__item" href="v-blog/nhung-ngay-cuoi-tuan-ban-ron">
                                    <h4 class="item-title f18">Những ngày cuối tuần bận rộn.</h4>
                                    <small class="item-time">Ngày 12 tháng 12 năm 2019</small>
                                    <p class="item-description">
                                        Qua rồi, những ngày cuối tuần ngủ nướng, mẹ gọi mà còn làm nũng mẹ cho con ngủ thêm một chút...
                                    </p>
                                </a>
                            </li>
                            <br>

                            <li>
                                <a class="blog__item" href="v-blog/chung-ta-nen-co-cho-minh-nhung-su-lua-chon">
                                    <h4 class="item-title f18">Chúng ta nên có cho mình những sự lựa chọn.</h4>
                                    <small class="item-time">Ngày 5 tháng 12 năm 2019</small>
                                    <p class="item-description">
                                        Năm đó, 1 cái đề toán, 10 câu, 180p, làm 9 câu đầu cứ cho là hết 23 phút...
                                    </p>
                                </a>
                            </li>
                            <br>

                            <li>
                                <a class="blog__item" href="/v-blog/nguoi-thay-va-moi-tinh-7-nam">
                                    <h4 class="item-title f18">Người thầy, mối tình 7 năm và hồi kết.</h4>
                                    <small class="item-time">Ngày 11 tháng 10 năm 2019</small>
                                    <p class="item-description">
                                        Trong cái tiết trời se se lạnh những ngày đầu thu, của những con chữ cuối cùng trên giảng đường,
                                        đánh dấu cột mốc mối tình 7 năm chuẩn bị tới hồi kết.
                                        Con tình cờ gặp lại người thầy năm xưa....
                                    </p>
                                </a>
                            </li>
                            <br>

                            <li>
                                <a class="blog__item" href="/v-blog/chung-ta-lon-ca-roi">
                                    <h4 class="item-title f18">Chúng ta lớn cả rồi.</h4>
                                    <small class="item-time">Ngày 24 tháng 8 năm 2019</small>
                                    <p class="item-description">
                                        Có lớn, có khôn rồi mới hiểu, trên đời này, chẳng sợ gì,
                                        chỉ sợ một ngày mai nhìn thấy những giọt lệ lăn dài trên đôi mắt của ba mẹ....
                                    </p>
                                </a>
                            </li>
                            <br>

                            <li>
                                <a class="blog__item" href="/v-blog/mot-thoang-bach-khoa-trong-toi">
                                    <h4 class="item-title f18">Một thoáng bách khoa trong tôi.</h4>
                                    <small class="item-time">Ngày 21 tháng 7 năm 2019</small>
                                    <p class="item-description">
                                        Gần đây, tôi hay nhận được rất nhiều cuộc điện thoại từ các phụ huynh ở quê, có con vừa thi đại học,
                                        và có nguyện vọng cho con vào học Đại Học Bách Khoa Hà Nội...
                                    </p>
                                </a>
                            </li>
                            <br>

                            <li>
                                <a class="blog__item" href="/v-blog/cau-chuyen-ve-chuyen-xe-muon">
                                    <h4 class="item-title f18">Câu chuyện về quê trên chuyến xe muộn.</h4>
                                    <small class="item-time">Ngày 7 tháng 7 năm 2019</small>
                                    <p class="item-description">
                                        Bài viết được trích từ một người bạn, người em mình mới quen, xin phép được gọi là cô
                                        gái...
                                    </p>
                                </a>
                            </li>
                            <br>

                            <li>
                                <a class="blog__item" href="/v-blog/loi-xin-loi-ba-chan-thanh">
                                    <h4 class="item-title f18">Lời xin lỗi ba chân thành</h4>
                                    <small class="item-time">Ngày 24 tháng 3 năm 2019</small>
                                    <p class="item-description">
                                        Xin lỗi ba vì tất cả những chuyện đã sảy ra. Khi con đã để lỡ mất những nguyện vọng của
                                        ba...
                                    </p>
                                </a>
                            </li>
                        </ul>
                        <div class="text-right">
                            <a class="more color-black-default " href="">» Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
