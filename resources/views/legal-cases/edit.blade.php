@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">تعديل القضية</h1>
    <form action="{{ route('legal-cases.update', $legalCase->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="title" class="block text-gray-700 dark:text-gray-300">العنوان</label>
            <input type="text" name="title" id="title" value="{{ $legalCase->title }}" class="mt-1 block w-full" required>
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700 dark:text-gray-300">الوصف</label>
            <textarea name="description" id="description" class="mt-1 block w-full" required>{{ $legalCase->description }}</textarea>
        </div>
        <div class="flex items-center justify-end">
            <button type="submit" class="btn btn-primary">تحديث</button>
        </div>
    </form>
</div>
@endsection