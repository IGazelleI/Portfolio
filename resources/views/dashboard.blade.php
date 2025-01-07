<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-2 mb-3 rounded shadow-sm">
                <h3>Projects</h3>
                <div class="flex flex-col">
                    <ul class="list-disc list-inside">
                        <li><a href="{{ route('todo-list') }}" wire:navigate>Todo-List</a></li>
                        <li><a href="{{ route('blog') }}" wire:navigate>Blog</a></li>
                    </ul>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
