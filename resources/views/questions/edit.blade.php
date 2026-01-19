<x-app-layout>
    <div class="container">
    <h1>Edit Question for {{ $test->name }}</h1>
    <form action="{{ route('questions.update', $question) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Question</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $question->name }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Question</button>
    </form>
    </div>
</x-app-layout>