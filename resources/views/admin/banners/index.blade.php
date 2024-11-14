@extends('adminlte::page')
@section('content')
    <div class="container-fluid pt-4">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-list"></i>
                    Banners
                </h3>
                <div class="card-tools">
                    <a href="{{ route('admin.banners.create') }}">
                        <button type="button" class="btn btn-primary">
                            <i class="fas fa-plus"></i>
                            Novo banner
                        </button>
                    </a>
                </div>
            </div>
            <div class="card-body" style="height: calc(100vh - 160px); overflow-y: auto">
                <table class="table table-sm table-hover table-striped table-bordered align-middle">
                    <thead>
                        <tr>
                            <th scope="col">Arquivo</th>
                            <th scope="col">Título</th>
                            <th scope="col">Ordem</th>
                            <th scope="col">Ativo</th>
                            <th scope="col" width=1>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($banners as $banner)
                            <tr>
                                <td class="align-middle" style="width: 1px; white-space: nowrap;">
                                    <img src="{{ asset('storage/' . $banner->file) }}" alt="banner" height="50px">
                                </td>
                                <td class="align-middle">{{ $banner->title }}</td>
                                <td class="align-middle">{{ $banner->order }}</td>
                                <td class="align-middle">
                                    @if ($banner->active)
                                        <i class="fas fa-check text-success ml-2"></i>
                                        Sim
                                    @else
                                        <i class="fas fa-times text-danger ml-2"></i>
                                        Não
                                    @endif
                                </td>
                                <td class="align-middle" style="white-space: nowrap">
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-primary dropdown-toggle" type="button"
                                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fas fa-bars"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            {{-- download --}}
                                            <a href="{{ asset('storage/' . $banner->file) }}" class="dropdown-item" download
                                                target="_blank">
                                                <i class="fas fa-download text-primary"></i>
                                                Download
                                            </a>

                                            {{-- editar --}}
                                            <a href="{{ route('admin.banners.edit', $banner) }}" class="dropdown-item">
                                                <i class="fas fa-edit text-primary"></i>
                                                Editar
                                            </a>
                                            {{-- excluir --}}
                                            <form action="{{ route('admin.banners.destroy', $banner) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item">
                                                    <i class="fas fa-trash text-danger"></i>
                                                    Excluir
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="align-middle" colspan="100%" class="text-center">Nenhum registro encontrado</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                {{-- paginação --}}
                <div class="paginacao mt-2">
                    @if (isset($filter))
                        {{ $banners->appends($filter)->links() }}
                    @else
                        {{ $banners->links() }}
                    @endif
                </div>

            </div>
        </div>
    </div>
@endsection
