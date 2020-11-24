@extends('templates.template')
@section('content')

<section class="ftco-section">
      <div class="container">
        <div class="row">
          @foreach($servico as $servicos)
          <div class="col-md-4 ftco-animate">
            <a href="/marcar" class="work-entry">
              <img src="/assets{{ $servicos->caminho}}" class="img-fluid" alt="Colorlib Template">
              <div class="info d-flex align-items-center">
                <div>
                  <div class="icon mb-4 d-flex align-items-center justify-content-center">
                    <span class="icon-search"></span>
                  </div>
                  <h3>{{$servicos->descricao}}</h3>
                </div>
              </div>
            </a>
          </div>
          @endforeach
      </div>
    </section>

@endsection