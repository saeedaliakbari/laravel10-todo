@extends('layout.app')

@section('content')
    <div class="row justify-content-center mt-3">
        <div class="col-md-8">
            <h4 class="d-flex justify-content-center mt-4 mb-3"> {{ $todo->title }}</h4>
            <div class="card">
                <div class="card-header">
                    توضیحات
                </div>
                <div class="card-body">
                    {{ $todo->description }}

                </div>
                <hr>
                <div class="p-3  d-flex justify-content-between">
                    <div class="d-flex ">
                        <a class="btn btn-primary" href={{ route('todo.edit', ['todo' => $todo->id]) }}>ویرایش</a>
                        <form action={{ route('todo.delete', ['todo' => $todo->id]) }} method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger me-3" type="submit">حذف</button>
                        </form>
                    </div>
                    <a class="btn btn-outline-dark " href={{ route('todo.index', ['todo' => $todo->id]) }}>برگشت</a>
                </div>
            </div>

        </div>
    </div>
@endsection
