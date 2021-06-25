@extends ('layouts.main')    {{-- Путь от каталога view --}}
@section('title') Учебный сайт - Новость {{ $news->id }}: {{ $news->title }} @stop   {{-- Надпись в тэге title файла main.blade игнорируется --}}
@section ('content')
<section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Новость {{ $news->id }}</h1>
        <p class="lead text-muted">Читайте наши новости!</p>        
      </div>
    </div>
</section>

<div class="album py-5 bg-light">
	<div class="container">
		<p>Новость номер {{ $news->id }}: {{ $news->title }}</p>
    <p>{{ $news->description }}</p>
	</div>
</div>
@endsection
<!-- <h1>Мое дополнение</h1> Работает -->
<!-- push не работает Скрипт в main работает -->


