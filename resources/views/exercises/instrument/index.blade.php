@extends('layouts.master')

@section('header')
    @if (isset($result))
        <a href="{{ url('/') }}">Back to de overview</a>
    @endif
<h2>
    All @if (isset($result)) {{ $result->name }} @endif {{ $category }}

    <a href="{{ url($category. '/create') }}" 
      class="btn btn-primary pull-right">
      Add new {{ $category }}
    </a>
</h2>
@stop

@section('content')
    @foreach ($exercises as $exercise)
        <div class="cat">
            <a href="{{ url($category . '/' . $result->id) }}">
              <strong>{{ exercise->name</strong> - {{ $exercise->$category->name }}
            </a>
        </div>
    @endforeach
@stop
