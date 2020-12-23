@extends('layout.dash')
@section('content')

{{--                        <div class="row">--}}
{{--                            <div class="col-xl-3 col-md-6">--}}
{{--                                <div class="card bg-primary text-white mb-4">--}}
{{--                                    <div class="card-body">Primary Card</div>--}}
{{--                                    <div class="card-footer d-flex align-items-center justify-content-between">--}}
{{--                                        <a class="small text-white stretched-link" href="#">View Details</a>--}}
{{--                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xl-3 col-md-6">--}}
{{--                                <div class="card bg-warning text-white mb-4">--}}
{{--                                    <div class="card-body">Warning Card</div>--}}
{{--                                    <div class="card-footer d-flex align-items-center justify-content-between">--}}
{{--                                        <a class="small text-white stretched-link" href="#">View Details</a>--}}
{{--                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xl-3 col-md-6">--}}
{{--                                <div class="card bg-success text-white mb-4">--}}
{{--                                    <div class="card-body">Success Card</div>--}}
{{--                                    <div class="card-footer d-flex align-items-center justify-content-between">--}}
{{--                                        <a class="small text-white stretched-link" href="#">View Details</a>--}}
{{--                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xl-3 col-md-6">--}}
{{--                                <div class="card bg-danger text-white mb-4">--}}
{{--                                    <div class="card-body">Danger Card</div>--}}
{{--                                    <div class="card-footer d-flex align-items-center justify-content-between">--}}
{{--                                        <a class="small text-white stretched-link" href="#">View Details</a>--}}
{{--                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-xl-6">--}}
{{--                                <div class="card mb-4">--}}
{{--                                    <div class="card-header">--}}
{{--                                        <i class="fas fa-chart-area mr-1"></i>--}}
{{--                                        Area Chart Example--}}
{{--                                    </div>--}}
{{--                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xl-6">--}}
{{--                                <div class="card mb-4">--}}
{{--                                    <div class="card-header">--}}
{{--                                        <i class="fas fa-chart-bar mr-1"></i>--}}
{{--                                        Bar Chart Example--}}
{{--                                    </div>--}}
{{--                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="card mb-4">

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>image</th>
                                            <th>title</th>
                                            <th>user</th>
                                            <th>name</th>
                                            <th>category</th>
                                            <th>description</th>
                                            <th>date</th>
                                            <th>show</th>
                                            <th>edit</th>
                                            <th>delete</th>

                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th>id</th>
                                            <th>image</th>
                                            <th>title</th>
                                            <th>user</th>
                                            <th>name</th>
                                            <th>category</th>
                                            <th>description</th>
                                            <th>date</th>
                                            <th>show</th>
                                            <th>edit</th>
                                            <th>delete</th>

                                        </tr>
                                        </tfoot>
                                        <tbody>
                                        @foreach ($posts as $post)
                                            <tr>
                                                <td>{{ $post->id }}</td>
                                                <td>{{ $post->image }}</td>
                                                <td>{{ $post->title }}</td>
                                                <td>{{ $post->user }}</td>
                                                <td>{{ $post->name }}</td>
                                                <td>{{ $post->category }}</td>
                                                <td>{{substr($post->description,0,70)}}</td>
                                                <td>{{ $post->created_at }}</td>
                                                <td><a href="/postdetail/{{ $post->id }}">show</a></td>
                                                <td><form action="/dashbord/edit/{{ $post->id }}" method="get">
                                                        @csrf
                                                        <input type="submit" class="btn btn-danger" value="edit"/>
                                                    </form></td>
                                                 <td><form action="/dashbord/postdelete/{{ $post->id }}" method="get">
                                                        @csrf
                                                        <input type="submit" class="btn btn-danger" value="Delete"/>
                                                     </form></td>


                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
{{--                <footer class="py-4 bg-light mt-auto">--}}
{{--                    <div class="container-fluid">--}}
{{--                        <div class="d-flex align-items-center justify-content-between small">--}}
{{--                            <div class="text-muted">Copyright &copy; Your Website 2020</div>--}}
{{--                            <div>--}}
{{--                                <a href="#">Privacy Policy</a>--}}
{{--                                &middot;--}}
{{--                                <a href="#">Terms &amp; Conditions</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </footer>--}}
            </div>
        </div>


@endsection












