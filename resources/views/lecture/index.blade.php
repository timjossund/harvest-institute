<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white bg-gray-800">
                    <h1 class="text-4xl font-black">Lecture: {{ $lecture->name }}</h1>
                    <p class="text-gray-600">{{ $lecture->description }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
