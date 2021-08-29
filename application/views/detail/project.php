<?php

$ElasticModulus = $field->ElasticModulus;
if (!empty($ElasticModulus) && $ElasticModulus != '') {
    $ElasticModulus = explode('*', $ElasticModulus);
}
?>

<div class="col-12 col-sm-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-2 col-sm-2 col-md-2 col-lg-2">
                    <h4>Project</h4>
                </div>
                <div class="col-10 col-sm-10 col-md-10 col-lg-10">
                    <h4>: <?= $field->nama_project ?></h4>
                </div>

                <div class="col-2 col-sm-2 col-md-2 col-lg-2">
                    <h4>Tanggal</h4>
                </div>
                <div class="col-10 col-sm-10 col-md-10 col-lg-10">
                    <h4>: <?= tanggal_indo($field->tgl_project) ?></h4>
                </div>

                <div class="col-2 col-sm-2 col-md-2 col-lg-2">
                    <h4>Engineer</h4>
                </div>
                <div class="col-10 col-sm-10 col-md-10 col-lg-10">
                    <h4>: <?= $field->engineer ?></h4>
                </div>

                <div class="col-2 col-sm-2 col-md-2 col-lg-2">
                    <h4>Komponen</h4>
                </div>
                <div class="col-10 col-sm-10 col-md-10 col-lg-10">
                    <h4>: <?= $field->Komponen ?></h4>
                </div>

                <div class="col-2 col-sm-2 col-md-2 col-lg-2">
                    <h4>Tegangan</h4>
                </div>
                <div class="col-10 col-sm-10 col-md-10 col-lg-10">
                    <h4>: <?= $field->Tegangan.' kV' ?></h4>
                </div>

                <div class="col-2 col-sm-2 col-md-2 col-lg-2">
                    <h4>Desain Tower</h4>
                </div>
                <div class="col-10 col-sm-10 col-md-10 col-lg-10">
                    <h4>: <?= $field->DesainTower ?></h4>
                </div>

                <div class="col-2 col-sm-2 col-md-2 col-lg-2">
                    <h4>Konduktor</h4>
                </div>
                <div class="col-10 col-sm-10 col-md-10 col-lg-10">
                    <h4>: <?= $field->Konduktor ?></h4>
                </div>

                <div class="col-2 col-sm-2 col-md-2 col-lg-2">
                    <h4>Tipe Konduktor</h4>
                </div>
                <div class="col-10 col-sm-10 col-md-10 col-lg-10">
                    <h4>: <?= $field->TipeKonduktor ?></h4>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="card">
        <div class="card-header border-bottom">
            <h3 class="text-center">Data</h3>
        </div>
        <div class="card-body">
            <table>
                <tr>
                    <td style="vertical-align:top; width:50%; padding-right: 1rem;">
                        <h5 class="font-weight-bold">Geometric :</h5>
                        <div class="row">
                            
                            <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                                <p>Basic Span</p>
                            </div>
                            <div class="col-8 col-sm-8 col-md-8 col-lg-8">
                                <p>= <span id="BasicSpan"><?= $field->BasicSpan ?></span> m</p>
                            </div>

                            <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                                <p>Rulling Span</p>
                            </div>
                            <div class="col-8 col-sm-8 col-md-8 col-lg-8">
                                <p>= <span id="RullingSpan"><?= $field->RullingSpan ?></span> m</p>
                            </div>

                            <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                                <p>Segmen Rulling Span</p>
                            </div>
                            <div class="col-8 col-sm-8 col-md-8 col-lg-8">
                                <p>= <span id="SegmenRullingSpan"><?= $field->SegmenRullingSpan ?></span></p>
                            </div>

                            <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                                <p>Height difference</p>
                            </div>
                            <div class="col-8 col-sm-8 col-md-8 col-lg-8">
                                <p>= <span id="HeightDifference"><?= $field->HeightDifference ?></span> m</p>
                            </div>
                            
                        </div>

                        <hr>

                        <h5 class="font-weight-bold">Design Load & Temperature :</h5>
                        <div class="row">
                            
                            <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                                <p>Wind Pressure MWT</p>
                            </div>
                            <div class="col-8 col-sm-8 col-md-8 col-lg-8">
                                <p>= <span id="WindpressureMWT"><?= $field->WindpressureMWT ?></span> kg/m2</p>
                            </div>

                            <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                                <p>Wind Pressure EDT</p>
                            </div>
                            <div class="col-8 col-sm-8 col-md-8 col-lg-8">
                                <p>= <span id="wp_edt"><?= floatval($field->WindpressureMWT)*(0^2)/(25^2) ?></span> kg/m2</p>
                            </div>

                            <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                                <p>Wind Pressure at Sagging</p>
                            </div>
                            <div class="col-8 col-sm-8 col-md-8 col-lg-8">
                                <p>= <span id="WindPressureAtSagging"><?= $field->WindPressureAtSagging ?></span> kg/m2</p>
                            </div>

                            <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                                <p>Everyday temperature (EDT)</p>
                            </div>
                            <div class="col-8 col-sm-8 col-md-8 col-lg-8">
                                <p>= <span id="EverydaytemperatureEDT"><?= $field->EverydaytemperatureEDT ?></span> &#176;C</p>
                            </div>

                            <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                                <p>Minimum temperature (MWT)</p>
                            </div>
                            <div class="col-8 col-sm-8 col-md-8 col-lg-8">
                                <p>= <span id="MinimumTemperatureMWT"><?= $field->MinimumTemperatureMWT ?></span> &#176;C</p>
                            </div>

                            <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                                <p>Maximum temperature (MAXSAG)</p>
                            </div>
                            <div class="col-8 col-sm-8 col-md-8 col-lg-8">
                                <p>= <span id="MaximumTemperatureMAXSAG"><?= $field->MaximumTemperatureMAXSAG ?></span> &#176;C</p>
                            </div>
                            
                        </div>  
                        
                        <hr>

                        <h5 class="font-weight-bold">Conductor :</h5>
                        <div class="row">
                            
                            <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                                <p>Type</p>
                            </div>
                            <div class="col-8 col-sm-8 col-md-8 col-lg-8">
                                <p>= <?= $field->TipeKonduktor ?></p>
                            </div>

                            <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                                <p>Diameter</p>
                            </div>
                            <div class="col-8 col-sm-8 col-md-8 col-lg-8">
                                <p>= <span id="Diameter"><?= $field->Diameter ?></span> mm</p>
                            </div>

                            <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                                <p>Weight</p>
                            </div>
                            <div class="col-8 col-sm-8 col-md-8 col-lg-8">
                                <p>= <span id="Weight"><?= $field->Weight ?></span> kg/km</p>
                            </div>

                            <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                                <p>Knee point temperature (KPT)</p>
                            </div>
                            <div class="col-8 col-sm-8 col-md-8 col-lg-8">
                                <p>= <span id="KneePointTemperatureKPT"><?= $field->KneePointTemperatureKPT ?></span> &#176;C</p>
                            </div>
                            
                        </div>  
                    </td>

                    <td style="vertical-align:top; width:50%; padding-left: 1rem;">
                        <h5 class="font-weight-bold">Cross section area:</h5>
                        <div class="row">
                            
                            <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                                <p>Total</p>
                            </div>
                            <div class="col-8 col-sm-8 col-md-8 col-lg-8">
                                <p>= <span id="Total"><?= $field->Total ?></span> m2</p>
                            </div>

                            <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                                <p>Alumunium</p>
                            </div>
                            <div class="col-8 col-sm-8 col-md-8 col-lg-8">
                                <p>= <span id="Alumunium"><?= $field->Alumunium ?></span> m2</p>
                            </div>

                            <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                                <p>Core</p>
                            </div>
                            <div class="col-8 col-sm-8 col-md-8 col-lg-8">
                                <p>= <span id="Core"><?= floatval($field->Total-$field->Alumunium) ?></span> m2</p>
                            </div>
                            
                        </div>

                        <hr>

                        <h5 class="font-weight-bold">Mechanical Properties :</h5>
                        <h5 class="font-weight-bold">Composite :</h5>
                        <div class="row">
                            
                            <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                                <p>Elastic Modulus </p>
                            </div>
                            <div class="col-8 col-sm-8 col-md-8 col-lg-8">
                                <p>= <span id="ElasticModulus"><?= floatval($ElasticModulus[0] * $ElasticModulus[1]) ?></span> kg/m2</p>
                            </div>

                            <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                                <p>Thermal Expansion Coeff</p>
                            </div>
                            <div class="col-8 col-sm-8 col-md-8 col-lg-8">
                                <p>= <span id="ThermalExpansionCoeff"><?= $field->ThermalExpansionCoeff ?></span></p>
                            </div>
                            
                        </div>
                        <h5 class="font-weight-bold">Core:</h5>
                        <div class="row">
                            
                            <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                                <p>Elastic Modulus </p>
                            </div>
                            <div class="col-8 col-sm-8 col-md-8 col-lg-8">
                                <p>= <span id="ElasticModulus"><?= floatval($ElasticModulus[0] * $ElasticModulus[1]) ?></span> kg/m2</p>
                            </div>

                            <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                                <p>Thermal Expansion Coeff</p>
                            </div>
                            <div class="col-8 col-sm-8 col-md-8 col-lg-8">
                                <p>= <span id="ThermalExpansionCoeff"><?= $field->ThermalExpansionCoeff ?></span></p>
                            </div>

                            <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                                <p>Temperature at Sagging</p>
                            </div>
                            <div class="col-8 col-sm-8 col-md-8 col-lg-8">
                                <p>= <span id="TemperatureAtSagging"><?= $field->TemperatureAtSagging ?></span> &#176;C</p>
                            </div>
                            
                        </div>                                                                          

                        <hr>

                        <div class="row">
                            
                            <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                                <p>Measured Sag of Lowest Support </p>
                            </div>
                            <div class="col-8 col-sm-8 col-md-8 col-lg-8">
                                <p>= <span id="MeasuredSagOfLowestSupport"><?= $field->MeasuredSagOfLowestSupport ?></span> m</p>
                            </div>

                            <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                                <p>Maximum Working Tension</p>
                            </div>
                            <div class="col-8 col-sm-8 col-md-8 col-lg-8">
                                <p>= <span id="MaximumWorkingTension"><?= $field->MaximumWorkingTension ?></span> kg</p>
                            </div>

                            <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                                <p>Breaking Strength</p>
                            </div>                                                                                                                      
                            <div class="col-8 col-sm-8 col-md-8 col-lg-8">
                                <p>= <span id="BreakingStrength"><?= $field->BreakingStrength ?></span> kg</p>
                            </div>
                            
                        </div>

                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>


