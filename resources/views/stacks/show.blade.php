    @extends('layouts.app')
    @section('content')
    <div class="wrapper stack-details">
            <div class="content">
                <h1>{{ $stack->name }}</h1>
                <p class="framework">Choice of Framework - {{ $stack->framework }}</p>
                <p class="language">Choice of Language - {{ $stack->language }}</p>
                <hr>
                {{-- Loop over extra features data --}}
                <p class="features">Included Features</p>
                <ul>
                    @foreach ($stack->features as $feature)
                    <li>{{ $feature }}</li>
                    @endforeach
                </ul>
                    <form action="{{ route('stacks.destroy', $stack->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="links">
                    <button>Complete Project</button>
                    </div>
                    </form>
            </div>
        </div>
        <div class="links">
            <a href="/stacks" class="back">return</a>
        </div>
    @endsection
