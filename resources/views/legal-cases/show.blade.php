@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">عرض القضية</h1>
    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold mb-2">{{ $legalCase->title }}</h2>
        <p class="text-gray-700 dark:text-gray-300 mb-4">{{ $legalCase->description }}</p>
        <a href="{{ route('legal-cases.edit', $legalCase->id) }}" class="btn btn-warning">تعديل</a>
        <form action="{{ route('legal-cases.destroy', $legalCase->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">حذف</button>
        </form>
    </div>
</div>
@endsection