<script>
    // $(document).ready(function () {
    //     $.ajax({
    //         type: "GET",
    //         url: <?#=  base_url()?>+'main/dataJson/project/<?#=$field->id_project?>',
    //         data: "",
    //         dataType: "JSON",
    //         success: function (p) {
    //             // geo
    //             $('#basic').text(350);
    //             $('#rulling').text();
    //             $('#segmen_rulling').text();
    //             $('#height_diff').text(0);

    //             // design
    //             $('#wp_mwt').text(40);
    //             var wp_mwt = parseFloat($('#wp_mwt').text());
    //             $('#wp_edt').text(wp_mwt*(0^2)/(25^2));
    //             $('#wp_sag').text();
    //             $('#edt').text(27);
    //             $('#mwt').text(10);
    //             $('#mwt').text(80);

    //             // conductor
    //             $('#diameter').text(28.15);
    //             $('#weight').text(1558);
    //             $('#kpt').text('NA');

    //             // cross
    //             $('#total').text(0.0005881);
    //             $('#allumunium').text(0.000517);
    //             var total = parseFloat($('#total').text());
    //             var allu = parseFloat($('#allumunium').text());
    //             $('#core').text(total - allu);

    //             // composite
    //             var elastic_compo = 1442393004.77523;
    //             var thermal_compo = 1442393004.77523;
    //             $('#elastic_compo').text(elastic_compo);
    //             $('#thermal_compo').text(thermal_compo);

    //             // core
    //             var elastic_core = 11930679692.1;
    //             var thermal_core = 1.600000006;
    //             $('#elastic_core').text(elastic_core);
    //             $('#elastic_core').text(thermal_core);
    //             $('#tempe_sag').text();

    //             $('#sag_low').text(9.57);
    //             $('#working_tension').text(3400);
    //             $('#break').text(1000*182.9/9.81);
    //         }
    //     });

        
    // });
</script>