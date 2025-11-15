@extends("template.index")

@section("conteudo")
    <section class="section-py first-section-pt">
      <div class="content-wrapper">
         <div class="container-xxl flex-grow-1 container-p-y">
            <form action="/cadastros/veiculos" method="POST">
              @csrf
              <div class="row mb-6 gy-6">
                  <div class="col-xl">
                    <div class="card">
                      <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Cadastro de Veículo</h5>
                      </div>
                      <div class="card-body">
                        <div class="form-floating form-floating-outline mb-6">
                            <select type="text" class="form-control" id="marca" name="marca" required>
                                <option value="">Selecione...</option>
                                @foreach($marcas as $marca)
                                  <option value="{{ $marca->descricao }}"> {{ $marca->descricao }}</option>
                                @endforeach
                            </select>
                            <label for="basic-default-fullname">Marca</label>
                          </div>
                          <div class="form-floating form-floating-outline mb-6">
                            <select type="text" class="form-control" id="modelo" name="modelo" required>
                                <option value="">Selecione...</option>
                                @foreach($modelos as $modelo)
                                  <option value="{{ $modelo->descricao }}"> {{ $modelo->descricao }}</option>
                                @endforeach
                            </select>
                            <label for="basic-default-fullname">Modelo</label>
                          </div>
                           <div class="form-floating form-floating-outline mb-6">
                            <input type="text" class="form-control" id="descricao" name="descricao" placeholder="" required/>
                            <label for="basic-default-fullname">Descrição</label>
                          </div>
                          <div class="form-floating form-floating-outline mb-6">
                            <input type="text" class="form-control" id="quilometragem" name="quilometragem" placeholder="" required/>
                            <label for="basic-default-fullname">Quilometragem</label>
                          </div>
                          <div class="form-floating form-floating-outline mb-6">
                            <input type="text" class="form-control" id="valor" name="valor" placeholder="" required/>
                            <label for="basic-default-fullname">Valor</label>
                          </div>
                          <div class="form-floating form-floating-outline mb-6">
                            <input type="number" class="form-control" id="ano" name="ano" placeholder="" required maxLength="4"/>
                            <label for="basic-default-fullname">Ano</label>
                          </div>
                          <div class="form-floating form-floating-outline mb-6">
                            <input type="text" class="form-control" id="foto1" name="foto1" placeholder="" required/>
                            <label for="basic-default-fullname">Link Foto 1</label>
                          </div>
                          <div class="form-floating form-floating-outline mb-6">
                            <input type="text" class="form-control" id="foto2" name="foto2" placeholder="" required/>
                            <label for="basic-default-fullname">Link Foto 2</label>
                          </div>
                          <div class="form-floating form-floating-outline mb-6">
                            <input type="text" class="form-control" id="foto3" name="foto3" placeholder="" required/>
                            <label for="basic-default-fullname">Link Foto 3</label>
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
<script src="/assets/js/veiculos.js"></script>