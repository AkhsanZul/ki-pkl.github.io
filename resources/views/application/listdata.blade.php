@extends('layout.main')
@section('content')
<div class="content">
    <div class="d-flex justify-content-between mx-5 mt-5" >
       <h5>
        <div class="fw-blood">
        <i class="fa-solid fa-arrow-left me-2"></i>
        DAFTAR PKL
        </div>
        </h5>
        <div >
            <nav >
            <ol class="breadcrumb">
                <li class="breadcrumb-item">List Data</li>
                <li class="breadcrumb-item active"> Data PKL</li>
            </ol>
            </nav>
        </div>
    </div>
   
    <div class="d-flex mx-5 mt-2 px-5">
        <div class="w-100 me-4">
<div class="row">
    <div class="col-6">
        <!-- form percarian -->
            <div class="form-group mb-4" >
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-magnifying-glass"></i></span>
                    <input type="text" placeholder="Cara Data PKL Disini" class="form-control">
                </div>
        <!--  -->
            </div></div>
    <div class="col-4">
                  <button class="btn btn-light"><i class="fas fa fa-filter"></i> Filter</button>
                  <button class="btn btn-light"><i class="fas fa fa-trash"></i></button>
    </div>
    <div class="col-2 justify-content-end">
        <button class="btn btn-light"><i class="fas fa-add"></i> Tambah</button>
    </div>
            
            <table class="table table-striped table-hover">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Asset</th>
            <th scope="col">Jenis Asset</th>
            <th scope="col">Harga</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>1.000.000</td>
            <td><span class="badge text-bg-success">Aktif</span></td>
            <td> <div class="btn bg-secondary rounded-3 text-white me-2">   
            <i class="fa-solid fa-pencil"></i>
            </div>
            <div class="btn bg-danger rounded-3 text-white me-2">
                <i class="fas fa-trash fa-sm"></i>
            </div></td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>CNBC</td>
            <td>TV</td>
            <td>4.000.000</td>
            <td><span class="badge text-bg-success">Aktif</span></td>
            <td> <div class="btn bg-secondary rounded-3 text-white me-2">   
            <i class="fa-solid fa-pencil"></i>
            </div>
            <div class="btn bg-danger rounded-3 text-white me-2">
                <i class="fas fa-trash fa-sm"></i>
            </div></td>
            </tr>
            
        </tbody>
        </table>

        </div>
       

    </div>
    
</div>

@endsection