<nav class="navbar navbar-expand-md navbar-light bg-main shadow-sm">
    <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">
        <img class="header-logo" src="{{asset('/img/logos/tto_bma/svg/horiz-rev-min.svg')}}" alt="TTO BMA">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-content"
            aria-controls="navbar-content" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar-content">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav me-auto">

        </ul>
        <ul class="navbar-nav ms-auto bg-main">
            <li class="nav-item dropdown dropstart">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ $user->full_name }}
                </a>
                <ul class="dropdown-menu  dropdown-menu-start bg-main" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">My Profile</a></li>
                    <li class="dropdown-submenu dropstart">
                        <a class="dropdown-item dropdown-toggle" href="#">Price Transaction Submission</a>
                        <ul class="dropdown-menu dropdown-menu-start">
                            <li><a class="dropdown-item" href="#">PTS Option 1</a></li>
                            <li><a class="dropdown-item" href="#">PTS Option 2</a></li>
                        </ul>
                    </li>
                    <li><a class="dropdown-item" href="#">Logout</a></li>

                </ul>
            </li>
        </ul>
    </div>
    </div>
</nav>

<div class="container">
    <a href="{{route('login')}}">Login</a>
    {{--    <nav class="navbar navbar-default transparent-bg">--}}
    {{--        <div class="container-fluid">--}}
    {{--            <div class="navbar-header">--}}
    {{--                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"--}}
    {{--                        aria-expanded="false" aria-controls="navbar">--}}
    {{--                    <span class="sr-only">Toggle navigation</span>--}}
    {{--                    <span class="icon-bar"></span>--}}
    {{--                    <span class="icon-bar"></span>--}}
    {{--                    <span class="icon-bar"></span>--}}
    {{--                </button>--}}
    {{--                @if(!Route::is('home'))--}}
    {{--                    <img class="pig-logo" src="{{asset("img/$logo_img")}}" alt="Home">--}}
    {{--                @else--}}
    {{--                    <h1>@lang('nav.top.home')</h1>--}}
    {{--                @endif--}}
    {{--            </div>--}}

    {{--            <div id="navbar" class="navbar-collapse collapse">--}}
    {{--                <ul class="nav navbar-nav navbar-right">--}}
    {{--                    <li class="{{Route::is('registered') ? 'active' : ''}}">--}}
    {{--                        <a href="{{ route('home') }}">@lang('nav.top.home')</a>--}}
    {{--                    </li>--}}
    {{--                    @if(Auth::user()->isAgent())--}}
    {{--                        @can('access-trades')--}}
    {{--                            @include('layouts.partials.trades-module')--}}
    {{--                        @endcan--}}
    {{--                    @endif--}}
    {{--                    <li class="dropdown {{Route::is('products-and-services') || isset($PIS)? 'active' : ''}}">--}}
    {{--                        <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">--}}
    {{--                            Market Pulp <span class="caret"></span>--}}
    {{--                        </a>--}}
    {{--                        <ul class="dropdown-menu dropdown-menu-right">--}}
    {{--                            @include('layouts.registered.menu-item', [--}}
    {{--                                'lang' => 'reports-mpm',--}}
    {{--                                'route' => route('mpm'),--}}
    {{--                                'setup'=>route('report-instances.index', ['product_preference' => 1]),--}}
    {{--                                'product' => 'MP-MPM-ADMIN',--}}
    {{--                            ])--}}
    {{--                            @include('layouts.registered.menu-item', [--}}
    {{--                                'lang' => 'tto-pulp-net-price-indices',--}}
    {{--                                'route' => route('online-indices.show-graph'),--}}
    {{--                                'setup' => route('document-instances.index'),--}}
    {{--                                'product' => 'MP-PRICE-INDICES-ADMIN',--}}
    {{--                            ])--}}
    {{--                            @include('layouts.registered.menu-item', [--}}
    {{--                                'lang' => 'price-forecasts',--}}
    {{--                                'route'=>route('indices-forecast.view'),--}}
    {{--                                'setup'=>route('tto-indices-forecasts.setup'),--}}
    {{--                                'product' => 'MP-PRICE-FORECASTS-ADMIN',--}}
    {{--                            ])--}}
    {{--                            @include('layouts.registered.menu-item', [--}}
    {{--                                'lang' => 'pulp-market-update-video',--}}
    {{--                                'route' => route('videos.list'),--}}
    {{--                                'setup' => route('videos.index'),--}}
    {{--                                'product' => 'MP-UPDATE-VIDEO-ADMIN',--}}
    {{--                            ])--}}
    {{--                            --}}{{--                                @include('layouts.registered.menu-item', [--}}
    {{--                            --}}{{--                                    'route'=>route('capacity-list.view'),--}}
    {{--                            --}}{{--                                    'setup'=>route('capacity-lists.index'),--}}
    {{--                            --}}{{--                                    'lang' => 'capacity-lists'--}}
    {{--                            --}}{{--                                ])--}}
    {{--                            @include('layouts.registered.menu-item', [--}}
    {{--                                'lang' => 'capacity-lists',--}}
    {{--                                'route'=> route('capacity-lists-dashboards.show', ['id' => 'latest']),--}}
    {{--                                'setup'=> route('capacity-lists-dashboards.index'),--}}
    {{--                                'product' => 'MP-CAPACITY-LISTS-ADMIN',--}}
    {{--                            ])--}}
    {{--                            @include('layouts.registered.menu-item', [--}}
    {{--                                'lang' => 'charts&tables',--}}
    {{--                                'route' => route('charts.view'),--}}
    {{--                                'setup' => route('charts.index'),--}}
    {{--                                'product' => 'MP-BUSINESS-INTELLIGENCE-CHARTS-ADMIN',--}}
    {{--                            ])--}}
    {{--                            <li role="separator" class="divider"></li>--}}
    {{--                            @include('layouts.registered.menu-item', [--}}
    {{--                               'lang' => 'key-indicators-dashboard',--}}
    {{--                               'route' => route('key-indicators'),--}}
    {{--                            ])--}}
    {{--                            @if(config('ms-ttonow.ttonow_available'))--}}
    {{--                                @include('layouts.registered.menu-item', [--}}
    {{--                                  'lang' => 'tto-now-dashboard',--}}
    {{--                                  'route' => route('tto-now-dashboard'),--}}
    {{--                                  'setup' => route('tto-now-dashboard.setup'),--}}
    {{--                                  'product' => 'MP-TTO-NOW-ADMIN',--}}
    {{--                               ])--}}
    {{--                            @endif--}}
    {{--                            @include('layouts.registered.menu-item', [--}}
    {{--                               'lang' => 'downtime-report',--}}
    {{--                               'route' => route('downtime-reports.view'),--}}
    {{--                               'setup' => route('downtime-reports.index'),--}}
    {{--                               'product' => 'MP-DOWNTIME-REPORT-ADMIN',--}}
    {{--                            ])--}}
    {{--                            @can('view-online-mill-database')--}}
    {{--                                --}}{{--                                    completly remove item, not just disable if user has no access--}}
    {{--                                @include('layouts.registered.menu-item', [--}}
    {{--                                  'lang' => 'online-mill-database',--}}
    {{--                                  'route' => route('capacity-dashboard.show-dashboards'),--}}
    {{--                                ])--}}
    {{--                            @endcan--}}
    {{--                            @include('layouts.registered.menu-item', [--}}
    {{--                              'lang' => 'outlook-dashboard',--}}
    {{--                              'route' => route('outlook-dashboard.show'),--}}
    {{--                              'setup' => route('outlook-dashboard.index'),--}}
    {{--                              'product' => 'MP-DEMAND-AND-SUPPLY-MATRIX-ADMIN',--}}
    {{--                           ])--}}
    {{--                            @if(env('MENU_FINANCIAL_SUMMARIES', false))--}}
    {{--                                @include('layouts.registered.menu-item', [--}}
    {{--                                  'lang' => 'financial-summaries',--}}
    {{--                                  'route' => route('financial-summaries.show'),--}}
    {{--                                  'setup' => route('financial-summaries.index'),--}}
    {{--                                  'product' => 'MP-FINANCIAL-SUMMARIES-ADMIN',--}}
    {{--                               ])--}}
    {{--                            @endif--}}
    {{--                            <li role="separator" class="divider"></li>--}}
    {{--                            @include('layouts.registered.menu-item', [--}}
    {{--                                'lang' => 'infographics-and-other-documents',--}}
    {{--                                'route' => route('webinars.view'),--}}
    {{--                                'setup' => route('webinars.index'),--}}
    {{--                                'product' => 'MP-INFOGRAPHICS-ADMIN',--}}
    {{--                            ])--}}
    {{--                            @include('layouts.registered.menu-item', [--}}
    {{--                                'lang' => 'individual-reports',--}}
    {{--                                'route' => route('report-instances.list'),--}}
    {{--                                'setup' => route('report-instances.index'),--}}
    {{--                                'product' => 'MP-MARKET-REPORTS-ADMIN',--}}
    {{--                            ])--}}
    {{--                        </ul>--}}
    {{--                    </li>--}}
    {{--                    @if(env('SHOW_RP_MENUS', false))--}}
    {{--                        <li class="dropdown">--}}
    {{--                            <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true"--}}
    {{--                               aria-expanded="false">--}}
    {{--                                Recovered Paper <span class="caret"></span>--}}
    {{--                            </a>--}}
    {{--                            <ul class="dropdown-menu dropdown-menu-right">--}}
    {{--                                @include('layouts.registered.menu-item', [--}}
    {{--                                    'lang' => 'reports-rpm',--}}
    {{--                                    'route' => route('rpm'),--}}
    {{--                                    'setup' => route('report-instances.index', ['product_preference' => 2]),--}}
    {{--                                    'product' => 'RP-MONTHLY-ADMIN',--}}
    {{--                                ])--}}
    {{--                                @include('layouts.registered.menu-item', [--}}
    {{--                                    'lang' => 'tto-recovered-paper-net-price-indices',--}}
    {{--                                    'route' => route('online-indices-paper.show-rp'),--}}
    {{--                                    'setup' => route('document-instances.index-rp'),--}}
    {{--                                    'product' => 'RP-PRICE-INDICES-ADMIN',--}}
    {{--                                ])--}}
    {{--                                @include('layouts.registered.menu-item', [--}}
    {{--                                    'lang' => 'bma-recovered-paper-forecasts',--}}
    {{--                                    'route'=> route('bma-recovered-paper-indices-forecast.view'),--}}
    {{--                                ])--}}
    {{--                                @include('layouts.registered.menu-item', [--}}
    {{--                                        'lang' => 'infographics-rp',--}}
    {{--                                        'route' => route('webinars.view-rp'),--}}
    {{--                                        'setup' => route('webinars.index'),--}}
    {{--                                        'product' => 'RP-INFOGRAPHICS-ADMIN',--}}
    {{--                                    ])--}}
    {{--                            </ul>--}}
    {{--                        </li>--}}
    {{--                    @endif--}}
    {{--                    @if(env('SHOW_TISSUE_MENUS', false))--}}
    {{--                        <li class="dropdown">--}}
    {{--                            <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true"--}}
    {{--                               aria-expanded="false">--}}
    {{--                                Tissue <span class="caret"></span>--}}
    {{--                            </a>--}}
    {{--                            <ul class="dropdown-menu dropdown-menu-right">--}}
    {{--                                @include('layouts.registered.menu-item', [--}}
    {{--                                    'lang' => 'reports-ttm',--}}
    {{--                                    'route' => route('ttm'),--}}
    {{--                                    'setup' => route('report-instances.index', ['product_preference' => 3]),--}}
    {{--                                    'product' => 'TISSUE-MONTHLY-ADMIN',--}}
    {{--                                ])--}}
    {{--                                @include('layouts.registered.menu-item', [--}}
    {{--                                    'lang' => 'tto-tissue-net-price-indices',--}}
    {{--                                    'route' => route('online-indices-tissue.show-tissue'),--}}
    {{--                                    'setup' => route('document-instances.index-tissue'),--}}
    {{--                                    'product' => 'TISSUE-PRICE-INDICES-ADMIN',--}}
    {{--                                ])--}}
    {{--                                @include('layouts.registered.menu-item', [--}}
    {{--                                    'lang' => 'bma-tissue-forecasts',--}}
    {{--                                    'route'=> route('bma-tissue-indices-forecast.view'),--}}
    {{--                                ])--}}
    {{--                                @include('layouts.registered.menu-item', [--}}
    {{--                                    'lang' => 'infographics-tissue',--}}
    {{--                                    'route' => route('webinars.view-tissue'),--}}
    {{--                                    'setup' => route('webinars.index'),--}}
    {{--                                    'product' => 'TISSUE-INFOGRAPHICS-ADMIN',--}}
    {{--                                ])--}}
    {{--                            </ul>--}}
    {{--                        </li>--}}
    {{--                    @endif--}}
    {{--                    <li class="{{Route::is('news') ? 'active' : ''}}">--}}
    {{--                        <a href="{{route('news')}}">@lang('nav.pig.pulp_info_global')</a>--}}
    {{--                    </li>--}}
    {{--                    @can('view-admin-config')--}}
    {{--                        @include('layouts.partials.admin-config')--}}
    {{--                    @endcan--}}
    {{--                    @can ('access-marketplace')--}}
    {{--                        @can ('access-bids')--}}
    {{--                            <li>--}}
    {{--                                <a href="{{ route('auctions.dashboard') }}" class="register">--}}
    {{--                                    <span>@lang('header.nav.marketplace')</span>--}}
    {{--                                </a>--}}
    {{--                            </li>--}}
    {{--                        @elsecan('owns-post-sale')--}}
    {{--                            <li>--}}
    {{--                                <a href="{{ route('post-sale.dashboard') }}" class="register">--}}
    {{--                                    <span>@lang('header.nav.marketplace')</span>--}}
    {{--                                </a>--}}
    {{--                            </li>--}}
    {{--                        @endcan--}}
    {{--                    @endcan--}}
    {{--                </ul>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </nav>--}}
</div>
<div class="container"></div>
