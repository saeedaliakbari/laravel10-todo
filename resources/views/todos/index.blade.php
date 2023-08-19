@extends('layout.app')

@section('content')
    <div class="row justify-content-center mt-3">
        <div class="col-md-8">
            <div class="d-flex justify-content-between my-3 align-items-center">
                <h4>برنامه ریزی کارها</h4>
                <a href={{ route('todo.create') }} class="btn btn-sm btn-outline-primary">ایجاد</a>
            </div>
            <div class="card">
                <div class="card-header">
                    کارها
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach ($todos as $todo)
                            <li class="list-group-item d-flex justify-content-between">
                                {{ $todo->title }}
                                <a href={{ route('todo.show', ['todo' => $todo->id]) }} class="btn btn-sm btn-dark">نمایش</a>
                            </li>
                        @endforeach

                    </ul>
                </div>

            </div>
            <div class="mt-4 d-flex justify-content-center">
                {{ $todos->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
@endsection
