@extends('layouts.app')

@section('content')
    @foreach ($roles as $role)
        {
        {{ $role->rolename }}
        }
    @endforeach
@endsection
