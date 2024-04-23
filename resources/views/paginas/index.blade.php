@extends ('app')

@section('content')

<div class="container w-25 border p-4 mt-4">
    <form action="{{ route('tareas') }}" method="POST">
    @csrf
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Titulo de la tarea</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese tarea">
</div>
    <button type="submit" class="btn btn-primary">Crear nueva tarea</button>
    </form>
</div>

@endsection