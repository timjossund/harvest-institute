<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 flex flex-col gap-4">
                    <h1 class="text-2xl font-bold">Edit Course</h1>
                    <!-- Form for editing course -->
                    <form action="{{ route('courses.update', $course) }}" method="POST" class="flex flex-col gap-4">
                        @csrf
                        @method('PATCH')
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" value="{{ $course->name }}">
                        <label for="description">Description</label>
                        <textarea name="description" id="description">{{ $course->description }}</textarea>
                        <button type="submit" class="max-w-[200px] bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>