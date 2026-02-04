<x-app-layout>
    <div class="container">
        <h1>Edit Test</h1>
        <form action="{{ route('tests.update', $test->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $test->name }}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" rows="3">{{ $test->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        <a href="{{ route('tests.index', $test->id) }}" class="btn btn-secondary">Back</a>
    </div>
</x-app-layout> 
