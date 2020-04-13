@extends('app')
@section('content')
    <div class="container">
        <div class="card text-center">
            <div class="card-header">
                標籤ID：{{ $tag->id }}
            </div>
            <div class="card-body">
                <p class="card-text">
                    標籤名稱：{{ $tag->content }}
                </p>
            </div>
            <div class="card-footer text-muted">
                日期：{{ $tag->created_at }}
            </div>
            <div align="center">
                <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-primary">編輯</a>

                <form action="{{ route('tags.destroy', $tag->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">刪除</button>
                </form>
            </div>
        </div>
    </div>
@endsection
