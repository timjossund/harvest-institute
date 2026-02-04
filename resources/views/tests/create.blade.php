<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl font-bold">Create Test</h1>
                    <form action="{{ route('tests.store', [$course, $lecture]) }}" method="post" class="mb-4">
                        @csrf
                        <div class="mb-4">
                            {{ $lecture->name }}, {{ $course->name }}, {{ $lecture->id }}
                            <div class="mb-4">
                                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Test Name</label>
                                <input type="text" name="name" id="name" value="{{ old('name') }}" class="shadow border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                @error('name')
                                    <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                                <input type="textinput" name="description" id="description" value="{{ old('description') }}" class="shadow border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                @error('description')
                                    <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                            <input type="hidden" name="lecture_id" value="{{ $lecture->id }}">
                        </div>
                        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Create</button>
                    </form>
                    <a href="{{ route('lectures.show', [$course, $lecture]) }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none mt-4 focus:shadow-outline">Cancel</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>