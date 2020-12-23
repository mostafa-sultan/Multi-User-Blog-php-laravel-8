@extends('layout.main')
@section('category')

    <center><h2>data</h2></center>

    <form action="/add" method="get">
        @csrf
        <input type="submit" class="btn btn-danger" value="add data"/>
    </form>
    <center><a href="/add">add record</a></center>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>image</th>
            <th>title</th>
            <th>user</th>
            <th>name</th>
            <th>description</th>

        </tr>
        </thead>
        <tbody>
        @foreach ($posts as $post)
            <tr>
                <td>{{ $post->image }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->user }}</td>
                <td>{{ $post->name }}</td>
                <td>{{ $post->description }}</td>
                <td>
                    <a href="/selectpost/{{ $post->id }}">show</a>

                     <form action="/postupdate/{{ $post->id }}" method="get">

                        @csrf
                        <input type="submit" class="btn btn-danger" value="edit"/>
                    </form>

                    <form action="/postdelete/{{ $post->id }}" method="get">

                        @csrf
                        <input type="submit" class="btn btn-danger" value="Delete"/>
                    </form>

                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
<center><a href="/addform">add</a> </center>
@endsection
