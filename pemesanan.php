<?php include "layouts/header.php"  ?>


        <div  class="row mt-3">
            <div class="col-12 col-md-9">
                <h2>Form Pemesanan Paket Wisata</h2>
                <form action="" method="post" autocomplete="off">
                    <div class="row">
                        <div class="mb-3 col-12 col-md-6">
                            <label for="nama-pemesan" class="form-label">Nama Pemesan</label>
                            <input type="text" class="form-control form-control-sm" id="nama-pemesan" name="nama-pemesanan" placeholder="" required>
                        </div>
                        <div class="mb-3 col-12 col-md-6">
                            <label for="no-hp" class="form-label">No HP</label>
                            <input type="text" class="form-control form-control-sm" id="no-hp" name="no-hp" placeholder="" required>
                        </div>
                     </div>

                     <div class="row">
                        <div class="mb-3 col-12 col-md-6">
                            <label for="tgl-pesan" class="form-label">Tgl Pesan</label>
                            <input type="date" class="form-control form-control-sm" id="tgl-pesan" name="tgl-pesan" placeholder="" required>
                        </div>
                        <div class="mb-3 col-12 col-md-6">
                            <label for="durasi" class="form-label">Durasi</label>
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control form-control-sm" id="durasi" name="durasi" placeholder="" aria-describeby="basic-addon2" required>
                                <span class="input-group-text" id="basic-addon2">hari</span>
                            </div>
                        </div>
                     </div>

                     <div class="row">
                        <div class="mb-3 col-12 col-lg-3">
                            <label for="jumlah-peserta" class="form-label">Jumlah Peserta</label>
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control form-control-sm" id="jumlah-peserta" name="jumlah-peserta" placeholder="" aria-describeby="basic-addon2" required>
                                <span class="input-group-text" id="basic-addon2">orang</span>
                            </div>
                        </div>
                        <div class="mb-3 col-12 col-lg-9">
                            <div>
                                <label>Pelayanan paket perjalanan</label>
                                <div class="d-lg-flex justify-content-between">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Y" id="penginapan" name="penginapan" onclick="handlePenginapan(this)">
                                        <label class="form-check-label" for="penginapan">Penginapan (Rp. 1.000.000)</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Y" id="transportasi" name="transportasi" onclick="handleTransportasi(this)">
                                        <label class="form-check-label" for="transportasi">Transportasi (Rp. 1.200.000)</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Y" id="makanan" name="makanan" onclick="handleMakanan(this)">
                                        <label class="form-check-label" for="makanan">Makanan (Rp. 500.000)</label>
                                    </div>

                                </div>
                            </div>
                        </div>
                        
                     </div>

                     <div class="row">
                        <div class="mb-3 col-12 col-md-6">
                            <label for="harga-paket" class="form-label">Harga Paket</label>
                            <div class="input-group input-group-sm">
                                    <span class="input-group-text" id="basic-addon2">Rp</span>
                                <input type="text" class="form-control form-control-sm" id="harga-paket" name="harga-paket" placeholder="" aria-describeby="basic-addon2" required>
                                
                            </div>
                        </div>

                        <div class="mb-3 col-12 col-md-6">
                            <label for="jumlah-tagihan" class="form-label">Jumlah Tagihan</label>
                            <div class="input-group input-group-sm">
                                    <span class="input-group-text" id="basic-addon2">Rp</span>
                                <input type="text" class="form-control form-control-sm" id="jumlah-tagihan" name="jumlah-tagihan" placeholder="" aria-describeby="basic-addon2" required>
                                
                            </div>
                        </div>
                    </div>
                    
                    <input type="submit" class="btn btn-sm btn-primary" value="simpan">
                    <button type="button" class="btn btn-sm btn-success" onclick="hitung()">Hitung</button>
                    <button type="reset" class="btn btn-sm btn-danger">Reset</button>
                
                </form>

            </div>
            <?php include "layouts/sidebar.php"?>

        </div>

        <!-- Footer -->
      <?php include "layouts/footer.php"; ?>

    </div>

    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>