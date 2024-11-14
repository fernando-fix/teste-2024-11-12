<div class="row">

    {{-- Título --}}
    <div class="col-12 col-md-4 col-lg-3">
        <div class="form-group">
            <label for="title">Título</label>
            <input type="text" id="title" name="title" value="{{ old('title', $banner->title ?? '') }}"
                class="form-control @error('title') is-invalid @enderror">
            @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    {{-- Imagem do Banner --}}
    <div class="col-12 col-md-4 col-lg-3">
        <div class="form-group">
            <label for="file">Imagem do Banner</label>
            <input id="input-image" type="file" name="file" id="file"
                class="form-control @error('file') is-invalid @enderror">
            @error('file')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    @isset($banner)
        {{-- Ordem --}}
        <div class="col-12 col-md-2 col-lg-2 ">
            <div class="form-group">
                <label for="order">Ordem</label>
                <input type="number" id="order" name="order" value="{{ old('order', $banner->order ?? '') }}"
                    class="form-control @error('order') is-invalid @enderror">
            </div>
        </div>

        {{-- Ativo --}}
        <div class="col-12 col-md-2 col-lg-2">
            <div class="form-group">
                <label for="active">Ativo</label>
                <select name="active" id="active" class="form-control @error('active') is-invalid @enderror">
                    <option value="1" {{ old('active', $banner->active ?? '') == 1 ? 'selected' : '' }}>Sim</option>
                    <option value="0" {{ old('active', $banner->active ?? '') == 0 ? 'selected' : '' }}>Não</option>
                </select>
            </div>
        </div>
    @endisset

    {{-- Botão salvar --}}
    <div class="form-group align-self-end">
        <button class="btn btn-primary">Salvar</button>
    </div>

</div>

Pré-visualização:
@isset($banner)
    <img id="preview" src="{{ asset('storage/' . $banner->file) }}" class="img-fluid w-100 border" alt="preview do banner"
        onerror="this.src='{{ asset('assets/img/banner_example.png') }}'">
@else
    <img id="preview" src="{{ asset('assets/img/banner_example.png') }}" class="img-fluid w-100 border"
        alt="preview do banner">
@endisset

@section('js')
    <script>
        let input_image = document.querySelector('#input-image');
        input_image.addEventListener('change', () => {
            const reader = new FileReader();
            reader.onload = e => {
                const image = new Image();
                image.onload = () => {
                    const {
                        width,
                        height
                    } = image;
                    console.log(width);
                    if (width >= 1850 && width <= 1950 && height >= 600 && height <= 650) {
                        document.getElementById('preview').src = e.target.result;
                    } else {
                        @isset($banner)
                            document.getElementById('preview').src =
                                '{{ asset('storage/' . $banner->file) }}';
                        @else
                            document.getElementById('preview').src =
                                '{{ asset('assets/img/banner_example.png') }}';
                        @endisset
                        alert(
                            'A imagem deve ter uma largura entre 1850px e 1950px e uma altura entre 600px e 650px'
                        );
                    }
                };
                image.src = e.target.result;
            };
            reader.readAsDataURL(input_image.files[0]);
        })
    </script>
@endsection
