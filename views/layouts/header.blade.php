<header id="header" class="header-narrow"
        data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 57, 'stickySetTop': '-57px', 'stickyChangeLogo': true}">
    <div class="header-body">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-logo">
                        <a href="index.html">
                            <img alt="万盛昌水业" width="250" height="55" data-sticky-width="200" data-sticky-height="45" data-sticky-top="32" src="{{ Theme::asset('porto::images/80.png') }}">
                        </a>
                    </div>
                </div>
                <div class="header-column">
                    <div class="header-row">
                        <nav class="header-nav-top">
                            <ul class="nav nav-pills">
                                <li>
                                    <span class="ws-nowrap"><i class="fa fa-phone"></i> 968288</span>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-row">
                        <div class="header-nav">
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse"
                                    data-target=".header-nav-main">
                                <i class="fa fa-bars"></i>
                            </button>
                            <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
                                <nav>
                                    {!! Menu::renderNav([
                                        'slug' => 'main-nav',
                                        'view' => 'porto::partials.nav'
                                    ]) !!}
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>