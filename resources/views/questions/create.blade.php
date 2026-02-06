<x-app-layout>
    <div class="container">
    <h1>Create Question for {{ $test->name }}</h1>
    <form action="{{ route('questions.store', [$course, $lecture, $test]) }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
    <a href="{{ route('tests.index', [$course, $lecture, $test]) }}" class="btn btn-secondary">Back</a>
    </div>
</x-app-layout>