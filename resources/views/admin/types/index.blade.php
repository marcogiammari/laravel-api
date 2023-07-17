@extends('layouts.admin')

@section('content')
    <div class="container py-4">
        <h1 class="text-center pb-5">Types</h1>
        <div class="row">
            <div class="col-4 p-0 mb-3">
                <a href="{{ route('admin.types.create') }}">
                    <button class="btn bg-primary-subtle">Add New Type
                        <i class="fa-solid fa-plus mx-1"></i>
                </a>
                </button>
            </div>

        </div>
        <div class="row justify-content-center">

            <table class="table table-light table-striped">
                <thead>
                    <tr>
                        <th scope="col">Type</th>
                        <th scope="col" class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($types as $type)
                        <tr>
                            <td class="align-middle">
                                {{ $type->name }}
                            </td>
                            <td class="text-center align-middle">
                                <div>
                                    <a class="d-inline" href="{{ route('admin.types.edit', $type) }}"><i
                                            class="fa-solid fa-pen"></i></a>

                                    <form class="d-inline-flex" action="{{ route('admin.types.destroy', $type) }}"
                                        method="post">
                                        @csrf
                                        @method('DELETE')

                                        <button class="btn btn-link" type="submit"><i
                                                class="fa-solid fa-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
