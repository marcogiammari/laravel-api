@extends('layouts.admin')

@section('content')
    <div class="container py-4">
        <h1 class="text-center pb-5">Edit Type</h1>
        <div class="row justify-content-center">
            <div class="col-3 d-flex flex-column ">

                @if ($errors->any())
                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <li class="ms-3">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

                <form action="{{ route('admin.types.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label" for="inputName">Name</label>
                        <input class="form-control @error('name') is-invalid @enderror" id="inputName" name="name"
                            type="text">{{ old('name') }}

                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
