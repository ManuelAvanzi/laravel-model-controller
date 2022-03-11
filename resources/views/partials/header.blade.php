
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">Laravel Movies</span>
  </div>
</nav>
<div class="cards-container">

@foreach($data as $movie)

        <div class="card">

            <h2>Title: {{ $movie->title}}</h2>
            <p>Original title: {{ $movie->original_title }} - {{ $movie->nationality}}</p>
            <p>Year: {{ $movie->date }}</p>
            <p>Score: {{ $movie->vote }}</p>
        </div>
@endforeach

</div>

