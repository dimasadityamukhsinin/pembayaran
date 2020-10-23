<div class="section-header">
    <h1><?php echo $title ?></h1>
    <div class="section-header-breadcrumb">
    </div>
</div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped table-md">
                <tr>
                    <th>NO</th>
                    <th>SPP</th>
                    <th>KONTRIBUSI</th>
                    <th>BUKU</th>
                    <th>SEMESTER</th>
                    <th>TOTAL</th>
                    <th>TANGGAL</th>
                    <th>STATUS</th>
                </tr>
                <?php $no=1; foreach($tagihan as $tagihan) { ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $tagihan->spp ?></td>
                    <td><?php echo $tagihan->kontribusi ?></td>
                    <td><?php echo $tagihan->buku ?></td>
                    <td><?php echo $tagihan->semester ?></td>
                    <td><?php echo $tagihan->total ?></td>
                    <td><?php echo $tagihan->tanggal ?></td>
                    <td>
                        <?php if($tagihan->status == '0') { ?>
                            <div class="badge badge-danger">Belum  Lunas</div>
                        <?php }else { ?>
                            <div class="badge badge-success">Lunas</div>
                        <?php } ?>
                    </td>
                </tr>
                <?php } ?>
                </table>
            </div>
            </div>
            <div class="card-footer text-right">
            <nav class="d-inline-block">
                <ul class="pagination mb-0">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                <li class="page-item">
                    <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                </li>
                </ul>
            </nav>
            </div>
        </div>
        </div>
    </div>