<div wire::key="{{ $todo->id }}" class="flex justify-between gap-1">
    <div class="flex items-center gap-1">
        <input type="checkbox" wire:click="toggle" {{ $todo->is_completed ? 'checked' : '' }}/>
        <input type="text" wire:model.live="name" class="border-0 outline-0 p-0" value="{{ $todo->name }}" placeholder="Enter name here"/>
    </div>
    <a href="#" wire:click="delete" class="underline text-red-100">Delete</a>
</div>