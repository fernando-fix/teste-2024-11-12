<div class="row">


    {{-- Pergunta --}}
    <div class="col-12 col-md-6 col-lg-6">
        <div class="form-group">
            <label for="question">Pergunta</label>
            <textarea name="question" id="question" cols="30" rows="5"
                class="form-control @error('question') is-invalid @enderror">{{ old('question', $faq->question ?? '') }}</textarea>
            @error('question')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    {{-- Resposta --}}
    <div class="col-12 col-md-6 col-lg-6">
        <div class="form-group">
            <label for="answer">Resposta</label>
            <textarea name="answer" id="answer" cols="30" rows="5"
                class="form-control @error('answer') is-invalid @enderror">{{ old('answer', $faq->answer ?? '') }}</textarea>
            @error('answer')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
</div>

<div class="row">

    @isset($faq)
        {{-- Ordem --}}
        <div class="col-12 col-md-4 col-lg-3">
            <div class="form-group">
                <label for="order">Ordem</label>
                <input type="number" id="order" name="order" value="{{ old('order', $faq->order ?? '') }}"
                    class="form-control @error('order') is-invalid @enderror">
            </div>
        </div>

        {{-- Ativo --}}
        <div class="col-12 col-md-2 col-lg-2">
            <div class="form-group">
                <label for="active">Ativo</label>
                <select name="active" id="active" class="form-control @error('active') is-invalid @enderror">
                    <option value="1" {{ old('active', $faq->active ?? '') == 1 ? 'selected' : '' }}>Sim</option>
                    <option value="0" {{ old('active', $faq->active ?? '') == 0 ? 'selected' : '' }}>Não</option>
                </select>
            </div>
        </div>
    @endisset

    {{-- Botão salvar --}}
    <div class="form-group align-self-end ml-2">
        <button class="btn btn-primary">Salvar</button>
    </div>

</div>
