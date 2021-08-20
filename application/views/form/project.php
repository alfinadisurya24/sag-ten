<div class="col-12 col-sm-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-body">
            <?php if ($this->session->flashdata('message')) {?>
                <div class="alert alert-<?= $this->session->flashdata('alert');?>">
                    <?= $this->session->flashdata('message');?>
                </div>
            <?php } ?>
            <?= form_open_multipart('main/'.$action.'/'.$page.'');?>
                <input type="hidden" name="id" value="<?= $field->id_project ?>">
                <div class="form-group">
                    <label for="nama_project">Nama</label>
                    <input type="text" class="form-control" id="nama_project" name="nama_project" value="<?= $field->nama_project ?>" placeholder="* nama" required>
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control" id="tgl_project" name="tgl_project" value="<?= $field->tgl_project ?>" required>
                </div>
                <div class="form-group">
                    <label for="engineer">Engineer</label>
                    <input type="text" class="form-control" id="engineer" name="engineer" value="<?= $field->engineer ?>" placeholder="engineer" required>
                </div>
                <div class="form-group">
                    <label for="komponen">Komponen</label>
                    <select class="form-control bg-white" id="komponen" name="komponen" required>
                        <option value="" disabled selected>* Pilih Konduktor</option>
                        <option value="Konduktor" <?= $field->komponen == 'Konduktor' ? 'selected' : '' ?>>Konduktor</option>
                        <option value="GW-AS" <?= $field->komponen == 'GW-AS' ? 'selected' : '' ?>>GW-AS</option>
                        <option value="GSW" <?= $field->komponen == 'GSW' ? 'selected' : '' ?>>GSW</option>
                        <option value="OPGW0" <?= $field->komponen == 'OPGW0' ? 'selected' : '' ?>>OPGW0</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tegangan">Tegangan</label>
                    <select class="form-control bg-white" id="tegangan" name="tegangan" required>
                        <option value="" disabled selected>* Pilih Tegangan</option>
                        <option value="150" <?= $field->tegangan == '150' ? 'selected' : '' ?>>150 kV</option>
                        <option value="275" <?= $field->tegangan == '275' ? 'selected' : '' ?>>275 kV</option>
                        <option value="500" <?= $field->tegangan == '500' ? 'selected' : '' ?>>500 kV</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="desain_tower">Desain Tower</label>
                    <select class="form-control bg-white" id="desain_tower" name="desain_tower" required>
                        <option value="" disabled selected>* Pilih Desain Tower</option>
                        <option value="Standar Terpusat" <?= $field->desain_tower == 'Standar Terpusat' ? 'selected' : '' ?>>Standar Terpusat</option>
                        <option value="Non Standar" <?= $field->desain_tower == 'Non Standar' ? 'selected' : '' ?>>Non Standar</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="konduktor">Konduktor</label>
                    <select class="form-control bg-white" id="konduktor" name="konduktor" required>
                        <option value="" disabled selected>* Pilih Konduktor</option>
                        <option value="ACSR SPLN" <?= $field->konduktor == 'ACSR SPLN' ? 'selected' : '' ?>>ASCR SPLN</option>
                        <option value="ACSR NON SPLN" <?= $field->konduktor == 'ACSR NON SPLN' ? 'selected' : '' ?>>ACSR NON SPLN</option>
                        <option value="HTLS" <?= $field->konduktor == 'HTLS' ? 'selected' : '' ?>>HTLS</option>
                        <option value="GW-AS" <?= $field->konduktor == 'GW-AS' ? 'selected' : '' ?>>GW-AS</option>
                        <option value="GSW" <?= $field->konduktor == 'GSW' ? 'selected' : '' ?>>GSW</option>
                        <option value="OPGW0" <?= $field->konduktor == 'OPGW0' ? 'selected' : '' ?>>OPGW0</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tipe_konduktor">Tipe Konduktor</label>
                    <select class="form-control bg-white" id="tipe_konduktor" name="tipe_konduktor" required>
                        <option value="" disabled selected>* Pilih Tipe Konduktor</option>
                        <option value="ACSR 250" <?= $field->tipe_konduktor == 'ACSR 250' ? 'selected' : '' ?>>ACSR 250</option>
                        <option value="ACSR 450" <?= $field->tipe_konduktor == 'ACSR 450' ? 'selected' : '' ?>>ACSR 450</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary me-2"><?= $action ?></button>
            </form>
        </div>
    </div>
</div>