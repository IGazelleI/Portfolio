<div>
    <div class="flex justify-between gap-2 mb-3">
        <h2 class="text-xl font-semibold text-black">
            Todo List
            @if (count($todos) > 0)
            ({{ round(($todos->where('is_completed', TRUE)->count() / $todos->count()) * 100) }}%)
            @endif
        </h2>
        <a href="#" wire:click="add">Add</a>
    </div>
    <div class="flex flex-col gap-2">
        @if (count($todos) > 0)
        @foreach ($todos as $index => $todo)
        @livewire(Todo::class, ['todo' => $todo], key($todo->id))
        @endforeach
        @else
        <p class="text-gray-400">List is empty.</p>
        @endif
    </div>
</div>