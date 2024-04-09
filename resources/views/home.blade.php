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
                                        <img src="{{asset('')}}" height="36"
                                            alt=""></a>
                                </div>
                                <form class="card card-md" action="{{route('register')}}" method="post" autocomplete="off" novalidate>
                                    @csrf
                                    <div class="card-body">
                                        <h2 class="card-title text-center mb-4">Modificar Datos del usuario</h2>
                                        <div class="mb-3">
                                            <label class="form-label">Nombre</label>
                                            @role('admin')
                                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter name">
                                            @endrole
                                            @role('normal')
                                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter name" disabled>
                                            @endrole
                                            @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Correo Electronico</label>
                                            @role('admin')
                                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter email">
                                            @endrole
                                            @role('normal')
                                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter email" disabled>
                                            @endrole
                                            @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Contraseña</label>
                                            <div class="input-group input-group-flat">
                                            @role('admin')
                                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password"
                                                    autocomplete="off">
                                            @endrole
                                            @role('normal')
                                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password"
                                                    autocomplete="off" disabled>
                                            @endrole
                                                <span class="input-group-text">
                                        <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                                                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12"
                                                                                                                                    cy="12"
                                                                                                                                    r="2"/><path
                                                    d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7"/></svg>
                                        </a>
                                        </span>
                                                @error('password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Confirmar contraseña</label>
                                            <div class="input-group input-group-flat">
                                            @role('admin')
                                                <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Password"
                                                    autocomplete="off">
                                            @endrole
                                            @role('normal')
                                                <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Password"
                                                    autocomplete="off" disabled>
                                            @endrole
                                                <span class="input-group-text">
                                        <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                                                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12"
                                                                                                                                    cy="12"
                                                                                                                                    r="2"/><path
                                                    d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7"/></svg>
                                        </a>
                                        </span>
                                                @error('password_confirmation')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        @role('admin')
                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-primary w-100">Modificar</button>
                                        </div>
                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-primary w-100">Eliminar</button>
                                        </div>
                                        @endrole
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
