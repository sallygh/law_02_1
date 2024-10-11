@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ __('إدارة الموكلين') }}</h1>
    <a href="{{ route('clients.create') }}" class="btn btn-primary">{{ __('إضافة موكل جديد') }}</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>{{ __('الاسم الثلاثي') }}</th>
                <th>{{ __('رقم الهاتف') }}</th>
                <th>{{ __('العنوان') }}</th>
                <th>{{ __('الإجراءات') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
            <tr>
                <td>{{ $client->full_name }}</td>
                <td>{{ $client->phone_number }}</td>
                <td>{{ $client->address }}</td>
                <td>
                    <a href="{{ route('clients.edit', $client) }}" class="btn btn-warning">{{ __('تعديل') }}</a>
                    <form action="{{ route('clients.destroy', $client) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">{{ __('حذف') }}</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection