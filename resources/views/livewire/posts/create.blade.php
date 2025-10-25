<div class="bg-gray-900 text-white rounded-xl shadow-lg p-6 mb-6 border border-gray-700">
    <h2 class="text-xl font-bold mb-4">Create New Post</h2>

    <form wire:submit.prevent="save" class="space-y-4">
        <!-- Title -->
        <div>
            <label for="title" class="block text-sm font-medium text-gray-300">Title</label>
            <input
                type="text"
                id="title"
                wire:model.live="title"
                class="mt-1 w-full rounded-lg border border-gray-600 bg-gray-800 text-white placeholder-gray-400 
                       focus:border-indigo-400 focus:ring-2 focus:ring-indigo-500 transition duration-150"
                placeholder="Enter post title..."
            >
            @error('title') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Content -->
        <div>
            <label for="content" class="block text-sm font-medium text-gray-300">Content</label>
            <textarea
                id="content"
                rows="4"
                wire:model.live="content"
                class="mt-1 w-full rounded-lg border border-gray-600 bg-gray-800 text-white placeholder-gray-400 
                       focus:border-indigo-400 focus:ring-2 focus:ring-indigo-500 transition duration-150"
                placeholder="Write your post content..."
            ></textarea>
            @error('content') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Author -->
        <div>
            <label for="author" class="block text-sm font-medium text-gray-300">Author</label>
            <input
                type="text"
                id="author"
                wire:model.live="author"
                class="mt-1 w-full rounded-lg border border-gray-600 bg-gray-800 text-white placeholder-gray-400 
                       focus:border-indigo-400 focus:ring-2 focus:ring-indigo-500 transition duration-150"
                placeholder="Enter author's name"
            >
            @error('author') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Archive -->
        <div class="flex items-center space-x-2">
            <input
                id="is_archived"
                type="checkbox"
                wire:model="is_archived"
                class="h-4 w-4 text-indigo-500 border-gray-600 rounded focus:ring-indigo-400"
            >
            <label for="is_archived" class="text-sm text-gray-300">Archive immediately</label>
        </div>

        <!-- Submit -->
        <div class="flex justify-end space-x-3">
            <button type="submit"
                    wire:loading.attr="disabled"
                    class="px-4 py-2 bg-indigo-500 text-white rounded-lg hover:bg-indigo-600 transition">
                <span wire:loading.remove>Save Post</span>
                <span wire:loading>Saving...</span>
            </button>
        </div>
    </form>
</div>
