<x-admin-master>
    @section('content')

        <h1 class="h3 mb-4 text-gray-800">Wszystkie posty</h1>

    @if(\Illuminate\Support\Facades\Session::has('message'))
        <div class="alert alert-danger">
            {{\Illuminate\Support\Facades\Session::get('message')}}
        </div>
    @endif

    @if(\Illuminate\Support\Facades\Session::has('utworzono'))
        <div class="alert alert-success">
            {{\Illuminate\Support\Facades\Session::get('utworzono')}}
        </div>
    @endif

    @if(\Illuminate\Support\Facades\Session::has('post-updated-message'))
        <div class="alert alert-info">
            {{\Illuminate\Support\Facades\Session::get('post-updated-message')}}
        </div>
    @endif

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    <a class="collapse-item" href="{{route('post.create')}}">Napisz post</a>
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Autor</th>
                            <th>Tytuł</th>
                            <th>Grafika</th>
                            <th>Data utworzenia</th>
                            <th>Data aktualizacji</th>

                            <th>Usuwanie</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Autor</th>
                            <th>Tytuł</th>
                            <th>Grafika</th>
                            <th>Data utworzenia</th>
                            <th>Data aktualizacji</th>

                            <th>Usuwanie</th>
                        </tr>
                        </tfoot>
                        <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->id}}</td>
                                    <td>{{$post->user->name}}</td>
                                    <td>
                                        <a href="{{route('post.edit', $post->id)}}">
                                            {{$post->title}}
                                        </a>
                                    </td>
                                    <td>
                                        <img width="100px" src="{{asset($post->post_image)}}">
                                    </td>
                                    <td>
                                        {{$post->created_at}}
                                    </td>
                                    <td>{{$post->updated_at}}</td>
                                    <td>
                                        <form method="post" enctype="multipart/form-data" action="{{route('post.destroy', $post->id)}}">
                                            @csrf

                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger">Usuń post</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    @endsection

    @section('scirpits')
        <!-- Page level plugins -->
        <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

        <!-- Page level custom scripts -->
        <script src="{{asset('js/demo/datatables-demo.js')}}"></script>
    @endsection

</x-admin-master>
