<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-2xl font-bold">Lecture: {{ $lecture->name }}</h2>
                </div>
                @if($lecture->video_url)
                <div class="p-6 text-gray-900">
                    <iframe src="{{ $lecture->video_url }}" width="560" height="315" frameborder="0" allowfullscreen></iframe>
                </div>
                @endif
                <div class="p-6 text-gray-900">
                    <p class="mt-2 text-gray-700">{{ $lecture->description }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>