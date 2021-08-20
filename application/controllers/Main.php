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
                        $field->komponen        = null;
                        $field->tegangan        = null;
                        $field->desain_tower    = null;
                        $field->konduktor       = null;
                        $field->tipe_konduktor  = null;
                        // $field->role_id = null;
                }else {
                    $field = $this->General_m->select('project', ['id_project' => $id], 'row');
                }
                $data = [
                    'page'      => $type,
                    'title'     => 'Project | Monitoring Pekerjaan',
                    'header'     => ucfirst($action) .' Project',
                    'action'    => $action,
                    'field'     => $field
                ];

                if ($action == 'detail') {
                    $data['section'] = 'detail/project';
                } else {
                    $data['section'] = 'form/project';
                }
                
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
                    'komponen'            => $this->input->post('komponen'),
                    'tegangan'       => $this->input->post('tegangan'),
                    'desain_tower'         => $this->input->post('desain_tower'),
                    'konduktor'       => $this->input->post('konduktor'),
                    'tipe_konduktor'         => $this->input->post('tipe_konduktor')
                ];
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
                    'komponen'            => $this->input->post('komponen'),
                    'tegangan'       => $this->input->post('tegangan'),
                    'desain_tower'         => $this->input->post('desain_tower'),
                    'konduktor'       => $this->input->post('konduktor'),
                    'tipe_konduktor'         => $this->input->post('tipe_konduktor')
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
}