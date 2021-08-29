<div class="col-12 col-sm-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header border-bottom">
            <!-- <a href="<?#=base_url()?>main/proses/project/create" class="btn btn-success" style="font-weight: 800;">Create</a> -->
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
                <table class="table table-striped" id="my-tables">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Nama</th>
                            <th>Nilai</th>
                            <th>Deleted Status</th>
                            <th>Created On</th>
                            <th>Created By</th>
                            <th>Update On</th>
                            <th>Update By</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i = 1; 
                            foreach ($dataMaster as $key => $value) { ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $value->Nama ?></td>
                            <td><?= $value->Nilai ?></td>
                            <td><?= $value->Deleted ?></td>
                            <td><?= !empty($value->CreatedOn) || $value->CreatedOn != '' ? tanggal_indo($value->CreatedOn) : '' ?></td>
                            <td><?= $value->CreatedBy ?></td>
                            <td><?= !empty($value->UpdatedOn) || $value->UpdatedOn != '' ? tanggal_indo($value->UpdatedOn) : '' ?></td>
                            <td><?= $value->UpdatedBy ?></td>
                            <td>
                                <a href="<?= base_url()?>main/proses/master_data/update/<?=$value->Kodemstrdata?>"
                                    class="btn btn-info btn-sm editData m-1 p-2" style="font-weight: 800;">Update</a>
                                <!-- <a class="btn btn-danger btn-sm m-1 deleteData" href="javascript:void(0);"
                                    onclick="deletes(<?#= $value->Kodemstrdata ?>);" style="font-weight: 800;">Delete</a> -->
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