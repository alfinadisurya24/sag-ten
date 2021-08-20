<div class="col-12 col-sm-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header border-bottom">
            <a href="<?=base_url()?>main/proses/project/create" class="btn btn-success" style="font-weight: 800;">Create</a>
        </div>
        <div class="card-body">
            <!-- <h4 class="card-title">Basic Table</h4>
            <p class="card-description">
                Add class <code>.table</code>
            </p> -->
            <?php if ($this->session->flashdata('message')) {?>
                <div class="alert alert-<?= $this->session->flashdata('alert');?>">
                <?= $this->session->flashdata('message');?>
                </div>
            <?php } ?>
            <div class="table-responsive">
                <table class="table" id="my-tables">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Nama Project</th>
                            <th>Tanggal</th>
                            <th>Engineer</th>
                            <th>Komponen</th>
                            <th>Tegangan</th>
                            <th>Deasin Tower</th>
                            <th>Konduktor</th>
                            <th>Tipe Konduktor</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i = 1; 
                            foreach ($dataProject as $key => $value) { ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $value->nama_project ?></td>
                            <td><?= tanggal_indo($value->tgl_project) ?></td>
                            <td><?= $value->engineer ?></td>
                            <td><?= $value->komponen ?></td>
                            <td><?= $value->tegangan ?></td>
                            <td><?= $value->desain_tower ?></td>
                            <td><?= $value->konduktor ?></td>
                            <td><?= $value->tipe_konduktor ?></td>
                            <td>
                                <a href="<?= base_url()?>main/proses/project/detail/<?=$value->id_project?>"
                                    class="btn btn-success btn-sm detailData m-1" style="font-weight: 800;">Detail</a>
                                <a href="<?= base_url()?>main/proses/project/update/<?=$value->id_project?>"
                                    class="btn btn-info btn-sm editData m-1" style="font-weight: 800;">Update</a>
                                <a class="btn btn-danger btn-sm m-1 deleteData" href="javascript:void(0);"
                                    onclick="deletes(<?= $value->id_project ?>);" style="font-weight: 800;">Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    function deletes(id){  
        var r = confirm("Apakah Anda yakin ingin menghapus data ?");
        if (r == true) {
            window.location = '<?= base_url()?>main/delete/project/'+id;
        } else {
            return false;
        }
    }
    
    $(document).ready(function () {
        // show modal delete data
        // $(".deleteData").click(function (e) {
        //     // e.preventDefault();
        //     $("#modal-delete").modal('show');
        //     $("#id").val($(this).data("id"));
        // });

        
    });

</script>