@extends('layouts.app')

@section('content')
<div class="container">
    @include('layouts.alert')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Crear Qr') }}</div>
                <div class="card-body">
                   {{-- formularios --}}
                    <form action="{{ route('qr.store') }}" method="POST">
                          @csrf
                          <div class="mb-3">
                            <label for="name" class="form-label">Code</label>
                            <input type="text" class="form-control" id="code" name="code">
                          </div>
                          <div class="mb-3">
                            <label for="name" class="form-label">Pts</label>
                            <input type="text" class="form-control" id="pts" name="pts">
                          </div>
                          <div class="mb-3">
                            <label for="name" class="form-label">Activo?</label>
                            <select name="active" id="active" class="form-control">
                                <option value="1" >Sí</option>
                                <option value="0" >No</option>
                            </select>
                          </div>
                          <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
