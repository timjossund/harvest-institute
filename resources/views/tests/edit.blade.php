<x-app-layout>
    <div class="container">
    <h1>Edit Test</h1>
    <form action="{{ route('tests.update', $test->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $test->name }}">
            @error('name')
                <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
            @enderror
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control">{{ $test->description }}</textarea>
            @error('description')
                <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    <a href="{{ route('tests.index') }}" class="btn btn-secondary">Back</a>
    </div>
</x-app-layout> 
