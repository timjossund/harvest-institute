<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl font-bold">Edit Lecture: {{ $lecture->name }}</h1>
                    <!-- Form for editing lecture -->
                    <form action="{{ route('lectures.update', $lecture->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                            <input type="text" name="title" id="title" value="{{ old('title', $lecture->name) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                        </div>
                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                            <textarea name="description" id="description" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ old('description', $lecture->description) }}</textarea>
                        </div>
                        <div>
                            <label for="video_url" class="block text-sm font-medium text-gray-700">Video URL</label>
                            <input type="text" name="video_url" id="video_url" value="{{ old('video_url', $lecture->video_url) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                        </div>
                        <button type="submit" class="mt-4 px-4 py-2 bg-blue-600 text-white rounded">Update Lecture</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>