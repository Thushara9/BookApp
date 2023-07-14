@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">
        <h2>All Books List</h2>
    </div>
    <div class="card-body">
        <a href="{{ url('/books/create') }}" class="btn btn-success btn-sm" title="Add New Book">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New
        </a>
        <br/>
        <br/>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Genre</th>
                        <th>Height</th>
                        <th>Publisher</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($books as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->Title }}</td>
                        <td>{{ $item->Author }}</td>
                        <td>{{ $item->Genre }}</td>
                        <td>{{ $item->Height }}</td>
                        <td>{{ $item->Publisher }}</td>

                        <td>
                            <div class="btn-group" role="group">
                                <a href="{{ url('/books/' . $item->id) }}" title="View Book" class="btn btn-info btn-sm mx-1"><i class="fa fa-eye" aria-hidden="true"></i> View</a>
                                <a href="{{ url('/books/' . $item->id . '/edit') }}" title="Edit Book" class="btn btn-primary btn-sm mx-1"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>

                                <form method="POST" action="{{ url('/books' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Book" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $books->links('pagination::bootstrap-5') }}
            </div>
        </div>

    </div>
</div>

@endsection
