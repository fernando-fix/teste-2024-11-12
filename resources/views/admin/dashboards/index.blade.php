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
                </div>
            </div>
            <div class="card-body" style="height: calc(100vh - 160px); overflow-y: auto">
                <table class="table table-sm table-hover table-striped table-bordered align-middle">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col" width=1>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="align-middle" colspan="100%" class="text-center">Nenhum registro encontrado</td>
                        </tr>
                    </tbody>
                </table>

                {{-- paginação --}}
                {{-- <div class="paginacao mt-2">
                    @if (isset($filter))
                        {{ $questions->appends($filter)->links() }}
                    @else
                        {{ $questions->links() }}
                    @endif
                </div> --}}

            </div>
        </div>
    </div>
@endsection
