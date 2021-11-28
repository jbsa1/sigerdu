@extends('layout.main')

@section('container')
<div class="row">
    <div class="col-12">
        <div class="card mb-3 mb-md-4">
            <div class="card-header d-flex justify-content-between">
                <h5 class="font-weight-semi-bold mb-0">Daftar Level</h5>
                <div class="div">
                    <a class="btn btn-primary" href="{{ url('/tambah-level') }}" role="button">Tambah Level</a>
                </div>
            </div>

            <div class="card-body pt-0">
                <div class="table-responsive-xl">
                    <table class="table text-nowrap mb-0">
                        <thead>
                        <tr>
                            <th class="font-weight-semi-bold border-top-0 py-2">No</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">Level</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="py-3">1</td>
                            <td class="py-3">Level 1</td>
                            <td class="py-3">
                                <div class="position-relative">
                                    <a class="link-dark d-inline-block" href="{{ url('/edit-level') }}">
                                        <i class="gd-pencil icon-text"></i>
                                    </a>
                                    <a class="link-dark d-inline-block" data-toggle="modal" data-target="#myModal">
                                        <i class="gd-trash icon-text"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3">2</td>
                            <td class="py-3">Level 2</td>
                            <td class="py-3">
                                <div class="position-relative">
                                    <a class="link-dark d-inline-block" href="{{ url('/edit-level') }}">
                                        <i class="gd-pencil icon-text"></i>
                                    </a>
                                    <a class="link-dark d-inline-block" data-toggle="modal" data-target="#myModal">
                                        <i class="gd-trash icon-text"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3">3</td>
                            <td class="py-3">Level 3</td>
                            <td class="py-3">
                                <div class="position-relative">
                                    <a class="link-dark d-inline-block" href="{{ url('/edit-level') }}">
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('modal')
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog rounded py-5" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus level ini
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