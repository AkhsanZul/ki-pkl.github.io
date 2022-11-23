<div class="modal fade" id="registermodal">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content p-4">
            <div class="modal-header p-2 align-item-start">
                <div class="d-flex flex-column justify-content-center w-100 align-items-center">
                    <img src="{{url('img/altie.png')}}" width="50px">
                    <h6>pondok pesantren al-ittihad</h6>
                    <p class="text-secondary">karang tengah cianjur</p>
                    <h6>MASUK UNTUK MELANJUTKAN</h6>
                </div>
            </div>
            <div class="modal-body">
                <form action="" class="mb-4">
                    <div class="row mb-2">
                        <div class="col">
                            <label >Nama depan</label>
                            <input type="text" class="form-control" id="firstname" placeholder="NAMA DEPAN">
                        </div>
                        <div class="col">
                            <label >Nama belakang</label>
                            <input type="text" class="form-control" id="lastname" placeholder="NAMA BELAKANG">
                        </div>
                    </div>
                    <div class="mb-2">
                            <label >Nama surel</label>
                            <input type="email" class="form-control" id="email" placeholder="MASUKAN EMAIL ANDA">
                    </div>
                    <div class="mb-2">
                        <label for="" class="mb-1">Jenis Kelamin</label>
                        <select name="" id="gender" class="form-control">
                            <option value="pria">PRIA</option>
                            <option value="wanita">WANITA</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label >Unggah CV/Resume anda</label>
                        <input type="file" class="form-control" id="cv" placeholder="MASUKAN EMAIL ANDA">
                    </div>
                    <div class="mb-2">
                        <label for="" >Ringkasan Tentang Anda</label>
                        <textarea name="" id="" cols="54" rows="3" class="form-control" placeholder="Descripsikan Diri Anda"></textarea>
                    </div>
                    <hr class="my-3">
                    <div class="form-group mb-4">
                        <label for="">kata sandi</label>
                        <div class="input-group">
                        <input type="password" class="form-control" placeholder="MASUKAN KATA SANDI"><span class="input-group-text"><i class="far fa-eye-slash"></i></span>
                        </div>
                    </div>
                </form>
                <button class="btn bg-primary rounded-pill w-100 py-2 text-white mb-4">LANJUTKAN REGISTRASI</button>
            </div>
            <div class="modal-footer ">
                <p class="text-center w-100">Belum memiliki akun ?  <span class="text-primary "role="button" data-bs-toggle="modal"
                data-bs-target="#loginmodal"> Masuk disini</span></p>
            </div>
        </div>
    </div>
</div>