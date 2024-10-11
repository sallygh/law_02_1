@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">إضافة قضية جديدة</h1>
    <form action="{{ route('legal-cases.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="title" class="block text-gray-700 dark:text-gray-300">العنوان</label>
            <input type="text" name="title" id="title" class="mt-1 block w-full" required>
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700 dark:text-gray-300">الوصف</label>
            <textarea name="description" id="description" class="mt-1 block w-full" required></textarea>
        </div>
        <div class="flex items-center justify-end">
            <button type="submit" class="btn btn-primary">إضافة</button>
        </div>
    </form>
</div>
@endsection