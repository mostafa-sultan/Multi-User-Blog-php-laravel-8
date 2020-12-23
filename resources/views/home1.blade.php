@extends('layout.main')
@section('category')
    <div class="site-section bg-light">
        <div class="container">
            <div class="row align-items-stretch retro-layout-2">
                <div class="col-md-4">
                    <a href="/posts/android" class="h-entry mb-30 v-height gradient" style="background-image: url('userimage/android.jpg');">

                        <div class="text">
                            <h2>Android</h2>
                            <span class="date">July 19, 2019</span>
                        </div>
                    </a>
                    <a href="/posts/problem_solving" class="h-entry v-height gradient" style="background-image: url('userimage/compititv.jpg');">

                        <div class="text">
                            <h2>Competitive Programming</h2>
                            <span class="date">July 19, 2019</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="/posts/technologies" class="h-entry img-5 h-100 gradient" style="background-image: url('userimage/tech.jpg');">

                        <div class="text">
                            <div class="post-categories mb-3">
                                <span class="post-category bg-danger">Travel</span>
                                <span class="post-category bg-primary">Food</span>
                            </div>
                            <h2>Technologies</h2>
                            <span class="date">July 19, 2019</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="/posts/tracks" class="h-entry mb-30 v-height gradient" style="background-image: url('userimage/triks.jpg');">

                        <div class="text">
                            <h2>Programming Tricks</h2>
                            <span class="date">July 19, 2019</span>
                        </div>
                    </a>
                    <a href="/posts/road_map" class="h-entry v-height gradient" style="background-image: url('userimage/rode.jpg');">

                        <div class="text">
                            <h2>Rode Maps</h2>
                            <span class="date">July 19, 2019</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('post')
    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <h2>Recent Posts</h2>
                </div>
            </div>
            <div class="row">

         @foreach ($posts as $post)

                <div class="col-lg-4 mb-4">
                    <div class="entry2">
                        <a href="postdetail/{{$post->id}}"><img src="images/{{$post->image}}" alt="Image" class="img-fluid rounded"></a>
                        <div class="excerpt">
                            <span class="post-category text-white bg-secondary mb-3">{{$post->category}}</span>

                            <h2><a href="postdetail/{{$post->id}}">{{$post->title}}.</a></h2>
                            <div class="post-meta align-items-center text-left clearfix">
                                <figure class="author-figure mb-0 mr-3 float-left"><img src="userimage/{{$post->userimage}}" alt="Image" class="img-fluid"></figure>
                                <span class="d-inline-block mt-1">By <a href="/profile/{{$post->user}}">{{$post->name}}</a></span>
                                <span>&nbsp;-&nbsp; {{$post->created_at}}</span>
                            </div>

                            <p>{{substr($post->description,0,70)}}.</p>
                            <p><a href="postdetail/{{$post->id}}">Read More</a></p>
                        </div>
                    </div>
                </div>

                @endforeach


        </div>
    </div>
        <div class="d-flex justify-content-center">
            {!! $posts->links('vendor.pagination.bootstrap-4') !!}
        </div>
@endsection



{{--@section('news')--}}


{{--    <div class="site-section bg-light">--}}
{{--        <div class="container">--}}

{{--            <div class="row align-items-stretch retro-layout">--}}

{{--                <div class="col-md-5 order-md-2">--}}
{{--                    <a href="single.html" class="hentry img-1 h-100 gradient" style="background-image: url('images/img_4.jpg');">--}}
{{--                        <span class="post-category text-white bg-danger">Travel</span>--}}
{{--                        <div class="text">--}}
{{--                            <h2>The 20 Biggest Fintech Companies In America 2019</h2>--}}
{{--                            <span>February 12, 2019</span>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}

{{--                <div class="col-md-7">--}}

{{--                    <a href="single.html" class="hentry img-2 v-height mb30 gradient" style="background-image: url('images/img_1.jpg');">--}}
{{--                        <span class="post-category text-white bg-success">Nature</span>--}}
{{--                        <div class="text text-sm">--}}
{{--                            <h2>The 20 Biggest Fintech Companies In America 2019</h2>--}}
{{--                            <span>February 12, 2019</span>--}}
{{--                        </div>--}}
{{--                    </a>--}}

{{--                    <div class="two-col d-block d-md-flex">--}}
{{--                        <a href="single.html" class="hentry v-height img-2 gradient" style="background-image: url('images/img_2.jpg');">--}}
{{--                            <span class="post-category text-white bg-primary">Sports</span>--}}
{{--                            <div class="text text-sm">--}}
{{--                                <h2>The 20 Biggest Fintech Companies In America 2019</h2>--}}
{{--                                <span>February 12, 2019</span>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <a href="single.html" class="hentry v-height img-2 ml-auto gradient" style="background-image: url('images/img_3.jpg');">--}}
{{--                            <span class="post-category text-white bg-warning">Lifestyle</span>--}}
{{--                            <div class="text text-sm">--}}
{{--                                <h2>The 20 Biggest Fintech Companies In America 2019</h2>--}}
{{--                                <span>February 12, 2019</span>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}




{{--@section('footer')--}}
{{--    <div class="site-footer">--}}
{{--        <div class="container">--}}
{{--            <div class="row mb-5">--}}
{{--                <div class="col-md-4">--}}
{{--                    <h3 class="footer-heading mb-4">About Us</h3>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat reprehenderit magnam deleniti quasi saepe, consequatur atque sequi delectus dolore veritatis obcaecati quae, repellat eveniet omnis, voluptatem in. Soluta, eligendi, architecto.</p>--}}
{{--                </div>--}}
{{--                <div class="col-md-3 ml-auto">--}}
{{--                    <!-- <h3 class="footer-heading mb-4">Navigation</h3> -->--}}
{{--                    <ul class="list-unstyled float-left mr-5">--}}
{{--                        <li><a href="#">About Us</a></li>--}}
{{--                        <li><a href="#">Advertise</a></li>--}}
{{--                        <li><a href="#">Careers</a></li>--}}
{{--                        <li><a href="#">Subscribes</a></li>--}}
{{--                    </ul>--}}
{{--                    <ul class="list-unstyled float-left">--}}
{{--                        <li><a href="#">Travel</a></li>--}}
{{--                        <li><a href="#">Lifestyle</a></li>--}}
{{--                        <li><a href="#">Sports</a></li>--}}
{{--                        <li><a href="#">Nature</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}


{{--                    <div>--}}
{{--                        <h3 class="footer-heading mb-4">Connect With Us</h3>--}}
{{--                        <p>--}}
{{--                            <a href="#"><span class="icon-facebook pt-2 pr-2 pb-2 pl-0"></span></a>--}}
{{--                            <a href="#"><span class="icon-twitter p-2"></span></a>--}}
{{--                            <a href="#"><span class="icon-instagram p-2"></span></a>--}}
{{--                            <a href="#"><span class="icon-rss p-2"></span></a>--}}
{{--                            <a href="#"><span class="icon-envelope p-2"></span></a>--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-12 text-center">--}}
{{--                    <p>--}}
{{--                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->--}}
{{--                        Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>--}}
{{--                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    </div>--}}
{{--@endsection--}}
