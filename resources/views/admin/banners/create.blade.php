@extends('adminlte::page')

@section('content')
    <div class="container-fluid pt-4">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-list"></i>
                    Cadastrar novo Banner
                </h3>
                <div class="card-tools">
                    <a href="{{ route('admin.banners.index') }}">
                        <button type="button" class="btn btn-primary">
                            <i class="fas fa-back"></i>
                            Voltar
                        </button>
                    </a>
                </div>
            </div>
            <div class="card-body" style="height: calc(100vh - 160px); overflow-y: auto">

                {{-- formulário --}}
                <form action="{{ route('admin.banners.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @include('admin.banners.form')
                </form>

            </div>
        </div>
    </div>
@endsection
