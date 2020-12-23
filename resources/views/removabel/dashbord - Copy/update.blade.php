@extends('layout.main')
@section('category')
    <div class="container">
        <h2>botstrab form</h2>
        <form class="form-horizontal" action="/update/{{ $posts->id}}" method="post">
@csrf
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{ $posts->image}}" placeholder="Enter namel" name="image">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{ $posts->title}}" placeholder="Enter namel" name="title">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{ $posts->user}}" placeholder="Enter namel" name="user">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{ $posts->name}}" placeholder="Enter namel" name="name">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">phone:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{ $posts->description }}" id="pwd" placeholder="phone" name="description">
                </div>
            </div>

    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">edit</button>
        </div>
    </div>
    </form>
    </div>

@endsection
