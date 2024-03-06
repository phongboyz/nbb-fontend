<div>
    <!-- ne tranding slider End -->
    <div class="ss_addver_slider_wrapper">
        <div class="container">
            <div class="slider-area">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        @foreach ($slide as $key => $item)
                        <div class="item {{$key == 0 ? 'active' : '' }}">
                            <!-- <div class="ne_tran_label_wrapper"> -->
                                <div class="content lr_banner_content_inner_wrapper">
                                    <h2 data-animation="animated bounceInLeft">{{$item->name}}</h2>
                                </div>
                            <!-- </div> -->
                            <img class="d-block w-100" src="{{asset($item->img)}}" width="100%">
                        </div>
                        @endforeach
                        <div class="carousel-nevigation">
                            <a class="prev" href="#carousel-example-generic" role="button" data-slide="prev"> <i
                                    class="fa fa-angle-left"></i>
                            </a>
                            <a class="next" href="#carousel-example-generic" role="button" data-slide="next"> <i
                                    class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--main js file start-->
    <!--resent news Start-->
    <div class="ne_recent_news_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="ne_recent_left_side_wrapper">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="ne_recent_tabs_main_wrapper">
                                    <div class="ne_recent_heading_main_wrapper">
                                        <h2>Recent news</h2>
                                    </div>
                                    <ul class="nav nav-tabs ne_recent_tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#best" aria-controls="best"
                                                role="tab" data-toggle="tab">all</a>
                                        </li>
                                        <li role="presentation"><a href="#hot" aria-controls="hot" role="tab"
                                                data-toggle="tab">politics</a>
                                        </li>
                                        <li role="presentation"><a href="#trand" aria-controls="trand" role="tab"
                                                data-toggle="tab">technology</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="best">
                                        <div class="ss_featured_products">
                                            <div class="owl-carousel owl-theme">
                                                <div class="item">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="ne_re_left_top_main_wrapper">
                                                                <div class="ne_re_left_img_main_wrapper">
                                                                    <img src="{{asset('template/images/content/r1.jpg')}}"
                                                                        alt="img">
                                                                    <h2>Bussiness</h2>
                                                                </div>
                                                                <div class="ne_re_left_img_cont_main_wrapper">
                                                                    <h3><a href="#">Award of the year</a></h3>
                                                                    <ul class="ne_re_social1_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2022</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-clock-o"></i>
                                                                                &nbsp;07 : 00 am</a>
                                                                        </li>
                                                                    </ul>
                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor,
                                                                        nisi elit consequat ipsum, nec sagittis sem nibh
                                                                        id elit.</p>
                                                                    <ul class="ne_re_social2_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-thumbs-up"></i>
                                                                                &nbsp;5124 Like</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-comments"></i>
                                                                                &nbsp;645 Comments</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs1.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">These Are the 10 Color</a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs2.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">
                                                                            Hands on with the Apple </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="ne_re_left_top_main_wrapper">
                                                                <div
                                                                    class="ne_re_left_img_main_wrapper ne_re_left_img_main_wrapper2">
                                                                    <img src="{{asset('template/images/content/r2.jpg')}}"
                                                                        alt="img">
                                                                    <h2>Sport</h2>
                                                                </div>
                                                                <div class="ne_re_left_img_cont_main_wrapper">
                                                                    <h3><a href="#">The clock is ticking </a></h3>
                                                                    <ul class="ne_re_social1_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2022</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-clock-o"></i>
                                                                                &nbsp;07 : 00 am</a>
                                                                        </li>
                                                                    </ul>
                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor,
                                                                        nisi elit consequat ipsum, nec sagittis sem nibh
                                                                        id elit.</p>
                                                                    <ul class="ne_re_social2_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-thumbs-up"></i>
                                                                                &nbsp;5124 Like</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-comments"></i>
                                                                                &nbsp;645 Comments</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs3.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">Tesla just lost its head </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs4.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">Google shifting threatens </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="ne_re_left_top_main_wrapper">
                                                                <div class="ne_re_left_img_main_wrapper">
                                                                    <img src="{{asset('template/images/content/r1.jpg')}}"
                                                                        alt="img">
                                                                    <h2>Bussiness</h2>
                                                                </div>
                                                                <div class="ne_re_left_img_cont_main_wrapper">
                                                                    <h3><a href="#">Award of the year</a></h3>
                                                                    <ul class="ne_re_social1_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2022</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-clock-o"></i>
                                                                                &nbsp;07 : 00 am</a>
                                                                        </li>
                                                                    </ul>
                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor,
                                                                        nisi elit consequat ipsum, nec sagittis sem nibh
                                                                        id elit.</p>
                                                                    <ul class="ne_re_social2_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-thumbs-up"></i>
                                                                                &nbsp;5124 Like</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-comments"></i>
                                                                                &nbsp;645 Comments</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs1.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">These Are the 10 Color</a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs2.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">
                                                                            Hands on with the Apple </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="ne_re_left_top_main_wrapper">
                                                                <div
                                                                    class="ne_re_left_img_main_wrapper ne_re_left_img_main_wrapper2">
                                                                    <img src="{{asset('template/images/content/r2.jpg')}}"
                                                                        alt="img">
                                                                    <h2>Sport</h2>
                                                                </div>
                                                                <div class="ne_re_left_img_cont_main_wrapper">
                                                                    <h3><a href="#">The clock is ticking </a></h3>
                                                                    <ul class="ne_re_social1_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2022</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-clock-o"></i>
                                                                                &nbsp;07 : 00 am</a>
                                                                        </li>
                                                                    </ul>
                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor,
                                                                        nisi elit consequat ipsum, nec sagittis sem nibh
                                                                        id elit.</p>
                                                                    <ul class="ne_re_social2_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-thumbs-up"></i>
                                                                                &nbsp;5124 Like</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-comments"></i>
                                                                                &nbsp;645 Comments</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs3.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">Tesla just lost its head </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs4.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">Google shifting threatens </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="ne_re_left_top_main_wrapper">
                                                                <div class="ne_re_left_img_main_wrapper">
                                                                    <img src="{{asset('template/images/content/r1.jpg')}}"
                                                                        alt="img">
                                                                    <h2>Bussiness</h2>
                                                                </div>
                                                                <div class="ne_re_left_img_cont_main_wrapper">
                                                                    <h3><a href="#">Award of the year</a></h3>
                                                                    <ul class="ne_re_social1_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2022</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-clock-o"></i>
                                                                                &nbsp;07 : 00 am</a>
                                                                        </li>
                                                                    </ul>
                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor,
                                                                        nisi elit consequat ipsum, nec sagittis sem nibh
                                                                        id elit.</p>
                                                                    <ul class="ne_re_social2_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-thumbs-up"></i>
                                                                                &nbsp;5124 Like</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-comments"></i>
                                                                                &nbsp;645 Comments</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs1.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">These Are the 10 Color</a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs2.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">Google shifting threatens </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="ne_re_left_top_main_wrapper">
                                                                <div
                                                                    class="ne_re_left_img_main_wrapper ne_re_left_img_main_wrapper2">
                                                                    <img src="{{asset('template/images/content/r2.jpg')}}"
                                                                        alt="img">
                                                                    <h2>Sport</h2>
                                                                </div>
                                                                <div class="ne_re_left_img_cont_main_wrapper">
                                                                    <h3><a href="#">The clock is ticking </a></h3>
                                                                    <ul class="ne_re_social1_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2022</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-clock-o"></i>
                                                                                &nbsp;07 : 00 am</a>
                                                                        </li>
                                                                    </ul>
                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor,
                                                                        nisi elit consequat ipsum, nec sagittis sem nibh
                                                                        id elit.</p>
                                                                    <ul class="ne_re_social2_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-thumbs-up"></i>
                                                                                &nbsp;5124 Like</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-comments"></i>
                                                                                &nbsp;645 Comments</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs3.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">Tesla just lost its head </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs4.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">
                                                                            Hands on with the Apple </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="ne_re_left_top_main_wrapper">
                                                                <div class="ne_re_left_img_main_wrapper">
                                                                    <img src="{{asset('template/images/content/r1.jpg')}}"
                                                                        alt="img">
                                                                    <h2>Bussiness</h2>
                                                                </div>
                                                                <div class="ne_re_left_img_cont_main_wrapper">
                                                                    <h3><a href="#">Award of the year</a></h3>
                                                                    <ul class="ne_re_social1_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2022</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-clock-o"></i>
                                                                                &nbsp;07 : 00 am</a>
                                                                        </li>
                                                                    </ul>
                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor,
                                                                        nisi elit consequat ipsum, nec sagittis sem nibh
                                                                        id elit.</p>
                                                                    <ul class="ne_re_social2_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-thumbs-up"></i>
                                                                                &nbsp;5124 Like</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-comments"></i>
                                                                                &nbsp;645 Comments</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs1.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">These Are the 10 Color</a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs2.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">Google shifting threatens </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="ne_re_left_top_main_wrapper">
                                                                <div
                                                                    class="ne_re_left_img_main_wrapper ne_re_left_img_main_wrapper2">
                                                                    <img src="{{asset('template/images/content/r2.jpg')}}"
                                                                        alt="img">
                                                                    <h2>Sport</h2>
                                                                </div>
                                                                <div class="ne_re_left_img_cont_main_wrapper">
                                                                    <h3><a href="#">The clock is ticking </a></h3>
                                                                    <ul class="ne_re_social1_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2022</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-clock-o"></i>
                                                                                &nbsp;07 : 00 am</a>
                                                                        </li>
                                                                    </ul>
                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor,
                                                                        nisi elit consequat ipsum, nec sagittis sem nibh
                                                                        id elit.</p>
                                                                    <ul class="ne_re_social2_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-thumbs-up"></i>
                                                                                &nbsp;5124 Like</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-comments"></i>
                                                                                &nbsp;645 Comments</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs3.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">Tesla just lost its head </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs4.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">
                                                                            Hands on with the Apple </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="ne_re_left_top_main_wrapper">
                                                                <div class="ne_re_left_img_main_wrapper">
                                                                    <img src="{{asset('template/images/content/r1.jpg')}}"
                                                                        alt="img">
                                                                    <h2>Bussiness</h2>
                                                                </div>
                                                                <div class="ne_re_left_img_cont_main_wrapper">
                                                                    <h3><a href="#">Award of the year</a></h3>
                                                                    <ul class="ne_re_social1_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2022</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-clock-o"></i>
                                                                                &nbsp;07 : 00 am</a>
                                                                        </li>
                                                                    </ul>
                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor,
                                                                        nisi elit consequat ipsum, nec sagittis sem nibh
                                                                        id elit.</p>
                                                                    <ul class="ne_re_social2_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-thumbs-up"></i>
                                                                                &nbsp;5124 Like</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-comments"></i>
                                                                                &nbsp;645 Comments</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs1.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">These Are the 10 Color</a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs2.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">Google shifting threatens </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="ne_re_left_top_main_wrapper">
                                                                <div
                                                                    class="ne_re_left_img_main_wrapper ne_re_left_img_main_wrapper2">
                                                                    <img src="{{asset('template/images/content/r2.jpg')}}"
                                                                        alt="img">
                                                                    <h2>Sport</h2>
                                                                </div>
                                                                <div class="ne_re_left_img_cont_main_wrapper">
                                                                    <h3><a href="#">The clock is ticking </a></h3>
                                                                    <ul class="ne_re_social1_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2022</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-clock-o"></i>
                                                                                &nbsp;07 : 00 am</a>
                                                                        </li>
                                                                    </ul>
                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor,
                                                                        nisi elit consequat ipsum, nec sagittis sem nibh
                                                                        id elit.</p>
                                                                    <ul class="ne_re_social2_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-thumbs-up"></i>
                                                                                &nbsp;5124 Like</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-comments"></i>
                                                                                &nbsp;645 Comments</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs3.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">Tesla just lost its head </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs4.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">
                                                                            Hands on with the Apple </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="hot">
                                        <div class="ss_featured_products">
                                            <div class="owl-carousel owl-theme">
                                                <div class="item">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="ne_re_left_top_main_wrapper">
                                                                <div class="ne_re_left_img_main_wrapper">
                                                                    <img src="{{asset('template/images/content/r1.jpg')}}"
                                                                        alt="img">
                                                                    <h2>Bussiness</h2>
                                                                </div>
                                                                <div class="ne_re_left_img_cont_main_wrapper">
                                                                    <h3><a href="#">Award of the year</a></h3>
                                                                    <ul class="ne_re_social1_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2022</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-clock-o"></i>
                                                                                &nbsp;07 : 00 am</a>
                                                                        </li>
                                                                    </ul>
                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor,
                                                                        nisi elit consequat ipsum, nec sagittis sem nibh
                                                                        id elit.</p>
                                                                    <ul class="ne_re_social2_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-thumbs-up"></i>
                                                                                &nbsp;5124 Like</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-comments"></i>
                                                                                &nbsp;645 Comments</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs1.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">Tesla just lost its head </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs2.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">Google shifting threatens </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="ne_re_left_top_main_wrapper">
                                                                <div
                                                                    class="ne_re_left_img_main_wrapper ne_re_left_img_main_wrapper2">
                                                                    <img src="{{asset('template/images/content/r2.jpg')}}"
                                                                        alt="img">
                                                                    <h2>Sport</h2>
                                                                </div>
                                                                <div class="ne_re_left_img_cont_main_wrapper">
                                                                    <h3><a href="#">The clock is ticking </a></h3>
                                                                    <ul class="ne_re_social1_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2022</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-clock-o"></i>
                                                                                &nbsp;07 : 00 am</a>
                                                                        </li>
                                                                    </ul>
                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor,
                                                                        nisi elit consequat ipsum, nec sagittis sem nibh
                                                                        id elit.</p>
                                                                    <ul class="ne_re_social2_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-thumbs-up"></i>
                                                                                &nbsp;5124 Like</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-comments"></i>
                                                                                &nbsp;645 Comments</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs3.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">Tesla just lost its head </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs4.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">
                                                                            Hands on with the Apple </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="ne_re_left_top_main_wrapper">
                                                                <div class="ne_re_left_img_main_wrapper">
                                                                    <img src="{{asset('template/images/content/r1.jpg')}}"
                                                                        alt="img">
                                                                    <h2>Bussiness</h2>
                                                                </div>
                                                                <div class="ne_re_left_img_cont_main_wrapper">
                                                                    <h3><a href="#">Award of the year</a></h3>
                                                                    <ul class="ne_re_social1_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2022</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-clock-o"></i>
                                                                                &nbsp;07 : 00 am</a>
                                                                        </li>
                                                                    </ul>
                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor,
                                                                        nisi elit consequat ipsum, nec sagittis sem nibh
                                                                        id elit.</p>
                                                                    <ul class="ne_re_social2_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-thumbs-up"></i>
                                                                                &nbsp;5124 Like</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-comments"></i>
                                                                                &nbsp;645 Comments</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs1.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">These Are the 10 Color</a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs2.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">Google shifting threatens </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="ne_re_left_top_main_wrapper">
                                                                <div
                                                                    class="ne_re_left_img_main_wrapper ne_re_left_img_main_wrapper2">
                                                                    <img src="{{asset('template/images/content/r2.jpg')}}"
                                                                        alt="img">
                                                                    <h2>Sport</h2>
                                                                </div>
                                                                <div class="ne_re_left_img_cont_main_wrapper">
                                                                    <h3><a href="#">The clock is ticking </a></h3>
                                                                    <ul class="ne_re_social1_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2022</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-clock-o"></i>
                                                                                &nbsp;07 : 00 am</a>
                                                                        </li>
                                                                    </ul>
                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor,
                                                                        nisi elit consequat ipsum, nec sagittis sem nibh
                                                                        id elit.</p>
                                                                    <ul class="ne_re_social2_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-thumbs-up"></i>
                                                                                &nbsp;5124 Like</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-comments"></i>
                                                                                &nbsp;645 Comments</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs3.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">Tesla just lost its head </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs4.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">
                                                                            Hands on with the Apple </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="ne_re_left_top_main_wrapper">
                                                                <div class="ne_re_left_img_main_wrapper">
                                                                    <img src="{{asset('template/images/content/r1.jpg')}}"
                                                                        alt="img">
                                                                    <h2>Bussiness</h2>
                                                                </div>
                                                                <div class="ne_re_left_img_cont_main_wrapper">
                                                                    <h3><a href="#">Award of the year</a></h3>
                                                                    <ul class="ne_re_social1_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2022</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-clock-o"></i>
                                                                                &nbsp;07 : 00 am</a>
                                                                        </li>
                                                                    </ul>
                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor,
                                                                        nisi elit consequat ipsum, nec sagittis sem nibh
                                                                        id elit.</p>
                                                                    <ul class="ne_re_social2_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-thumbs-up"></i>
                                                                                &nbsp;5124 Like</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-comments"></i>
                                                                                &nbsp;645 Comments</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs1.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">Tesla just lost its head </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs2.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">Google shifting threatens </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="ne_re_left_top_main_wrapper">
                                                                <div
                                                                    class="ne_re_left_img_main_wrapper ne_re_left_img_main_wrapper2">
                                                                    <img src="{{asset('template/images/content/r2.jpg')}}"
                                                                        alt="img">
                                                                    <h2>Sport</h2>
                                                                </div>
                                                                <div class="ne_re_left_img_cont_main_wrapper">
                                                                    <h3><a href="#">The clock is ticking </a></h3>
                                                                    <ul class="ne_re_social1_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2022</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-clock-o"></i>
                                                                                &nbsp;07 : 00 am</a>
                                                                        </li>
                                                                    </ul>
                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor,
                                                                        nisi elit consequat ipsum, nec sagittis sem nibh
                                                                        id elit.</p>
                                                                    <ul class="ne_re_social2_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-thumbs-up"></i>
                                                                                &nbsp;5124 Like</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-comments"></i>
                                                                                &nbsp;645 Comments</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs3.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">Tesla just lost its head </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs4.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">
                                                                            Hands on with the Apple </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="ne_re_left_top_main_wrapper">
                                                                <div class="ne_re_left_img_main_wrapper">
                                                                    <img src="{{asset('template/images/content/r1.jpg')}}"
                                                                        alt="img">
                                                                    <h2>Bussiness</h2>
                                                                </div>
                                                                <div class="ne_re_left_img_cont_main_wrapper">
                                                                    <h3><a href="#">Award of the year</a></h3>
                                                                    <ul class="ne_re_social1_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2022</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-clock-o"></i>
                                                                                &nbsp;07 : 00 am</a>
                                                                        </li>
                                                                    </ul>
                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor,
                                                                        nisi elit consequat ipsum, nec sagittis sem nibh
                                                                        id elit.</p>
                                                                    <ul class="ne_re_social2_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-thumbs-up"></i>
                                                                                &nbsp;5124 Like</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-comments"></i>
                                                                                &nbsp;645 Comments</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs1.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">These Are the 10 Color</a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs2.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">Google shifting threatens </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="ne_re_left_top_main_wrapper">
                                                                <div
                                                                    class="ne_re_left_img_main_wrapper ne_re_left_img_main_wrapper2">
                                                                    <img src="{{asset('template/images/content/r2.jpg')}}"
                                                                        alt="img">
                                                                    <h2>Sport</h2>
                                                                </div>
                                                                <div class="ne_re_left_img_cont_main_wrapper">
                                                                    <h3><a href="#">The clock is ticking </a></h3>
                                                                    <ul class="ne_re_social1_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2022</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-clock-o"></i>
                                                                                &nbsp;07 : 00 am</a>
                                                                        </li>
                                                                    </ul>
                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor,
                                                                        nisi elit consequat ipsum, nec sagittis sem nibh
                                                                        id elit.</p>
                                                                    <ul class="ne_re_social2_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-thumbs-up"></i>
                                                                                &nbsp;5124 Like</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-comments"></i>
                                                                                &nbsp;645 Comments</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs3.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">Tesla just lost its head </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs4.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">
                                                                            Hands on with the Apple </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="ne_re_left_top_main_wrapper">
                                                                <div class="ne_re_left_img_main_wrapper">
                                                                    <img src="{{asset('template/images/content/r1.jpg')}}"
                                                                        alt="img">
                                                                    <h2>Bussiness</h2>
                                                                </div>
                                                                <div class="ne_re_left_img_cont_main_wrapper">
                                                                    <h3><a href="#">Award of the year</a></h3>
                                                                    <ul class="ne_re_social1_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2022</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-clock-o"></i>
                                                                                &nbsp;07 : 00 am</a>
                                                                        </li>
                                                                    </ul>
                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor,
                                                                        nisi elit consequat ipsum, nec sagittis sem nibh
                                                                        id elit.</p>
                                                                    <ul class="ne_re_social2_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-thumbs-up"></i>
                                                                                &nbsp;5124 Like</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-comments"></i>
                                                                                &nbsp;645 Comments</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs1.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">These Are the 10 Color</a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs2.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">Google shifting threatens</a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="ne_re_left_top_main_wrapper">
                                                                <div
                                                                    class="ne_re_left_img_main_wrapper ne_re_left_img_main_wrapper2">
                                                                    <img src="{{asset('template/images/content/r2.jpg')}}"
                                                                        alt="img">
                                                                    <h2>Sport</h2>
                                                                </div>
                                                                <div class="ne_re_left_img_cont_main_wrapper">
                                                                    <h3><a href="#">The clock is ticking </a></h3>
                                                                    <ul class="ne_re_social1_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2022</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-clock-o"></i>
                                                                                &nbsp;07 : 00 am</a>
                                                                        </li>
                                                                    </ul>
                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor,
                                                                        nisi elit consequat ipsum, nec sagittis sem nibh
                                                                        id elit.</p>
                                                                    <ul class="ne_re_social2_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-thumbs-up"></i>
                                                                                &nbsp;5124 Like</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-comments"></i>
                                                                                &nbsp;645 Comments</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs3.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">Tesla just lost its head </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs4.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">
                                                                            Hands on with the Apple </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="trand">
                                        <div class="ss_featured_products">
                                            <div class="owl-carousel owl-theme">
                                                <div class="item">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="ne_re_left_top_main_wrapper">
                                                                <div class="ne_re_left_img_main_wrapper">
                                                                    <img src="{{asset('template/images/content/r1.jpg')}}"
                                                                        alt="img">
                                                                    <h2>Bussiness</h2>
                                                                </div>
                                                                <div class="ne_re_left_img_cont_main_wrapper">
                                                                    <h3><a href="#">Award of the year</a></h3>
                                                                    <ul class="ne_re_social1_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2022</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-clock-o"></i>
                                                                                &nbsp;07 : 00 am</a>
                                                                        </li>
                                                                    </ul>
                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor,
                                                                        nisi elit consequat ipsum, nec sagittis sem nibh
                                                                        id elit.</p>
                                                                    <ul class="ne_re_social2_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-thumbs-up"></i>
                                                                                &nbsp;5124 Like</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-comments"></i>
                                                                                &nbsp;645 Comments</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs1.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">These Are the 10 Color</a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs2.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">Google shifting threatens</a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="ne_re_left_top_main_wrapper">
                                                                <div
                                                                    class="ne_re_left_img_main_wrapper ne_re_left_img_main_wrapper2">
                                                                    <img src="{{asset('template/images/content/r2.jpg')}}"
                                                                        alt="img">
                                                                    <h2>Sport</h2>
                                                                </div>
                                                                <div class="ne_re_left_img_cont_main_wrapper">
                                                                    <h3><a href="#">The clock is ticking </a></h3>
                                                                    <ul class="ne_re_social1_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2022</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-clock-o"></i>
                                                                                &nbsp;07 : 00 am</a>
                                                                        </li>
                                                                    </ul>
                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor,
                                                                        nisi elit consequat ipsum, nec sagittis sem nibh
                                                                        id elit.</p>
                                                                    <ul class="ne_re_social2_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-thumbs-up"></i>
                                                                                &nbsp;5124 Like</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-comments"></i>
                                                                                &nbsp;645 Comments</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs3.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">Tesla just lost its head </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs4.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">
                                                                            Hands on with the Apple </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="ne_re_left_top_main_wrapper">
                                                                <div class="ne_re_left_img_main_wrapper">
                                                                    <img src="{{asset('template/images/content/r1.jpg')}}"
                                                                        alt="img">
                                                                    <h2>Bussiness</h2>
                                                                </div>
                                                                <div class="ne_re_left_img_cont_main_wrapper">
                                                                    <h3><a href="#">Award of the year</a></h3>
                                                                    <ul class="ne_re_social1_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2022</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-clock-o"></i>
                                                                                &nbsp;07 : 00 am</a>
                                                                        </li>
                                                                    </ul>
                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor,
                                                                        nisi elit consequat ipsum, nec sagittis sem nibh
                                                                        id elit.</p>
                                                                    <ul class="ne_re_social2_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-thumbs-up"></i>
                                                                                &nbsp;5124 Like</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-comments"></i>
                                                                                &nbsp;645 Comments</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs1.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">These Are the 10 Color</a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs2.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">Google shifting threatens</a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="ne_re_left_top_main_wrapper">
                                                                <div
                                                                    class="ne_re_left_img_main_wrapper ne_re_left_img_main_wrapper2">
                                                                    <img src="{{asset('template/images/content/r2.jpg')}}"
                                                                        alt="img">
                                                                    <h2>Sport</h2>
                                                                </div>
                                                                <div class="ne_re_left_img_cont_main_wrapper">
                                                                    <h3><a href="#">The clock is ticking </a></h3>
                                                                    <ul class="ne_re_social1_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2022</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-clock-o"></i>
                                                                                &nbsp;07 : 00 am</a>
                                                                        </li>
                                                                    </ul>
                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor,
                                                                        nisi elit consequat ipsum, nec sagittis sem nibh
                                                                        id elit.</p>
                                                                    <ul class="ne_re_social2_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-thumbs-up"></i>
                                                                                &nbsp;5124 Like</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-comments"></i>
                                                                                &nbsp;645 Comments</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs3.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">Tesla just lost its head </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs4.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">
                                                                            Hands on with the Apple </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="ne_re_left_top_main_wrapper">
                                                                <div class="ne_re_left_img_main_wrapper">
                                                                    <img src="{{asset('template/images/content/r1.jpg')}}"
                                                                        alt="img">
                                                                    <h2>Bussiness</h2>
                                                                </div>
                                                                <div class="ne_re_left_img_cont_main_wrapper">
                                                                    <h3><a href="#">Award of the year</a></h3>
                                                                    <ul class="ne_re_social1_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2022</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-clock-o"></i>
                                                                                &nbsp;07 : 00 am</a>
                                                                        </li>
                                                                    </ul>
                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor,
                                                                        nisi elit consequat ipsum, nec sagittis sem nibh
                                                                        id elit.</p>
                                                                    <ul class="ne_re_social2_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-thumbs-up"></i>
                                                                                &nbsp;5124 Like</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-comments"></i>
                                                                                &nbsp;645 Comments</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs1.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">These Are the 10 Color</a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs2.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">Google shifting threatens</a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="ne_re_left_top_main_wrapper">
                                                                <div
                                                                    class="ne_re_left_img_main_wrapper ne_re_left_img_main_wrapper2">
                                                                    <img src="{{asset('template/images/content/r2.jpg')}}"
                                                                        alt="img">
                                                                    <h2>Sport</h2>
                                                                </div>
                                                                <div class="ne_re_left_img_cont_main_wrapper">
                                                                    <h3><a href="#">The clock is ticking </a></h3>
                                                                    <ul class="ne_re_social1_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2022</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-clock-o"></i>
                                                                                &nbsp;07 : 00 am</a>
                                                                        </li>
                                                                    </ul>
                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor,
                                                                        nisi elit consequat ipsum, nec sagittis sem nibh
                                                                        id elit.</p>
                                                                    <ul class="ne_re_social2_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-thumbs-up"></i>
                                                                                &nbsp;5124 Like</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-comments"></i>
                                                                                &nbsp;645 Comments</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs3.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">Tesla just lost its head </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs4.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">
                                                                            Hands on with the Apple </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="ne_re_left_top_main_wrapper">
                                                                <div class="ne_re_left_img_main_wrapper">
                                                                    <img src="{{asset('template/images/content/r1.jpg')}}"
                                                                        alt="img">
                                                                    <h2>Bussiness</h2>
                                                                </div>
                                                                <div class="ne_re_left_img_cont_main_wrapper">
                                                                    <h3><a href="#">Award of the year</a></h3>
                                                                    <ul class="ne_re_social1_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2022</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-clock-o"></i>
                                                                                &nbsp;07 : 00 am</a>
                                                                        </li>
                                                                    </ul>
                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor,
                                                                        nisi elit consequat ipsum, nec sagittis sem nibh
                                                                        id elit.</p>
                                                                    <ul class="ne_re_social2_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-thumbs-up"></i>
                                                                                &nbsp;5124 Like</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-comments"></i>
                                                                                &nbsp;645 Comments</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs1.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">These Are the 10 Color</a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs2.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">Google shifting threatens</a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="ne_re_left_top_main_wrapper">
                                                                <div
                                                                    class="ne_re_left_img_main_wrapper ne_re_left_img_main_wrapper2">
                                                                    <img src="{{asset('template/images/content/r2.jpg')}}"
                                                                        alt="img">
                                                                    <h2>Sport</h2>
                                                                </div>
                                                                <div class="ne_re_left_img_cont_main_wrapper">
                                                                    <h3><a href="#">The clock is ticking </a></h3>
                                                                    <ul class="ne_re_social1_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2022</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-clock-o"></i>
                                                                                &nbsp;07 : 00 am</a>
                                                                        </li>
                                                                    </ul>
                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor,
                                                                        nisi elit consequat ipsum, nec sagittis sem nibh
                                                                        id elit.</p>
                                                                    <ul class="ne_re_social2_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-thumbs-up"></i>
                                                                                &nbsp;5124 Like</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-comments"></i>
                                                                                &nbsp;645 Comments</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs3.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">Tesla just lost its head </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs4.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">
                                                                            Hands on with the Apple </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="ne_re_left_top_main_wrapper">
                                                                <div class="ne_re_left_img_main_wrapper">
                                                                    <img src="{{asset('template/images/content/r1.jpg')}}"
                                                                        alt="img">
                                                                    <h2>Bussiness</h2>
                                                                </div>
                                                                <div class="ne_re_left_img_cont_main_wrapper">
                                                                    <h3><a href="#">Award of the year</a></h3>
                                                                    <ul class="ne_re_social1_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2022</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-clock-o"></i>
                                                                                &nbsp;07 : 00 am</a>
                                                                        </li>
                                                                    </ul>
                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor,
                                                                        nisi elit consequat ipsum, nec sagittis sem nibh
                                                                        id elit.</p>
                                                                    <ul class="ne_re_social2_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-thumbs-up"></i>
                                                                                &nbsp;5124 Like</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-comments"></i>
                                                                                &nbsp;645 Comments</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs1.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">These Are the 10 Color</a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs2.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">Google shifting threatens</a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="ne_re_left_top_main_wrapper">
                                                                <div
                                                                    class="ne_re_left_img_main_wrapper ne_re_left_img_main_wrapper2">
                                                                    <img src="{{asset('template/images/content/r2.jpg')}}"
                                                                        alt="img">
                                                                    <h2>Sport</h2>
                                                                </div>
                                                                <div class="ne_re_left_img_cont_main_wrapper">
                                                                    <h3><a href="#">The clock is ticking </a></h3>
                                                                    <ul class="ne_re_social1_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2022</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-clock-o"></i>
                                                                                &nbsp;07 : 00 am</a>
                                                                        </li>
                                                                    </ul>
                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor,
                                                                        nisi elit consequat ipsum, nec sagittis sem nibh
                                                                        id elit.</p>
                                                                    <ul class="ne_re_social2_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-thumbs-up"></i>
                                                                                &nbsp;5124 Like</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-comments"></i>
                                                                                &nbsp;645 Comments</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs3.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">Tesla just lost its head </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/rs4.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">
                                                                            Hands on with the Apple </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="ne_busness_main_slider_wrapper">
                                            <div class="ne_recent_heading_main_wrapper">
                                                <h2>Business</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="ne_businees_slider_wrapper">
                                            <div class="owl-carousel owl-theme">
                                                <div class="item">
                                                    <div class="ne_re_left_top_main_wrapper">
                                                        <div class="ne_re_left_img_main_wrapper">
                                                            <img src="{{asset('template/images/content/bs1.jpg')}}"
                                                                alt="img">
                                                            <h2>business</h2>
                                                        </div>
                                                        <div
                                                            class="ne_re_left_img_cont_main_wrapper ne_buss_img_cont_main_wrapper">
                                                            <h3><a href="#">Proin gravida nibh
                                                                    vel velit auctor.</a></h3>
                                                            <ul class="ne_re_social1_wrapper">
                                                                <li data-animation="animated fadeInLeft"><a href="#"><i
                                                                            class="fa fa-calendar"></i> &nbsp;25 OCT,
                                                                        2022</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="ne_re_left_top_main_wrapper">
                                                        <div class="ne_re_left_img_main_wrapper">
                                                            <img src="{{asset('template/images/content/bs2.jpg')}}"
                                                                alt="img">
                                                            <h2>team work</h2>
                                                        </div>
                                                        <div
                                                            class="ne_re_left_img_cont_main_wrapper ne_buss_img_cont_main_wrapper">
                                                            <h3><a href="#">Faangs diverge prospect</a></h3>
                                                            <ul class="ne_re_social1_wrapper">
                                                                <li data-animation="animated fadeInLeft"><a href="#"><i
                                                                            class="fa fa-calendar"></i> &nbsp;25 OCT,
                                                                        2022</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="ne_re_left_top_main_wrapper">
                                                        <div class="ne_re_left_img_main_wrapper">
                                                            <img src="{{asset('template/images/content/bs3.jpg')}}"
                                                                alt="img">
                                                            <h2>business</h2>
                                                        </div>
                                                        <div
                                                            class="ne_re_left_img_cont_main_wrapper ne_buss_img_cont_main_wrapper">
                                                            <h3><a href="#">
                                                                    Beats did something today</a></h3>
                                                            <ul class="ne_re_social1_wrapper">
                                                                <li data-animation="animated fadeInLeft"><a href="#"><i
                                                                            class="fa fa-calendar"></i> &nbsp;25 OCT,
                                                                        2022</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="ne_busness_main_slider_wrapper">
                                            <div class="ne_recent_heading_main_wrapper">
                                                <h2>Sports</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="ne_sport_slider_wrapper">
                                            <div class="owl-carousel owl-theme">
                                                <div class="item">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="ne_re_left_top_main_wrapper">
                                                                <div
                                                                    class="ne_re_left_img_main_wrapper ne_re_left_img_main_wrapper2">
                                                                    <img src="{{asset('template/images/content/sp1.jpg')}}"
                                                                        alt="img">
                                                                    <h2>Sport</h2>
                                                                </div>
                                                                <div class="ne_re_left_img_cont_main_wrapper">
                                                                    <h3><a href="#">Award of the year</a></h3>
                                                                    <ul class="ne_re_social1_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2022</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-clock-o"></i>
                                                                                &nbsp;07 : 00 am</a>
                                                                        </li>
                                                                    </ul>
                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor,
                                                                        nisi elit consequat ipsum, nec sagittis sem nibh
                                                                        id elit.</p>
                                                                    <ul class="ne_re_social2_wrapper qqq">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-thumbs-up"></i>
                                                                                &nbsp;5124 Like</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-comments"></i>
                                                                                &nbsp;645 Comments</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div
                                                                class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/sp2.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">These Are the 10 Color</a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/sp3.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">
                                                                            Hands on with the Apple </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/sp4.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">Google shifting threatens </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/sp5.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">Tesla just lost its head </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="ne_re_left_top_main_wrapper">
                                                                <div
                                                                    class="ne_re_left_img_main_wrapper ne_re_left_img_main_wrapper2">
                                                                    <img src="{{asset('template/images/content/sp1.jpg')}}"
                                                                        alt="img">
                                                                    <h2>Sport</h2>
                                                                </div>
                                                                <div class="ne_re_left_img_cont_main_wrapper">
                                                                    <h3><a href="#">The clock is ticking </a></h3>
                                                                    <ul class="ne_re_social1_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2022</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-clock-o"></i>
                                                                                &nbsp;07 : 00 am</a>
                                                                        </li>
                                                                    </ul>
                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor,
                                                                        nisi elit consequat ipsum, nec sagittis sem nibh
                                                                        id elit.</p>
                                                                    <ul class="ne_re_social2_wrapper qqq">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-thumbs-up"></i>
                                                                                &nbsp;5124 Like</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-comments"></i>
                                                                                &nbsp;645 Comments</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div
                                                                class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/sp2.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">These Are the 10 Color</a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/sp3.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">
                                                                            Hands on with the Apple </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/sp4.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">Google shifting threatens </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/sp5.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">Tesla just lost its head </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="ne_re_left_top_main_wrapper">
                                                                <div
                                                                    class="ne_re_left_img_main_wrapper ne_re_left_img_main_wrapper2">
                                                                    <img src="{{asset('template/images/content/sp1.jpg')}}"
                                                                        alt="img">
                                                                    <h2>Sport</h2>
                                                                </div>
                                                                <div class="ne_re_left_img_cont_main_wrapper">
                                                                    <h3><a href="#">The clock is ticking </a></h3>
                                                                    <ul class="ne_re_social1_wrapper">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-calendar"></i>
                                                                                &nbsp;25 OCT, 2022</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-clock-o"></i>
                                                                                &nbsp;07 : 00 am</a>
                                                                        </li>
                                                                    </ul>
                                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor,
                                                                        nisi elit consequat ipsum, nec sagittis sem nibh
                                                                        id elit.</p>
                                                                    <ul class="ne_re_social2_wrapper qqq">
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-thumbs-up"></i>
                                                                                &nbsp;5124 Like</a>
                                                                        </li>
                                                                        <li data-animation="animated fadeInLeft"><a
                                                                                href="#"><i class="fa fa-comments"></i>
                                                                                &nbsp;645 Comments</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                            <div
                                                                class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/sp2.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">These Are the 10 Color</a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/sp3.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">
                                                                            Hands on with the Apple </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/sp4.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">Google shifting threatens </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="ne_re_left_bottom_main_wrapper">
                                                                <div class="ne_re_bottom_img">
                                                                    <img src="{{asset('template/images/content/sp5.jpg')}}"
                                                                        alt="rs_img">
                                                                </div>
                                                                <div class="ne_re_bottom_img_cont">
                                                                    <h3><a href="#">Tesla just lost its head </a></h3>
                                                                    <p><a href="#"><i class="fa fa-calendar"></i>
                                                                            &nbsp;25 OCT, 2022</a>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="ne_banner_adver_main_wrapper">
                                    <a href="#">
                                        <img src="{{asset('template/images/content/adverti_img.jpg')}}" alt="img">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="ne_busness_main_slider_wrapper">
                                            <div class="ne_recent_heading_main_wrapper">
                                                <h2>Gadgets and Technology</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="ne_gt_left_top_main_wrapper ne_gt_left_top_main_wrapper1">
                                            <div class="ne_gt_left_img_main_wrapper">
                                                <img src="{{asset('template/images/content/ct1.jpg')}}" alt="img">
                                                <h2>Technology</h2>
                                            </div>
                                            <div class="ne_gt_left_img_cont_main_wrapper">
                                                <h3><a href="#">Award of the year</a></h3>
                                                <ul class="ne_re_social1_wrapper">
                                                    <li data-animation="animated fadeInLeft"><a href="#"><i
                                                                class="fa fa-calendar"></i> &nbsp;25 OCT, 2022</a>
                                                    </li>
                                                    <li data-animation="animated fadeInLeft"><a href="#"><i
                                                                class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>
                                                    </li>
                                                </ul>
                                                <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                    ipsum, nec sagittis sem nibh id elit.</p>
                                                <ul class="ne_re_social2_wrapper">
                                                    <li data-animation="animated fadeInLeft"><a href="#"><i
                                                                class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>
                                                    </li>
                                                    <li data-animation="animated fadeInLeft"><a href="#"><i
                                                                class="fa fa-comments"></i> &nbsp;645 Comments</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="ne_gt_left_top_main_wrapper ne_gt_left_top_main_wrapper2">
                                            <div class="ne_gt_left_img_main_wrapper">
                                                <img src="{{asset('template/images/content/ct2.jpg')}}" alt="img">
                                                <h2>gadgets</h2>
                                            </div>
                                            <div class="ne_gt_left_img_cont_main_wrapper">
                                                <h3><a href="#">The clock is ticking </a></h3>
                                                <ul class="ne_re_social1_wrapper">
                                                    <li data-animation="animated fadeInLeft"><a href="#"><i
                                                                class="fa fa-calendar"></i> &nbsp;25 OCT, 2022</a>
                                                    </li>
                                                    <li data-animation="animated fadeInLeft"><a href="#"><i
                                                                class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>
                                                    </li>
                                                </ul>
                                                <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                    ipsum, nec sagittis sem nibh id elit.</p>
                                                <ul class="ne_re_social2_wrapper">
                                                    <li data-animation="animated fadeInLeft"><a href="#"><i
                                                                class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>
                                                    </li>
                                                    <li data-animation="animated fadeInLeft"><a href="#"><i
                                                                class="fa fa-comments"></i> &nbsp;645 Comments</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="ne_gt_left_top_main_wrapper ne_gt_left_top_main_wrapper2">
                                            <div class="ne_gt_left_img_main_wrapper">
                                                <img src="{{asset('template/images/content/ct3.jpg')}}" alt="img">
                                                <h2>gadgets</h2>
                                            </div>
                                            <div class="ne_gt_left_img_cont_main_wrapper">
                                                <h3><a href="#">Beats did announce </a></h3>
                                                <ul class="ne_re_social1_wrapper">
                                                    <li data-animation="animated fadeInLeft"><a href="#"><i
                                                                class="fa fa-calendar"></i> &nbsp;25 OCT, 2022</a>
                                                    </li>
                                                    <li data-animation="animated fadeInLeft"><a href="#"><i
                                                                class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>
                                                    </li>
                                                </ul>
                                                <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                    ipsum, nec sagittis sem nibh id elit.</p>
                                                <ul class="ne_re_social2_wrapper">
                                                    <li data-animation="animated fadeInLeft"><a href="#"><i
                                                                class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>
                                                    </li>
                                                    <li data-animation="animated fadeInLeft"><a href="#"><i
                                                                class="fa fa-comments"></i> &nbsp;645 Comments</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="ne_gt_left_top_main_wrapper ne_gt_left_top_main_wrapper2">
                                            <div class="ne_gt_left_img_main_wrapper">
                                                <img src="{{asset('template/images/content/ct4.jpg')}}" alt="img">
                                                <h2>gadgets</h2>
                                            </div>
                                            <div class="ne_gt_left_img_cont_main_wrapper">
                                                <h3><a href="#">Boy's head impaled</a></h3>
                                                <ul class="ne_re_social1_wrapper">
                                                    <li data-animation="animated fadeInLeft"><a href="#"><i
                                                                class="fa fa-calendar"></i> &nbsp;25 OCT, 2022</a>
                                                    </li>
                                                    <li data-animation="animated fadeInLeft"><a href="#"><i
                                                                class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>
                                                    </li>
                                                </ul>
                                                <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                    ipsum, nec sagittis sem nibh id elit.</p>
                                                <ul class="ne_re_social2_wrapper">
                                                    <li data-animation="animated fadeInLeft"><a href="#"><i
                                                                class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>
                                                    </li>
                                                    <li data-animation="animated fadeInLeft"><a href="#"><i
                                                                class="fa fa-comments"></i> &nbsp;645 Comments</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="ne_gt_left_top_main_wrapper ne_gt_left_top_main_wrapper2">
                                            <div class="ne_gt_left_img_main_wrapper">
                                                <img src="{{asset('template/images/content/ct5.jpg')}}" alt="img">
                                                <h2>gadgets</h2>
                                            </div>
                                            <div class="ne_gt_left_img_cont_main_wrapper">
                                                <h3><a href="#">Black farmers in the USA </a></h3>
                                                <ul class="ne_re_social1_wrapper">
                                                    <li data-animation="animated fadeInLeft"><a href="#"><i
                                                                class="fa fa-calendar"></i> &nbsp;25 OCT, 2022</a>
                                                    </li>
                                                    <li data-animation="animated fadeInLeft"><a href="#"><i
                                                                class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>
                                                    </li>
                                                </ul>
                                                <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                    ipsum, nec sagittis sem nibh id elit.</p>
                                                <ul class="ne_re_social2_wrapper">
                                                    <li data-animation="animated fadeInLeft"><a href="#"><i
                                                                class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>
                                                    </li>
                                                    <li data-animation="animated fadeInLeft"><a href="#"><i
                                                                class="fa fa-comments"></i> &nbsp;645 Comments</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="ne_gt_left_top_main_wrapper ne_gt_left_top_main_wrapper2">
                                            <div class="ne_gt_left_img_main_wrapper">
                                                <img src="{{asset('template/images/content/ct6.jpg')}}" alt="img">
                                                <h2>gadgets</h2>
                                            </div>
                                            <div class="ne_gt_left_img_cont_main_wrapper">
                                                <h3><a href="#">Easy teriyaki </a></h3>
                                                <ul class="ne_re_social1_wrapper">
                                                    <li data-animation="animated fadeInLeft"><a href="#"><i
                                                                class="fa fa-calendar"></i> &nbsp;25 OCT, 2022</a>
                                                    </li>
                                                    <li data-animation="animated fadeInLeft"><a href="#"><i
                                                                class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>
                                                    </li>
                                                </ul>
                                                <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat
                                                    ipsum, nec sagittis sem nibh id elit.</p>
                                                <ul class="ne_re_social2_wrapper">
                                                    <li data-animation="animated fadeInLeft"><a href="#"><i
                                                                class="fa fa-thumbs-up"></i> &nbsp;5124 Like</a>
                                                    </li>
                                                    <li data-animation="animated fadeInLeft"><a href="#"><i
                                                                class="fa fa-comments"></i> &nbsp;645 Comments</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="pager_wrapper prs_blog_pagi_wrapper">
                                            <ul class="pagination">
                                                <li><a href="#"><i class="fa fa-angle-left"></i></a>
                                                </li>
                                                <li class="btc_shop_pagi"><a href="#">01</a>
                                                </li>
                                                <li class="btc_shop_pagi"><a href="#">02</a>
                                                </li>
                                                <li class="btc_third_pegi btc_shop_pagi"><a href="#">03</a>
                                                </li>
                                                <li class="hidden-xs btc_shop_pagi"><a href="#">04</a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="ne_busness_main_slider_wrapper">
                                                    <div class="ne_recent_heading_main_wrapper">
                                                        <h2>Life style</h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="ne_sport_slider_wrapper">
                                                    <div class="owl-carousel owl-theme">
                                                        <div class="item">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="ne_re_left_top_main_wrapper">
                                                                        <div class="ne_re_left_img_main_wrapper yellow">
                                                                            <img src="{{asset('template/images/content/ls10.jpg')}}"
                                                                                alt="img">
                                                                            <h2>style</h2>
                                                                        </div>
                                                                        <div class="ne_re_left_img_cont_main_wrapper">
                                                                            <h3><a href="#">Award of the year</a></h3>
                                                                            <ul class="ne_re_social1_wrapper">
                                                                                <li
                                                                                    data-animation="animated fadeInLeft">
                                                                                    <a href="#"><i
                                                                                            class="fa fa-calendar"></i>
                                                                                        &nbsp;25 OCT, 2022</a>
                                                                                </li>
                                                                                <li
                                                                                    data-animation="animated fadeInLeft">
                                                                                    <a href="#"><i
                                                                                            class="fa fa-clock-o"></i>
                                                                                        &nbsp;07 : 00 am</a>
                                                                                </li>
                                                                            </ul>
                                                                            <p>This is Photoshop's version of Lorem
                                                                                Ipsum. Proin gravida nibh vel velit
                                                                                auctor aliquet. ean sollicitudin, lorem
                                                                                quis bibendum auctor, nisi elit
                                                                                consequat ipsum, nec sagittis sem nibh
                                                                                id elit. Duis sed odio sit amet nibh
                                                                                vulputate cursus a sit amet mauris.</p>
                                                                            <ul class="ne_re_social2_wrapper">
                                                                                <li
                                                                                    data-animation="animated fadeInLeft">
                                                                                    <a href="#"><i
                                                                                            class="fa fa-thumbs-up"></i>
                                                                                        &nbsp;5124 Like</a>
                                                                                </li>
                                                                                <li
                                                                                    data-animation="animated fadeInLeft">
                                                                                    <a href="#"><i
                                                                                            class="fa fa-comments"></i>
                                                                                        &nbsp;645 Comments</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                    <div
                                                                        class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">
                                                                        <div class="ne_ls_bottom_img">
                                                                            <img src="{{asset('template/images/content/ls2.jpg')}}"
                                                                                alt="rs_img">
                                                                        </div>
                                                                        <div class="ne_ls_bottom_img_cont">
                                                                            <h3><a href="#">Proin gravida nibh
                                                                                    vel velit auctor.</a></h3>
                                                                            <p><a href="#"><i
                                                                                        class="fa fa-calendar"></i>
                                                                                    &nbsp;25 OCT, 2022</a>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                    <div
                                                                        class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">
                                                                        <div class="ne_ls_bottom_img">
                                                                            <img src="{{asset('template/images/content/ls3.jpg')}}"
                                                                                alt="rs_img">
                                                                        </div>
                                                                        <div class="ne_ls_bottom_img_cont">
                                                                            <h3><a href="#">Google shifting threatens
                                                                                </a></h3>
                                                                            <p><a href="#"><i
                                                                                        class="fa fa-calendar"></i>
                                                                                    &nbsp;25 OCT, 2022</a>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="ne_re_left_top_main_wrapper">
                                                                        <div class="ne_re_left_img_main_wrapper yellow">
                                                                            <img src="{{asset('template/images/content/ls11.jpg')}}"
                                                                                alt="img">
                                                                            <h2>style</h2>
                                                                        </div>
                                                                        <div class="ne_re_left_img_cont_main_wrapper">
                                                                            <h3><a href="#">Award of the year</a></h3>
                                                                            <ul class="ne_re_social1_wrapper">
                                                                                <li
                                                                                    data-animation="animated fadeInLeft">
                                                                                    <a href="#"><i
                                                                                            class="fa fa-calendar"></i>
                                                                                        &nbsp;25 OCT, 2022</a>
                                                                                </li>
                                                                                <li
                                                                                    data-animation="animated fadeInLeft">
                                                                                    <a href="#"><i
                                                                                            class="fa fa-clock-o"></i>
                                                                                        &nbsp;07 : 00 am</a>
                                                                                </li>
                                                                            </ul>
                                                                            <p>This is Photoshop's version of Lorem
                                                                                Ipsum. Proin gravida nibh vel velit
                                                                                auctor aliquet. ean sollicitudin, lorem
                                                                                quis bibendum auctor, nisi elit
                                                                                consequat ipsum, nec sagittis sem nibh
                                                                                id elit. Duis sed odio sit amet nibh
                                                                                vulputate cursus a sit amet mauris.</p>
                                                                            <ul class="ne_re_social2_wrapper">
                                                                                <li
                                                                                    data-animation="animated fadeInLeft">
                                                                                    <a href="#"><i
                                                                                            class="fa fa-thumbs-up"></i>
                                                                                        &nbsp;5124 Like</a>
                                                                                </li>
                                                                                <li
                                                                                    data-animation="animated fadeInLeft">
                                                                                    <a href="#"><i
                                                                                            class="fa fa-comments"></i>
                                                                                        &nbsp;645 Comments</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                    <div
                                                                        class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">
                                                                        <div class="ne_ls_bottom_img">
                                                                            <img src="{{asset('template/images/content/ls2.jpg')}}"
                                                                                alt="rs_img">
                                                                        </div>
                                                                        <div class="ne_ls_bottom_img_cont">
                                                                            <h3><a href="#">Proin gravida nibh
                                                                                    vel velit auctor.</a></h3>
                                                                            <p><a href="#"><i
                                                                                        class="fa fa-calendar"></i>
                                                                                    &nbsp;25 OCT, 2022</a>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                    <div
                                                                        class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">
                                                                        <div class="ne_ls_bottom_img">
                                                                            <img src="{{asset('template/images/content/ls3.jpg')}}"
                                                                                alt="rs_img">
                                                                        </div>
                                                                        <div class="ne_ls_bottom_img_cont">
                                                                            <h3><a href="#">Google shifting threatens
                                                                                </a></h3>
                                                                            <p><a href="#"><i
                                                                                        class="fa fa-calendar"></i>
                                                                                    &nbsp;25 OCT, 2022</a>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="ne_re_left_top_main_wrapper">
                                                                        <div class="ne_re_left_img_main_wrapper yellow">
                                                                            <img src="{{asset('template/images/content/ls1.jpg')}}"
                                                                                alt="img">
                                                                            <h2>style</h2>
                                                                        </div>
                                                                        <div class="ne_re_left_img_cont_main_wrapper">
                                                                            <h3><a href="#">Award of the year</a></h3>
                                                                            <ul class="ne_re_social1_wrapper">
                                                                                <li
                                                                                    data-animation="animated fadeInLeft">
                                                                                    <a href="#"><i
                                                                                            class="fa fa-calendar"></i>
                                                                                        &nbsp;25 OCT, 2022</a>
                                                                                </li>
                                                                                <li
                                                                                    data-animation="animated fadeInLeft">
                                                                                    <a href="#"><i
                                                                                            class="fa fa-clock-o"></i>
                                                                                        &nbsp;07 : 00 am</a>
                                                                                </li>
                                                                            </ul>
                                                                            <p>This is Photoshop's version of Lorem
                                                                                Ipsum. Proin gravida nibh vel velit
                                                                                auctor aliquet. ean sollicitudin, lorem
                                                                                quis bibendum auctor, nisi elit
                                                                                consequat ipsum, nec sagittis sem nibh
                                                                                id elit. Duis sed odio sit amet nibh
                                                                                vulputate cursus a sit amet mauris.</p>
                                                                            <ul class="ne_re_social2_wrapper">
                                                                                <li
                                                                                    data-animation="animated fadeInLeft">
                                                                                    <a href="#"><i
                                                                                            class="fa fa-thumbs-up"></i>
                                                                                        &nbsp;5124 Like</a>
                                                                                </li>
                                                                                <li
                                                                                    data-animation="animated fadeInLeft">
                                                                                    <a href="#"><i
                                                                                            class="fa fa-comments"></i>
                                                                                        &nbsp;645 Comments</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                    <div
                                                                        class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">
                                                                        <div class="ne_ls_bottom_img">
                                                                            <img src="{{asset('template/images/content/ls2.jpg')}}"
                                                                                alt="rs_img">
                                                                        </div>
                                                                        <div class="ne_ls_bottom_img_cont">
                                                                            <h3><a href="#">Proin gravida nibh
                                                                                    vel velit auctor.</a></h3>
                                                                            <p><a href="#"><i
                                                                                        class="fa fa-calendar"></i>
                                                                                    &nbsp;25 OCT, 2022</a>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                    <div
                                                                        class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">
                                                                        <div class="ne_ls_bottom_img">
                                                                            <img src="{{asset('template/images/content/ls3.jpg')}}"
                                                                                alt="rs_img">
                                                                        </div>
                                                                        <div class="ne_ls_bottom_img_cont">
                                                                            <h3><a href="#">Google shifting threatens
                                                                                </a></h3>
                                                                            <p><a href="#"><i
                                                                                        class="fa fa-calendar"></i>
                                                                                    &nbsp;25 OCT, 2022</a>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="ne_busness_main_slider_wrapper">
                                                    <div class="ne_recent_heading_main_wrapper">
                                                        <h2>What's new</h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="ne_sport_slider_wrapper">
                                                    <div class="owl-carousel owl-theme">
                                                        <div class="item">
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                    <div class="ne_wn_img_main_wrapper yellow">
                                                                        <div class="ne_wn_img_overlay"></div>
                                                                        <h2>new</h2>
                                                                        <div class="ne_wn_social_inner_wrapper">
                                                                            <h3><a href="#">Award of the year</a></h3>
                                                                            <ul class="ne_wn_social1_wrapper">
                                                                                <li
                                                                                    data-animation="animated fadeInLeft">
                                                                                    <a href="#"><i
                                                                                            class="fa fa-calendar"></i>
                                                                                        &nbsp;25 OCT, 2022</a>
                                                                                </li>
                                                                                <li
                                                                                    data-animation="animated fadeInLeft">
                                                                                    <a href="#"><i
                                                                                            class="fa fa-clock-o"></i>
                                                                                        &nbsp;07 : 00 am</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                    <div
                                                                        class="ne_wn_img_main_wrapper ne_wn_img_main_wrapper2 yellow">
                                                                        <div class="ne_wn_img_overlay"></div>
                                                                        <h2>new</h2>
                                                                        <div class="ne_wn_social_inner_wrapper">
                                                                            <h3><a href="#">The Clock Is Ticking</a>
                                                                            </h3>
                                                                            <ul class="ne_wn_social1_wrapper">
                                                                                <li
                                                                                    data-animation="animated fadeInLeft">
                                                                                    <a href="#"><i
                                                                                            class="fa fa-calendar"></i>
                                                                                        &nbsp;25 OCT, 2022</a>
                                                                                </li>
                                                                                <li
                                                                                    data-animation="animated fadeInLeft">
                                                                                    <a href="#"><i
                                                                                            class="fa fa-clock-o"></i>
                                                                                        &nbsp;07 : 00 am</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                    <div
                                                                        class="ne_wn_img_main_wrapper ne_wn_img_main_wrapper3 yellow">
                                                                        <div class="ne_wn_img_overlay"></div>
                                                                        <h2>new</h2>
                                                                        <div class="ne_wn_social_inner_wrapper">
                                                                            <h3><a href="#">Easy Teriyaki
                                                                                </a></h3>
                                                                            <ul class="ne_wn_social1_wrapper">
                                                                                <li
                                                                                    data-animation="animated fadeInLeft">
                                                                                    <a href="#"><i
                                                                                            class="fa fa-calendar"></i>
                                                                                        &nbsp;25 OCT, 2022</a>
                                                                                </li>
                                                                                <li
                                                                                    data-animation="animated fadeInLeft">
                                                                                    <a href="#"><i
                                                                                            class="fa fa-clock-o"></i>
                                                                                        &nbsp;07 : 00 am</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                    <div
                                                                        class="ne_wn_img_main_wrapper ne_wn_img_main_wrapper4 yellow">
                                                                        <div class="ne_wn_img_overlay"></div>
                                                                        <h2>new</h2>
                                                                        <div class="ne_wn_social_inner_wrapper">
                                                                            <h3><a href="#">Boy's Head Impaled</a></h3>
                                                                            <ul class="ne_wn_social1_wrapper">
                                                                                <li
                                                                                    data-animation="animated fadeInLeft">
                                                                                    <a href="#"><i
                                                                                            class="fa fa-calendar"></i>
                                                                                        &nbsp;25 OCT, 2022</a>
                                                                                </li>
                                                                                <li
                                                                                    data-animation="animated fadeInLeft">
                                                                                    <a href="#"><i
                                                                                            class="fa fa-clock-o"></i>
                                                                                        &nbsp;07 : 00 am</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                    <div class="ne_wn_img_main_wrapper yellow">
                                                                        <div class="ne_wn_img_overlay"></div>
                                                                        <h2>new</h2>
                                                                        <div class="ne_wn_social_inner_wrapper">
                                                                            <h3><a href="#">Award of the year</a></h3>
                                                                            <ul class="ne_wn_social1_wrapper">
                                                                                <li
                                                                                    data-animation="animated fadeInLeft">
                                                                                    <a href="#"><i
                                                                                            class="fa fa-calendar"></i>
                                                                                        &nbsp;25 OCT, 2022</a>
                                                                                </li>
                                                                                <li
                                                                                    data-animation="animated fadeInLeft">
                                                                                    <a href="#"><i
                                                                                            class="fa fa-clock-o"></i>
                                                                                        &nbsp;07 : 00 am</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                    <div
                                                                        class="ne_wn_img_main_wrapper ne_wn_img_main_wrapper2 yellow">
                                                                        <div class="ne_wn_img_overlay"></div>
                                                                        <h2>new</h2>
                                                                        <div class="ne_wn_social_inner_wrapper">
                                                                            <h3><a href="#">The Clock Is Ticking</a>
                                                                            </h3>
                                                                            <ul class="ne_wn_social1_wrapper">
                                                                                <li
                                                                                    data-animation="animated fadeInLeft">
                                                                                    <a href="#"><i
                                                                                            class="fa fa-calendar"></i>
                                                                                        &nbsp;25 OCT, 2022</a>
                                                                                </li>
                                                                                <li
                                                                                    data-animation="animated fadeInLeft">
                                                                                    <a href="#"><i
                                                                                            class="fa fa-clock-o"></i>
                                                                                        &nbsp;07 : 00 am</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                    <div
                                                                        class="ne_wn_img_main_wrapper ne_wn_img_main_wrapper3 yellow">
                                                                        <div class="ne_wn_img_overlay"></div>
                                                                        <h2>new</h2>
                                                                        <div class="ne_wn_social_inner_wrapper">
                                                                            <h3><a href="#">Easy Teriyaki
                                                                                </a></h3>
                                                                            <ul class="ne_wn_social1_wrapper">
                                                                                <li
                                                                                    data-animation="animated fadeInLeft">
                                                                                    <a href="#"><i
                                                                                            class="fa fa-calendar"></i>
                                                                                        &nbsp;25 OCT, 2022</a>
                                                                                </li>
                                                                                <li
                                                                                    data-animation="animated fadeInLeft">
                                                                                    <a href="#"><i
                                                                                            class="fa fa-clock-o"></i>
                                                                                        &nbsp;07 : 00 am</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                    <div
                                                                        class="ne_wn_img_main_wrapper ne_wn_img_main_wrapper4 yellow">
                                                                        <div class="ne_wn_img_overlay"></div>
                                                                        <h2>new</h2>
                                                                        <div class="ne_wn_social_inner_wrapper">
                                                                            <h3><a href="#">Boy's Head Impaled</a></h3>
                                                                            <ul class="ne_wn_social1_wrapper">
                                                                                <li
                                                                                    data-animation="animated fadeInLeft">
                                                                                    <a href="#"><i
                                                                                            class="fa fa-calendar"></i>
                                                                                        &nbsp;25 OCT, 2022</a>
                                                                                </li>
                                                                                <li
                                                                                    data-animation="animated fadeInLeft">
                                                                                    <a href="#"><i
                                                                                            class="fa fa-clock-o"></i>
                                                                                        &nbsp;07 : 00 am</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                    <div class="ne_wn_img_main_wrapper yellow">
                                                                        <div class="ne_wn_img_overlay"></div>
                                                                        <h2>new</h2>
                                                                        <div class="ne_wn_social_inner_wrapper">
                                                                            <h3><a href="#">Award of the year</a></h3>
                                                                            <ul class="ne_wn_social1_wrapper">
                                                                                <li
                                                                                    data-animation="animated fadeInLeft">
                                                                                    <a href="#"><i
                                                                                            class="fa fa-calendar"></i>
                                                                                        &nbsp;25 OCT, 2022</a>
                                                                                </li>
                                                                                <li
                                                                                    data-animation="animated fadeInLeft">
                                                                                    <a href="#"><i
                                                                                            class="fa fa-clock-o"></i>
                                                                                        &nbsp;07 : 00 am</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                    <div
                                                                        class="ne_wn_img_main_wrapper ne_wn_img_main_wrapper2 yellow">
                                                                        <div class="ne_wn_img_overlay"></div>
                                                                        <h2>new</h2>
                                                                        <div class="ne_wn_social_inner_wrapper">
                                                                            <h3><a href="#">The Clock Is Ticking</a>
                                                                            </h3>
                                                                            <ul class="ne_wn_social1_wrapper">
                                                                                <li
                                                                                    data-animation="animated fadeInLeft">
                                                                                    <a href="#"><i
                                                                                            class="fa fa-calendar"></i>
                                                                                        &nbsp;25 OCT, 2022</a>
                                                                                </li>
                                                                                <li
                                                                                    data-animation="animated fadeInLeft">
                                                                                    <a href="#"><i
                                                                                            class="fa fa-clock-o"></i>
                                                                                        &nbsp;07 : 00 am</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                    <div
                                                                        class="ne_wn_img_main_wrapper ne_wn_img_main_wrapper3 yellow">
                                                                        <div class="ne_wn_img_overlay"></div>
                                                                        <h2>new</h2>
                                                                        <div class="ne_wn_social_inner_wrapper">
                                                                            <h3><a href="#">Easy Teriyaki
                                                                                </a></h3>
                                                                            <ul class="ne_wn_social1_wrapper">
                                                                                <li
                                                                                    data-animation="animated fadeInLeft">
                                                                                    <a href="#"><i
                                                                                            class="fa fa-calendar"></i>
                                                                                        &nbsp;25 OCT, 2022</a>
                                                                                </li>
                                                                                <li
                                                                                    data-animation="animated fadeInLeft">
                                                                                    <a href="#"><i
                                                                                            class="fa fa-clock-o"></i>
                                                                                        &nbsp;07 : 00 am</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                    <div
                                                                        class="ne_wn_img_main_wrapper ne_wn_img_main_wrapper4 yellow">
                                                                        <div class="ne_wn_img_overlay"></div>
                                                                        <h2>new</h2>
                                                                        <div class="ne_wn_social_inner_wrapper">
                                                                            <h3><a href="#">Boy's Head Impaled</a></h3>
                                                                            <ul class="ne_wn_social1_wrapper">
                                                                                <li
                                                                                    data-animation="animated fadeInLeft">
                                                                                    <a href="#"><i
                                                                                            class="fa fa-calendar"></i>
                                                                                        &nbsp;25 OCT, 2022</a>
                                                                                </li>
                                                                                <li
                                                                                    data-animation="animated fadeInLeft">
                                                                                    <a href="#"><i
                                                                                            class="fa fa-clock-o"></i>
                                                                                        &nbsp;07 : 00 am</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="ne_busness_main_slider_wrapper">
                                                    <div class="ne_recent_heading_main_wrapper">
                                                        <h2>Travels</h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="ne_sport_slider_wrapper ne_sport_slider_wrapper_travels">
                                                    <div class="owl-carousel owl-theme">
                                                        <div class="item">
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                    <div
                                                                        class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">
                                                                        <div class="ne_tr_bottom_img">
                                                                            <img src="{{asset('template/images/content/t1.jpg')}}"
                                                                                alt="rs_img">
                                                                        </div>
                                                                        <div class="ne_tr_bottom_img_cont">
                                                                            <h3><a href="#">Proin gravida nibh
                                                                                    vel velit auctor.</a></h3>
                                                                            <p><a href="#"><i
                                                                                        class="fa fa-calendar"></i>
                                                                                    &nbsp;25 OCT, 2022</a>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                    <div
                                                                        class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">
                                                                        <div class="ne_tr_bottom_img">
                                                                            <img src="{{asset('template/images/content/t2.jpg')}}"
                                                                                alt="rs_img">
                                                                        </div>
                                                                        <div class="ne_tr_bottom_img_cont">
                                                                            <h3><a href="#">
                                                                                    Hands on with the Apple </a></h3>
                                                                            <p><a href="#"><i
                                                                                        class="fa fa-calendar"></i>
                                                                                    &nbsp;25 OCT, 2022</a>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                    <div
                                                                        class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">
                                                                        <div class="ne_tr_bottom_img">
                                                                            <img src="{{asset('template/images/content/t3.jpg')}}"
                                                                                alt="rs_img">
                                                                        </div>
                                                                        <div class="ne_tr_bottom_img_cont">
                                                                            <h3><a href="#">Google shifting threatens
                                                                                </a></h3>
                                                                            <p><a href="#"><i
                                                                                        class="fa fa-calendar"></i>
                                                                                    &nbsp;25 OCT, 2022</a>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                    <div
                                                                        class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">
                                                                        <div class="ne_tr_bottom_img">
                                                                            <img src="{{asset('template/images/content/t4.jpg')}}"
                                                                                alt="rs_img">
                                                                        </div>
                                                                        <div class="ne_tr_bottom_img_cont">
                                                                            <h3><a href="#">Tesla just lost its head
                                                                                </a></h3>
                                                                            <p><a href="#"><i
                                                                                        class="fa fa-calendar"></i>
                                                                                    &nbsp;25 OCT, 2022</a>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                    <div
                                                                        class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">
                                                                        <div class="ne_tr_bottom_img">
                                                                            <img src="{{asset('template/images/content/t5.jpg')}}"
                                                                                alt="rs_img">
                                                                        </div>
                                                                        <div class="ne_tr_bottom_img_cont">
                                                                            <h3><a href="#">Faangs diverge prospect</a>
                                                                            </h3>
                                                                            <p><a href="#"><i
                                                                                        class="fa fa-calendar"></i>
                                                                                    &nbsp;25 OCT, 2022</a>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                    <div
                                                                        class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">
                                                                        <div class="ne_tr_bottom_img">
                                                                            <img src="{{asset('template/images/content/t6.jpg')}}"
                                                                                alt="rs_img">
                                                                        </div>
                                                                        <div class="ne_tr_bottom_img_cont">
                                                                            <h3><a href="#">
                                                                                    Beats something today</a></h3>
                                                                            <p><a href="#"><i
                                                                                        class="fa fa-calendar"></i>
                                                                                    &nbsp;25 OCT, 2022</a>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                    <div
                                                                        class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">
                                                                        <div class="ne_tr_bottom_img">
                                                                            <img src="{{asset('template/images/content/t1.jpg')}}"
                                                                                alt="rs_img">
                                                                        </div>
                                                                        <div class="ne_tr_bottom_img_cont">
                                                                            <h3><a href="#">Proin gravida nibh
                                                                                    vel velit auctor.</a></h3>
                                                                            <p><a href="#"><i
                                                                                        class="fa fa-calendar"></i>
                                                                                    &nbsp;25 OCT, 2022</a>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                    <div
                                                                        class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">
                                                                        <div class="ne_tr_bottom_img">
                                                                            <img src="{{asset('template/images/content/t2.jpg')}}"
                                                                                alt="rs_img">
                                                                        </div>
                                                                        <div class="ne_tr_bottom_img_cont">
                                                                            <h3><a href="#">
                                                                                    Hands on with the Apple </a></h3>
                                                                            <p><a href="#"><i
                                                                                        class="fa fa-calendar"></i>
                                                                                    &nbsp;25 OCT, 2022</a>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                    <div
                                                                        class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">
                                                                        <div class="ne_tr_bottom_img">
                                                                            <img src="{{asset('template/images/content/t3.jpg')}}"
                                                                                alt="rs_img">
                                                                        </div>
                                                                        <div class="ne_tr_bottom_img_cont">
                                                                            <h3><a href="#">Google shifting threatens
                                                                                </a></h3>
                                                                            <p><a href="#"><i
                                                                                        class="fa fa-calendar"></i>
                                                                                    &nbsp;25 OCT, 2022</a>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                    <div
                                                                        class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">
                                                                        <div class="ne_tr_bottom_img">
                                                                            <img src="{{asset('template/images/content/t4.jpg')}}"
                                                                                alt="rs_img">
                                                                        </div>
                                                                        <div class="ne_tr_bottom_img_cont">
                                                                            <h3><a href="#">Tesla just lost its head
                                                                                </a></h3>
                                                                            <p><a href="#"><i
                                                                                        class="fa fa-calendar"></i>
                                                                                    &nbsp;25 OCT, 2022</a>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                    <div
                                                                        class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">
                                                                        <div class="ne_tr_bottom_img">
                                                                            <img src="{{asset('template/images/content/t5.jpg')}}"
                                                                                alt="rs_img">
                                                                        </div>
                                                                        <div class="ne_tr_bottom_img_cont">
                                                                            <h3><a href="#">Faangs diverge prospect</a>
                                                                            </h3>
                                                                            <p><a href="#"><i
                                                                                        class="fa fa-calendar"></i>
                                                                                    &nbsp;25 OCT, 2022</a>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                    <div
                                                                        class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">
                                                                        <div class="ne_tr_bottom_img">
                                                                            <img src="{{asset('template/images/content/t6.jpg')}}"
                                                                                alt="rs_img">
                                                                        </div>
                                                                        <div class="ne_tr_bottom_img_cont">
                                                                            <h3><a href="#">
                                                                                    Beats something today</a></h3>
                                                                            <p><a href="#"><i
                                                                                        class="fa fa-calendar"></i>
                                                                                    &nbsp;25 OCT, 2022</a>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                    <div
                                                                        class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">
                                                                        <div class="ne_tr_bottom_img">
                                                                            <img src="{{asset('template/images/content/t1.jpg')}}"
                                                                                alt="rs_img">
                                                                        </div>
                                                                        <div class="ne_tr_bottom_img_cont">
                                                                            <h3><a href="#">Proin gravida nibh
                                                                                    vel velit auctor.</a></h3>
                                                                            <p><a href="#"><i
                                                                                        class="fa fa-calendar"></i>
                                                                                    &nbsp;25 OCT, 2022</a>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                    <div
                                                                        class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">
                                                                        <div class="ne_tr_bottom_img">
                                                                            <img src="{{asset('template/images/content/t2.jpg')}}"
                                                                                alt="rs_img">
                                                                        </div>
                                                                        <div class="ne_tr_bottom_img_cont">
                                                                            <h3><a href="#">
                                                                                    Hands on with the Apple </a></h3>
                                                                            <p><a href="#"><i
                                                                                        class="fa fa-calendar"></i>
                                                                                    &nbsp;25 OCT, 2022</a>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                    <div
                                                                        class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">
                                                                        <div class="ne_tr_bottom_img">
                                                                            <img src="{{asset('template/images/content/t3.jpg')}}"
                                                                                alt="rs_img">
                                                                        </div>
                                                                        <div class="ne_tr_bottom_img_cont">
                                                                            <h3><a href="#">Google shifting threatens
                                                                                </a></h3>
                                                                            <p><a href="#"><i
                                                                                        class="fa fa-calendar"></i>
                                                                                    &nbsp;25 OCT, 2022</a>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                    <div
                                                                        class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">
                                                                        <div class="ne_tr_bottom_img">
                                                                            <img src="{{asset('template/images/content/t4.jpg')}}"
                                                                                alt="rs_img">
                                                                        </div>
                                                                        <div class="ne_tr_bottom_img_cont">
                                                                            <h3><a href="#">Tesla just lost its head
                                                                                </a></h3>
                                                                            <p><a href="#"><i
                                                                                        class="fa fa-calendar"></i>
                                                                                    &nbsp;25 OCT, 2022</a>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                    <div
                                                                        class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">
                                                                        <div class="ne_tr_bottom_img">
                                                                            <img src="{{asset('template/images/content/t5.jpg')}}"
                                                                                alt="rs_img">
                                                                        </div>
                                                                        <div class="ne_tr_bottom_img_cont">
                                                                            <h3><a href="#">Faangs diverge prospect</a>
                                                                            </h3>
                                                                            <p><a href="#"><i
                                                                                        class="fa fa-calendar"></i>
                                                                                    &nbsp;25 OCT, 2022</a>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                    <div
                                                                        class="ne_re_left_bottom_main_wrapper ne_re_left_bottom_main_wrapper_top2">
                                                                        <div class="ne_tr_bottom_img">
                                                                            <img src="{{asset('template/images/content/t6.jpg')}}"
                                                                                alt="rs_img">
                                                                        </div>
                                                                        <div class="ne_tr_bottom_img_cont">
                                                                            <h3><a href="#">
                                                                                    Beats something today</a></h3>
                                                                            <p><a href="#"><i
                                                                                        class="fa fa-calendar"></i>
                                                                                    &nbsp;25 OCT, 2022</a>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="ne_indx_sidebar_main_wrapper">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="ne_sidebar_inner_social_wrapper ne_sidebar_inner_social_wrapper_hide_res">
                                    <div class="ne_recent_heading_main_wrapper font_18px">
                                        <h2>STAY CONNECTED</h2>
                                    </div>
                                    <div class="ne_indx_sidebar_shair_icon_main_wrapper">
                                        <div class="btc_blog_cate_social_fb_wrapper"> <a href="#"><i
                                                    class="fa fa-facebook"></i><br> 4.1 M<br>Fans</a>
                                        </div>
                                        <div class="btc_blog_cate_social_tw_wrapper"> <a href="#"><i
                                                    class="fa fa-twitter"></i><br> 178<br>Followers</a>
                                        </div>
                                        <div class="btc_blog_cate_social_gp_wrapper"> <a href="#"><i
                                                    class="fa fa-google-plus"></i><br> 884.0 K<br>Followers</a>
                                        </div>
                                        <div class="btc_blog_cate_social_vimo_wrapper"> <a href="#"><i
                                                    class="fa fa-vimeo"></i><br> 323 K<br>Subscriber</a>
                                        </div>
                                        <div class="btc_blog_cate_social_yt_wrapper"> <a href="#"><i
                                                    class="fa fa-youtube-play"></i><br> 323 K<br>Subscriber</a>
                                        </div>
                                        <div class="btc_blog_cate_social_shair_wrapper"> <a href="#"><i
                                                    class="fa fa-share-alt"></i><br> 7.4 K<br>Followers</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div
                                    class="ne_sidebar_inner_social_wrapper ne_sidebar_second_inner_social_wrapper ne_sidebar_inner_social_wrapper_hide_res_weather">
                                    <div class="ne_recent_heading_main_wrapper font_18px">
                                        <h2>Today weather</h2>
                                    </div>
                                    <div class="ne_weather_inner_wrapper">
                                        <div id="current" class="wrapper">
                                            <h1 class="location">Chicago, IL</h1>
                                            <h2 class="date">Sunday, January 1, 2022</h2>
                                            <p class="weather_img">
                                                <img src="{{asset('template/images/content/weather_img.png')}}"
                                                    alt="weather">
                                            </p>
                                            <p class="temp">72</p>
                                            <p class="conditions">Sunny</p>
                                        </div>
                                        <!-- Future Forecast -->
                                        <div id="future" class="wrapper">
                                            <div class="container">
                                                <h3 class="day">Mon</h3>
                                                <p class="weather_img2">
                                                    <img src="{{asset('template/images/content/weather_img2.png')}}"
                                                        alt="weather">
                                                </p>
                                                <p class="tempRange"><span class="high">64</span> <span
                                                        class="low">48</span>
                                                </p>
                                            </div>
                                            <div class="container">
                                                <h3 class="day">Tue</h3>
                                                <p class="weather_img2">
                                                    <img src="{{asset('template/images/content/weather_img3.png')}}"
                                                        alt="weather">
                                                </p>
                                                <p class="tempRange"><span class="high">57</span> <span
                                                        class="low">45</span>
                                                </p>
                                            </div>
                                            <div class="container">
                                                <h3 class="day">Wed</h3>
                                                <p class="weather_img2">
                                                    <img src="{{asset('template/images/content/weather_img4.png')}}"
                                                        alt="weather">
                                                </p>
                                                <p class="tempRange"><span class="high">63</span> <span
                                                        class="low">59</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="ne_sidebar_inner_social_wrapper ne_sidebar_second_inner_social_wrapper">
                                    <div class="ne_recent_heading_main_wrapper font_18px">
                                        <h2>Latest News</h2>
                                    </div>
                                    <div class="ne_lns_slider_wrapper ne_ln_main_sidebar_slider_wrapper">
                                        <div class="owl-carousel owl-theme">
                                            <div class="item">
                                                <div
                                                    class="ne_wn_img_main_wrapper ne_ln_inner_img_main_wrapper ne_re_left_img_main_wrapper2">
                                                    <div class="ne_wn_img_overlay"></div>
                                                    <h2>sport</h2>
                                                    <div class="ne_wn_social_inner_wrapper">
                                                        <h3><a href="#">Award of the year</a></h3>
                                                        <ul class="ne_wn_social1_wrapper">
                                                            <li data-animation="animated fadeInLeft"><a href="#"><i
                                                                        class="fa fa-calendar"></i> &nbsp;25 OCT,
                                                                    2022</a>
                                                            </li>
                                                            <li data-animation="animated fadeInLeft"><a href="#"><i
                                                                        class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div
                                                    class="ne_wn_img_main_wrapper ne_ln_inner_img_main_wrapper ne_re_left_img_main_wrapper2">
                                                    <div class="ne_wn_img_overlay"></div>
                                                    <h2>sport</h2>
                                                    <div class="ne_wn_social_inner_wrapper">
                                                        <h3><a href="#">The clock is ticking </a></h3>
                                                        <ul class="ne_wn_social1_wrapper">
                                                            <li data-animation="animated fadeInLeft"><a href="#"><i
                                                                        class="fa fa-calendar"></i> &nbsp;25 OCT,
                                                                    2022</a>
                                                            </li>
                                                            <li data-animation="animated fadeInLeft"><a href="#"><i
                                                                        class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div
                                                    class="ne_wn_img_main_wrapper ne_ln_inner_img_main_wrapper ne_re_left_img_main_wrapper2">
                                                    <div class="ne_wn_img_overlay"></div>
                                                    <h2>sport</h2>
                                                    <div class="ne_wn_social_inner_wrapper">
                                                        <h3><a href="#">Award of the year</a></h3>
                                                        <ul class="ne_wn_social1_wrapper">
                                                            <li data-animation="animated fadeInLeft"><a href="#"><i
                                                                        class="fa fa-calendar"></i> &nbsp;25 OCT,
                                                                    2022</a>
                                                            </li>
                                                            <li data-animation="animated fadeInLeft"><a href="#"><i
                                                                        class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="ne_sidebar_inner_social_wrapper ne_sidebar_second_inner_social_wrapper">
                                    <div class="ne_recent_heading_main_wrapper font_18px">
                                        <h2>Categories</h2>
                                    </div>
                                    <div class="ne_sidebar_cate_list_wrappper">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-square"></i> &nbsp;&nbsp;World
                                                    <span>10245</span></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-square"></i> &nbsp;&nbsp;Travel
                                                    <span>2025</span>
                                                </a></li>
                                            <li><a href="#"><i class="fa fa-square"></i> &nbsp;&nbsp;Health
                                                    <span>30503</span>
                                                </a></li>
                                            <li><a href="#"><i class="fa fa-square"></i> &nbsp;&nbsp;Lifestyle
                                                    <span>50014</span>
                                                </a></li>
                                            <li><a href="#"><i class="fa fa-square"></i> &nbsp;&nbsp;Sports
                                                    <span>2545</span>
                                                </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="ne_sidebar_inner_social_wrapper ne_sidebar_second_inner_social_wrapper">
                                    <div class="ne_recent_heading_main_wrapper font_18px">
                                        <h2>Advertising</h2>
                                    </div>
                                    <div class="ne_sidebar_advertize_main_wrapper">
                                        <a href="#">
                                            <img src="{{asset('template/images/content/advertiz.jpg')}}" alt="img">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="ne_sidebar_inner_social_wrapper ne_sidebar_second_inner_social_wrapper">
                                    <div class="ne_recent_heading_main_wrapper font_18px">
                                        <h2>Recent Posts</h2>
                                    </div>
                                    <div class="ne_re_left_bottom_main_wrapper ne_pc_main_cont_wrapper">
                                        <div class="ne_pc_bottom_img">
                                            <img src="{{asset('template/images/content/pc1.jpg')}}" alt="rs_img">
                                        </div>
                                        <div class="ne_pc_bottom_img_cont">
                                            <h3><a href="#">Etiam dignissim aliquet sed.</a></h3>
                                            <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2022</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="ne_re_left_bottom_main_wrapper ne_pc_main_cont_wrapper2">
                                        <div class="ne_pc_bottom_img">
                                            <img src="{{asset('template/images/content/pc2.jpg')}}" alt="rs_img">
                                        </div>
                                        <div class="ne_pc_bottom_img_cont">
                                            <h3><a href="#">Google shifting threatens aliquet</a></h3>
                                            <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2022</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="ne_re_left_bottom_main_wrapper ne_pc_main_cont_wrapper2">
                                        <div class="ne_pc_bottom_img">
                                            <img src="{{asset('template/images/content/pc3.jpg')}}" alt="rs_img">
                                        </div>
                                        <div class="ne_pc_bottom_img_cont">
                                            <h3><a href="#">
                                                    Beats did some thing today</a></h3>
                                            <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2022</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="ne_re_left_bottom_main_wrapper ne_pc_main_cont_wrapper2">
                                        <div class="ne_pc_bottom_img">
                                            <img src="{{asset('template/images/content/pc4.jpg')}}" alt="rs_img">
                                        </div>
                                        <div class="ne_pc_bottom_img_cont">
                                            <h3><a href="#">
                                                    Hands on with the Apple </a></h3>
                                            <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2022</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="ne_re_left_bottom_main_wrapper ne_pc_main_cont_wrapper2">
                                        <div class="ne_pc_bottom_img">
                                            <img src="{{asset('template/images/content/pc5.jpg')}}" alt="rs_img">
                                        </div>
                                        <div class="ne_pc_bottom_img_cont">
                                            <h3><a href="#">Etiam dignissim velit sed.</a></h3>
                                            <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2022</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="ne_sidebar_inner_social_wrapper ne_sidebar_second_inner_social_wrapper">
                                    <div class="ne_recent_heading_main_wrapper font_18px">
                                        <h2>Latest Articles</h2>
                                    </div>
                                    <div
                                        class="ne_wn_img_main_wrapper ne_ln_inner_img_main_wrapper ne_re_left_img_main_wrapper2 bab">
                                        <div class="ne_wn_img_overlay"></div>

                                        <div class="ne_wn_social_inner_wrapper">
                                            <h3><a href="#">Award of the year</a></h3>
                                            <ul class="ne_wn_social1_wrapper">
                                                <li data-animation="animated fadeInLeft"><a href="#"><i
                                                            class="fa fa-calendar"></i> &nbsp;25 OCT, 2022</a>
                                                </li>
                                                <li data-animation="animated fadeInLeft"><a href="#"><i
                                                            class="fa fa-clock-o"></i> &nbsp;07 : 00 am</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ne_re_left_bottom_main_wrapper ne_pc_main_cont_wrapper3">
                                        <div class="ne_pc_bottom_img">
                                            <img src="{{asset('template/images/content/pc6.jpg')}}" alt="rs_img">
                                        </div>
                                        <div class="ne_pc_bottom_img_cont">
                                            <h3><a href="#">Etiam dignissim aliquet velit sed.</a></h3>
                                            <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2022</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="ne_re_left_bottom_main_wrapper ne_pc_main_cont_wrapper3">
                                        <div class="ne_pc_bottom_img">
                                            <img src="{{asset('template/images/content/pc7.jpg')}}" alt="rs_img">
                                        </div>
                                        <div class="ne_pc_bottom_img_cont">
                                            <h3><a href="#">Beats did some thing today</a></h3>
                                            <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2022</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="ne_re_left_bottom_main_wrapper ne_pc_main_cont_wrapper3">
                                        <div class="ne_pc_bottom_img">
                                            <img src="{{asset('template/images/content/pc8.jpg')}}" alt="rs_img">
                                        </div>
                                        <div class="ne_pc_bottom_img_cont">
                                            <h3><a href="#">Etiam dignissim velit sed.</a></h3>
                                            <p><a href="#"><i class="fa fa-calendar"></i> &nbsp;25 OCT, 2022</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="ne_sidebar_inner_social_wrapper ne_sidebar_second_inner_social_wrapper">
                                    <div class="ne_recent_heading_main_wrapper font_18px">
                                        <h2>Find us on Facebook</h2>
                                    </div>
                                    <div class="ne_sidebar_faceb_section_img">
                                        <div class="ne_inva_img_overlay"></div>
                                        <img src="{{asset('template/images/content/facebook_img.jpg')}}" alt="img">
                                        <div class="ne_inva_main_wrapper">
                                            <div class="ne_inva_img_wrapper">
                                                <img src="{{asset('template/images/content/envato_img.jpg')}}"
                                                    alt="img">
                                            </div>
                                            <div class="ne_inva_img_cont_wrapper">
                                                <h3>Envato</h3>
                                                <h4>175,848 likes</h4>
                                            </div>
                                        </div>
                                        <h5><a href="#"><i class="fa fa-facebook-square"></i> &nbsp;Like</a></h5>
                                    </div>
                                    <div class="ne_fb_online_section_wrapper">
                                        <p>You and 122 other friend like this</p>
                                        <ul>
                                            <li>
                                                <img src="{{asset('template/images/content/fb1.jpg')}}" alt="img">
                                            </li>
                                            <li>
                                                <img src="{{asset('template/images/content/fb2.jpg')}}" alt="img">
                                            </li>
                                            <li>
                                                <img src="{{asset('template/images/content/fb3.jpg')}}" alt="img">
                                            </li>
                                            <li>
                                                <img src="{{asset('template/images/content/fb4.jpg')}}" alt="img">
                                            </li>
                                            <li>
                                                <img src="{{asset('template/images/content/fb5.jpg')}}" alt="img">
                                            </li>
                                            <li>
                                                <img src="{{asset('template/images/content/fb6.jpg')}}" alt="img">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="ne_sidebar_inner_social_wrapper ne_sidebar_second_inner_social_wrapper">
                                    <div class="ne_recent_heading_main_wrapper font_18px">
                                        <h2>Get Even More</h2>
                                    </div>
                                    <div class="ne_sidebar_serch_main_wrapper">
                                        <p>"Get all latest content delivered straight to your inbox."</p>
                                        <div class="ne_sidebar_search_aaauch"> <i class="fa fa-envelope input_icon"></i>
                                            <input type="email" placeholder="your email address">
                                            <button><i class="fa fa-location-arrow"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="ne_sidebar_inner_social_wrapper ne_sidebar_second_inner_social_wrapper">
                                    <div class="ne_recent_heading_main_wrapper font_18px">
                                        <h2>latest reviews</h2>
                                    </div>
                                    <div class="ne_lr_main_section_wrapper">
                                        <div class="ne_lr_img_wrapper">
                                            <img src="{{asset('template/images/content/lr1.jpg')}}" alt="img">
                                        </div>
                                        <div class="ne_lr_img_cont_wrapper">
                                            <div class="ne_lr_star_dev_wrapper hidden-md"> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="ne_lr_star_right_section hidden-md">
                                                <h4>5.0</h4>
                                            </div>
                                            <div class="ne_lr_img_cont_heading_wrapper">
                                                <h3><a href="#">Velebrity Fashion</a></h3>
                                                <p>NewsX is a Creative and Unique</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ne_lr_main_section_wrapper ne_lr_main_section_wrapper2">
                                        <div class="ne_lr_img_wrapper">
                                            <img src="{{asset('template/images/content/lr2.jpg')}}" alt="img">
                                        </div>
                                        <div class="ne_lr_img_cont_wrapper">
                                            <div class="ne_lr_star_dev_wrapper hidden-md"> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </div>
                                            <div class="ne_lr_star_right_section hidden-md">
                                                <h4>4.5</h4>
                                            </div>
                                            <div class="ne_lr_img_cont_heading_wrapper">
                                                <h3><a href="#">Easy teriyaki </a></h3>
                                                <p>NewsX is a Creative and Unique</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ne_lr_main_section_wrapper ne_lr_main_section_wrapper2">
                                        <div class="ne_lr_img_wrapper">
                                            <img src="{{asset('template/images/content/lr3.jpg')}}" alt="img">
                                        </div>
                                        <div class="ne_lr_img_cont_wrapper">
                                            <div class="ne_lr_star_dev_wrapper hidden-md"> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                                <i class="fa fa-star-half"></i>
                                            </div>
                                            <div class="ne_lr_star_right_section hidden-md">
                                                <h4>3.5</h4>
                                            </div>
                                            <div class="ne_lr_img_cont_heading_wrapper">
                                                <h3><a href="#">Faangs diverge </a></h3>
                                                <p>NewsX is a Creative and Unique</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="ne_bottom_banner_main_wrapper">
                        <a href="#">
                            <img src="{{asset('template/images/content/banner_bottom.jpg')}}" alt="banner">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--resent news End-->
</div>