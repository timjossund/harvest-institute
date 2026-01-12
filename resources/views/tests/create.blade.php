<x-app-layout>
    <div class="container">
    <h1>Create Test</h1>
    <form action="{{ route('tests.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
    <a href="{{ route('tests.index') }}" class="btn btn-secondary">Back</a>
    </div>
</x-app-layout>