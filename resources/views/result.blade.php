@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Tabla de Pociones</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-dark">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Equipo</th>
                                <th>Qr Leidos</th>
                                <th>Leidos a encontra</th>
                                <th>Leidos a favor</th>
                                <th>Puntos</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($groups as $key=>$item)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $item->name }}</td>
                                @php
                                    $a=\App\Models\View::where('group_id',$item->id)->get();
                                    $b=\App\Models\View::where('group_id',$item->id)->where('incorrect',1)->count();
                                    $c=\App\Models\View::where('group_id',$item->id)->where('see',1)->count();
                                    $d=\App\Models\View::where('group_id',$item->id)->sum('points');
                                @endphp
                                @if($a)
                                    <td>{{ count($a) }}</td>
                                    <td>{{ $b }}</td>
                                    <td>{{ $c }}</td>
                                    <td>{{ $d }}</td>
                                @endif
                            </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
