@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Administracion de Usuarios
                    <a href="{{ route('register') }}" class="btn btn-sm btn-success float-right">Nuevo Usuario</a>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Nickname</th>
                            <th scope="col">Estado</th>
                            <th scope="col" style="text-align: center"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users = \App\User::all() as $user)
                            <tr>
                                <td>{{ $user->first_name }}</td>
                                <td>{{ $user->last_name }}</td>
                                <td>{{ $user->nickname }}</td>
                                <td>{{ $user->status }}</td>
                                <td class="d-flex justify-content-around">
                                    @if($user->status === 'blocked')
                                        <button class="btn btn-warning btn-sm" type="submit">Activar</button>
                                    @else
                                        <button class="btn btn-danger btn-sm" type="submit">Bloquear</button>
                                    @endif
                                </td>
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
