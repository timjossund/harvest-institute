<x-app-layout>
    <div class="container">
        <h1>{{ $test->name }}</h1>
        <p>{{ $test->description }}</p>
        <a href="{{ route('questions.create') }}" class="btn btn-primary">Create Question</a>
        @foreach ($test->questions as $question)
            <p>{{ $question->name }}</p>
        @endforeach
    </div>
</x-app-layout>