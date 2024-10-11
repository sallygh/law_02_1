@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">إدارة القضايا</h1>
    <a href="{{ route('legal-cases.create') }}" class="btn btn-primary mb-4">إضافة قضية جديدة</a>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white dark:bg-gray-800">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">العنوان</th>
                    <th class="py-2 px-4 border-b">الوصف</th>
                    <th class="py-2 px-4 border-b">الإجراءات</th>
                </tr>
            </thead>
            <tbody>
                @foreach($legalCases as $case)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $case->title }}</td>
                    <td class="py-2 px-4 border-b">{{ $case->description }}</td>
                    <td class="py-2 px-4 border-b">
                        <a href="{{ route('legal-cases.show', $case->id) }}" class="btn btn-info">عرض</a>
                        <a href="{{ route('legal-cases.edit', $case->id) }}" class="btn btn-warning">تعديل</a>
                        <form action="{{ route('legal-cases.destroy', $case->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">حذف</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection