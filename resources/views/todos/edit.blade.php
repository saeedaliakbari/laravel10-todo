@extends('layout.app')

@section('content')
    <div class="row justify-content-center mt-3">
        <div class="col-md-8">
            {{-- @include('sections.error') --}}
            <div class="card">
                <div class="card-header">ویرایش تسک </div>
                <div class="card-body">
                    <form action="{{ route('todo.update', ['todo' => $todo->id]) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="title">عنوان</label>
                            <input type="text" id="title" name="title"
                                class="form-control @error('title') form-control-invalid

                            @enderror"
                                value="{{ $todo->title }}">
                            @error('title')
                                <p class="invalid-feedback d-block"><strong>{{ $message }}</strong></p>
                            @enderror

                        </div>
                        <div class="form-group">
                            <label for="description">توضیحات</label>
                            <textarea id="description" name="description"
                                class="form-control @error('description') form-control-invalid

                            @enderror">{{ $todo->description }}</textarea>
                            @error('description')
                                <p class="invalid-feedback d-block"><strong>{{ $message }}</strong></p>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary mt-3 mb-2 ">ویرایش</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
