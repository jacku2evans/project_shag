@extends('admin.index')

@section('title', 'Создать пост')

@section('page_content')

    {!! Form::model($post, array('route' => array('admin.update', $post->id), 'method' => 'PUT')) !!}

    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', null, ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
    {{ Form::label('content', 'Content')}}
    {{Form::text('content', null, ['class' => 'form-control'])}}
</div>

{{Form::submit('Редактировать пост', ['class' => 'btn btn-primary'])}}

{!! Form::close() !!}

@endsection