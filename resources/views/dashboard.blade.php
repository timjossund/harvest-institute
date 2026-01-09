<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6">
                <div class="p-6 text-gray-900">
                    <h2 class="text-2xl font-bold">Your learning journey starts here!</h2>
                    @if ($courses->count() > 0)
                    @foreach ($courses as $course)
                    <div class="mb-4 border-b border-gray-200 pb-4 mt-4 flex flex-col md:flex-row justify-between items-center shadow-sm p-4 rounded-md">
                        <p class="text-lg font-bold">{{ $course->name }}</p>
                        <a href="{{ route('courses.show', $course) }}" class="text-blue-500">View Course</a>
                    </div>
                    @endforeach
                    @else
                    <p class="text-gray-600">No courses found</p>
                    @endif
                </div>

                <a href="{{ route('courses.create') }}" class="ml-4 text-white bg-black hover:bg-black/80 font-bold py-2 px-4 rounded my-4">Create New Course</a>
            </div>
        </div>
    </div>
</x-app-layout>
