@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <h1 class="text-center">Add New Project</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.projects.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">

                <label for="inputName" class="form-label">Name</label>
                <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="inputName"
                    value="{{ old('name') }}">

                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>
            <div class="mb-3">

                <label for="textareaDesc">Description</label>
                <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="textareaDesc">{{ old('description') }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

            </div>
            {{-- <div class="mb-3">

                <label for="inputImage" class="form-label">Image URL</label>
                <input name="image" type="text" class="form-control @error('image') is-invalid @enderror"
                    id="inputImage" value="{{ old('image') }}">
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

            </div> --}}
            <div class="mb-3">
                <label for="inputFile" class="form-label">Image</label>
                <input class="form-control" name="image" type="file" id="inputFile">

                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4">

                <label for="inputLink" class="form-label">Link</label>
                <input name="link" type="text" class="form-control @error('link') is-invalid @enderror" id="inputLink"
                    value="{{ old('link') }}">
                @error('link')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

            </div>
            <div class="mb-3 d-flex gap-2">

                @foreach ($stacks as $i => $stack)
                    <div class="form-check">
                        <label class="form-check-label" for="checkStack{{ $i }}">{{ $stack->name }}</label>
                        <input class="form-check-input" type="checkbox" name="stacks[]" value="{{ $stack->id }}"
                            id="checkStack{{ $i }}">
                    </div>
                @endforeach

                @error('stacks')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

            </div>
            <div class="mb-3">


                <label for="selectType" class="form-label">Type</label>
                <select id="selectType" name="type_id" class="form-select" aria-label="Default select example">
                    <option selected disabled>Select type</option>
                    @foreach ($types as $i => $type)
                        <option value="{{ $i + 1 }}">{{ $type }}</option>
                    @endforeach
                </select>

                @error('type')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
