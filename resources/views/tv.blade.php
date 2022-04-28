@extends('template.base')

@section('title', 'DC Tv')

@section('content')
    <main>
        <div class="top-main">
            <div class="container">
                <div class="btn-blu-before">current series</div>
                <div class="container-books">
                    @foreach ($books as $book)
                        {{-- CARD --}}
                        <div class="content-book">
                            <a href="{{ route('single_comics', ['id' => $book['id']]) }}">
                                <img src="{{ $book['thumb'] }}" alt="{{ $book['series'] }}">
                                <h6>{{ $book['series'] }}</h6>
                            </a>
                        </div>
                        {{-- CARD --}}
                    @endforeach

                </div>
              <div class="btn-blu-after">Load More</div>
            </div>
        </div>

        <div class="end-main">
            <div class="container">
                {{-- BLU LINE --}}
                @foreach ($arrSectionBlu as $item)
                    <div class="content-card">
                        <img src="{{ $item['img'] }}" alt="{{ $item['text'] }}">
                        <span>{{ $item['text'] }}</span>
                    </div>
                @endforeach
                {{-- BLU LINE  --}}
            </div>
        </div>

    </main>
@endsection
