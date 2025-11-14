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
                        <th>Marca</th>
                        <th class="dt-right text-end">Ações</th>
                      </tr>
                    </thead>
                    <tbody>
                       @foreach($marcas as $marca)
                          <tr>
                              <td>{{ $marca->id }}</td>
                              <td><span class="text-truncate d-flex align-items-center text-heading">{{ $marca->descricao }}</span></td>
                              <td>
                                <div class="d-flex justify-content-end text-nowrap">
                                  <button class="btn btn-icon btn-text-secondary rounded-pill waves-effect"><i class="icon-base ri ri-edit-box-line icon-22px text-warning"></i></button>
                                  <form action="/cadastros/marcas/{{ $marca->id }}" method="POST">
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
<script src="/assets/js/marcas.js"></script>