<x-layouts.app max_width=400px titulo="Salvar endereço">


        <form action="{{ route('salvar') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">CEP</label>
                <input type="text" class="form-control  @error('cep') is-invalid @enderror" name="cep" value="{{ $cep }} ">
                @error('cep')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Logradouro</label>
                <input type="text" class="form-control" name="logradouro" value="{{ $logradouro }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Número</label>
                <input type="text" class="form-control @error('numero') is-invalid @enderror" name="numero" >
                @error('numero')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Bairro</label>
                <input type="text" class="form-control" name="bairro" value="{{ $bairro }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Cidade</label>
                <input type="text" class="form-control" name="cidade" value="{{ $cidade }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Estado</label>
                <input type="text" class="form-control" name="estado" value="{{$estado}}">
            </div>

            <button type="submit" class="btn btn-primary w-100">Salvar</button>
        </form>


</x-layouts.app>

