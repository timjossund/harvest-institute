<x-app-layout>
    <div class="container">
    <h1>Create Test</h1>
    <form action="{{ route('tests.store', [$course, $lecture]) }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control">
            @error('name')
                <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
            @enderror
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control"></textarea>
            @error('description')
                <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
    {{-- <a href="{{ route('tests.index', [$course, $lecture, $test]) }}" class="btn btn-secondary">Back</a> --}}
    </div>
</x-app-layout>