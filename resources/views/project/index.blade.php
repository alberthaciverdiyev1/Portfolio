@extends('main')

@section('content')

    <div id="hero" class="hero-work">
        <h1>Layihələrimiz</h1>
        <div class="router">
            <div class=""><a href="{{route('home')}}">Ana Səhifə</a></div>
            <i class="fa-solid fa-arrow-right-long"></i>
            <div class="green"><a href="{{route('projects')}}">Layihələr</a></div>
        </div>

    </div>

    <div class="work-card-section">
        <div class="container">
            <div class="work-cards">
                @forelse($projects as $project)
                    <div class="work-card" style="background-image: url({{$project->image()}})">
                        <div class="buttons">
                            @forelse($project->tags as $tag)
                                <button>
                                    {{$tag}}
                                </button>
                            @empty
                            @endforelse
                        </div>

                        <div class="text">
                            <h2>{{$project->name}}</h2>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>

    </div>

@endsection
