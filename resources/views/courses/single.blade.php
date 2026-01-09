<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white border-b border-gray-700 bg-gray-800 flex justify-between items-center">
                    <div>
                        <h2 class="text-2xl font-bold">Course: {{ $course->name }}</h2>
                        <p class="text-gray-200">{{ $course->description }}</p>
                    </div>
                    <div class="flex gap-2">
                        <a href="{{ route('courses.edit', $course) }}" class="text-blue-500">
                            <button class="bg-white hover:bg-gray-200 text-gray-800 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Edit Course</button>
                        </a>
                        <a href="{{ route('lectures.create', $course) }}" class="text-blue-500">
                            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Create Lecture</button>
                        </a>
                    </div>
                </div>
                <div class="p-6 text-gray-900">
                    <h2 class="text-2xl font-bold">Lectures</h2>
                    @if ($course->lectures->count() > 0)
                        @foreach ($course->lectures as $lecture)
                        <div class="mb-4 border-b border-gray-200 pb-4 mt-4 flex justify-between items-center shadow-sm p-4 rounded-md">
                            <p class="text-lg font-bold">{{ $lecture->name }}</p>
                            <a href="{{ route('lectures.show', [$course, $lecture]) }}" class="text-blue-500">View Lecture</a> 
                        </div>
                        @endforeach
                    @else
                    <p class="text-gray-600">No lectures found</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>