<x-layout>
  <x-slot:heading>📖 ابواب حدیث / Hadith Chapters</x-slot:heading>

  <div class="row">
    @foreach ($collection as $chapter)
      <div class="col-lg-4 col-md-6 col-sm-12 d-flex">
        <div class="card w-100">
          <div class="card-body">
            <h5 class="card-title">{{ $chapter['chapterArabic'] }}</h5>
            <h6 class="card-subtitle">{{ $chapter['chapterEnglish'] }}</h6>
            <p class="card-text">{{ $chapter['chapterUrdu'] }}</p>
            <a href="{{ url('/hadith/chapters/' . $chapter['bookSlug'] . '/' . $chapter['chapterNumber']) }}" class="btn btn-chapter">
              📜 مطالعہ کریں / Read Chapter {{ $chapter['chapterNumber'] }}
            </a>
          </div>
        </div>
      </div>
    @endforeach
  </div>

</x-layout>
