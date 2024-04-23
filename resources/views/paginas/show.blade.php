@extends ('app')

@section('content')

<div class="container w-25 border p-4 mt-4">
    <form action="{{ route('tareas-update', ['id' => $tarea->id]) }}" method="POST">
    @csrf
    @if (session('success'))
    <h6 class="alert alert-success">{{ session('success')}}</h6>
    @endif
    @error('titulo')
    <h6 class="alert alert-danger">{{ $message }}</h6>

    @enderror
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Titulo de la tarea</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="titulo" placeholder="Ingrese tarea" value="{{ $tarea->titulo}}">
</div>
    <button type="submit" class="btn btn-primary">Actualizar tarea</button>
    </form>
    
</div>

@endsection