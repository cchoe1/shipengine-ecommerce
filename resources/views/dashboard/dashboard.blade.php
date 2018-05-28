@extends('avored-ecommerce::layouts.app')

@section('content')

<h1>ShipEngine Dashboard</h1>
<a href="{{ route('admin.shipengine.label.create') }}">
    <input type="button" value="New Label" class="btn btn-success" id="shipengine-new-label">
</a>
@include('cchoe-shipengine::form.tracking')


@stop
