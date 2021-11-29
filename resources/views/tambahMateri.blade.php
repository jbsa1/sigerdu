@extends('layout.main')

@section('container')
<div class="card mb-3 mb-md-4">

    <div class="card-body">
        <!-- Breadcrumb -->
        <nav class="d-none d-md-block" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Materi</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Materi</li>
            </ol>
        </nav>
        <!-- End Breadcrumb -->

        <div class="mb-3 mb-md-4 d-flex justify-content-between">
            <div class="h3 mb-0">Tambahkan Materi Baru</div>
        </div>


        <!-- Form -->
        <div>
            <form>
                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">Nama Materi</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="name">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="tingkatKesulitan" class="col-sm-2 col-form-label">Kelas</label>
                    <div class="col-sm-10">
                        <select class="form-control" aria-label="Default select example" id="tingkatKesulitan">
                            <option selected>pilih kelas</option>
                            <option value="1">Kelas A</option>
                            <option value="2">Kelas B</option>
                            <option value="2">Kelas C</option>
                          </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">Topik</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="name">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">Subtopik</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="name">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">Isi Materi</label>
                    <div class="col-sm-10">
                        <textarea type="password" class="form-control" id="name"></textarea>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary float-right">Tambahkan</button>
            </form>
        </div>
        <!-- End Form -->
    </div>
</div>
@endsection