@extends('layouts.admin')
@section('title') Добавить новость - @parent @stop
@section('content')
	<div class="col-md-12">
        <h1 class="h2">Добавить новость</h1>        
        <div>
        	@if($errors->any())
        		@foreach($errors->all() as $e)
        			<div class="alert alert-danger">{{ $e }}</div>
        		@endforeach
        	@endif
        	<!-- Форма ввода новости -->
            <form action="{{ route('news.store') }}" method="POST"> 
            	@csrf
            	<div class="form-group">     
    				<label>Заголовок *<input type="text" placeholder="Заголовок" name="title" id="title" class="form-control" value="{{ old('title') }}"></label><br>
    			</div>
    			<div class="form-group">
    				<label>Логотип<input type="file" name="image" id="image" class="form-control"></label><br>
    			</div>
    			<div class="form-group">
    				<label>Краткое описание<input type="text" placeholder="Новость кратко" name="brief" id="brief" class="form-control" value="{{ old('brief') }}"></label><br>
    			</div>
    			<div class="form-group">
    				<label>Описание *<textarea cols="40" rows="6" name="description" id="description" class="form-control" value="{{ old('description') }}"></textarea></label><br><br>
    			</div>
    			<div class="form-group">
    				<button class="btn btn-success" type="submit" >Добавить новость</button> 
    			</div>    			       
			</form>       
        </div>
    </div> 
@endsection

