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
                        <li class="list_post_item">
                            <a href="v-blog/arsenal-arteta-dung-nguoi-dung-thoi-diem" class="item_title">Arsenal - Arteta đúng người đúng thời điểm.</a>
                            <br>
                            <small class="item-time">Ngày 13 tháng 1 năm 2020</small>
                            <p class="item-description">
                                Arsenal - Mikel Arteta - người mang trong mình 3 bộ não - sự kết hợp đúng người lẫn thời điểm để hy vọng.
                            </p>
                        </li>

                        <li class="list_post_item">
                            <a href="v-blog/ngay-cuoi-thap-ki" class="item_title">Ngày cuối thập kỉ.</a>
                            <br>
                            <small class="item-time">Ngày 31 tháng 12 năm 2019</small>
                            <p class="item-description">
                                Ngày cuối của thập kỉ, dành trọn sự iu thương cho bản thân mình.
                            </p>
                        </li>

                        <li class="list_post_item">
                            <a href="/v-blog/nhung-ngay-cuoi-tuan-ban-ron" class="item_title">Những ngày cuối tuần bận rộn.</a>
                            <br>
                            <small class="item-time">Ngày 12 tháng 12 năm 2019</small>
                            <p class="item-description">
                                Qua rồi, những ngày cuối tuần ngủ nướng, mẹ gọi mà còn làm nũng mẹ cho con ngủ thêm một chút...
                            </p>
                        </li>

                        <li class="list_post_item">
                            <a href="/v-blog/chung-ta-nen-co-cho-minh-nhung-su-lua-chon" class="item_title">Chúng ta nên có cho mình những sự lựa chọn.</a>
                            <br>
                            <small class="item-time">Ngày 5 tháng 12 năm 2019</small>
                            <p class="item-description">
                                Năm đó, 1 cái đề toán, 10 câu, 180p, làm 9 câu đầu cứ cho là hết 23 phút...
                            </p>
                        </li>

                        <li class="list_post_item">
                            <a href="/v-blog/nguoi-thay-va-moi-tinh-7-nam" class="item_title">Người thầy, mối tình 7 năm và hồi kết.</a>
                            <br>
                            <small class="item-time">Ngày 11 tháng 10 năm 2019</small>
                            <p class="item-description">
                                Trong cái tiết trời se se lạnh những ngày đầu thu, của những con chữ cuối cùng trên giảng đường,
                                đánh dấu cột mốc mối tình 7 năm chuẩn bị tới hồi kết.
                                Con tình cờ gặp lại người thầy năm xưa....
                            </p>
                        </li>

                        <li class="list_post_item">
                            <a href="/v-blog/chung-ta-lon-ca-roi" class="item_title">Chúng ta lớn cả rồi.</a>
                            <br>
                            <small class="item-time">Ngày 24 tháng 8 năm 2019</small>
                            <p class="item-description">
                                Có lớn, có khôn rồi mới hiểu, trên đời này, chẳng sợ gì,
                                chỉ sợ một ngày mai nhìn thấy những giọt lệ lăn dài trên đôi mắt của ba mẹ....
                            </p>
                        </li>

                        <li class="list_post_item">
                            <a href="/v-blog/mot-thoang-bach-khoa-trong-toi" class="item_title">Một thoáng bách khoa trong tôi.</a>
                            <br>
                            <small class="item-time">Ngày 21 tháng 7 năm 2019</small>
                            <p class="item-description">
                                Gần đây, tôi hay nhận được rất nhiều cuộc điện thoại từ các phụ huynh ở quê, có con vừa thi đại học
                                , và có nguyện vọng cho con vào học Bách Khoa.
                            </p>
                        </li>

                        <li class="list_post_item">
                            <a href="/v-blog/cau-chuyen-ve-chuyen-xe-muon" class="item_title">Câu chuyện về quê trên chuyến xe muộn.</a>
                            <br>
                            <small class="item-time">Ngày 7 tháng 7 năm 2019</small>
                            <p class="item-description">
                                Bài viết được trích từ một người bạn, người em mình mới quen, xin phép được gọi em là cô gái...
                            </p>
                        </li>

                        <li class="list_post_item">
                            <a href="/v-blog/loi-xin-loi-ba-chan-thanh" class="item_title">Lời xin lỗi ba chân thành</a>
                            <br>
                            <small class="item-time">Ngày 24 tháng 3 năm 2019</small>
                            <p class="item-description">
                                Xin lỗi ba vì tất cả những chuyện đã sảy ra. Khi con đã để lỡ mất những nguyện vọng của ba...
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
@endsection
