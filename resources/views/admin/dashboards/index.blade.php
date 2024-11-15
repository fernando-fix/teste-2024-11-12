@extends('adminlte::page')
@section('content')
    <div class="container-fluid pt-4">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-list"></i>
                    Dashboard
                </h3>
                <div class="card-tools">
                </div>
            </div>
            <div class="card-body" style="height: calc(100vh - 160px); overflow-y: auto">

                <h4 class=" text-primary mb-4">Bem-vindo(a) {{ auth()->user()->name }}, seja bem-vindo(a) ao painel de administração do site!</h4>

                <hr>

                {{-- card 1 --}}
                <div class="row">
                    <div class="col-6 col-lg-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{ $contacts->count() }}</h3>

                                <p>{{ $contacts->count() == 1 ? 'Novo contato' : 'Novos contatos' }}</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-address-book"></i>
                            </div>
                            <a href="{{ route('admin.contacts.index') }}" class="small-box-footer">Mais informações<i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->

                    {{-- card 2 --}}
                    <div class="col-6 col-lg-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3> {{ $questions->count() }}</h3>

                                <p>{{ $questions->count() == 1 ? 'Pergunta registrada' : 'Perguntas registradas' }}</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-question-circle"></i>
                            </div>
                            <a href="{{ route('admin.faqs.index') }}" class="small-box-footer">Mais informações<i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>

                <div class="row">
                    <div class="col-12">
                        <!-- small box -->
                        <div class="small-box bg-light">
                            <div class="inner">
                                <h3>Visite a página principal</h3>

                                <p>clique aqui para ver a página principal</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-home"></i>
                            </div>
                            <a href="{{ route('home') }}" target="_blank" class="small-box-footer">Visite a página principal<i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
