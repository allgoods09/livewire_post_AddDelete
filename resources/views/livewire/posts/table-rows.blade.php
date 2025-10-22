<tr class="{{$post->is_archived? 'bg-gray-300 text-gray-500' : ''}}">
    <td class="border px-4 py-2">{{ $post->id }}</td>
    <td class="border px-4 py-2">{{ $post->title }}</td>
    <td class="border px-4 py-2">{{ $post->content }}</td>
    <td class="border border-gray-300 px-4 py-2">{!! $post->is_archived ? '<button class="bg-green-500 text-white px-2 py-1"wire:confirm="Are you sure you want to unarchive this post?"wire:click="unArchive">Unarchive</button>' : ''!!}
        <button wire:confirm="Are you sure you want to archive this post?" wire:click="archive" class="{{ !$post->is_archived ? 'bg-red-500 text-white px-2 py-1' : 'hidden'}}">Archive</button></td>
</tr>