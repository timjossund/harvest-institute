<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white border-b border-gray-700 bg-gray-800">
                    Course: {{ $course->name }}
                </div>
                <div class="p-6 text-gray-900">
                    <h2 class="text-2xl font-bold">Lectures</h2>
                    @foreach ($course->lectures as $lecture)
                    <div class="mb-4 border-b border-gray-200 pb-4 mt-4 flex justify-between items-center shadow-sm p-4 rounded-md">
                        <p class="text-lg font-bold">{{ $lecture->name }}</p>
                        <p class="text-gray-600">{{ $lecture->description }}</p>
                        <a href="/" class="text-blue-500">View Lecture</a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>