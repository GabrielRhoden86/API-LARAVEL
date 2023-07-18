@extends('layouts.main')
@section('title', 'Lista Estudantes')
@section('content')

    <div class="d-flex justify-content-center mt-5 p-3">
        <div class="row d-flex justify-content-center">
            <form action="/events" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="name">Nome:</label>
                <input type="text" name="name" id="name">
                <label for="course">Curso:</label>
                <input type="text" name="course" id="course">
                <button type="submit">Enviar</button>
              </form>
        </div>
    </div>
@endsection

