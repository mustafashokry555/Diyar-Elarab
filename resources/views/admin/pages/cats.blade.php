@extends('admin.layout.layout')

@section('title')
    Dashboard - Categories
@endsection

@section('content')

    <div class="card">
        <div class="card-header row">

            <div class="col-4">
                <h4>Categories</h4>
            </div>

            <div class="col-8" style="text-align: right;">
                <a type="button" href="{{ route('admin.addCat') }}" class="btn btn-primary">
                    <span class="tf-icons bx bx-plus"></span>&nbsp; Add Category
                </a>
            </div>


        </div>


        <div class="table-responsive text-nowrap">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Image </th>
                        <th>Actions</th>
                    </tr>
                </thead>
                @if (count($cats) > 0)
                    <tbody class="table-border-bottom-0">
                        @foreach ($cats as $cat)
                            <tr>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $cat->name }}</strong>
                                </td>
                                <td>
                                    <img src="{{ asset($cat->img) }}" style="width: 90px; height: 50px;">
                                </td>
                                <td>
                                    <a style="all: unset; cursor: pointer;" class="text-primary px-1" href="{{ route('admin.editCat', $cat->id) }}">
                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                    </a>
                                    |
                                    <a style="all: unset; cursor: pointer;" class="text-danger px-1" href="{{ route('admin.deleteCat', $cat->id) }}">
                                        <i class="bx bx-trash me-1"></i> Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                @else
                    <tbody class="table-border-bottom-0">
                        <tr>
                            <td colspan="6">
                                <div class="text-danger text-center"> Not Found Team Members Display ♥♥</div>
                            </td>
                        </tr>
                    </tbody>
                @endif
            </table>
        </div>
    </div>


@endsection