@extends('layouts.plantilla')
@section('contenido')
<div class="container" align="center">
    <form method="POST" action="{{route('tipoconoce.update',$tipoconoce->idConoce)}}">
        @method('put')
        @csrf
        <div class="card text-white bg-secondary mb-3" style="max-width: 40rem;">
            <div class="card-header"><h1 style="font-weight: bold;text-align:center">Editar Tipo</h1></div>
            <div class="card-body">
                <div class="form-group">
                    <label for="nombre" style="float: left">Nombre</label>
                    <input type="text" style="text-transform:uppercase;" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre" aria-describedby="nombreHelp" placeholder="Ingrese Nombre" value="{{$tipoconoce->nombre}}" onkeyup="javascript:this.value=this.value.toUpperCase();">
                    <small id="nombreHelp" class="form-text text-muted">Ingrese aquí el nombre</small>
                    @error('nombre')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="card-footer" style="text-align:center">
                <button type="submit" class="btn btn-primary "><i class="fas fa-save"></i> Grabar</button>
                <a href="{{route('cancelart')}}" class="btn btn-danger"><i class="fas fa-ban"></i> Cancelar</a>
            </div>
        </div>
    </form>
</div>
@endsection