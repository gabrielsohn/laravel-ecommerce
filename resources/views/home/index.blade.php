@extends("template.index")

<link rel="stylesheet" href="/assets/vendor/css/pages/front-page-pricing.css" />

@section("conteudo")
<!-- Pricing Plans -->
    <section class="section-py first-section-pt">
      <div class="container">


        <h2 class="text-center mb-2">Black Friday Carros.Net</h2>
        <p class="text-center text-body-secondary px-sm-12 mb-3">
          <span>Use nosso site para comparar, avaliar e decidir com confiança.</span><br />Aproveite as ofertas mais fortes do ano e garanta seu próximo carro hoje.
        </p>
        <div class="d-flex align-items-center justify-content-center flex-wrap gap-2 py-5 mb-0 mb-md-4">
          <div class="mt-n5 ms-n10 ml-2 d-none d-sm-flex align-items-center gap-2">
            <span class="badge badge-sm bg-label-primary rounded-pill mb-0 px-3">Descontos de até 30%</span>
          </div>
        </div>

        <div class="pricing-plans row mx-0 mt-0">
          @foreach($veiculos as $veiculo)
              <div class="col-4 mt-5">
            <a href="/detalhes/{{ $veiculo->id }}">
              <div class="col-lg mb-md-0 mb-6 px-0">
                <div class="card">
                  <img class="card-img-top" src="{{ $veiculo->foto1 }}" alt="{{ $veiculo->modelo }}">
                  <div class="card-body">
                    <h5 class="card-title">{{ $veiculo->marca.' '.$veiculo->modelo}}</h5>
                    <p class="card-text" style="
                      display: -webkit-box;
                      -webkit-line-clamp: 2;
                      -webkit-box-orient: vertical;
                      overflow: hidden;
                      text-overflow: ellipsis;
                    ">
                      {{ $veiculo->descricao }}
                    </p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-center">{{ number_format($veiculo->quilometragem, 0, ',', '.') }} Km</li>
                    <li class="list-group-item d-flex justify-content-center">{{ $veiculo->ano }}</li>
                  </ul>
                  <div class="d-flex justify-content-center mt-4 mb-0">
                    <h4 class="fw-medium mb-0 text-primary">R$ {{ number_format($veiculo->valor, 2, ',', '.') }}</h4>
                  </div>
                </br>
                </div>
              </a>
            </div>
          </div>
        @endforeach
        </div>
      </div>
    </section>
    <!--/ Pricing Plans -->

    <section id="landingContact" class="section-py bg-body landing-contact">
        <div class="container bg-icon-left position-relative">
          <img src="http://127.0.0.1:5501/full-version/assets/img/front-pages/icons/bg-left-icon-light.png" alt="section icon" class="position-absolute top-0 start-0" data-speed="1" data-app-light-img="front-pages/icons/bg-left-icon-light.png" data-app-dark-img="front-pages/icons/bg-left-icon-dark.png" style="visibility: visible;">
          <h6 class="text-center d-flex justify-content-center align-items-center mb-6">
            <img src="assets/img/front-pages/icons/section-title-icon.png" alt="section title icon" class="me-2" height="19">
            <span class="text-uppercase">Entre em contato</span>
          </h6>
          <h5 class="text-center mb-2"><span class="h4 fw-bold">Seu carro</span> nossa meta</h5>
          <p class="text-center fw-medium mb-4 mb-md-12 pb-3">Como podemos te ajudar? nos deixe uma mensagem</p>
          <div class="row gy-4">
            <div class="col-lg-5">
              <div class="card h-100">
                <div class="bg-primary rounded text-white card-body p-lg-8">
                  <p class="fw-medium mb-2 tagline">Fale com a gente</p>
                  <p class="display-6 mb-5 title">Compartilhe sua dúvida ou necessidade com nossos especialistas.</p>
                  <img src="assets/img/front-pages/landing-page/let’s-contact.png" alt="let’s contact" class="w-100 mb-4 pb-1">
                  <p class="mb-0 description">
                    Precisa de suporte, ajuda para encontrar um carro ou entender algum recurso?
                    Não se preocupe, nossa equipe está pronta para ajudar você no que for preciso.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-7">
              <div class="card">
                <div class="card-body">
                  <h5 class="mb-6">Entre em contato</h5>
                  <form>
                    <div class="row g-5">
                      <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                          <input type="text" class="form-control" id="basic-default-fullname" placeholder="John Doe">
                          <label for="basic-default-fullname">Nome completo</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                          <input type="email" class="form-control" id="basic-default-email" placeholder="johndoe99@gmail.com">
                          <label for="basic-default-email">Endereço de email</label>
                        </div>
                      </div>

                      <div class="col-12">
                        <div class="form-floating form-floating-outline">
                          <textarea class="form-control h-px-200" placeholder="Message" aria-label="Message" id="basic-default-message"></textarea>
                          <label for="basic-default-message">Mensagem</label>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-5 waves-effect waves-light">Enviar solicitação</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

    <!-- / Sections:End -->
@endSection