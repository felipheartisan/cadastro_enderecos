<x-layouts.app max_width=400px titulo="Buscar CEP">
    <form action="{{ route('buscar') }}" method="GET">
        <div class="mb-3">
            <label class="form-label">CEP</label>
            <input type="text" class="form-control" name="cep" placeholder="Digite seu CEP">
        </div>

        <button type="submit" class="btn btn-primary w-100">Enviar</button>
    </form>
</x-layouts.app>


