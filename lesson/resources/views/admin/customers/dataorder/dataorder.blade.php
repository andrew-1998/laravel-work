@extends('layouts.admin')
@section('title') Форма заказа для выгрузки данных @stop
@section('content')
	<div class="col-md-12">
        <h1 class="h2">Форма заказа для выгрузки данных</h1>        
        <div>
        	@if($errors->any())
        		@foreach($errors->all() as $e)
        			<div class="alert alert-danger">{{ $e }}</div>
        		@endforeach
        	@endif
        	<!-- Форма заказа для выгрузки данных -->
            <form action="{{ route('customers.dataorder') }}" method="POST"> 
            	@csrf
            	<div class="form-group">     
    				<label>Имя заказчика<input type="text" placeholder="Имя" name="username" id="username" class="form-control" value="{{ old('username') }}"></label><br>
    			</div> 
    			<div class="form-group">     
    				<label>Телефон в формате +7-xxx-xxxxxxx <input type="tel" pattern="+7-[0-9]{3}-[0-9]{7}" name="phone" id="phone" class="form-control" value="{{ old('phone') }}"></label><br>
    			</div>  
    			<div class="form-group">     
    				<label>E-mail <input type="email" placeholder="Email" name="email" id="email" class="form-control" value="{{ old('email') }}"></label><br>
    			</div>    			
    			<div class="form-group">
    				<label>Информация<textarea cols="40" rows="6" placeholder="Что Вы хотите получить" name="inform" id="inform" class="form-control" value="{{ old('inform') }}"></textarea></label><br><br>
    			</div>
    			<div class="form-group">
    				<button class="btn btn-success" type="submit" >Отправить запрос</button> 
    			</div>    			       
			</form>       
        </div>
    </div> 
@endsection