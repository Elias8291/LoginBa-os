@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Dashboard</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 col-xl-4">
                                    <div class="card bg-info text-white shadow">
                                        <div class="card-body">
                                            <h5 class="card-title">Usuarios</h5>
                                            @php
                                                use App\Models\User;
                                                $cant_usuarios = User::count();
                                            @endphp
                                            <h2 class="text-right"><i class="fa fa-users"></i> <span>{{$cant_usuarios}}</span></h2>
                                            <p class="mb-0 text-right"><a href="/usuarios" class="text-white">Ver más</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xl-4">
                                    <div class="card bg-warning text-white shadow">
                                        <div class="card-body">
                                            <h5 class="card-title">Roles</h5>
                                            @php
                                                use Spatie\Permission\Models\Role;
                                                $cant_roles = Role::count();
                                            @endphp
                                            <h2 class="text-right"><i class="fa fa-user-lock"></i> <span>{{$cant_roles}}</span></h2>
                                            <p class="mb-0 text-right"><a href="/roles" class="text-white">Ver más</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection