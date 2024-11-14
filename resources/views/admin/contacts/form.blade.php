<div class="row">

    {{-- Nome --}}
    <div class="col-12 col-md-4 col-lg-4">
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" id="name" name="name" value="{{ old('name', $contact->name ?? '') }}"
                class="form-control @error('name') is-invalid @enderror">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    {{-- Email --}}
    <div class="col-12 col-md-4 col-lg-4">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email', $contact->email ?? '') }}"
                class="form-control @error('email') is-invalid @enderror">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    {{-- Celular --}}
    <div class="col-12 col-md-4 col-lg-4">
        <div class="form-group">
            <label for="cellphone">Celular</label>
            <input type="text" id="cellphone" name="cellphone" value="{{ old('cellphone', $contact->cellphone ?? '') }}"
                class="form-control @error('cellphone') is-invalid @enderror">
            @error('cellphone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    {{-- Observação --}}
    <div class="col-12">
        <div class="form-group">
            <label for="observation">Observação</label>
            <textarea name="observation" id="observation" cols="30" rows="5"
                class="form-control @error('observation') is-invalid @enderror">{{ old('observation', $contact->observation ?? '') }}</textarea>
            @error('observation')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    {{-- Botão Salvar --}}
    <div class="form-group ml-2">
        <button class="btn btn-primary">Salvar</button>
    </div>


</div>
