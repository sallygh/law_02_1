@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ __('تفاصيل الموكل') }}</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $client->full_name }}</h5>
            <p class="card-text">{{ __('رقم الهاتف: ') . $client->phone_number }}</p>
            <p class="card-text">{{ __('العنوان: ') . $client->address }}</p>
            <p class="card-text">{{ __('ملاحظات: ') . $client->notes }}</p>
            <a href="{{ route('clients.edit', $client) }}" class="btn btn-warning">{{ __('تعديل') }}</a>
            <form action="{{ route('clients.destroy', $client) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">{{ __('حذف') }}</button>
            </form>
        </div>
    </div>
</div>
@endsection