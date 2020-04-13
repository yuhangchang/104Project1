@extends('app')
{{-- @section('content')
        <h1>{{ $resume->name }}</h1>
        <hr>
        <p>{{ $resume->resume }}</p>
@endsection --}}


@section('content')
    <div class="container">
        <div class="card text-center">
            <div class="card-header">
                姓名：{{ $resume->name }}
            </div>
            <div class="card-body">
                內容：
                <p class="card-text">
                    {{ $resume->resume }}
                </p>
            </div>
            <div class="card-footer text-muted">
                日期：{{ $resume->created_at }}
            </div>
            <div align="center">
                <a href="{{ route('resumes.edit', $resume->id) }}" class="btn btn-primary">編輯</a>

                <form action="{{ route('resumes.destroy', $resume->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">刪除</button>
                </form>
            </div>
        </div>
    </div>
@endsection
