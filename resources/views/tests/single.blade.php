<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 flex justify-between items-center">
                    <div>
                        <h1 class="text-2xl font-bold">{{ $test->name }}</h1>
                        <p>{{ $test->description }}</p>
                    </div>
                    <a href="{{ route('questions.create', [$course, $lecture, $test]) }}" class="text-white bg-green-500 hover:bg-green-700 font-bold py-2 px-4 rounded">Create Question</a>
                </div>
                @foreach ($test->questions as $question)
                <div class="p-6 text-gray-900">
                    <p>{{ $question->question }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>