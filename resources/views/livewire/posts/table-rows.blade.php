<tr class="{{$post->is_archived? 'bg-gray-300 text-gray-500' : ''}}">
    <td class="border px-4 py-2">{{ $post->id }}</td>
    <td class="border px-4 py-2">{{ $post->title }}</td>
    <td class="border px-4 py-2">{{ $post->content }}</td>
    <td class="border px-4 py-2">{{ $post->author }}</td>
    <td class="border border-gray-300 px-4 py-2">
        {!! $post->is_archived ? '
        <button class="bg-green-500 text-white px-2 py-1 mb-1 w-full min-w-[6rem] text-center rounded"
            wire:confirm="Are you sure you want to unarchive this post?"
            wire:click="unArchive">
            Unarchive
        </button>' : ''!!}

        <button
            wire:confirm="Are you sure you want to ARCHIVE this post?"
            wire:click="archive"
            class="{{ !$post->is_archived ? 'bg-yellow-500 text-white px-2 py-1 mb-1 w-full min-w-[6rem] text-center rounded' : 'hidden' }}">
            Archive
        </button>

        <button
            wire:confirm="Are you sure you want to DELETE this post?"
            wire:click="delete"
            class="bg-red-500 text-white px-2 py-1 mt-1 w-full min-w-[6rem] text-center rounded">
            Delete
        </button>
    </td>
</tr>