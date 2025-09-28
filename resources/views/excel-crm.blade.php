@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Tabla de Crm</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="post" action="{{ url('/process/excel-crm') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="excel_file">
                        <button type="submit">Importar</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
