@extends('layout.main')

@section('container')
<div class="card mb-3 mb-md-4">

    <div class="card-body">
        <!-- Breadcrumb -->
        <nav class="d-none d-md-block" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Level</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Edit Level</li>
            </ol>
        </nav>
        <!-- End Breadcrumb -->

        <div class="mb-3 mb-md-4 d-flex justify-content-between">
            <div class="h3 mb-0">Perbarui Level</div>
        </div>


        <!-- Form -->
        <div>
            <form>
                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">Nama Level</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="name">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="tingkatKesulitan" class="col-sm-2 col-form-label">Tingkat Kesulitan</label>
                    <div class="col-sm-10">
                        <select class="form-control" aria-label="Default select example" id="tingkatKesulitan">
                            <option selected>Easy</option>
                            <option value="1">Medium</option>
                            <option value="2">Hard</option>
                          </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="jmlMusuhA" class="col-sm-2 col-form-label">Jumlah Musuh A</label>
                    <div class="col-sm-10">
                        <input type="range" class="form-control" min="0" max="100" step="1" id="jmlMusuhA">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="jmlMusuhB" class="col-sm-2 col-form-label">Jumlah Musuh B</label>
                    <div class="col-sm-10">
                        <input type="range" class="form-control" min="0" max="100" step="1" id="jmlMusuhB">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="jmlMusuhC" class="col-sm-2 col-form-label">Jumlah Musuh C</label>
                    <div class="col-sm-10">
                        <input type="range" class="form-control" min="0" max="100" step="1" id="jmlMusuhC">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary float-right">Simpan</button>
            </form>
        </div>
        <!-- End Form -->
    </div>
</div>
@endsection