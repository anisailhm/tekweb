<div class="container-fluid">
    <h3> <i class="fas fa-edit"></i> EDIT DATA BARANG </h3>

    <?php foreach($barang as $brg) : ?>

        <form action="POST" action="<?php echo base_url(). 'admin/data_barang/update' ?>">
        <input type="hidden" name="id_brg" class="form-control" value = "<?php echo $brg->id_brg ?>"> 
            <div class="form-group">
                <label> Nama Barang </label>
                <input type="text" name="nama_brg" class="form-control" value = "<?php echo $brg->nama_brg ?>"> 
            </div>

            <div class="form-group">
           
                    <label> Keterangan </label>
                    <input type="text" name="keterangan" class="form-control" value = "<?php echo $brg->keterangan ?>"> 
                </div>

                <div class="form-group">
                    <label> Kategori </label>
                    <input type="text" name="kategori" class="form-control" value = "<?php echo $brg->kategori ?>"> 
                </div>

                <div class="form-group">
                    <label> Harga </label>
                    <input type="text" name="harga" class="form-control" value = "<?php echo $brg->harga ?>">  
                </div>

                <div class="form-group">
                    <label> Stok </label>
                    <input type="text" name="stok" class="form-control" value = "<?php echo $brg->stok ?>">  
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>

        </form>

    <?php endforeach; ?>
</div>