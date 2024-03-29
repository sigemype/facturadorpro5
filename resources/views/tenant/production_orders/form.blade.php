@extends('tenant.layouts.app')

@section('content')

    <tenant-production-order-form
        :id="{{ json_encode($id) }}"
        :cashid ="{{ json_encode($cashid) }}"
        :type-user="{{json_encode(Auth::user()->type)}}"
        :auth-user="{{json_encode(Auth::user()->getDataOnlyAuthUser())}}"
        :configuration="{{\App\Models\Tenant\Configuration::getPublicConfig()}}"
    ></tenant-production-order-form>

@endsection
