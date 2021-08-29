<div class="col-12 col-sm-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-body">
            <?php if ($this->session->flashdata('message')) {?>
                <div class="alert alert-<?= $this->session->flashdata('alert');?>">
                    <?= $this->session->flashdata('message');?>
                </div>
            <?php } ?>
            <?= form_open_multipart('main/'.$action.'/'.$page.'');?>
                <input type="hidden" name="id" value="<?= $field->Kodemstrdata ?>">
                <div class="form-group">
                    <label for="Nilai">Nilai</label>
                    <input type="text" class="form-control" id="Nilai" name="Nilai" value="<?= $field->Nilai ?>" placeholder="* nilai" required>
                </div>
                <button type="submit" class="btn btn-primary me-2"><?= $action ?></button>
            </form>
        </div>
    </div>
</div>