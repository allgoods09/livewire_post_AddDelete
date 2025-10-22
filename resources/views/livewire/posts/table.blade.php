<div>
    <table class="table-auto w-full border-collapse border border-gray-200">
        <thead>
            <tr>
                <th class="border border-gray-300 px-4 py-2">ID</th>
                <th class="border border-gray-300 px-4 py-2">Title</th>
                <th class="border border-gray-300 px-4 py-2">Content</th>
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
