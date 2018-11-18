<li>
{{ $shop['cat_name'] }}

@if(count($shop['children'])>0)
<ol>
@foreach($shop['children'] as $shop)
@include('shop.partials', $shop)
@endforeach
</ol>
@endif
</li>
