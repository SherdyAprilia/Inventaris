<div class="row">
    <div class="col-lg-4">
    <div class="panel panel-primary">
        <div class="panel-heading">Tambah Inventaris</div>
            <div class="panel-body">
            <form action="" method="post">
                <div class="form-group">
                    <label for="">Kode Inventaris</label>
                    <input type="text" class="form-control" name="kode_inventaris" placeholder="Masukkan Kode Inventaris">
                </div>
                <div class="form-group">
                    <label for="">Nama Inventaris</label>
                    <input type="text" class="form-control" name="nama_barang" placeholder="Masukkan Nama Inventaris">
                </div>
                <div class="form-group">
                    <label for="">Kondisi</label>
                    <select name="" id="" class="form-control">
                        <option value="" name="kondisi" class="form-control">-Pilih-</option>
                        <option value="Baik" name="kondisi" class="form-control">Baik</option>
                        <option value="Rusak" name="kondisi" class="form-control">Rusak</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Jumlah</label>
                    <input type="number" class="form-control" name="jumlah" placeholder="Jumlah Barang">
                </div>
                <div class="form-group">
                    <label for="">Jenis Inventaris</label>
                    <select name="jenis" id="" class="form-control">
                    <option value="" class="form-control">-Pilih-</option>
                    <?php
                    $sql_jenis = "SELECT * FROM jenis";
                    $q_jenis = mysqli_query($koneksi, $sql_jenis);
                    while($jenis = mysqli_fetch_array($q_jenis)){
                        ?>
                        <option value="<?= $jenis['id_jenis']?>"><?= $jenis['nama_jenis']?></option>
                        <?php
                    }
                    ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Nama Ruang</label>
                    <select name="ruang" id="" class="form-control">
                    <option value="" class="form-control">-Pilih-</option>
                    <?php
                    $sql_ruang = "SELECT * FROM ruang";
                    $q_ruang = mysqli_query($koneksi, $sql_ruang);
                    while($ruang = mysqli_fetch_array($q_ruang)){
                        ?>
                        <option value="<?= $ruang['id_ruang']?>"><?= $ruang['nama_ruang']?></option>
                        <?php
                    }
                    ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Keterangan</label>
                    <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-md btn-primary" name="simpan">Simpan</button>
                    <a href="?p=list_barang" class="btn btn=md btn-default">Kembali</a>
                </div>
            </form>
            <?php
            if(isset($_POST['simpan'])){
                $kode_invetaris = $_POST['kode_invetaris'];
                $nama = $_POST['nama_barang'];
                $kondisi = $_POST['kondisi'];
                $jumlah = $_POST['jumlah'];
                $id_jenis = $_POST['jenis'];
                $id_ruang = $_POST['ruang'];
                $keterangan = $_POST['ket'];

                $sql = "INSERT INTO invetaris SET 
                kode_invetaris='$kode_invetaris', 
                nama='$nama', 
                kondisi='$kondisi', 
                jumlah='$jumlah', 
                id_jenis='$jenis', 
                id_ruang='$ruang', 
                keterangan='$keterangan'";

                $query = mysqli_query($koneksi, $sql);
                if($query){
                    ?>
                    <div class="alert alert-success">Barang berhasil ditambahkan</div>
                    <?php
                }else{
                    ?>
                    <div class="alert alert-danger">Barang gagal ditambahkan</div>
                    <?php
                }
            }
            ?>
            </div>
        </div>
    </div>
</div>
