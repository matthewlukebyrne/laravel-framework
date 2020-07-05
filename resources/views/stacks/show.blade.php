    @extends('layouts.layout')
    @section('content')  
    <div class="flex-center position-ref full-height">
        <div class="content">
        <div class="links">
        <a href="/stacks" class="back">return</a>
        <hr>
    </div>
    <div class="wrapper stack-details">
        <form action="/stacks/{{ $stack->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button>Complete Framework</button>
            </form>
        <h1>{{ $stack->name }}'s Project Details</h1>
        <p class="framework">Choice of Framework - {{ $stack->framework }}</p>
        <p class="language">Languages - {{ $stack->language }}</p>
        <hr>
        {{-- Loop over extra features data --}}
        <p class="features">Tasks</p>
        <ul>
            @foreach ($stack->features as $feature)
                <li>{{ $feature }}</li>                
            @endforeach
        </ul>
        </div>
        </div>
    </div>
    @endsection