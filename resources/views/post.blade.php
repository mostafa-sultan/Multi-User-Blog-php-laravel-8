@extends('layout.main')
@section('category')

    <div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url('{{ asset('images')}}/{{$post->image}}');">
        <div class="container">
            <div class="row same-height justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="post-entry text-center">
                        <span class="post-category text-white bg-success mb-3">Nature</span>
                        <h1 class="mb-4"><a href="#">{{$post->title}}.</a></h1>
                        <div class="post-meta align-items-center text-center">
                            <figure class="author-figure mb-0 mr-3 d-inline-block"><img src="{{ asset('images')}}/{{$post->image}}" alt="Image" class="img-fluid"></figure>
                            <span class="d-inline-block mt-1">By {{$post->name}}</span>
                            <span>&nbsp;-&nbsp; {{$post->created_at}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="site-section py-lg">
        <div class="container">

            <div class="row blog-entries element-animate">

                <div class="col-md-12 col-lg-8 main-content">

                    <div class="post-content-body">
                         <div class="row mb-5 mt-5">
                            <div class="col-md-12 mb-4">
                                <img src="{{ asset('images')}}/{{$post->image}}" alt="Image placeholder" class="img-fluid rounded">
                            </div>

                        </div>

                         {{$post->description}}
                    </div>

{{--mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm--}}
                    <div class="pt-5">
                        <p>Categories:  Tags: <a href="/posts/{{$post->category}}">#{{$post->category}}</a> </p>
                    </div>


                    <div class="pt-5">
                        <h3 class="mb-5">{{$comment->count()}} Comments</h3>
                        <ul class="comment-list">
                      @foreach ($comment as $comment)

                            <li class="comment">
                                <div class="vcard">
                                    <img src="/userimage/{{$comment->userimage}}" alt="Image placeholder">
                                </div>
                                <div class="comment-body">
                                    <h3>{{$comment->username}}</h3>
                                    <div class="meta">{{$comment->created_at}}</div>
                                    <p>{{$comment->comment}}</p>
{{--                                    <p><a href="#" class="reply rounded">Reply</a></p>--}}
                                </div>
                            </li>
                     @endforeach
{{--                            <li class="comment">--}}
{{--                                <div class="vcard">--}}
{{--                                    <img src="images/person_1.jpg" alt="Image placeholder">--}}
{{--                                </div>--}}
{{--                                <div class="comment-body">--}}
{{--                                    <h3>Jean Doe</h3>--}}
{{--                                    <div class="meta">January 9, 2018 at 2:21pm</div>--}}
{{--                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>--}}
{{--                                    <p><a href="#" class="reply rounded">Reply</a></p>--}}
{{--                                </div>--}}

{{--                                <ul class="children">--}}
{{--                                    <li class="comment">--}}
{{--                                        <div class="vcard">--}}
{{--                                            <img src="images/person_1.jpg" alt="Image placeholder">--}}
{{--                                        </div>--}}
{{--                                        <div class="comment-body">--}}
{{--                                            <h3>Jean Doe</h3>--}}
{{--                                            <div class="meta">January 9, 2018 at 2:21pm</div>--}}
{{--                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>--}}
{{--                                            <p><a href="#" class="reply rounded">Reply</a></p>--}}
{{--                                        </div>--}}


{{--                                        <ul class="children">--}}
{{--                                            <li class="comment">--}}
{{--                                                <div class="vcard">--}}
{{--                                                    <img src="images/person_1.jpg" alt="Image placeholder">--}}
{{--                                                </div>--}}
{{--                                                <div class="comment-body">--}}
{{--                                                    <h3>Jean Doe</h3>--}}
{{--                                                    <div class="meta">January 9, 2018 at 2:21pm</div>--}}
{{--                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>--}}
{{--                                                    <p><a href="#" class="reply rounded">Reply</a></p>--}}
{{--                                                </div>--}}

{{--                                                <ul class="children">--}}
{{--                                                    <li class="comment">--}}
{{--                                                        <div class="vcard">--}}
{{--                                                            <img src="images/person_1.jpg" alt="Image placeholder">--}}
{{--                                                        </div>--}}
{{--                                                        <div class="comment-body">--}}
{{--                                                            <h3>Jean Doe</h3>--}}
{{--                                                            <div class="meta">January 9, 2018 at 2:21pm</div>--}}
{{--                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>--}}
{{--                                                            <p><a href="#" class="reply rounded">Reply</a></p>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}


                        </ul>
                        <!-- END comment-list -->

                        <div class="comment-form-wrap pt-5">

                            <h3 class="mb-5">Leave a comment</h3>
                            <form action="/comment" method="post" class="p-5 bg-light">
                               @csrf

                                    @auth
                                        // The user is authenticated...
                                    <input type="hidden" value="{{ Auth::user()->email }}" name="commentuser">

                                    @endauth

                                    @guest
                                        // The user is not authenticated...
                                    <input type="hidden" value="" name="commentuser">

                                      @endguest
                                <input type="hidden" value="{{$post->id}}" name="post_id">

                                <div class="form-group">
                                    <label for="message">Comment</label>
                                    <textarea name="comment" id="message" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Post Comment" class="btn btn-primary">
                                </div>

                            </form>
                        </div>
                    </div>

                </div>

                <!-- END main-content -->

                <div class="col-md-12 col-lg-4 sidebar">
                    <div class="sidebar-box search-form-wrap">
                        <form action="#" class="search-form">
                            <div class="form-group">
                                <span class="icon fa fa-search"></span>
                                <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
                            </div>
                        </form>
                    </div>
                    <!-- END sidebar-box -->
                    <div class="sidebar-box">
                        <div class="bio text-center">
                            <img src="{{ asset('userimage')}}/{{$data[0]->image}}" alt="Image Placeholder" class="img-fluid mb-5">
                            <div class="bio-body">
                                <h2>{{$data[0]->name}}</h2>
                                <p class="mb-4">{{$data[0]->description}}</p>
                                <p><a href="/profile/{{$data[0]->email}}" class="btn btn-primary btn-sm rounded px-4 py-2">Profile</a></p>
                                <p class="social">
                                    <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                                    <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                                    <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                                    <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- END sidebar-box -->
                    <div class="sidebar-box">
                        <h3 class="heading">Popular Posts</h3>
                        <div class="post-entry-sidebar">
                            <ul>
                     @foreach ($sideposts as $side)

                                <li>
                                    <a href="/postdetail/{{$side->id}}">
                                        <img src="/images/{{$side->image}}" alt="Image placeholder" class="mr-4">
                                        <div class="text">
                                            <h4>{{substr($side->description,0,70)}}</h4>
                                            <div class="post-meta">
                                                <span class="mr-2">{{$side->created_at}} </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                       @endforeach

                            </ul>
                        </div>
                    </div>
                    <!-- END sidebar-box -->

                    <div class="sidebar-box">
                        <h3 class="heading">Categories</h3>
                        <ul class="categories">
                            @foreach ($frequency as $count)

                            <li><a href="/posts/{{$count->category}}">{{$count->category}} <span>({{$count->count}})</span></a></li>
                            @endforeach

                        </ul>
                    </div>
                    <!-- END sidebar-box -->

                    <div class="sidebar-box">
                        <h3 class="heading">Tags</h3>
                        <ul class="tags">
                            @foreach ($frequency as $count2)
                                <li><a href="/posts/{{$count2->category}}">{{$count2->category}}</a></li>

                             @endforeach
                        </ul>
                    </div>
                </div>
                <!-- END sidebar -->

            </div>
        </div>
    </section>

    <div class="site-section bg-light">
        <div class="container">

            <div class="row mb-5">
                <div class="col-12">
                    <h2>More Related Posts</h2>
                </div>
            </div>

            <div class="row align-items-stretch retro-layout">

                <div class="col-md-5 order-md-2">
                    <a href="single.html" class="hentry img-1 h-100 gradient" style="background-image: url('images/img_4.jpg');">
                        <span class="post-category text-white bg-danger">Travel</span>
                        <div class="text">
                            <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                            <span>February 12, 2019</span>
                        </div>
                    </a>
                </div>

                <div class="col-md-7">

                    <a href="single.html" class="hentry img-2 v-height mb30 gradient" style="background-image: url('images/img_1.jpg');">
                        <span class="post-category text-white bg-success">Nature</span>
                        <div class="text text-sm">
                            <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                            <span>February 12, 2019</span>
                        </div>
                    </a>

                    <div class="two-col d-block d-md-flex">
                        <a href="single.html" class="hentry v-height img-2 gradient" style="background-image: url('images/img_2.jpg');">
                            <span class="post-category text-white bg-primary">Sports</span>
                            <div class="text text-sm">
                                <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                                <span>February 12, 2019</span>
                            </div>
                        </a>
                        <a href="single.html" class="hentry v-height img-2 ml-auto gradient" style="background-image: url('images/img_3.jpg');">
                            <span class="post-category text-white bg-warning">Lifestyle</span>
                            <div class="text text-sm">
                                <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                                <span>February 12, 2019</span>
                            </div>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>


    <div class="site-section bg-lightx">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-5">
                    <div class="subscribe-1 ">
                        <h2>Subscribe to our newsletter</h2>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit nesciunt error illum a explicabo, ipsam nostrum.</p>
                        <form action="#" class="d-flex">
                            <input type="text" class="form-control" placeholder="Enter your email address">
                            <input type="submit" class="btn btn-primary" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="site-footer">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-4">
                    <h3 class="footer-heading mb-4">About Us</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat reprehenderit magnam deleniti quasi saepe, consequatur atque sequi delectus dolore veritatis obcaecati quae, repellat eveniet omnis, voluptatem in. Soluta, eligendi, architecto.</p>
                </div>
                <div class="col-md-3 ml-auto">
                    <!-- <h3 class="footer-heading mb-4">Navigation</h3> -->
                    <ul class="list-unstyled float-left mr-5">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Advertise</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Subscribes</a></li>
                    </ul>
                    <ul class="list-unstyled float-left">
                        <li><a href="#">Travel</a></li>
                        <li><a href="#">Lifestyle</a></li>
                        <li><a href="#">Sports</a></li>
                        <li><a href="#">Nature</a></li>
                    </ul>
                </div>
                <div class="col-md-4">


                    <div>
                        <h3 class="footer-heading mb-4">Connect With Us</h3>
                        <p>
                            <a href="#"><span class="icon-facebook pt-2 pr-2 pb-2 pl-0"></span></a>
                            <a href="#"><span class="icon-twitter p-2"></span></a>
                            <a href="#"><span class="icon-instagram p-2"></span></a>
                            <a href="#"><span class="icon-rss p-2"></span></a>
                            <a href="#"><span class="icon-envelope p-2"></span></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
