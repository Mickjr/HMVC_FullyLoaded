<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skills extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('skills_model','skills');
        $this->data = array();
    }

    public function index()
    {

        $this->load->helper('url');
        $this->load->library('session');
        // $this->session->set_userdata('some_name', 'some_value');
        $this->load->view('list_view');
    }

    public function ajax_list()
    {
        $list = $this->skills->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $skills) {
            $no++;
            $row = array();
            // $row[] = $skills->id;
            $row[] = $skills->skill;
            $row[] = $skills->something;
            $row[] = $skills->dob;

            //add html for action
            $row[] = '<a class="btn btn-sm btn-primary" href="skills/edit/'.$skills->id.'" title="Edit"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_person('."'".$skills->id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';

            $data[] = $row;
        }

        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->skills->count_all(),
                        "recordsFiltered" => $this->skills->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }


    public function ajax_delete($id)
    {
        $this->skills->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }


    private function _validate()
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;

        if($this->input->post('skill') == '')
        {
            $data['inputerror'][] = 'skill';
            $data['error_string'][] = 'Skill is required';
            $data['status'] = FALSE;
        }

        if($this->input->post('something') == '')
        {
            $data['inputerror'][] = 'something';
            $data['error_string'][] = 'something is required';
            $data['status'] = FALSE;
        }

        if($this->input->post('dob') == '')
        {
            $data['inputerror'][] = 'dob';
            $data['error_string'][] = 'Date of Birth is required';
            $data['status'] = FALSE;
        }


        if($data['status'] === FALSE)
        {
            echo json_encode($data);
            exit();
        }
    }


    public function add()
  	{

  		$this->load->library('form_validation');
  		$this->form_validation->set_rules('skill','Request Skill','trim|required');

  		if ($this->form_validation->run()===FALSE)
  		{

  	        $this->load->view('add_view');

  		} else
  		{

  			// Save New Record
  			$data = array();
				$data['skill'] 		   = $this->input->post('skill');
				$data['something']	 = $this->input->post('something');

  			$insert = $this->skills->save($data);
  			redirect('skills','refresh');
  		}

  	}

  	public function edit($id = NULL)
  	{

		  $id = $this->input->post('id') ? $this->input->post('id') : $id;

  		$this->load->library('form_validation');
  		$this->form_validation->set_rules('skill','Skill','trim|required');

  		if ($this->form_validation->run()===FALSE)
  		{

        $data = $this->skills->get_by_id($id);

        $this->load->view('edit_view', $data);

  		} else
  		{
  			// Update Database Record

      $myID  = $this->input->post('myID'); // this is the value of the hidden field in the form

      // $data['skill'] 		   = $this->input->post('skill');
      // $data['something']	 = $this->input->post('something');

      $data = array(
        'skill'     => $this->input->post('skill'),
        'something' => $this->input->post('something')
      );


			$this->skills->update($myID, $data);

			redirect('skills','refresh');

  		}

  	}








}
