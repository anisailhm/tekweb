<div class="container-fluid">

    <div class ="row text-center mt-4">
        <?php foreach ($barang as $brg) : ?>
            <div class="card ml-3 mb-3" style="width: 16rem;">
                <img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?php echo $brg->nama_brg?></h5>
                    <small><?php echo $brg->keterangan?></small><br>
                    <span class="badge bg-dark">Rp.<?php echo $brg->harga?></span> <br><br>
                    <?php echo anchor('dashboard/tambah_ke_keranjang/'.$brg->id_brg, '<div class="btn btn-sm btn-primary"> Add to Cart </div>')?>
                    
                    <a href="#" class="btn btn-sm btn-success">Detail</a>
                </div>
                </div>
        <?php endforeach; ?>
    </div>
</div>