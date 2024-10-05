<?php include "layouts/header.php"  ?>


        <div  class="row mt-3">
            <div class="col-12 col-md-9">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Selamat</strong> Pesanan anda berhasil disimpan.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                </div>

                <div class="card">
                    <div class="card-header text-center">
                        BUKTI PEMESANAN PAKET WISATA
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <td>Nama</td>
                                <td>Doni kusuma</td>
                            </tr>
                            <tr>
                                <td>Jumlah peserta</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>Waktu Perjalanan</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>Layanan paket</td>
                                <td>Penginapan, Transportasi</td>
                            </tr>
                            <tr>
                                <td>Harga Paket</td>
                                <td>Rp. 900.0000</td>
                            </tr>
                            <tr>
                                <td>Jumlah Tagihan</td>
                                <td>Rp. 1000.0000</td>
                            </tr>
                        </table>
                    </div>

                </div>
                
                <div class="card text-center">
                    <span>Pesan Lagi? </span>
                    <row>
                        <a href="pemesanan.php" class="btn btn-primary">Ya</a>
                        <a href="index.php" class="btn btn-danger">Tidak</a>
                    </row>
                </div>

            </div>
            <?php include "layouts/sidebar.php"?>

        </div>

        <!-- Footer -->
      <?php include "layouts/footer.php"; ?>

    </div>

    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>