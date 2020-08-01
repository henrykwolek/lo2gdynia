<x-admin-master>
    @section('content')

        <h1 class="h3 mb-4 text-gray-800">Zarządzanie zawartością strony</h1>

        <div class="card-deck">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Twórz posty</h5>
                    <p class="card-text">Po wejściu w zakładkę "Posty" po lewej stronie a następnie w "napisz post" można dodać wpis z tytułem, treścią oraz zdjęciem. Zostanie on następnie wyśietlony na stronie głownej.</p>
                    <a href="{{route('post.create')}}">
                        <button type="button" class="btn btn-success">
                            Twórz posty &rarr;
                        </button>
                    </a>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edytuj posty</h5>
                    <p class="card-text">Każdy post można edytować po przejściu w Posty>Zobacz wszystkie posty i następnie klikając w tytuł. Można edytować tytuł, treść oraz zmienić zdjęcie przypisane do danego postu.</p>
                    <a href="{{route('post.index')}}">
                        <button type="button" class="btn btn-info">
                            Edytuj posty &rarr;
                        </button>
                    </a>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Usuwaj posty</h5>
                    <p class="card-text">Każdy post można równierz usunąć. Usunięcię posta wiąże się z nieodwracalną jego utratą. Dla bezpieczeństwa opcja usuwania posta została zaznaczona wyraźnym czerwonym przyciskiem.</p>
                    <a href="{{route('post.index')}}">
                        <button type="button" class="btn btn-danger">
                            Usuwaj posty &rarr;
                        </button>
                    </a>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
    <br>
        <h1 class="h4 mb-4 text-gray-800">Ogólne informacje o stronie</h1>

        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Użyte narzędzia</h5>
                        <p class="card-text">Ten serwis został stworzony głównie przy użyciu PHP zintegrowanego we frameworku <a href="https://laravel.com/">Laravel</a>. Jest to framework aplikacji internetowych z ekspresyjną, elegancką składnią, który posiada mnóstwo wbudowanych komponentów umożliwiając szybszą i wydajniejszą pracę. Z kolei do stylowania całej strony użyłem Bootsrapv4.5.0 - gotowa biblioteka skrytów CSS3 i JavaScript a także jQuery.</p>
                        <a href="https://laravel.com/" class="btn btn-primary">Laravel</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Pliki strony</h5>
                        <p class="card-text">Wszystkie pliki zostały umieszczone w serwisie Github - najpopularniejszym na świecie portalu do przechowywania kodu. Ułatwia on też umieszczenie aplikacji stworzonej z użyciem Laravel na serwerze. Pliki HTML zostały umieszczone w folderze resources/views/ i można je znaleźć pod rozszerzeniem .blade.php, ponieważ wykorzustują one specjalne rozszerzenie unikatowe dla aplikacji stworzonych z użyciem Laravel.</p>
                        <a href="#" class="btn btn-primary">Github</a>
                    </div>
                </div>
            </div>
        </div>

    @endsection

</x-admin-master>
