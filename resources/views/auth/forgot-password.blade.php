<!doctype html>

<html
  lang="en"
  class="layout-wide customizer-hide"
  dir="ltr"
  data-skin="default"
  data-assets-path="/assets/"
  data-template="horizontal-menu-template"
  data-bs-theme="light">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="robots" content="noindex" />

    <title>Esqueci minha senha | Carros.Net</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="/assets/vendor/fonts/iconify-icons.css" />

    <!-- Core CSS -->
    <!-- build:css assets/vendor/css/theme.css -->

    <link rel="stylesheet" href="/assets/vendor/libs/node-waves/node-waves.css" />

    <link rel="stylesheet" href="/assets/vendor/libs/pickr/pickr-themes.css" />

    <link rel="stylesheet" href="/assets/vendor/css/core.css" />
    <link rel="stylesheet" href="/assets/css/demo.css" />

    <!-- Vendors CSS -->

    <link rel="stylesheet" href="/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- endbuild -->

    <!-- Vendor -->
    <link rel="stylesheet" href="/assets/vendor/libs/@form-validation/form-validation.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="/assets/vendor/css/pages/page-auth.css" />

    <!-- Helpers -->
    <script src="/assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js. -->
    <script src="/assets/vendor/js/template-customizer.js"></script>

    <!--? Config: Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file. -->

    <script src="/assets/js/config.js"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="position-relative">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-6 mx-4">
          <!-- Logo -->
          <div class="card p-sm-7 p-2">
            <!-- Forgot Password -->
            <div class="app-brand justify-content-center mt-5">
              <a href="/" class="app-brand-link gap-3">
                <span class="app-brand-logo demo">
                  <span class="text-primary">
                    <svg width="30" height="24" fill="#529193" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 111.847 111.847" xml:space="preserve" stroke="#529193"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M108.626,53.994l1.239-0.943v-5.953l-1.239-0.916v-1.391v-0.928l3.221-2.58l-3.221-2.027 C86.933,24.417,47.928,27.176,47.928,27.176c-9.219,0-26.801,21.2-26.801,21.2s-10.071,1.687-16.659,5.636 c-6.584,3.949-3.946,19.757-3.946,19.757h10.205c0-6.544,5.308-11.854,11.854-11.854c6.547,0,11.851,5.311,11.851,11.854h48.894 c0-6.544,5.308-11.854,11.854-11.854c6.543,0,11.848,5.311,11.848,11.854h1.598v-3.604l1.979-2.167v-7.888l-1.979-2.632V53.994z M9.771,59.686H4.304V56.23h5.467V59.686z M62.523,47.052H29.552c0,0,11.735-14.903,17.318-14.903c5.588,0,15.649,0,15.649,0 v14.903H62.523z M66.924,47.102V31.787c0,0,22.792,0.786,31.241,15.314H66.924z"></path> <path d="M22.417,62.661c-6.126,0-11.105,4.979-11.105,11.101c0,6.13,4.982,11.112,11.105,11.112 c6.122,0,11.108-4.982,11.108-11.112C33.526,67.639,28.54,62.661,22.417,62.661z M22.417,82.399c-4.759,0-8.631-3.87-8.631-8.638 c0-4.753,3.872-8.623,8.631-8.623c4.758,0,8.634,3.87,8.634,8.623C31.048,78.525,27.176,82.399,22.417,82.399z"></path> <path d="M94.962,62.661c-6.126,0-11.105,4.979-11.105,11.101c0,0.343,0.068,0.661,0.103,0.986H35.17v3.456h48.796V74.85 c0.559,5.612,5.246,10.021,10.996,10.021c6.122,0,11.104-4.983,11.104-11.112C106.067,67.639,101.084,62.661,94.962,62.661z M94.962,82.399c-4.761,0-8.631-3.87-8.631-8.638c0-4.753,3.867-8.623,8.631-8.623c4.76,0,8.63,3.87,8.63,8.623 C103.592,78.525,99.722,82.399,94.962,82.399z"></path> </g> </g> </g></svg>
                  </span>
                </span>
                <span class="app-brand-text demo text-heading fw-semibold">Carros.Net</span>
              </a>
            </div>
            <!-- /Logo -->
            <div class="card-body mt-1">
              <h4 class="mb-1">Esqueceu sua senha? 🔒</h4>
              <p class="mb-5">Informe seu e-mail e nós iremos lhe enviar instruções para resetar sua senha</p>
              @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
              @endif
              <form id="formAuthentication" class="mb-5" action="{{ route('password.email') }}" method="POST">
                @csrf
                <div class="form-floating form-floating-outline mb-5 form-control-validation">
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Informe seu e-mail"
                    autofocus />
                  <label>Email</label>
                </div>
                <button class="btn btn-primary d-grid w-100 mb-5">Enviar link de redefinição</button>
              </form>
              <div class="text-center">
                <a href="{{ route('login') }}" class="d-flex align-items-center justify-content-center">
                  <i class="icon-base ri ri-arrow-left-s-line scaleX-n1-rtl icon-20px me-1_5"></i>
                  Voltar para o login
                </a>
              </div>
            </div>
          </div>
          <!-- /Forgot Password -->
          <img
            src="/assets/img/illustrations/tree-3.png"
            alt="auth-tree"
            class="authentication-image-object-left d-none d-lg-block" />
          <img
            src="/assets/img/illustrations/auth-basic-mask-light.png"
            class="authentication-image d-none d-lg-block scaleX-n1-rtl"
            height="172"
            alt="triangle-bg"
            data-app-light-img="illustrations/auth-basic-mask-light.png"
            data-app-dark-img="illustrations/auth-basic-mask-dark.png" />
          <img
            src="/assets/img/illustrations/tree.png"
            alt="auth-tree"
            class="authentication-image-object-right d-none d-lg-block" />
        </div>
      </div>
    </div>

    <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/theme.js -->

    <script src="/assets/vendor/libs/jquery/jquery.js"></script>

    <script src="/assets/vendor/libs/popper/popper.js"></script>
    <script src="/assets/vendor/js/bootstrap.js"></script>
    <script src="/assets/vendor/libs/node-waves/node-waves.js"></script>

    <script src="/assets/vendor/libs/@algolia/autocomplete-js.js"></script>

    <script src="/assets/vendor/libs/pickr/pickr.js"></script>

    <script src="/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="/assets/vendor/libs/hammer/hammer.js"></script>

    <script src="/assets/vendor/libs/i18n/i18n.js"></script>

    <script src="/assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="/assets/vendor/libs/@form-validation/popular.js"></script>
    <script src="/assets/vendor/libs/@form-validation/bootstrap5.js"></script>
    <script src="/assets/vendor/libs/@form-validation/auto-focus.js"></script>

    <!-- Main JS -->

    <script src="/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="/assets/js/pages-auth.js"></script>
  </body>
</html>
