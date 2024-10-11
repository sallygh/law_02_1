<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Task') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form method="POST" action="{{ route('tasks.store') }}" class="p-6">
                    @csrf
                    <div class="mb-4">
                        <x-label for="title" :value="__('Title')" />
                        <x-input id="title" class="block mt-1 w-full" type="text" name="title" required autofocus />
                    </div>
                    <div class="mb-4">
                        <x-label for="description" :value="__('Description')" />
                        <textarea id="description" class="block mt-1 w-full" name="description"></textarea>
                    </div>
                    <div class="mb-4">
                        <x-label for="due_date" :value="__('Due Date')" />
                        <x-input id="due_date" class="block mt-1 w-full" type="date" name="due_date" required />
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <x-button>
                            {{ __('Create') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>