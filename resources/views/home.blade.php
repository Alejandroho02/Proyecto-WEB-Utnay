@extends('tablar::page')

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <h2 class="page-title">
                        Perfil de Usuario
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-12">
                    <div class="card">
                        <div class="container container-tight py-4">
                            <div class="text-center mb-1 mt-5">
                                <a href="" class="navbar-brand navbar-brand-autodark">
                                    <img src="{{asset('img/logo-Sony.png')}}" height="36" alt="">
                                </a>
                            </div>
                            <form class="card card-md" action="{{ route('user.update') }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <h2 class="card-title text-center mb-4">Modificar Datos del usuario</h2>
                                    <div class="mb-3">
                                        <label class="form-label">Nombre</label>
                                        <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}" @if(Auth::user()->hasRole('normal')) readonly @endif>
                                        @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Correo Electronico</label>
                                        <input type="email" name="email" class="form-control" value="{{ Auth::user()->email }}" @if(Auth::user()->hasRole('normal')) readonly @endif>
                                        @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Nueva Contraseña</label>
                                        <input type="password" name="password" class="form-control" placeholder="Password" @if(Auth::user()->hasRole('normal')) readonly @endif>
                                        @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Confirmar Nueva Contraseña</label>
                                        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmar contraseña" @if(Auth::user()->hasRole('normal')) readonly @endif>
                                        @error('password_confirmation')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    @if(Auth::user()->hasRole('admin'))
                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-primary w-100">Modificar</button>
                                    </div>
                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-primary w-100">Eliminar</button>
                                    </div>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
