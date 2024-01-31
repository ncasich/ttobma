<li class="{{ array_get($menu, $lang, false) ? 'flex justify-between' : 'flex justify-between product-disabled' }}"
    data-product_name="@lang('nav.top.' . $lang)"
    data-product_item="@lang('nav.top.' . $lang)"
>
    <a href="{{$route}}" {{ array_get($menu, $lang, false) ? '' : 'disabled' }}>@lang('nav.top.' . $lang)</a>
    @if(isset($setup) && isset($product) && auth()->user()->hasAccess([$product]))
        <a href="{{$setup}}">
            <i class="fa fa-cog" aria-hidden="true"></i>
        </a>
    @endif
</li>
