@extends('app')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">tags</h1>
        <form action="{{ route('tags.create') }}">
            <button class="btn btn-danger">建立新tag</button>
        </form>
            @foreach ($tags as $tag)
                <h3><a href="/tags/{{ $tag->id }}">{{ $tag->content }}</a></h1>
                    {{-- <td>{{$resume->id}}</td> --}}
                    {{-- <td>{{$resume->name}}</td> --}}
                {{-- <p>{{$resume->resume}}</p> --}}
            @endforeach

    </div>

</div>
@endsection
