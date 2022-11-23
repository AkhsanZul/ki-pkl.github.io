@include('layout.partials.jobsform')
@extends('layout.main')

@section('content')

    <div class="content">
        <div class="d-flex justify-content-between mx-5 mt-5">
            <div>
                <h5 class="fw-bold">
                    <i class="fas fa-arrow-left me-2"></i>
                    DAFTAR LOWONGAN PEKERJAAN
                </h5>
            </div>
            <div>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            Lowongan
                        </li>
                        <li class="breadcrumb-item" active>
                            Daftar Lowongan
                        </li>
                        <li class="breadcrumb-item">
                        <a href="/lowongan/detail" class="text-secondary">
                            Detail Lowongan
                        </a>
                        </li>
                    </ol>
                </nav>
            </div>

        </div>
        <div class="mx-5 mt-4">
            <p>Cari Pekerjaan Yang Cocok Dengan Anda</p>
        </div>
        <div class="d-flex mx-5 mt-2 px-5">
            <div class="w-75 me-4">
                <div class="form-group mb-4">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Cari Pekerjaan">
                            <span class="input-group-text"><i class="fas fa-magnifying-glass"></i></span>
                        </div>
                </div>
                <x-jobcard></x-jobcard>
                <x-jobcard></x-jobcard>
                <x-jobcard></x-jobcard>
                <x-jobcard></x-jobcard>
                <div class="bg-light d-flex justify-content py-2" role="button">
                    lihat lowongan lainnnya
                </div>
            </div>
            <div>
                <button class="rounded-pill px-5 py-3 bg-primary btn text-white" style="width:350px" data-bs-toggle="modal" data-bs-target="#formModal">
                <i class="fas fa-plus me-2">TAMBAH LOWONGAN</i></button>
                <div class="mt-5 p-4 bg-light rounded">
                    <h5 class="fw-bold">Filter</h5>
                    <form action="" class="mt-3">
                        <div class="mb-3">
                            <label for="relevansi" class="form-label">Urutkan Menurut</label>
                            <select name="" id="" class="form-select">
                                <option selected>Relevansi</option>
                                <option value="1">one</option>
                                <option value="2">two</option>
                                <option value="3">three</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="typePekerjaan" class="form-label">
                                Tipe pekerjaan
                            </label>
                            <select name="" id="" class="form-select">
                                <option selected>Purna Waktu</option>
                                <option values="1">one</option>
                                <option values="2">two</option>
                                <option values="3">three</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="area" class="form-label">
                                area
                            </label>
                            <select name="" id="" class="form-select">
                                <option selected>Indonesia</option>
                                <option values="1">one</option>
                                <option values="2">two</option>
                                <option values="3">three</option>
                            </select>
                        
                            <select name="" id="" class="form-select">
                                <option selected>jawa barat</option>
                                <option values="1">one</option>
                                <option values="2">two</option>
                                <option values="3">three</option>
                            </select>

                            <select name="" id="" class="form-select">
                                <option selected>semua area</option>
                                <option values="1">one</option>
                                <option values="2">two</option>
                                <option values="3">three</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="kategori" class="form-table">
                                kategori
                            </label>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" name="" value="" id="flexcheckChecked">
                                <label class="from-check-label" for="flexCheckChecked">
                                    Informasi Teknologi
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" name="" value="" id="flexcheckChecked">
                                <label class="from-check-label" for="flexCheckChecked">
                                    Desain & kreatif
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" name="" value="" id="flexcheckChecked">
                                <label class="from-check-label" for="flexCheckChecked">
                                    Penjualan & pemasaran
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" name="" value="" id="flexcheckChecked">
                                <label class="from-check-label" for="flexCheckChecked">
                                    akutansi & Keuangan
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection