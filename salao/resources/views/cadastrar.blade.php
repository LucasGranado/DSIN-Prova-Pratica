@extends('templates.template')
@section('content')
 <section class="ftco-section contact-section">
        <div class="container mt-5">
          <div class="row block-9">
            <div class="col-md-12 ftco-animate">
              <form action="/cadastrar" method="post" class="contact-form">
                @csrf
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <input name="nome" type="text" class="form-control" placeholder="Seu nome">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input name="email" type="text" class="form-control" placeholder="Seu e-mail">
                    </div>
                  </div>
                 <div class="col-md-6">
                    <div class="form-group">
                      <input name="senha" type="password" class="form-control" placeholder="Sua senha">
                    </div>
                  </div>
                <div class="form-group">
                  <input type="submit" value="Cadastrar" class="btn btn-primary py-3 px-5">
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

@endsection