<main>
@foreach($data as $movie)
        <div class="card">

            <h2>Title: {{ $movie->title}}</h2>
            <p>Original title: {{ $movie->original_title }} - {{ $movie->nationality}}</p>
            <p>Year: {{ $movie->date }}</p>
            <p>Score: {{ $movie->vote }}</p>
        </div>
@endforeach
</main>