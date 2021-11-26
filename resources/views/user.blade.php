@extends('layout.main')

@section('container')
<div class="card mb-3 mb-md-4">

    <div class="card-body">
        <!-- Breadcrumb -->
        <nav class="d-none d-md-block" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Daftar Pemain</a>
                </li>
            </ol>
        </nav>
        <!-- End Breadcrumb -->

        <div class="mb-3 mb-md-4 d-flex justify-content-between">
            <div class="h3 mb-0">Pemain</div>
            <div class="div">
                <a class="btn btn-primary" href="{{ url('/tambah-user') }}" role="button">Tambah Pemain</a>
            </div>
        </div>


        <!-- Users -->
        <div class="table-responsive-xl">
            <table class="table text-nowrap mb-0">
                <thead>
                <tr>
                    <th class="font-weight-semi-bold border-top-0 py-2">#</th>
                    <th class="font-weight-semi-bold border-top-0 py-2">ID Pemain</th>
                    <th class="font-weight-semi-bold border-top-0 py-2">Nama</th>
                    <th class="font-weight-semi-bold border-top-0 py-2">Email</th>
                    <th class="font-weight-semi-bold border-top-0 py-2">Tanggal Pendaftaran</th>
                    <th class="font-weight-semi-bold border-top-0 py-2">Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="py-3">1</td>
                    <td class="align-middle py-3">
                        <div class="d-flex align-items-center">
                            123456
                        </div>
                    </td>
                    <td class="py-3">John Doe</td>
                    <td class="py-3">johndoe@gmail.com</td>
                    <td class="py-3">January 15, 2019</td>
                    <td class="py-3">
                        <div class="position-relative">
                            <a class="link-dark d-inline-block" href="{{ url('/edit-user') }}">
                                <i class="gd-pencil icon-text"></i>
                            </a>
                            <a class="link-dark d-inline-block" data-toggle="modal" data-target="#myModal">
                                <i class="gd-trash icon-text"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="py-3">1</td>
                    <td class="align-middle py-3">
                        <div class="d-flex align-items-center">
                            123456
                        </div>
                    </td>
                    <td class="py-3">John Doe</td>
                    <td class="py-3">johndoe@gmail.com</td>
                    <td class="py-3">January 15, 2019</td>
                    <td class="py-3">
                        <div class="position-relative">
                            <a class="link-dark d-inline-block" href="{{ url('/edit-user') }}">
                                <i class="gd-pencil icon-text"></i>
                            </a>
                            <a class="link-dark d-inline-block" data-toggle="modal" data-target="#myModal">
                                <i class="gd-trash icon-text"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="py-3">1</td>
                    <td class="align-middle py-3">
                        <div class="d-flex align-items-center">
                            123456
                        </div>
                    </td>
                    <td class="py-3">John Doe</td>
                    <td class="py-3">johndoe@gmail.com</td>
                    <td class="py-3">January 15, 2019</td>
                    <td class="py-3">
                        <div class="position-relative">
                            <a class="link-dark d-inline-block" href="{{ url('/edit-user') }}">
                                <i class="gd-pencil icon-text"></i>
                            </a>
                            <a class="link-dark d-inline-block" data-toggle="modal" data-target="#myModal">
                                <i class="gd-trash icon-text"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
            <div class="card-footer d-block d-md-flex align-items-center d-print-none">
                <div class="d-flex mb-2 mb-md-0">Showing 1 to 8 of 24 Entries</div>

                <nav class="d-flex ml-md-auto d-print-none" aria-label="Pagination"><ul class="pagination justify-content-end font-weight-semi-bold mb-0">				<li class="page-item">				<a id="datatablePaginationPrev" class="page-link" href="#!" aria-label="Previous"><i class="gd-angle-left icon-text icon-text-xs d-inline-block"></i></a>				</li><li class="page-item d-none d-md-block"><a id="datatablePaginationPage0" class="page-link active" href="#!" data-dt-page-to="0">1</a></li><li class="page-item d-none d-md-block"><a id="datatablePagination1" class="page-link" href="#!" data-dt-page-to="1">2</a></li><li class="page-item d-none d-md-block"><a id="datatablePagination2" class="page-link" href="#!" data-dt-page-to="2">3</a></li><li class="page-item">				<a id="datatablePaginationNext" class="page-link" href="#!" aria-label="Next"><i class="gd-angle-right icon-text icon-text-xs d-inline-block"></i></a>				</li>				</ul></nav>
            </div>
        </div>
        <!-- End Users -->
    </div>
</div>
@endsection

@section('modal')
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog rounded py-5" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus data ini
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Hapus</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->
@endsection

@section('js')
<script>
    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
    })
</script>
@endsection