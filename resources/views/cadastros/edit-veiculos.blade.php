@extends("template.index")

@section("conteudo")
    <section class="section-py first-section-pt">
      <div class="content-wrapper">
         <div class="container-xxl flex-grow-1 container-p-y">
            <form action="/cadastros/veiculos/editar/{{ $veiculo->id }}" method="POST">
              @csrf
              <div class="row mb-6 gy-6">
                  <div class="col-xl">
                    <div class="card">
                      <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Cadastro de Veículo</h5>
                      </div>
                      <div class="card-body">
                        <div class="form-floating form-floating-outline mb-6">
                          <div class="form-floating form-floating-outline mb-6">
                            <input type="text" class="form-control" id="id" name="id" readonly required value="{{ $veiculo->id }}"/>
                            <label for="basic-default-fullname">ID</label>
                          </div>
                            <select type="text" class="form-control" id="marca" name="marca" required value="{{ $veiculo->marca }}">
                                <option value="">Selecione...</option>
                                @foreach($marcas as $marca)
                                  <option value="{{ $marca->descricao }}" {{ $marca->descricao == $veiculo->marca ? 'selected' : '' }}> {{ $marca->descricao }}</option>
                                @endforeach
                            </select>
                            <label for="basic-default-fullname">Marca</label>
                          </div>
                          <div class="form-floating form-floating-outline mb-6">
                            <select type="text" class="form-control" id="modelo" name="modelo" required value="{{ $veiculo->modelo }}">
                                <option value="">Selecione...</option>
                                @foreach($modelos as $modelo)
                                  <option value="{{ $modelo->descricao }}" {{ $modelo->descricao == $veiculo->modelo ? 'selected' : '' }}> {{ $modelo->descricao }}</option>
                                @endforeach
                            </select>
                            <label for="basic-default-fullname">Modelo</label>
                          </div>
                           <div class="form-floating form-floating-outline mb-6">
                            <input type="text" class="form-control" id="descricao" name="descricao" placeholder="" required value="{{ $veiculo->descricao }}"/>
                            <label for="basic-default-fullname">Descrição</label>
                          </div>
                          <div class="form-floating form-floating-outline mb-6">
                            <input type="text" class="form-control" id="quilometragem" name="quilometragem" placeholder="" required value="{{ $veiculo->quilometragem }}"/>
                            <label for="basic-default-fullname">Quilometragem</label>
                          </div>
                          <div class="form-floating form-floating-outline mb-6">
                            <input type="text" class="form-control" id="valor" name="valor" placeholder="" required value="{{ $veiculo->valor }}"/>
                            <label for="basic-default-fullname">Valor</label>
                          </div>
                          <div class="form-floating form-floating-outline mb-6">
                            <input type="number" class="form-control" id="ano" name="ano" placeholder="" required maxLength="4" value="{{ $veiculo->ano }}"/>
                            <label for="basic-default-fullname">Ano</label>
                          </div>
                          <div class="form-floating form-floating-outline mb-6">
                            <input type="text" class="form-control" id="foto1" name="foto1" placeholder="" required value="{{ $veiculo->foto1 }}"/>
                            <label for="basic-default-fullname">Link Foto 1</label>
                          </div>
                          <div class="form-floating form-floating-outline mb-6">
                            <input type="text" class="form-control" id="foto2" name="foto2" placeholder="" required value="{{ $veiculo->foto2 }}"/>
                            <label for="basic-default-fullname">Link Foto 2</label>
                          </div>
                          <div class="form-floating form-floating-outline mb-6">
                            <input type="text" class="form-control" id="foto3" name="foto3" placeholder="" required value="{{ $veiculo->foto3 }}"/>
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