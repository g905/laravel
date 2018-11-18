@extends('layouts.app')
@section('content')
@if(count($shops)>0)
<ol>
@foreach($shops as $shop)
@include('shop.partials', $shop)
@endforeach
</ol>
@else
no shops
@endif
@endsection
