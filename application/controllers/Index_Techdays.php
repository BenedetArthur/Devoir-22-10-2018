<?php 
class Index_Techdays extends CI_Controller{

    public function index(){

        $this->load->view('View_AcceuilTech');
    }
    
    public function AjouteruneConference()
    {
        echo"COUCOU";
        $this->load->model("Model_AjoutConf");
        $data['lesConf']=$this->Model_AjoutConf->GetAllConference();
        $this->load->view("View_AjoutConf", $data);
    }
}

?>