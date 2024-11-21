<x-layouts.app max_width=800px titulo="Endereços cadastrados">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">CEP</th>
                <th scope="col">Rua</th>
                <th scope="col">Bairro</th>
                <th scope="col">Número</th>
                <th scope="col">Cidade</th>
                <th scope="col">Estado</th>
                <th scope="col">Data de criação</th>
            </tr>
            </thead>
            <tbody>
            @foreach($enderecos as $endereco)
                <tr>
                    <td>{{$endereco->id}}</td>
                    <td>{{$endereco->cep}}</td>
                    <td>{{$endereco->logradouro}}</td>
                    <td>{{$endereco->bairro}}</td>
                    <td>{{$endereco->numero}}</td>
                    <td>{{$endereco->cidade}}</td>
                    <td>{{$endereco->estado}}</td>
                    <td>{{$endereco->created_at}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{ route('adicionar') }}" class="btn btn-success mb-4">Adicionar CEP</a>


        @if(session('sucesso'))
            <div class="alert alert-success" role="alert">
                {{ session('sucesso') }}
            </div>
        @endif

        @if(session('erro'))
            <div class="alert alert-danger" role="alert">
                {{ session('erro') }}
            </div
        @endif
</x-layouts.app>



