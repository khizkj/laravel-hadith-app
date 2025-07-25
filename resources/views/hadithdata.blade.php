<x-layout>
  <x-slot:heading>📚 کتب حدیث / Hadith Books</x-slot:heading>

  <div class="row">
    @foreach ($collection as $item)
      <div class="col-lg-4 col-md-6 col-sm-12 d-flex">
        <div class="card w-100">
          <div class="card-body">
            <h5 class="card-title">{{ $item['bookName'] }}</h5>
            <h6 class="card-subtitle">{{ $item['writerName'] }}</h6>
            <p class="card-text">{{ $item['bookSlug'] }}</p>
            <a href="/chapters/{{ $item['bookSlug'] }}" class="btn btn-chapter">📖 ابواب حدیث / View Chapters</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</x-layout>
