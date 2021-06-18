@extends('layouts.plantilla')

@section('contenido')
<div class="container">
    <div class="form-group">
        <label for="texto">Mensaje</label>
        <textarea disabled rows="5" class="form-control @error('texto') is-invalid @enderror" id="Mensaje" name="Mensaje">{{$consulta->mensaje}}</textarea>
        @error('Mensaje')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>    
    <div class="card-footer" style="text-align:center">
        <a style="float:right" href="{{route('cancelarC')}}" class="btn btn-danger"><i class="fas fa-ban"></i> Regresar</a>
    </div>
</div>
@endsection