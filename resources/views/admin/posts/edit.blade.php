<x-admin-master>
    @section('content')

        <h1>Edytuj istniejący post</h1>

        <form method="post" action="{{route('post.update', $post->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="title">Tytuł postu</label>
                <input type="text" name="title" value="{{$post->title}}" class="form-control" id="title" aria-describedby="" placeholder="Tytuł postu">
            </div>
            <div class="form-group">
                <div class="mb-4">
                    <img height="150px" src="{{asset($post->post_image)}}">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="custom-file-label" for="inputGroupFile01">Wybierz plik</label>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="post_image" id="post_image" aria-describedby="inputGroupFileAddon01">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="body">Opis do posta</label>
                <textarea name="body" id="body" class="form-control" rows="10">{{$post->body}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Zatwierdź zmiany</button>

        </form>

    @endsection
</x-admin-master>
