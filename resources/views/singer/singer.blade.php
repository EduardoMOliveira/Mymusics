@extends('layouts.app')

@section('content')

<div class="container">
    @if(\Session::has('success'))
        <div class="alert alert-success" id="message">{!! \Session('success') !!}</div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header alert alert-success">Cantores</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('singer') }}" method="post">
                        <input type="hidden" name="_token" value="{{  @csrf_token() }}">
                        
                        <div class="form-group">
                            <label for="name">Digite o seu nome</label>
                            <input type="text" name="name" id="name" class="form-control"required>
                        </div>
                        <div class="form-group">
                            <label for="nickname">Digite o seu Apelido</label>
                            <input type="text" name="nickname" id="nickname" class="form-control" required>
                        </div>
                        <div>
                            <label for="nickname">Informe o Sexo: </label>
                            <div>
                                <label class="radio-inline" style="padding-right: 10px;">
                                <input type="radio" name="gender" value="F" required> Feminino
                                </label>
                                <label class="radio-inline" style="padding-right: 10px;">
                                <input type="radio" name="gender" value="M" required> Masculino
                                </label>
                                <label class="radio-inline" style="padding-right: 10px;">
                                <input type="radio" name="gender" value="I" required> Indefinido
                                </label>
                            </div>
                        </div>
                        <div>
                            <label for="nickname">Informe o tipo de Cantor: </label>
                            <div>
                                <label class="radio-inline" style="padding-right: 10px;">
                                <input type="radio" name="type" value="G" required> Grupo
                                </label>
                                <label class="radio-inline" style="padding-right: 10px;">
                                <input type="radio" name="type" value="B" required> Banda
                                </label>
                                <label class="radio-inline" style="padding-right: 10px;">
                                <input type="radio" name="type" value="S" required> Solo
                                </label>
                            </div>
                        </div>
                        <div class="row" style="float: right;">
                            <a class="btn btn-outline-danger" style="margin-left:5px;" href="{{ route('home') }}">Cancelar</a>
                            <button type="reset" class="btn btn-outline-warning" style="margin-left:5px;">Limpar</button>
                            <button type="submit" class="btn btn-outline-success"style="margin-left:5px;">Cadastrar</button>
                        </div>
                    </form>
                    <script>
                        setTimeout(() => $('#message').hide(), 3000);
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
