@extends('layout.dash')
@section('content')
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Static Navigation</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="/dashbord/update/{{ $posts->id}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Static Navigation</li>
                        </ol>

                        <div class="container">
                            <h2>botstrab form</h2>
                            <form class="form-horizontal" id="formm" action="/dashbord/update/{{ $posts->id}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="email">image:</label>
                                    <div class="col-sm-10">
                                      <input type="file" class="form-control"  placeholder="Enter namel" name="image">
                                  <img src="{{asset('images')}}/{{$posts->image}}" style="height: 150px; width: 150px">
                                   </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="email">titel:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="{{ $posts->title}}" placeholder="Enter namel" name="title">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="email">user:</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="{{ $posts->user}}" placeholder="Enter namel" name="user">
                                    </div>
                                </div>

                                <input type="hidden"   value="{{ $posts->name}}"   name="name">
                                <input type="hidden"   value="{{ $posts->image}}"   name="oldimg">


{{--                                <div class="form-group">--}}
{{--                                    <label class="control-label col-sm-2" for="pwd">description:</label>--}}
{{--                                    <div class="col-sm-10">--}}
{{--                                        <input type="text" class="form-control" value="{{ $posts->description }}" id="pwd" placeholder="phone" name="description">--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                        </div>--}}
                        <textarea name="description" form="formm">{{ $posts->description }}</textarea>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">edit</button>
                            </div>
                        </div>
                        </form>

                    </div>


@endsection
