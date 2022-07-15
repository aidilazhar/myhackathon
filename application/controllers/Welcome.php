<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 * 
	 */

	 
	public function index()
	{
		$this->load->view('welcome_message');
	}
   
	public function formpost()
    {
    
	$roption =  $this->input->post('roption');
	$searchid = $this->input->post('searchid');
	$carid = $this->input->post('carid');
	$make = $this->input->post('make');
	$model = $this->input->post('model');
	$colour = $this->input->post('colour');
	$owner = $this->input->post('owner');
	$base64image = '';
	
	$config = array(
		'upload_path' => APPPATH ."uploads/",
		'allowed_types' => "gif|jpg|png|jpeg|pdf",
		'overwrite' => TRUE,
		'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
		'max_height' => "768",
		'max_width' => "1024"
		);
		$this->load->library('upload', $config);
		if($this->upload->do_upload())
		{
		$data = array('upload_data' => $this->upload->data());

		$imagedata = file_get_contents($data['upload_data']['full_path']);
		$base64image = base64_encode($imagedata);
		}
		else
		{
		$error = array('error' => $this->upload->display_errors());
        print_r($error);
		}
		
		


	die;



	$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://139.59.124.53:8080/api/addcar',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
	"carid": "CAR100",
	"make": "Honda",
	"model": "Accord",
	"colour": "black",
	"owner": "Tom",
	"image": "Tom",
	"video": "Tom",
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

    die;
    }
}
