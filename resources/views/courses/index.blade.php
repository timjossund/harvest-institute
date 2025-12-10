<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
                <div class=" text-gray-900 ">
                    <div class="flex justify-between items-center bg-gray-50 p-4 w-full">
                        <h1 class="text-4xl font-black">Courses</h1>
                        <a href="{{ route('courses.create') }}" class="text-blue-500">Create Course</a>
                    </div>
                    @if($courses && $courses->isNotEmpty())
                        @foreach($courses as $course)
                        <div class="mb-4 p-4 border-b border-gray-200 hover:bg-gray-50 cursor-pointer flex flex-col md:flex-row justify-between items-center rounded-md">
                            <h2 class="text-xl font-semibold">{{ $course->name }}</h2>
                            <p>{{ $course->description }}</p>
                            <a href="{{ route('courses.show', $course->id) }}" class="text-blue-500">View Course</a>
                        </div>
                        @endforeach
                    @else
                        <p class="p-4 text-gray-500 text-center">No courses found.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
