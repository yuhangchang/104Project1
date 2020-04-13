@extends('app')
@section('content')
    <script type="text/javascript">
        $(function() {
            $(".js-example-basic-multiple").select2({
                placeholder: "添加標籤"
            });
       });
      </script>
    <h1>修改履歷:{{$resume->name}}</h1>
    {!! Form::model($resume,['url'=>'resumes/update']) !!}
    {!! Form::hidden('id',$resume->id) !!}
    {{-- {!! Form::open(['url'=>['resumes\update', $resume->id], 'method'=>'POST']) !!} --}}
    <div class="form-group">
        {{Form::label('name', '名字:')}}
        {{Form::text('name', $resume->name,['class'=>'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('resume', '履歷內容:')}}
        {{Form::textarea('resume', $resume->resume,['class'=>'form-control'])}}
    </div>
    <div class="form-group">
        {!! Form::label('tag_list','選擇標籤') !!}
        {!! Form::select('tag_list[]',$tags,null,['class'=>'form-control js-example-basic-multiple','multiple'=>'multiple']) !!}
    </div>
    <div class="form-group">
       {!! Form::submit('修改履歷',['class'=>'btn btn-success form-control']) !!}
   </div>
    {!! Form::close() !!}

@endsection
