@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar Group') }}</div>
                <div class="card-body">
                   {{-- formularios --}}
                    <form action="{{ route('group.update',['id'=>$group->id]) }}" method="POST">
                          @csrf
                          <div class="mb-3">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$group->name}}">
                          </div>
                          <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
