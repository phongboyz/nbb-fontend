<!-- prs navigation Start -->
<div class="prs_navigation_main_wrapper">
        <div class="container">
            <div class="serach-header">
                <div class="searchbox">
                    <button class="close">×</button>
                    <form>
                        <input type="search" placeholder="Search …">
                        <button type="submit"><i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
            </div>
            <div class="prs_navi_left_main_wrapper">
                <div class="prs_logo_main_wrapper">
                    <a href="{{route('home')}}">
                        <img src="{{asset($app_profile->logo)}}" alt="logo" class="img-responsive hidden-xs" />
                        <img src="{{asset($app_profile->logo)}}" alt="logo" class="visible-xs" />
                    </a>
                </div>
                <div class="prs_menu_main_wrapper">
                    <nav class="navbar navbar-default">
                        <div id="dl-menu" class="xv-menuwrapper responsive-menu">
                            <button class="dl-trigger">
                                <img src="{{asset('template/images/header/bars.png')}}" alt="bar_png">
                            </button>
                            <div class="clearfix"></div>
                            <div class="searchd" ><i class="fa fa-search"></i>
                            </div>
                            <ul class="dl-menu">
                                <li ><a href="{{route('home')}}" class="effect_nav"><span style="font-size: 20px;">ໜ້າຫຼັກ</span></a></li>
                                @foreach ($list_menu as $item)
                                @if ($item->cate_menu === "sub1" && $item->active == 1)
                                    @if ($item->cate_menu == "sub1")
                                        @if ($item->type === 'page')
                                        <li ><a href="{{route('page.menu', $item->id)}}" class="effect_nav"><span style="font-size: 20px;">{{$item->name}}</span></a></li>
                                        @elseif ($item->type === 'link')
                                        <li ><a href="{{$item->note}}" class="effect_nav"><span style="font-size: 20px;">{{$item->name}}</span></a></li>
                                        @else
                                        <li ><a href="{{route('view.menu',$item->id)}}" class="effect_nav"><span style="font-size: 20px;">{{$item->name}}</span></a></li>
                                        @endif
                                    @endif
                                @else

                                <li class="parent"><a href="#" class="effect_nav" style="font-size: 20px;">{{$item->name}}</a>
                                    <ul class="lg-submenu">
                                            @foreach ($list_menu_sub as $items)
                                                @if ($item->id == $items->parent_id)
                                                    @if ($items->cate_menu == 'sub2' && $items->active == 1)
                                                        @if ($items->type === 'page')
                                                        <li><a href="{{route('page.menu', $items->id)}}">{{$items->sub_name}}</a></li>
                                                        @elseif ($items->type === 'link')
                                                        <li><a href="{{$items->note}}">{{$items->sub_name}}</a></li>
                                                        @else
                                                        <li><a href="{{route('view.menu',$items->id)}}">{{$items->sub_name}}</a></li>
                                                        @endif
                                                    @else
                                                    <li class="parent"><a href="#">{{$items->sub_name}}</a>
                                                        <ul class="lg-submenu">
                                                            @foreach ($list_menu_sub_sub as $itemss)
                                                                @if ($items->id == $itemss->sub_parent_id)
                                                                    @if ($items->type === 'page')
                                                                    <li><a href="{{route('page.menu', $itemss->id)}}">{{$itemss->parent_sub_name}}</a></li>
                                                                    @elseif ($items->type === 'link')
                                                                    <li><a href="{{$itemss->note}}">{{$itemss->parent_sub_name}}</a></li>
                                                                    @else
                                                                    <li><a href="{{route('view.menu',$itemss->id)}}">{{$itemss->parent_sub_name}}</a></li>
                                                                    @endif
                                                                @endif
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                    @endif
                                                @endif
                                            @endforeach
                                    </ul>
                                </li>
                                @endif
                            @endforeach

                            </ul>
                        </div>
                        <!-- /dl-menuwrapper -->
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- prs navigation End -->