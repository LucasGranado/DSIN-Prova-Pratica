@extends('templates.template')
@section('content')
<section class="ftco-section contact-section">
        <div class="container mt-5">
          <div class="row block-9">
            <div class="col-md-12 ftco-animate">
            @if(Auth::id()!=1)
              <form action="/marcar" method="post" class="contact-form">
                @csrf
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <input name="nome" type="text" class="form-control" placeholder="Seu nome">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <input name="data" type="date" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <input name="hora" type="time" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                       <select name="sexo" class="form-control">
                        <option value="1">Feminino</option>
                        <option value="2">Masculino</option>
                       </select>
                    </div>
                  </div>
                 <div class="col-md-6">
                    <div class="form-group">
                      <input name="servico" type="text" class="form-control" placeholder="Digite todo o serviço">
                    </div>
                  </div>
                <div class="form-group">
                  <input type="submit" value="Cadastrar" class="btn btn-primary py-3 px-5">
                </div>
              </form>
              @endif
              <table class="table table-hover mt-5">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Data</th>
                    <th scope="col">Hora</th>
                    <th scope="col">Descricao</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($historico as $historicos)
                  <tr>
                    <th scope="row">{{$historicos->id}}</th>
                    <td>{{$historicos->nome}}</td>
                    <td>{{$historicos->data}}</td>
                    <td>{{$historicos->hora}}</td>
                    <td>{{$historicos->servico}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </section>


@endsection