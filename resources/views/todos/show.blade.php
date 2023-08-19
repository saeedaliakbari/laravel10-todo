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

            </div>

        </div>
    </div>
@endsection
