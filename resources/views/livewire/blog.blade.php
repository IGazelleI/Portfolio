<div>
    <h2 class="text-xl font-semibold text-black mb-3">Blog</h2>
    <div>
        <div id="editor"></div>
        <div class="flex justify-end">
            <button wire:click="post" class="border p-2 px-6 rounded mt-3">Post</button>
        </div>
    </div>
    <div class="flex flex-col gap-1">
        @foreach ($posts as $index => $post)
        <div class="flex gap-1" style="width: 100%">
            {{ $index }}. @livewire(Post::class, ['post' => $post], key($post->id))
        </div>
        @endforeach
    </div>
    @assets
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
    @endassets
    @script
    <script>
        new Quill('#editor', {
            theme: 'snow'
        }).on('text-change', () => {
            $wire.on_mind = Quill.find($wire.$el.querySelector('#editor')).root.innerHTML;
        });
    </script>
    @endscript
</div>