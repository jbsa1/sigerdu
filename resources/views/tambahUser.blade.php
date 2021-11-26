@extends('layout.main')

@section('container')
<div class="card mb-3 mb-md-4">

    <div class="card-body">
        <!-- Breadcrumb -->
        <nav class="d-none d-md-block" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Pemain</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Pemain</li>
            </ol>
        </nav>
        <!-- End Breadcrumb -->

        <div class="mb-3 mb-md-4 d-flex justify-content-between">
            <div class="h3 mb-0">Tambahkan Pemain Baru</div>
        </div>


        <!-- Form -->
        <div>
            <form>
                <div class="form-row">
                    <div class="form-group col-12 col-md-6">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" value="" id="name" name="name" placeholder="Nama Pemain">
                    </div>
                    <div class="form-group col-12 col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" value="" id="email" name="email" placeholder="Email Pemain">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-12 col-md-6">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" value="" id="password" name="password" placeholder="Password">
                    </div>
                    <div class="form-group col-12 col-md-6">
                        <label for="password_confirm">Konfirmasi Password</label>
                        <input type="password" class="form-control" value="" id="password_confirm" name="password_confirm" placeholder="Konfirmasi Password">
                    </div>
                </div>
                <div class="custom-control custom-switch mb-2">
                    <input type="checkbox" class="custom-control-input" id="randomPassword">
                    <label class="custom-control-label" for="randomPassword">Buat Password Acak</label>
                </div>

                <button type="submit" class="btn btn-primary float-right">Tambahkan</button>
            </form>
        </div>
        <!-- End Form -->
    </div>
</div>
@endsection