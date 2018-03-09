@extends('admin.index')

@section('page_content')


        <a href="/admin/create"> Создать пост</a>
        @foreach($posts as $post)
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->content }}</p>
        <ul class="list-inline">
            <li><a href="/blog/{{ $post->id }}/edit" class="btn btn-primary">edit</a></li>
            <li>
                {!! Form::open(['method' => 'DELETE', 'route' => ['admin.destroy', $post->id]]) !!}
                {!! Form::submit('Delete post', ['class' => 'btn btn-danger', 'onclick' => 'return confirm("Are you sure you want to delete this item?");']) !!}
                {!! Form::close() !!}
            </li>
        </ul>

    @endforeach

@endsection