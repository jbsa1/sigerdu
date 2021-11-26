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
                <li class="breadcrumb-item active" aria-current="page">Edit Pemain</li>
            </ol>
        </nav>
        <!-- End Breadcrumb -->

        <div class="mb-3 mb-md-4 d-flex justify-content-between">
            <div class="h3 mb-0">Edit Data Pemain</div>
        </div>


        <!-- Form -->
        <div>
            <form>
                <div class="form-row">
                    <div class="form-group col-12 col-md-6">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" value="" id="name" name="name" value="John Doe">
                    </div>
                    <div class="form-group col-12 col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" value="" id="email" name="email" value="johndoe@gmail.com">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary float-right">Simpan</button>
            </form>
        </div>
        <!-- End Form -->
    </div>
</div>
@endsection