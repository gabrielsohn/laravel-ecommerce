@extends("template.index")

@section("conteudo")
    <section class="section-py first-section-pt">
      <div class="content-wrapper">
         <div class="container-xxl flex-grow-1 container-p-y">
            <form action="/cadastros/modelos" method="POST">
              @csrf
              <div class="row mb-6 gy-6">
                  <div class="col-xl">
                    <div class="card">
                      <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Cadastro de Modelo</h5>
                      </div>
                      <div class="card-body">
                        <div class="form-floating form-floating-outline mb-6">
                            <select type="text" class="form-control" id="marca_id" name="marca_id" required>
                                <option value="">Selecione...</option>
                                @foreach($marcas as $marca)
                                  <option value="{{ $marca->id }}"> {{ $marca->descricao }}</option>
                                @endforeach
                            </select>
                            <label for="basic-default-fullname">Marca</label>
                          </div>
                          <div class="form-floating form-floating-outline mb-6">
                            <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Ex. HB20" required/>
                            <label for="basic-default-fullname">Modelo</label>
                          </div>
                          <button type="submit" class="btn btn-primary float-end">Salvar</button>
                      </div>
                    </div>
                  </div>
              </div>
            </form>
          </div>
      </div>
    </section>
@endSection

<!-- Page JS -->
<script src="/assets/js/modelos.js"></script>