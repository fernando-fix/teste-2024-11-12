@extends('adminlte::page')
@section('content')
    <div class="container-fluid pt-4">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-list"></i>
                    Contatos
                </h3>
                <div class="card-tools">
                    <a href="{{ route('admin.contacts.create') }}">
                        <button type="button" class="btn btn-primary">
                            <i class="fas fa-plus"></i>
                            Novo contato
                        </button>
                    </a>
                </div>
            </div>
            <div class="card-body" style="height: calc(100vh - 160px); overflow-y: auto">
                <table class="table table-sm table-hover table-striped table-bordered align-middle">
                    <thead>
                        <tr>
                            <th scope="col">Cadastro</th>
                            <th scope="col">Nome</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Celular</th>
                            <th scope="col">Aceitou termo?</th>
                            <th scope="col">Observação</th>
                            <th scope="col" width=1>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($contacts as $contact)
                            <tr>
                                <td class="align-middle">{{ date('d/m/Y H:i', strtotime($contact->created_at)) }}</td>
                                <td class="align-middle">{{ $contact->name }}</td>
                                <td class="align-middle">{{ $contact->email }}</td>
                                <td class="align-middle">{{ $contact->cellphone }}</td>
                                <td class="align-middle">
                                    @if ($contact->rules_agreed)
                                        <i class="fas fa-check text-success ml-2"></i>
                                        Sim
                                    @else
                                        <i class="fas fa-times text-danger ml-2"></i>
                                        Não
                                    @endif
                                </td>
                                <td class="align-middle" title="{{ $contact->observation }}">
                                    {{ Str::limit($contact->observation, 30, '...') }}
                                </td>
                                <td class="align-middle" style="white-space: nowrap">
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-primary dropdown-toggle" type="button"
                                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fas fa-bars"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                            {{-- editar --}}
                                            <a href="{{ route('admin.contacts.edit', $contact) }}" class="dropdown-item">
                                                <i class="fas fa-edit text-primary"></i>
                                                Editar
                                            </a>
                                            {{-- excluir --}}
                                            <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST"
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
                        {{ $contacts->appends($filter)->links() }}
                    @else
                        {{ $contacts->links() }}
                    @endif
                </div>

            </div>
        </div>
    </div>
@endsection
