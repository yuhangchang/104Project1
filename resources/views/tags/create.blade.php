@extends('app')
@section('content')
    <h1>tag</h1>
    {!! Form::open(['url'=>'tags\store', 'method'=>'POST']) !!}
    <div class="form-group">
        {{Form::label('content', '標籤名稱:')}}
        {{Form::text('content', null,['class'=>'form-control'])}}
    </div>

    <div class="form-group">
       {!! Form::submit('送出',['class'=>'btn btn-success form-control']) !!}
   </div>
    {!! Form::close() !!}

@endsection
