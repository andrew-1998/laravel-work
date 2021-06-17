@extends('layouts.admin')
@section('title') Обратная связь с пользователем @stop
@section('content')
	<div class="col-md-12">
        <h1 class="h2">Обратная связь с пользователем</h1>        
        <div>
        	@if($errors->any())
        		@foreach($errors->all() as $e)
        			<div class="alert alert-danger">{{ $e }}</div>
        		@endforeach
        	@endif
        	<!-- Форма отзыва -->
            <form action="{{ route('customers.feedback') }}" method="POST"> 
            	@csrf
            	<div class="form-group">     
    				<label>Имя пользователя<input type="text" placeholder="Имя" name="username" id="username" class="form-control" value="{{ old('username') }}"></label><br>
    			</div>      			
    			<div class="form-group">
    				<label>Отзыв<textarea cols="40" rows="6" placeholder="Ваш отзыв о проекте" name="comment" id="comment" class="form-control" value="{{ old('comment') }}"></textarea></label><br><br>
    			</div>
    			<div class="form-group">
    				<button class="btn btn-success" type="submit" >Добавить отзыв</button> 
    			</div>    			       
			</form>       
        </div>
    </div> 
@endsection