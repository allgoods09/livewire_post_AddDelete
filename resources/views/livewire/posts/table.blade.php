<div>
    <div class="flex items-center justify-between px-4 py-2 mb-4">
    <h1 class="text-2xl font-bold text-white">Posts</h1>

        <button
            wire:click="$toggle('showForm')"
            class="px-4 py-2 bg-indigo-500 text-white rounded-lg shadow hover:bg-indigo-600 transition"
        >
            + Add New Post
        </button>
    </div>

    @if ($showForm)
        <livewire:posts.create />
    @endif

    <table class="table-auto w-full border-collapse border border-gray-200">
        <thead>
            <tr>
                <th class="border border-gray-300 px-4 py-2">ID</th>
                <th class="border border-gray-300 px-4 py-2">Title</th>
                <th class="border border-gray-300 px-4 py-2">Content</th>
                <th class="border border-gray-300 px-4 py-2">Author</th>
                <th class="border border-gray-300 px-4 py-2">Archive</th>

            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <livewire:posts.table-rows :post="$post" :key="$post->id"/>
            @endforeach
        </tbody>
    </table>
</div>
