@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6 p-5">
                <img class="w-100" src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->name }}">
            </div>
            <div class="col-12 col-lg-6 p-5 d-flex flex-column">
                <h2>{{ $project->name }}</h2>
                <hr>
                <p><span class="fw-bold">Stack: </span>

                    @forelse ($project->stacks as $stack)
                        <span class="fst-italic">{{ $stack->name }}</span>
                    @empty
                        <span class="fst-italic">stack not available</span>
                    @endforelse


                    {{-- ---> il forelse traduce la struttura seguente: --}}
                    {{-- @if (count($project->stacks) > 0)
                        @foreach ($project->stacks as $stack)
                            <span class="fst-italic">{{ $stack->name }}</span>
                        @endforeach
                    @else
                        <span class="fst-italic">stack not available</span>
                    @endif --}}


                </p>
                <p>{{ $project->description }}</p>
                <p><span class="fw-bold">Type: </span>{{ $project->type->name ?? 'Type not available' }}</p>
                <div class="d-flex gap-2">
                    <a href="{{ route('admin.projects.edit', $project) }}"><button class="btn bg-primary-subtle w-100"><i
                                class="fa-solid fa-gear m-2"></i>Edit
                            Project</button></a>
                    <form name="delete-form" class="w-auto" action="{{ route('admin.projects.destroy', $project) }}"
                        method="post">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('admin.projects.destroy', $project) }}"><button
                                class="btn bg-danger-subtle w-100"><i class="fa-solid fa-gear m-2"></i>Delete
                                Project</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
