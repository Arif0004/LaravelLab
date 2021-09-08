@extends('master')
@section('Content')
    <div class="Container">
        <div class="center">
            <p>List of Todos</p>
            <a href="{{url('/TODO.add')}}">Add new post</a>
        </div>

        <div>
            <ul>
                <li></li>
            </ul>
        </div>

    </div>

@endsection
