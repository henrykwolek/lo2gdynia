<x-home-master>

@section('content')

        <a href="#">
            <img class="embed-responsive mt-2" src="https://lo2gdynia.pl/templates/lo2gdynia/images/logo-1523997736.png">
        </a>

    <hr>

        <!-- Blog Post -->

    @foreach($posts as $post)

        <div class="card mb-4">
            <img class="card-img-top" src="{{asset($post->post_image)}}">
            <div class="card-body">
                <h2 class="card-title">{{$post->title}}</h2>
                <p class="card-text">{{Str::limit($post->body, '120', '...')}}</p>
                <a href="{{route('post', $post->id)}}" class="btn btn-primary">Czytaj więcej &rarr;</a>
            </div>
            <div class="card-footer text-muted">
                Utworzono {{$post->created_at->diffForHumans()}} przez
                <a href="#">{{$post->user->name}}</a>
            </div>
        </div>
        @endforeach

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
                <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
                <a class="page-link" href="#">Newer &rarr;</a>
            </li>
        </ul>
@endsection

</x-home-master>
