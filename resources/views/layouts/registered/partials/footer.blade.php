    <footer class="tto-bma-page-footer-main-color padding-vertical-40 registered">
    <div class="footer-container container-custom wide">
        <div class="logo-block">
            <a class="logo-wrapper" href="{{route('home')}}">
                <img class="footer-logo" src="{{asset('/img/tto_bma/tto-bma-white.svg')}}" alt="TTO BMA">
            </a>
            <div class="logo-description">Trusted Providers of Global Pulp Market Information</div>
            <div class="copy-paste">
                © 2016 — {{date('Y')}} TTO LLC | <a href="/terms">Terms of Use</a>
            </div>
        </div>

        <div class="footer-quick-links-wrapper text-description">
            <header class="nav-header">TTO + BMA</header>
            <p class="text-justify">
                TTO publishes monthly pulp net-price indices for benchmark grades in major markets like China, Europe
                and North America based on actual open-market transactions. <br><br>
                BMA helps subscribers understand and track current pulp market conditions, and forecast short to
                long-term trends in pulp supply, demand, and net prices.
            </p>
        </div>

        <div class="footer-quick-links-wrapper">
            <header class="nav-header">Quick Links</header>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{route('online-indices.show-graph')}}">Pulp Net Price Indices</a>
            <a href="{{route('mpm')}}">Market Pulp Monthly</a>
            <a href="{{route('news')}}">Pulp Info Global</a>
        </div>

        <div class="footer-quick-links-wrapper">
            <header class="nav-header">Keep in Touch</header>
            <a class="social-link phone">
                <span class="icon-wrapper"><i class="fa fa-phone" aria-hidden="true"></i></span>
                <span class="anchor-wrapper">(+1) 803.626.0385</span>
            </a>
            <a href="mailto:info@ttobma.com" class="social-link" target="_blank">
                <span class="icon-wrapper">@</span>
                <span class="anchor-wrapper">info@ttobma.com</span>
            </a>
            <a href="{{ config('social.links.linkedin') }}" class="social-link" target="_blank">
                <span class="icon-wrapper"><i class="fa fa-linkedin" aria-hidden="true"></i></span>
                <span class="anchor-wrapper">LinkedIn</span>
            </a>
            <a href="{{ config('social.links.twitter') }}" class="social-link" target="_blank">
                <span class="icon-wrapper"><i class="fa fa-twitter" aria-hidden="true"></i></span>
                <span class="anchor-wrapper">Twitter</span>
            </a>
        </div>
    </div>
</footer>







