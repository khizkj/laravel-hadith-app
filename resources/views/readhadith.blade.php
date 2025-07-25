<x-layout>
  <x-slot:heading>📜 احادیث / Hadiths</x-slot:heading>

  <div class="row">
    @foreach ($collection as $hadith)
      <div class="col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">📖 {{ $hadith['hadithArabic'] ?? '...' }}</h5>
            <p class="card-text">{{ $hadith['hadithUrdu'] ?? '' }}</p>
            <p class="card-text"><small>{{ $hadith['hadithEnglish'] ?? '' }}</small></p>
          </div>
        </div>
      </div>
    @endforeach
  </div>


</x-layout>
