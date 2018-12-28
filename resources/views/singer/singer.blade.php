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
                        <input type="hidden" name="_token"  id="_token" value="{{  @csrf_token() }}">
                        <div>
                            <img src="" alt="Cantor" id="singer" style="display:none;width: 350px;height: 350px;margin-left: 150px;">
                        </div>
                        <div class="form-group">
                            <label for="name">Digite o seu nome</label>
                            <input type="text" name="name" id="name" class="form-control"required>
                        </div>
                        <div class="form-group">
                            <label for="nickname">Digite o seu Apelido</label>
                            <input type="text" name="nickname" id="nickname" class="form-control" required>
                        </div>
                        <div class="row">
                            <div class="col-6">
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
                            <div class="col-6">
                                <label for="nickname">Informe o tipo de Cantor: </label>
                                <div>
                                    <label class="radio-inline" style="padding-right: 10px;">
                                    <input type="radio" name="type" value="G" disabled> Grupo
                                    </label>
                                    <label class="radio-inline" style="padding-right: 10px;">
                                    <input type="radio" name="type" value="B" disabled> Banda
                                    </label>
                                    <label class="radio-inline" style="padding-right: 10px;">
                                    <input type="radio" name="type" value="S" checked required> Solo
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <label for="style_music">Estilo de Música:</label>
                            <select name="style_music_id" id="style_music_id" class="form-control" required>
                                <option value="">Selecione um Estilo de Música</option>
                                @foreach($data['style_music'] as $k => $v)
                                    <option value="{{ $k }}">{{ $v }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="row" style="margin-top:20px;">
                            <div class="col-3">
                                O cantor está vivo?<br/>
                                <label class="radio-inline" style="padding-right: 10px;">
                                <input type="radio" name="live" id="lived" class="live" value="1" checked required> Sim
                                </label>
                                <label class="radio-inline" style="padding-right: 10px;">
                                <input type="radio" name="live" id="died" class="live" value="0" required> Não
                                </label>
                            </div>
                            <div class="col-5">
                                <img src="{{ asset('images/vida.png') }}" alt="Vida" style="width: 10%; height: 30%;padding-bottom:10px;">
                                <label for="date_birth">Data de Nascimento:</label>
                                <input type="date" id="lived" name="date_birth" class="form-control" />
                            </div>
                            <div class="col-4" style="display:none;margin-left: -20px;padding-right: -20;padding-right: 0px;" id="obito">
                                <img src="{{ asset('images/morte.png') }}" alt="Morte" style="width: 10%; height: 30%;padding-bottom:10px;">
                                <label for="date_birth" style="color:red">Data de Óbito:</label>
                                <input type="date" id="died" name="date_die" class="died form-control" style="width: 226px;"/>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-12">
                                <input type="file" name="photo" id="photo" class="form-control" onchange="encodeImageFileAsURL(this)"> 
                            </div>
                        </div>

                        <div class="row" style="float: right;margin-top:20px;">
                            <a class="btn btn-outline-danger" style="margin-left:5px;" href="{{ route('home') }}">Cancelar</a>
                            <button type="reset" id="reset" class="btn btn-outline-warning" style="margin-left:5px;">Limpar</button>
                            <button type="submit" class="btn btn-outline-success"style="margin-left:5px;">Cadastrar</button>
                        </div>
                    </form>

                    <script src="{{ asset('js/jquery.js') }}"></script>
                    
                    <script>

                        function upload(file) {

                            $.ajax({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                url: '/photos',
                                type: 'post',
                                dateType: 'json',
                                data:{
                                    photo: file,
                                    _token: $('#_token').val()
                                },
                                success:function(Resp) {
                                    console.log(Resp);
                                }
                            });
                        }

                        function encodeImageFileAsURL(element) {
                            
                            var file = element.files[0];
                            var reader = new FileReader();

                            reader.onloadend = function() {

                                $('#singer').prop('src',reader.result);
                                $('#singer').show();

                                //upload(reader.result);
                            }

                            reader.readAsDataURL(file);
                        }

                        $(function() {

                            $(document).ready(function(){

                                setTimeout(() => $('#message').hide(), 3000);
        
                                $("input[name='live']").change(function() {
        
                                    if($(this).val() == 0) {

                                        $("#obito").show();

                                    } else if($(this).val() == 1) {

                                        $("#obito").hide();
                                    }
                                });

                                $("#reset").click(function() {
                                    
                                    $("#obito").hide();

                                });                                
                            });
                        });                        
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
