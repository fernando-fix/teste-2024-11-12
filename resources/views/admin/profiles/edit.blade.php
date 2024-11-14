@extends('adminlte::page')
@section('content')
    <div class="container-fluid pt-4">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-list"></i>
                    Meu perfil
                </h3>
                <div class="card-tools">
                </div>
            </div>
            <div class="card-body" style="height: calc(100vh - 160px); overflow-y: auto">

                <form action="{{ route('admin.profiles.update', $user) }}" method="POST">
                    @csrf
                    @method('PUT')
                    @include('admin.profiles.form')
                </form>

            </div>
        </div>
    </div>
@endsection
