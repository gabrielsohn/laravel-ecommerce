
    
    
  @extends("template.index")

 <link rel="stylesheet" href="/assets/vendor/libs/swiper/swiper.css" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="/assets/vendor/css/pages/ui-carousel.css" />

@section("conteudo")
     <section class="section-py bg-body first-section-pt">
      <div class="container">
        <div class="card px-4">
          <div class="row">
            <div class="col-lg-7 card-body border-end p-8 ps-7">
                <h4 class="mb-2">Detalhes do Anúncio</h4>
                  <div id="swiper-gallery">
                    <div class="swiper gallery-top">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide" style="background-image: url({{ $veiculo->foto1 }})">
                        </div>
                        <div class="swiper-slide" style="background-image: url({{ $veiculo->foto2 }})">
                        </div>
                        <div class="swiper-slide" style="background-image: url({{ $veiculo->foto3 }})">
                        </div>
                      </div>
                      <!-- Add Arrows -->
                      <div class="swiper-button-next swiper-button-white"></div>
                      <div class="swiper-button-prev swiper-button-white"></div>
                    </div>
                    <div class="swiper gallery-thumbs">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide" style="background-image: url({{ $veiculo->foto1 }})">
                        </div>
                        <div class="swiper-slide" style="background-image: url({{ $veiculo->foto2 }})">
                        </div>
                        <div class="swiper-slide" style="background-image: url({{ $veiculo->foto3 }})">
                        </div>
                      </div>
                    </div>
                  </div>
              <h4 class="mb-2 mt-4">{{ $veiculo->marca.' '.$veiculo->modelo }}</h4>
              <p class="mb-0">
                {{ $veiculo->descricao }}
              </p>
              <h4 class="mb-2 mt-4">Marca</h4>
              <p class="mb-0">
                {{ $veiculo->marca }}
              </p>
              <h4 class="mb-2 mt-4">Modelo</h4>
              <p class="mb-0">
                {{ $veiculo->modelo }}
              </p>
              <h4 class="mb-2 mt-4">Quilometragem</h4>
              <p class="mb-0">
                {{ $veiculo->quilometragem }} Km
              </p>
              <h4 class="mb-2 mt-4">Ano</h4>
              <p class="mb-0">
                {{ $veiculo->ano }}
              </p>
            </div>
            <div class="col-lg-5 card-body p-8 pe-7">
              <div class="bg-lightest p-6 rounded center">
                <p>Pelo preço de</p>
                <div class="d-flex align-items-center">
                  <h1 class="text-heading">R$ {{ number_format($veiculo->valor, 2, ',', '.') }}</h1>
                </div>
              </div>
              <div class="mt-5">
                <div class="d-grid mt-5">
                  <button class="btn btn-success">
                    <span class="me-2">Entrar em contato</span>
                    <i class="icon-base ri ri-arrow-right-line icon-16px scaleX-n1-rtl"></i>
                  </button>
                </div>

                <p class="mt-8 mb-0">
                 Ao continuar, você aceita nossos Termos de Serviço e Política de Privacidade.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
     <!-- Vendors JS -->
    <script src="/assets/vendor/libs/swiper/swiper.js"></script>

    <!-- Main JS -->

    <script src="/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="/assets/js/ui-carousel.js"></script>
@endSection
  
  
 