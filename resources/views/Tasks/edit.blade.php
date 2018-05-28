@extends('layouts.app')

@section('content')

<!-- Write content for each page here -->
<h1>id: {{ $task->id }} のタスク修正ページ</h1>

    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}

        {!! Form::label('status', '状態:') !!}
        {!! Form::text('status') !!}
        
        {!! Form::submit('更新') !!}

    {!! Form::close() !!}
@endsection