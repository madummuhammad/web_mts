                    <div class="row">
                    	<div class="col-lg-12">
                    		<div class="card">
                                <div class="card-body">
                                    <h2 class="text-center">Data Tanah dan Bangunan</h2>
                                    <form id="tanah_bangunan">
                                        <div class="form-group">
                                            <label for="email">Jumlah Tanah yang Dimiliki</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Masukan luas tanah" id="email" name="luas_tanah" value="<?= $tanah_bangunan['luas_tanah'] ?>">
                                                <div class="input-group-append">
                                                    <span class="input-group-text bg-primary">M2</span>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="email">Luas Bangunan yang Dimiliki</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Masukan luas bangunan" id="email" name="luas_bangunan" value="<?= $tanah_bangunan['luas_bangunan'] ?>">
                                            <div class="input-group-append">
                                              <span class="input-group-text bg-primary">M2</span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                    <button type="button" id="submit-tanah-bangunan" class="btn btn-primary btn-square">Kirim Perubahan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!--**********************************
            Content body end
            ***********************************-->

