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
  

	if($_POST){

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
		}
		


if($roption == 1){
	$apiurl = 'http://localhost:8080/api/query/'.$searchid;
	$payload = array();
	$method = 'GET';
}

if($roption == 2){
	$apiurl = 'http://localhost:8080/api/addcar';
	$payload = array("carid"=>$carid,"owner"=>$owner,"make"=>$make,"model"=>$model,"colour"=>$colour,"owner"=>$base64image,"image"=>$base64image,"video"=>$base64image);
	$method = 'POST';
}

if($roption == 3){
	$apiurl = 'http://localhost:8080/api/changeowner/'.$carid;
	$payload = array("owner"=>$owner);
	$method = 'PUT';
}



	$curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => $apiurl,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => $method,
        CURLOPT_POSTFIELDS => json_encode($payload),
       CURLOPT_HTTPHEADER => array(
       'Content-Type: application/json'
	),
));

         $response = curl_exec($curl);

         curl_close($curl);
         $data['result'] = $response;
		 $this->session->set_flashdata('message_name', $response);
		 redirect("http://139.59.124.53/growhub/");

         //$this->load->view('welcome_message', $data);
	 
        } else {
	       $this->load->view('action');
       }
     }

}
