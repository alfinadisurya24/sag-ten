<?php 

$komponen = explode(';', $listKomponen->Nilai);
$tegangan = explode(';', $listTegangan->Nilai);
$desainTower = explode(';', $listDesainTower->Nilai);
$konduktor = explode(';', $listKonduktor->Nilai);
$tipeKonduktor = explode(';', $listTipeKonduktor->Nilai);
?>

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
                        <option value="" disabled selected>* Pilih Komponen</option>
                        <?php foreach ($komponen as $key => $value) { ?>
                            <option value="<?= $value ?>" <?= $value == $field->Komponen ? 'selected' : '' ?>><?= $value ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tegangan">Tegangan</label>
                    <select class="form-control bg-white" id="tegangan" name="tegangan" required>
                        <option value="" disabled selected>* Pilih Tegangan</option>
                        <?php foreach ($tegangan as $key => $value) { ?>
                            <option value="<?= $value ?>" <?= $value == $field->Tegangan ? 'selected' : '' ?>><?= $value ?> kV</option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="desain_tower">Desain Tower</label>
                    <select class="form-control bg-white" id="desain_tower" name="desain_tower" required>
                        <option value="" disabled selected>* Pilih Desain Tower</option>
                        <?php foreach ($desainTower as $key => $value) { ?>
                            <option value="<?= $value ?>" <?= $value == $field->DesainTower ? 'selected' : '' ?>><?= $value ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="konduktor">Konduktor</label>
                    <select class="form-control bg-white" id="konduktor" name="konduktor" required>
                        <option value="" disabled selected>* Pilih Konduktor</option>
                        <?php foreach ($konduktor as $key => $value) { ?>
                            <option value="<?= $value ?>" <?= $value == $field->Konduktor ? 'selected' : '' ?>><?= $value ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tipe_konduktor">Tipe Konduktor</label>
                    <select class="form-control bg-white" id="tipe_konduktor" name="tipe_konduktor" required>
                        <option value="" disabled selected>* Pilih Tipe Konduktor</option>
                        <?php foreach ($tipeKonduktor as $key => $value) { ?>
                            <option value="<?= $value ?>" <?= $value == $field->TipeKonduktor ? 'selected' : '' ?>><?= $value ?></option>
                        <?php } ?>
                    </select>
                </div>
                <?php if ($action == 'update') {?>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h5 class="font-weight-bold">Geometric :</h5>
                            <div class="form-group">
                                <label for="BasicSpan">Basic Span</label>
                                <input type="text" class="form-control" id="BasicSpan" name="BasicSpan" value="<?= $field->BasicSpan ?>" placeholder="* basic span">
                            </div>
                            <div class="form-group">
                                <label for="RullingSpan">Rulling Span</label>
                                <input type="text" class="form-control" id="RullingSpan" name="RullingSpan" value="<?= $field->RullingSpan ?>" placeholder="* rulling span">
                            </div>
                            <div class="form-group">
                                <label for="SegmenRullingSpan">Segmen Rulling Span</label>
                                <input type="text" class="form-control" id="SegmenRullingSpan" name="SegmenRullingSpan" value="<?= $field->SegmenRullingSpan ?>" placeholder="* segmen rulling span">
                            </div>
                            <div class="form-group">
                                <label for="HeightDifference">Height Difference</label>
                                <input type="text" class="form-control" id="HeightDifference" name="HeightDifference" value="<?= $field->HeightDifference ?>" placeholder="* height difference">
                            </div>

                            <h5 class="font-weight-bold">Design Load & Temperature :</h5>
                            <div class="form-group">
                                <label for="WindpressureMWT">Wind Pressure MWT</label>
                                <input type="text" class="form-control" id="WindpressureMWT" name="WindpressureMWT" value="<?= $field->WindpressureMWT ?>" placeholder="* Wind Pressure MWT">
                            </div>
                            <div class="form-group">
                                <label for="WindPressureAtSagging">Wind Pressure at Sagging</label>
                                <input type="text" class="form-control" id="WindPressureAtSagging" name="WindPressureAtSagging" value="<?= $field->WindPressureAtSagging ?>" placeholder="* Wind Pressure at Sagging">
                            </div>
                            <div class="form-group">
                                <label for="EverydaytemperatureEDT">Everyday temperature (EDT)</label>
                                <input type="text" class="form-control" id="EverydaytemperatureEDT" name="EverydaytemperatureEDT" value="<?= $field->EverydaytemperatureEDT ?>" placeholder="* Everyday temperature (EDT)">
                            </div>
                            <div class="form-group">
                                <label for="MinimumTemperatureMWT">Minimum temperature (MWT)</label>
                                <input type="text" class="form-control" id="MinimumTemperatureMWT" name="MinimumTemperatureMWT" value="<?= $field->MinimumTemperatureMWT ?>" placeholder="* Minimum temperature (MWT)">
                            </div>
                            <div class="form-group">
                                <label for="MaximumTemperatureMAXSAG">Maximum temperature (MAXSAG)</label>
                                <input type="text" class="form-control" id="MaximumTemperatureMAXSAG" name="MaximumTemperatureMAXSAG" value="<?= $field->MaximumTemperatureMAXSAG ?>" placeholder="* Maximum temperature (MAXSAG)">
                            </div>

                            <h5 class="font-weight-bold">Conductor :</h5>
                            <div class="form-group">
                                <label for="Diameter">Diameter</label>
                                <input type="text" class="form-control" id="Diameter" name="Diameter" value="<?= $field->Diameter ?>" placeholder="* Diameter">
                            </div>
                            <div class="form-group">
                                <label for="Weight">Weight</label>
                                <input type="text" class="form-control" id="Weight" name="Weight" value="<?= $field->Weight ?>" placeholder="* Weight">
                            </div>
                            <div class="form-group">
                                <label for="KneePointTemperatureKPT">Knee point temperature (KPT)</label>
                                <input type="text" class="form-control" id="KneePointTemperatureKPT" name="KneePointTemperatureKPT" value="<?= $field->KneePointTemperatureKPT ?>" placeholder="* Knee point temperature (KPT)">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <h5 class="font-weight-bold">Cross section area :</h5>
                            <div class="form-group">
                                <label for="Total">Total</label>
                                <input type="text" class="form-control" id="Total" name="Total" value="<?= $field->Total ?>" placeholder="* Total">
                            </div>
                            <div class="form-group">
                                <label for="Alumunium">Alumunium</label>
                                <input type="text" class="form-control" id="Alumunium" name="Alumunium" value="<?= $field->Alumunium ?>" placeholder="* Alumunium">
                            </div>

                            <h5 class="font-weight-bold">Mechanical Properties :</h5>
                            <div class="form-group">
                                <label for="ElasticModulus">Elastic Modulus</label>
                                <input type="text" class="form-control" id="ElasticModulus" name="ElasticModulus" value="<?= $field->ElasticModulus ?>" placeholder="* Elastic Modulus">
                            </div>
                            <div class="form-group">
                                <label for="ThermalExpansionCoeff">Thermal Expansion Coeff</label>
                                <input type="text" class="form-control" id="ThermalExpansionCoeff" name="ThermalExpansionCoeff" value="<?= $field->ThermalExpansionCoeff ?>" placeholder="* Thermal Expansion Coeff">
                            </div>
                            <div class="form-group">
                                <label for="TemperatureAtSagging">Temperature at Sagging</label>
                                <input type="text" class="form-control" id="TemperatureAtSagging" name="TemperatureAtSagging" value="<?= $field->TemperatureAtSagging ?>" placeholder="* Temperature at Sagging">
                            </div>
                            <div class="form-group">
                                <label for="MeasuredSagOfLowestSupport">Measured Sag of Lowest Support</label>
                                <input type="text" class="form-control" id="MeasuredSagOfLowestSupport" name="MeasuredSagOfLowestSupport" value="<?= $field->MeasuredSagOfLowestSupport ?>" placeholder="* Measured Sag of Lowest Support">
                            </div>
                            <div class="form-group">
                                <label for="MaximumWorkingTension">Maximum Working Tension</label>
                                <input type="text" class="form-control" id="MaximumWorkingTension" name="MaximumWorkingTension" value="<?= $field->MaximumWorkingTension ?>" placeholder="* Maximum Working Tension">
                            </div>
                            <div class="form-group">
                                <label for="BreakingStrength">Breaking Strength</label>
                                <input type="text" class="form-control" id="BreakingStrength" name="BreakingStrength" value="<?= $field->BreakingStrength ?>" placeholder="* Breaking Strength">
                            </div>
                        </div>
                </div>
                <?php } ?>
                <button type="submit" class="btn btn-primary me-2"><?= $action ?></button>
            </form>
        </div>
    </div>
</div>