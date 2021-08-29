<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('General_m');
        $this->load->helper('helpers');
        $this->load->helper('download');
    }

    public function index($content = null)
	{ 
        if (!$this->session->userdata('authenticated_cms')){
            $this->load->view('login');
        }else {
            switch ($content) {
                case 'project':
                    $data = [
                        'page'      => $content,
                        'title'     => 'Project | Sag-ten',
                        'header'    => 'Project',
                        'dataProject'   => $this->General_m->select('project', [], 'result', 'nama_project', 'asc'),
                        'section'   => 'content/project'
                    ];
                    break;

                case 'master_data':
                    $data = [
                        'page'      => $content,
                        'title'     => 'Master Data | Sag-ten',
                        'header'    => 'Master Data',
                        'dataMaster'   => $this->General_m->select('master_data', [], 'result', 'Kodemstrdata', 'asc'),
                        'section'   => 'content/master_data.php'
                    ];
                    break;
                
                default:
                    $data = [
                        'title'     => 'Dashboard | Sag-ten',
                        'header'    => 'Dashboard',
                        'section'   => 'content/home'
                    ];
                    break;
            }
            $this->load->view('main', $data);
        }
    }

    /*
    |--------------------------------------------------------------------------
    | Load View Form Create atau Update Data
    |--------------------------------------------------------------------------
    */
    public function proses($type = NULL, $action = NULL, $id = NULL) {
        switch ($type) {
            case 'project':
                if ($action == 'create') {
                    $field = new stdClass();
                        $field->id_project      = null;
                        $field->nama_project    = null;
                        $field->tgl_project     = null;
                        $field->engineer        = null;
                        $field->Komponen        = null;
                        $field->Tegangan        = null;
                        $field->DesainTower    = null;
                        $field->Konduktor       = null;
                        $field->TipeKonduktor  = null;
                }else {
                    $field = $this->General_m->select('project', ['id_project' => $id], 'row');
                }
                $data = [
                    'page'      => $type,
                    'title'     => 'Project | Monitoring Pekerjaan',
                    'header'     => ucfirst($action) .' Project',
                    'action'    => $action,
                    'listKomponen'   => $this->General_m->select('master_data', ['Nama' => 'Komponen'], 'row'),
                    'listTegangan'   => $this->General_m->select('master_data', ['Nama' => 'Tegangan'], 'row'),
                    'listDesainTower'   => $this->General_m->select('master_data', ['Nama' => 'DesainTower'], 'row'),
                    'listKonduktor'   => $this->General_m->select('master_data', ['Nama' => 'Konduktor'], 'row'),
                    'listTipeKonduktor'   => $this->General_m->select('master_data', ['Nama' => 'Komponen'], 'row'),
                    'field'     => $field
                ];

                if ($action == 'detail') {
                    $data['section'] = 'detail/project';
                } else {
                    $data['section'] = 'form/project';
                }
                
            break;

            case 'master_data':
                if ($action == 'create') {
                    $field = new stdClass();
                        $field->Kodemstrdata        = null;
                        $field->Nilai               = null;
                        // $field->Deleted             = null;
                        // $field->engineer        = null;
                        // $field->Komponen        = null;
                        // $field->Tegangan        = null;
                        // $field->DesainTower    = null;
                        // $field->Konduktor       = null;
                        // $field->TipeKonduktor  = null;
                }else {
                    $field = $this->General_m->select('master_data', ['Kodemstrdata' => $id], 'row');
                }
                $data = [
                    'page'      => $type,
                    'title'     => 'Master Data | Monitoring Pekerjaan',
                    'header'     => ucfirst($action) .' Master Data',
                    'action'    => $action,
                    'field'     => $field
                ];

                // if ($action == 'detail') {
                //     $data['section'] = 'detail/project';
                // } else {
                    $data['section'] = 'form/master_data';
                // }
                
            break;
        }
        $this->load->view('main', $data);
    }

    /*
    |--------------------------------------------------------------------------
    | Action Create Data
    |--------------------------------------------------------------------------
    */
    public function create($type = null){
        switch ($type) {
            case 'project':
                $table = "project" ;
                $data = [
                    'nama_project'    => $this->input->post('nama_project'),
                    'tgl_project'     => $this->input->post('tgl_project'),
                    'engineer'            => $this->input->post('engineer'),
                    'Komponen'            => $this->input->post('komponen'),
                    'Tegangan'       => $this->input->post('tegangan'),
                    'DesainTower'         => $this->input->post('desain_tower'),
                    'Konduktor'       => $this->input->post('konduktor'),
                    'TipeKonduktor'         => $this->input->post('tipe_konduktor'),
                ];
                
                $dataMaster   = $this->General_m->select('master_data', [], 'result', 'Kodemstrdata', 'asc');
                foreach ($dataMaster as $key => $value) {
                    if ($key < 5) {
                        continue;
                    }
                    $data[$value->Nama] =  empty($value->Nilai) ? null : $value->Nilai;
                }
            break;
        }


        if ($this->General_m->save($table, $data)) {
            $this->session->set_flashdata([
                'alert'     => 'success',
                'message'   => '<strong>Create Sukses <i class="fa fa-check-circle"></i></strong>',
                ]);
        }else {
            $this->session->set_flashdata([
                'alert'     => 'danger',
                'message'   => '<strong>Create Gagal <i class="fa fa-times-circle"></i></strong>',
                ]);
        }
        redirect('main/index/'.$type.'');
    }

    /*
    |--------------------------------------------------------------------------
    | Action Update Data
    |--------------------------------------------------------------------------
    */
    public function update($type = null){
        switch ($type) {
            case 'project':
                $table = "project" ;
                $where = ['id_project' => $this->input->post('id')];
                $data = [
                    'nama_project'    => $this->input->post('nama_project'),
                    'tgl_project'     => $this->input->post('tgl_project'),
                    'engineer'            => $this->input->post('engineer'),
                    'Komponen'            => $this->input->post('komponen'),
                    'Tegangan'       => $this->input->post('tegangan'),
                    'DesainTower'         => $this->input->post('desain_tower'),
                    'Konduktor'       => $this->input->post('konduktor'),
                    'TipeKonduktor'         => $this->input->post('tipe_konduktor'),
                    'BasicSpan'            => $this->input->post('BasicSpan'),
                    'RullingSpan'            => $this->input->post('RullingSpan'),
                    'SegmenRullingSpan'       => $this->input->post('SegmenRullingSpan'),
                    'HeightDifference'         => $this->input->post('HeightDifference'),
                    'WindpressureMWT'       => $this->input->post('WindpressureMWT'),
                    'WindPressureAtSagging'            => $this->input->post('WindPressureAtSagging'),
                    'EverydaytemperatureEDT'            => $this->input->post('EverydaytemperatureEDT'),
                    'MinimumTemperatureMWT'       => $this->input->post('MinimumTemperatureMWT'),
                    'MaximumTemperatureMAXSAG'         => $this->input->post('MaximumTemperatureMAXSAG'),
                    'Diameter'       => $this->input->post('Diameter'),
                    'Weight'            => $this->input->post('Weight'),
                    'KneePointTemperatureKPT'            => $this->input->post('KneePointTemperatureKPT'),
                    'Total'       => $this->input->post('Total'),
                    'Alumunium'         => $this->input->post('Alumunium'),
                    'ElasticModulus'       => $this->input->post('ElasticModulus'),
                    'ThermalExpansionCoeff'            => $this->input->post('ThermalExpansionCoeff'),
                    'TemperatureAtSagging'            => $this->input->post('TemperatureAtSagging'),
                    'MeasuredSagOfLowestSupport'       => $this->input->post('MeasuredSagOfLowestSupport'),
                    'MaximumWorkingTension'         => $this->input->post('MaximumWorkingTension'),
                    'BreakingStrength'       => $this->input->post('BreakingStrength')
                ];
            break;

            case 'master_data':
                $table = "master_data" ;
                $where = ['Kodemstrdata' => $this->input->post('id')];
                $data = [
                    'Nilai'     => $this->input->post('Nilai'),
                    'UpdatedOn'            => date('Y-m-d'),
                    'UpdatedBy'            => $_SESSION['nama'],
                    // 'Tegangan'       => $this->input->post('tegangan'),
                    // 'DesainTower'         => $this->input->post('desain_tower'),
                    // 'Konduktor'       => $this->input->post('konduktor'),
                    // 'TipeKonduktor'         => $this->input->post('tipe_konduktor')
                ];
            break;
        }
        
        if ($this->General_m->update($table, $data, $where)) {
            $this->session->set_flashdata([
                'alert'     => 'success',
                'message'   => '<strong>Update Sukses <i class="fa fa-check-circle"></i></strong>',
                ]);
        }else {
            $this->session->set_flashdata([
                'alert'     => 'danger',
                'message'   => '<strong>Update Gagal <i class="fa fa-times-circle"></i></strong>',
                ]);
        }
        redirect('main/index/'.$type.'');
    }

    /*
    |--------------------------------------------------------------------------
    | Action Delete Data
    |--------------------------------------------------------------------------
    */
    public function delete($type, $id){
        switch ($type) {
            case 'project':
                $table = "project" ;
                $where = ['id_project' => $id];
                break;
        }

        if ($this->General_m->delete($table, $where)) {
            $this->session->set_flashdata([
                'alert'     => 'success',
                'message'   => '<strong>Delete Sukses <i class="fa fa-check-circle"></i></strong>',
                ]);
        }else {
            $this->session->set_flashdata([
                'alert'     => 'danger',
                'message'   => '<strong>Delete Gagal <i class="fa fa-times-circle"></i></strong>',
                ]);
        }
        redirect('main/index/'.$type.'');
    }

    // 
    // Login Action
    //
    public function login(){
        $email      = $this->input->post('email');
        $password   = $this->input->post('password');
        
        $user = $this->General_m->select("user", ['email' => $email], "row", null, null, null);

        if (empty($user)) {
            $this->session->set_flashdata('message', 'Email tidak ditemukan');
        }else {
            if (md5($password) == $user->password) {
                $session = array(
                    'authenticated_cms' => true,
                    'id_user'           => $user->id_user,
                    'email'             => $user->email,
                    'nama'              => $user->nama
                );
                $this->session->set_userdata($session);
            }else {
                $this->session->set_flashdata('message', 'Password tidak sesuai');
            }
        }
        redirect('/');
        
    }

    // 
    // Logout Action
    //
    public function logout(){
        $this->session->sess_destroy();
        $this->session->unset_userdata('authenticated_cms');
        redirect('main'); 
    }

    /*
    |--------------------------------------------------------------------------
    | Action Delete Data
    |--------------------------------------------------------------------------
    */
    // public function dataJson($type, $id = null){
    //     switch ($type) {
    //         case 'project':
    //             $data = [
    //                 'dataProject' => $this->General_m->select('project', ['id_project' => $id], 'result', 'nama_project', 'asc'),
    //                 'dataMaster' => $this->General_m->select('data_master', [], 'result')
    //             ];
    //             break;
    //     }

    //     echo json_encode($data);
    // }
    
}