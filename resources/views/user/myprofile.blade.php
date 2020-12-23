@extends('layout.main')
@section('category')

    {{--    <center><h1>{{ Auth::user()->name }}</h1></center>--}}
    {{--    <center><h1>{{ Auth::user()->email }}</h1></center>--}}
    {{--    <center><h1>{{ Auth::user()->id }}</h1></center>--}}
    {{--    <center><h1>{{ Auth::user()->created_at }}</h1></center>--}}
    {{--    <a href="">add post</a>--}}
    {{--    <a href="">add post</a>--}}
    {{--    <a href="">add post</a>--}}
    {{--    <a href="">add post</a>--}}
    {{--    @incloud('user.show')--}}
    {{--    @include('user.show')--}}
    <img >

    <center><img src="{{ asset('userimage')}}/{{$data[0]->image}}" class="rounded-circle" style="width: 400px; height: 400px;  alt="Cinque Terre">
    </center>
    <center><h2>{{$data[0]->name}}</h2></center>
    <center><h1>{{$data[0]->description}}</h1></center>
    <center><h3>{{$data[0]->created_at}}</h3></center>
    <center><h3><a href="/dashbord">my dashboard</a></h3></center>

    <h3>My Posts</h3>
{{--    <div class="card-body">--}}
{{--        <div class="table-responsive">--}}
{{--            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">--}}
{{--                <thead>--}}
{{--                <tr>--}}
{{--                                    <th>id</th>--}}
{{--                                    <th>image</th>--}}
{{--                    <th>title</th>--}}
{{--                                    <th>user</th>--}}
{{--                    <th>name</th>--}}
{{--                    <th>description</th>--}}
{{--                                    <th>date</th>--}}
{{--                    <th>show</th>--}}
{{--                                    <th>edit</th>--}}
{{--                    --}}{{--                <th>delete</th>--}}

{{--                </tr>--}}
{{--                </thead>--}}

{{--                <tbody>--}}
{{--                @foreach ($posts as $post)--}}
{{--                    <tr>--}}
{{--                                            <td>{{ $post->id }}</td>--}}
{{--                                            <td>{{ $post->image }}</td>--}}
{{--                        <td>{{ $post->title }}</td>--}}
{{--                                            <td>{{ $post->user }}</td>--}}
{{--                        <td>{{ $post->name }}</td>--}}
{{--                        <td>{{substr($post->description,0,70)}}</td>--}}
{{--                                            <td>{{ $post->created_at }}</td>--}}
{{--                        <td><a href="/postdetail/{{ $post->id }}" class="btn btn-danger">show</a></td>--}}
{{--                                            <td><form action="/dashbord" method="get">--}}
{{--                                                    @csrf--}}
{{--                                                    <input type="submit" class="btn btn-danger" value="edit"/>--}}
{{--                                                </form>--}}
{{--                                            </td>--}}
{{--                        --}}{{--                    <td><form action="/dashbord/postdelete/{{ $post->id }}" method="get">--}}
{{--                        --}}{{--                            @csrf--}}
{{--                        --}}{{--                            <input type="submit" class="btn btn-danger" value="Delete"/>--}}
{{--                        --}}{{--                        </form></td>--}}


{{--                    </tr>--}}
{{--                @endforeach--}}

{{--                </tbody>--}}
{{--            </table>--}}
{{--        </div>--}}
{{--    </div>--}}


    <div class="row">

        @foreach ($posts as $post)

            <div class="col-lg-4 mb-4">
                <div class="entry2">
                    <a href="/postdetail/{{$post->id}}"><img src="{{ asset('images')}}/{{$post->image}}" alt="Image" class="img-fluid rounded"></a>
                    <div class="excerpt">
                        <span class="post-category text-white bg-secondary mb-3">{{$post->category}}</span>

                        <h2><a href="/postdetail/{{$post->id}}">{{$post->title}}.</a></h2>
                        <div class="post-meta align-items-center text-left clearfix">
                            <figure class="author-figure mb-0 mr-3 float-left"><img src="{{ asset('userimage')}}/{{$post->userimage}}" alt="Image" class="img-fluid"></figure>
                            <span class="d-inline-block mt-1">By <a href="/profile/{{$post->user}}">{{$post->name}}</a></span>
                            <span>&nbsp;-&nbsp; {{$post->created_at}}</span>
                        </div>

                        <p>{{substr($post->description,0,70)}}.</p>
                        <p><a href="/postdetail/{{$post->id}}">Read More</a></p>
                    </div>
                </div>
            </div>

        @endforeach



    </div>
    <div class="d-flex justify-content-center">
        {!! $posts->links('vendor.pagination.bootstrap-4') !!}
    </div>


@endsection
