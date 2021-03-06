@extends('layouts.admin')
@section('title') Учебный сайт - @parent @stop
@section('content')
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Список категорий</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <a href="{{ route('categories.create') }}" class="btn btn-sm btn-outline-secondary">Добавить категорию</a>            
          </div>          
        </div>
    </div> 
    <div class="table-responsive">
          	<table class="table table-bordered">
          		<thead><tr>
          			<th>#ID</th>
          			<th>Заголовок</th>
          			<th>Описание</th>
          			<th>Действия</th>
          		</tr></thead>
          		<tbody>
          			@forelse($categories as $cat)
          			<tr>
          				<td>{{ $cat->id }}</td>
          				<td>{{ $cat->title }}</td>
          				<td>{{ $cat->description }}</td>
          				<td><a href="#">Ред.</a>&nbsp;||&nbsp;<a href="#">Удал.</a></td>
          			</tr>
          			@empty
          			<tr>
          				<td colspan="4"><h3>Записей нет</h3></td>
          			</tr>
          			@endforelse
          		</tbody>        		
          	</table>
    </div>   
@endsection