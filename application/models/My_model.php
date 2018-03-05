<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class My_model extends CI_Model {
    function __construct(){
        parent::__construct();
    }
    function get_all_active_news() {
        $data = array('STATUS' => 1);
        $this->db->where('DATE_FORMAT(DATE_START, "%Y-%m-%d")<=',date('Y-m-d'));
        $this->db->where('DATE_FORMAT(DATE_END, "%Y-%m-%d")>=',date('Y-m-d'));
        $this->db->order_by('ID', 'desc');
        $query = $this->db->get_where('newsevents', $data);
        // Exceptional Handling
            $this->_db_error();
        // --------------------
        return $query->result();
    }

    function get_all_inactive_news() {
        $data = array('STATUS' => 0);
        //$this->db->where('DATE_FORMAT(DATE_START, "%Y-%m-%d")<=',date('Y-m-d'));
        //$this->db->where('DATE_FORMAT(DATE_END, "%Y-%m-%d")>=',date('%Y-%m-%d'));
        $this->db->order_by('ID', 'desc');
        $query = $this->db->get_where('newsevents', $data);
        // Exceptional Handling
            $this->_db_error();
        // --------------------
        return $query->result();
    }

    function get_most_recent_news() {
        $this->db->where('DATE_FORMAT(DATE_START, "%Y-%m-%d")<=',date('Y-m-d'));
        $this->db->where('DATE_FORMAT(DATE_END, "%Y-%m-%d")>=',date('Y-m-d'));
        //$this->db->where('(SUBSTRING_INDEX(DATE_, "/", -1))>=',(date('Y')));
        $this->db->order_by('ID', 'desc');
        $this->db->where('STATUS',1);
        $query = $this->db->get('newsevents');
        // Exceptional Handling
            $this->_db_error();
        // --------------------
        return $query->result();
    }

    function get_after_most_recent_news() {
        $this->db->where('DATE_FORMAT(DATE_START, "%Y-%m-%d")<=',date('Y-m-d'));
        $this->db->where('DATE_FORMAT(DATE_END, "%Y-%m-%d")>=',date('Y-m-d'));
        $this->db->order_by('ID', 'desc');
        //$this->db->where('(SUBSTRING_INDEX(DATE_, "/", -1))>=',(date('Y')));
        $query = $this->db->get('newsevents');
        if($query->num_rows() == 0){
            $this->db->order_by('ID');
            $this->db->where('(SUBSTRING_INDEX(DATE_, "/", -1))>=',(date('Y')));
            $query = $this->db->get('newsevents');
        }
        // Exceptional Handling
        //$this->_db_error();
        // --------------------
        return $query->result();
    }

    function get_most_recent_upcoming() {
        $this->db->where('DATE_FORMAT(DATE_START, "%Y-%m-%d")<=',date('Y-m-d'));
        $this->db->where('DATE_FORMAT(DATE_END, "%Y-%m-%d")>=',date('Y-m-d'));
        //$this->db->where('(SUBSTRING_INDEX(DATE_, "/", -1))>=',(date('Y')));
        $this->db->order_by('ID', 'des
            c');
        $this->db->where('STATUS',1);
        $query = $this->db->get('upcoming');
        // Exceptional Handling
            $this->_db_error();
        // --------------------
        return $query->result();
    }
    
    function get_most_recent_announcements() {
        $this->db->where('DATE_FORMAT(DATE_START, "%Y-%m-%d")<=',date('Y-m-d'));
        $this->db->where('DATE_FORMAT(DATE_END, "%Y-%m-%d")>=',date('Y-m-d'));
        //$this->db->where('(SUBSTRING_INDEX(DATE_, "/", -1))>=',(date('Y')));
        $this->db->order_by('ID', 'desc');
        $this->db->where('STATUS',1);
        $query = $this->db->get('announcements');
        // Exceptional Handling
            $this->_db_error();
        // --------------------
        return $query->result();
    }

    function get_activities() {
        $this->db->order_by('ID', 'desc');
        $this->db->where('STATUS_', 1);
        $query = $this->db->get('activities');

        return $query->result();
    }
    
    function students_bday_this_week($diff_) {
        $datetime = new DateTime(date('Y/m/d'));
        $datetime->modify('+'.$diff_.' day');
        $next7thdaydate= $datetime->format('Y-m-d');
        $str_dt = explode('-',$next7thdaydate);

        $dt_ = $str_dt[2];
        $mnth_ = $str_dt[1];
        $yr_ = $str_dt[0];
        $dateupto = $yr_.'/'.$mnth_.'/'.$dt_;

        $this->db->select('MONTH(DOB) as mnth, DAY(DOB) as day, NAME_, PHOTO_');
        $this->db->where('DATE_FORMAT(CONCAT('.date('Y').', "/",MONTH(DOB),"/",DAY(DOB)),"%Y/%m/%d") >=', date('Y/m/d'));
        $this->db->where('DATE_FORMAT(CONCAT('.date('Y').', "/",MONTH(DOB),"/",DAY(DOB)),"%Y/%m/%d") <=', $dateupto);
        $this->db->where('STATUS', 1);
        $this->db->order_by('NAME_');
        $query = $this->db->get('bday_data');
        
        return $query->result();
    }


    function _db_error() {
        //exception handling ------------------
        if ($this->db->trans_status() == FALSE) {
            redirect('web/uc_');
        }
        //-------------------------------------
    }

}
