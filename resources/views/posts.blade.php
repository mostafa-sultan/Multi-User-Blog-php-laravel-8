@extends('layout.main')

@section('post')
    <div class="site-section">
        <div class="container">
 
            <div class="row">

                @foreach ($posts as $post)

                    <div class="col-lg-4 mb-4">
                        <div class="entry2">
                            <a href="/postdetail/{{$post->id}}"><img src="/images/{{$post->image}}" alt="Image" class="img-fluid rounded"></a>
                            <div class="excerpt">
                                <span class="post-category text-white bg-secondary mb-3">{{$post->category}}</span>

                                <h2><a href="/postdetail/{{$post->id}}">{{$post->title}}.</a></h2>
                                <div class="post-meta align-items-center text-left clearfix">
                                    <figure class="author-figure mb-0 mr-3 float-left"><img src="/userimage/{{$post->userimage}}" alt="Image" class="img-fluid"></figure>
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
     </div>
        <div class="d-flex justify-content-center">
            {!! $posts->links('vendor.pagination.bootstrap-4') !!}
        </div>

 {{--                    <div class="custom-pagination" style="  margin-left: auto; margin-right: auto; ">--}}
{{--                            <span>1</span>--}}
{{--                        <span><a onclick=location.reload(); href="">last</a></span>--}}
{{--                        <span><a href="" onclick=location.reload();>next</a></span>--}}
{{--                            <a href="#">3</a>--}}
{{--                            <a href="#">4</a>--}}
{{--                            <span>...</span>--}}
{{--                            <a href="#">15</a>--}}
{{--                        </div>--}}


{{--            <script>--}}
{{--                function changeText() {--}}
{{--                    // console.log(this.href.substring(this.href.lastIndexOf('/') + 1));--}}
{{--                    // console.log("jj");--}}

{{--                    var href = location.href;--}}
{{--                    console.log(href.match(/([^\/]*)\/*$/)[1]);--}}
{{--                }--}}
{{--            </script>--}}


@endsection


