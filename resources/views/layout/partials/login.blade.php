<div class="modal fade" id="loginmodal">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content p-4">
            <div class="modal-header p-2 align-item-start">
                <div class="d-flex flex-column justify-content-center w-100 align-items-center">
                    <img src="{{url('img/altie.png')}}" width="50px">
                    <h6>pondok pesantren al-ittihad</h6>
                    <p class"text-secondary">karang tengah cianjur</p>
                    <h6>MASUK UNTUK MELANJUTKAN</h6>
                </div>
            </div>
            <div class="modal-body">
                <form action="">
                    <div>
                        <label class="mb-1  ">Alamat surel</label>
                        <input type="text" class="form-control" placeholder="MASUKAN EMAIL ">
                    </div>
                    <div class="form-group mb-4">
                        <label for="">kata sandi</label>
                        <div class="input-group">
                        <input type="password" class="form-control" placeholder="MASUKAN KATA SANDI"><span class="input-group-text"><i class="far fa-eye-slash"></i></span>
                        </div>
                    </div>
                </form>
                <button class="btn bg-primary rounded-pill w-100 py-2 text-white mb-4">Masuk sekarang</button>
            </div>
            <div class="modal-footer ">
                <p class="text-center w-100">Belum memiliki akun ?  <span class="text-primary "role="button" data-bs-toggle="modal"
                data-bs-target="#registermodal"> Daftar disini</span></p>
            </div>
        </div>
    </div>
</div>