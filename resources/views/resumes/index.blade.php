@extends('app')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Resumes</h1>
        <form action="{{ route('resumes.create') }}">
            <button class="btn btn-danger">建立新履歷</button>
        </form>
            @foreach ($resumes as $resume)
                <h3><a href="/resumes/{{ $resume->id }}">{{ $resume->name }}</a></h1>
                    {{-- <td>{{$resume->id}}</td> --}}
                    {{-- <td>{{$resume->name}}</td> --}}
                <p>{{$resume->resume}}</p>
            @endforeach

    </div>

</div>
@endsection
