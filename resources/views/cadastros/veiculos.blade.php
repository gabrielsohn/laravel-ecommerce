@extends("template.index")



@section("conteudo")
    <section class="section-py first-section-pt">
       <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <!-- Product List Table -->
              <div class="card">
                <div class="card-datatable table-responsive">
                  <table class="datatables-products table">
                    <thead>
                      <tr>
                        <th width="20%">Veículo</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Preço</th>
                        <th class="dt-right text-end">Ações</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($veiculos as $veiculo)
                        <tr>
                          <td width="50px"> 
                            <div class="d-flex justify-content-start align-items-center product-name">
                            <div class="avatar-wrapper">
                              <div class="avatar avatar me-2 me-sm-4 rounded-2 bg-label-secondary">
                                <img src="{{ $veiculo->foto1 }}" alt="Product-{{ $veiculo->id }}" class="rounded">
                              </div>
                            </div>
                            <div class="d-flex flex-column">
                              <h6 class="text-nowrap mb-0">{{ $veiculo->marca.' '.$veiculo->modelo}}</h6>
                              <small class="text-truncate d-none d-sm-block" style="max-width: 250px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">
                                {{ $veiculo->descricao }}
                            </div>
                           </div>
                          </td>
                          <td><span> {{ $veiculo->marca }} </span></td>
                          <td><span> {{ $veiculo->modelo }} </span></td>
                          <td><span> R$ {{ number_format($veiculo->valor, 2, ',', '.') }} </span></td>
                          <td>
                            <div class="d-flex justify-content-end text-nowrap">
                                <form action="/cadastros/veiculos/editar/{{ $veiculo->id }}" method="GET">
                                    @csrf
                                    <button class="btn btn-icon btn-text-secondary rounded-pill waves-effect"><i class="icon-base ri ri-edit-box-line icon-22px text-warning"></i></button>
                                  </form>
                                <form action="/cadastros/veiculos/{{ $veiculo->id }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button class="btn btn-icon btn-text-secondary rounded-pill waves-effect">
                                    <i class="icon-base ri ri-delete-bin-2-line icon-22px text-danger"></i>
                                  </button>
                                </form>
                              </div>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- / Content -->
          </div>
    </section>
@endSection

<!-- Page JS -->
<script src="/assets/js/veiculos.js"></script>