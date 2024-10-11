<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Task') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form method="POST" action="{{ route('tasks.update', $task->id) }}">
                    @csrf
                    @method('PUT')
                    <div>
                        <x-label for="title" :value="__('Title')" />
                        <x-input id="title" class="block mt-1 w-full" type="text" name="title" value="{{ $task->title }}" required autofocus />
                    </div>
                    <div class="mt-4">
                        <x-label for="description" :value="__('Description')" />
                        <textarea id="description" class="block mt-1 w-full" name="description">{{ $task->description }}</textarea>
                    </div>
                    <div class="mt-4">
                        <x-label for="due_date" :value="__('Due Date')" />
                        <x-input id="due_date" class="block mt-1 w-full" type="date" name="due_date" value="{{ $task->due_date }}" required />
                    </div>
                    <div class="mt-4">
                        <x-button>
                            {{ __('Update') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>