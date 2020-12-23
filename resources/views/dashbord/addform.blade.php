@extends('layout.dash')
@section('content')
<div class="container">
    <h2>botstrab form</h2>
    <form class="form-horizontal" action="/dashbord/add" method="post"  enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">image post</label>
            <div class="col-sm-10">
                <input type="file" class="form-control"   name="image">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Title</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"  placeholder="Title" name="title">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">catigory</label>
{{--            <div class="col-sm-10">--}}
{{--                <input type="text" class="form-control"  placeholder="catigory" name="category">--}}
{{--            </div>--}}
             <select class="form-control" id="sel1" name="category">
                <option>android</option>
                <option>problem_solving</option>
                <option>technologies</option>
                 <option>tracks</option>
                 <option>road_map</option>
            </select>
            <br>
        </div>
        <input type="hidden" value="{{ Auth::user()->email }}" name="user">

                <input type="hidden" value="{{ Auth::user()->name }}" name="name">
        {{--        <input type="hidden" value="{{ Auth::user()->name }}" name="name">--}}


        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">description</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"   id="pwd" description="phone" name="description">
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










<div class="wmd-panel">
    <div id="wmd-button-bar">
    </div>
    <textarea class="wmd-input" id="wmd-input">
This is the *first* editor.
------------------------------

Just plain **Markdown**, except that the input is sanitized:

<marquee>I'm the ghost from the past!</marquee>
     </textarea>
</div>
<div id="wmd-preview" class="wmd-panel wmd-preview">
</div>


<script>function () {
        var converter = new Markdown.Converter();
        var editor = new Markdown.Editor(converter);
        editor.run();}</script>

@endsection
