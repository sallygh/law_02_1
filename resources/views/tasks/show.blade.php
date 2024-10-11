<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Task Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div>
                    <h3>{{ $task->title }}</h3>
                    <p>{{ $task->description }}</p>
                    <p><strong>Due Date:</strong> {{ $task->due_date }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>