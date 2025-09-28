@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar Qr') }}</div>
                <div class="card-body">
                   {{-- formularios --}}
                    <form action="{{ route('qr.update',['id'=>$qr->id]) }}" method="POST">
                          @csrf
                          <div class="mb-3">
                            <label for="name" class="form-label">Code</label>
                            <input type="text" class="form-control" id="code" name="code" value="{{$qr->code}}">
                          </div>
                          <div class="mb-3">
                            <label for="name" class="form-label">Pts</label>
                            <input type="text" class="form-control" id="pts" name="pts" value="{{$qr->pts}}">
                          </div>
                          <div class="mb-3">
                            <label for="name" class="form-label">Activo?</label>
                            {{-- <input type="text" class="form-control" id="name" name="name" value="{{$qr->active}}">  --}}
                            <select name="active" id="active" class="form-control">
                                <option value="1" {{ $qr->active === 1 ? 'selected' : '' }}>Sí</option>
                                <option value="0" {{ $qr->active === 0 ? 'selected' : '' }}>No</option>
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
