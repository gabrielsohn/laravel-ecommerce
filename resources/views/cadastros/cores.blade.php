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
                        <th>ID</th>
                        <th>Cor</th>
                        <th class="dt-right text-end">Ações</th>
                      </tr>
                    </thead>
                    <tbody>
                       @foreach($cores as $cor)
                          <tr>
                              <td>{{ $cor->id }}</td>
                              <td><span class="text-truncate d-flex align-items-center text-heading">{{ $cor->descricao }}</span></td>
                              <td>
                                <div class="d-flex justify-content-end text-nowrap">
                                 <form action="/cadastros/cores/editar/{{ $cor->id }}" method="GET">
                                    @csrf
                                    <button class="btn btn-icon btn-text-secondary rounded-pill waves-effect"><i class="icon-base ri ri-edit-box-line icon-22px text-warning"></i></button>
                                  </form>
                                  <form action="/cadastros/cores/{{ $cor->id }}" method="POST">
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
<script src="/assets/js/cores.js"></script>