@extends ('layouts.main')    {{-- Путь от каталога view --}}
@section('title') Учебный сайт - Новость {{ $id }} @stop   {{-- Надпись в тэге title файла main.blade игнорируется --}}
@section ('content')
<section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Новость {{ $id }}</h1>
        <p class="lead text-muted">Новости нашего сайта</p>        
      </div>
    </div>
</section>

<div class="album py-5 bg-light">
	<div class="container">
		<p>Новость номер {{ $id }}</p>
	</div>
</div>
@endsection
<!-- <h1>Мое дополнение</h1> Работает -->
<!-- push не работает Скрипт в main работает -->
@push('js')
<script>	
  document.write('Использован Javascript');
</script>
@endpush

