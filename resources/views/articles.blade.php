@extends('base')

@section('content')
    <div class="bg-secondary">
        <h1 class="display-4 text-center">Articles</h1>
        <div class="articles row justify-content-center">
            @foreach ($articles as $article)
                <div class="card col-md-6 m-1">
                    <div class="card-body">
                        <h5 class="card-title my-3">
                            {{ $article->title }}
                        </h5>
                        <p class="card-text">
                            {{ $article->subtitle }}
                        </p>
                        <a href="{{ route('article', $article->slug) }}" class="btn btn-primary"> 
                            Lire la suite
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center mt-5">
            {{ $articles ->links('vendor.pagination.custom')}}
        </div>
    </div>
@endsection