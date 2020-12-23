@extends('layout.main')
@section('category')
    <div class="container">
        <h2>botstrab form</h2>
        <form class="form-horizontal" action="/addpost" method="post"  enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">image post</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control"  placeholder="Enter namel" name="image">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"  placeholder="Enter namel" name="title">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">catigory</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"  placeholder="Enter namel" name="user">
                </div>
            </div>

           <input type="hidden" value="{{ Auth::user()->name }}" name="name">


            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">description</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"   id="pwd" placeholder="phone" name="description">
                </div>
            </div>

    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Add</button>
        </div>
    </div>
    </form>
    </div>

@endsection
