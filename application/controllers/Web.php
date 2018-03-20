<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('my_model', 'mm');
    }
    function index() {
        $data['news_'] = $this->mm->get_all_active_news();
        $data['upcoming'] = $this->mm->get_most_recent_upcoming();
        $data['announce'] = $this->mm->get_most_recent_announcements();
        $data['bday'] = $this->mm->students_bday_this_week(7);
        $data['menu'] = 1;
        $data['activities'] = $this->mm->get_activities();
        $this->load->view('templates/header');
        $this->load->view('index',$data);
        $this->load->view('templates/footer');
    }

    function about() {
        $data['menu'] = 2;
        $this->load->view('templates/header');
        $this->load->view('about',$data);
        $this->load->view('templates/footer');
    }

    function admission() {
        $data['menu'] = 3;
        $this->load->view('templates/header');
        $this->load->view('admission',$data);
        $this->load->view('templates/footer');
    }
    
    function features() {
        $data['menu'] = 4;
        $this->load->view('templates/header');
        $this->load->view('features',$data);
        $this->load->view('templates/footer');
    }
        
    public function gallery() {
        $data['menu'] = 5;
        $data['gallery_category'] = $this->mm->get_gallery_category();        
        $this->load->view('templates/header', $data);
        $this->load->view('gallery-category',$data);
        $this->load->view('templates/footer');
    }
    
    public function gallery_detail($id) {
        $data['menu'] = 5;
        $data['gallery'] = $this->mm->get_gallery($id);        
        $this->load->view('templates/header', $data);
        $this->load->view('gallery',$data);
        $this->load->view('templates/footer');
    }

    function activities(){
        $data['menu'] = 1;
        $data['activities'] = $this->mm->get_activities();
        if(count($data['activities']) != 0){
            $this->load->view('templates/header');
            $this->load->view('activities',$data);
            $this->load->view('templates/footer');
        } else {
            redirect('web');
        }
    }
    function contact() {
        $data['menu'] = 6;
        $this->load->view('templates/header');
        $this->load->view('contact',$data);
        $this->load->view('templates/footer');
    }
    
    function messages() {
        $data['menu'] = 1;
        $this->load->view('templates/header');
        $this->load->view('messages',$data);
        $this->load->view('templates/footer');
    }
    
    function uc_(){
        $this->load->view('error');
    }

    function contactus() {
        $this->email->set_mailtype("html");

        $msg = "Enquiry below:<br /><br />";
        $msg = $msg . $this->input->post('txtmessage');

        $msg = $msg . "<br />";
        $msg = $msg . "From<br />";
        $msg = $msg . "<br /><br />";

        $msg = $msg . "--------------";
        $msg = $msg . "<br />";
        $msg = $msg . $this->input->post('txtname');
        $msg = $msg . "<br />";
        $msg = $msg . $this->input->post('txtemail');
        $msg = $msg . "<br />";
        $msg = $msg . $this->input->post('txtPhone');

        $to_ = 'jaidurgeeducationalpublic@gmail.com';
        $from_ = $this->input->post('txtemail');
        $name_ = 'Enquiry...';

        $this->email->from($from_, $name_);
        $this->email->to($to_);

        $this->email->subject('Enquiry from Jai Durge School website');
        $this->email->message($msg);

        if ($this->email->send()) {
            $this->session->set_flashdata('_msg_', 'Thanks for Contacting us. We will get back to you very soon...');
        } else {
            $this->session->set_flashdata('_msg_', 'Something goes wrong. Please try again...');
        }
        redirect('web/contact');
    }
}
