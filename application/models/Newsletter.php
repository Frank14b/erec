<?php
defined('BASEPATH') or exit('No direct script access allowed');

class newsletter extends CI_Model
{
    public $id;
    public $dates;
    public $email;
    public $status;

    public function __construct()
    {

        parent::__construct();
        $this->load->database();
        //$this->db->method_name();
    }

    public function getAllnewsletter()
    {
        $this->db->where('statusnewsletter != 3');
        $query = $this->db->get("newsletter");
        return $query->result();
    }

    public function countAllnewsletter()
    {
        $query = $this->db->get_where("newsletter", array("statusnewsletter"=>0));
        return $query->num_rows();
    }

    public function checkDoublontadd($contenu){
        $this->db->where("contenunewsletter", $contenu);
        $query = $this->db->get("newsletter");
        if($query->num_rows() == 0){
            return true;
        }else{
            return false;
        }
    }

    public function insertnewsletter()
    {
        $this->dates = date("Y-m-d");
        $this->email = $_POST["email"];
        $this->status = 0;

        if($this->db->insert("newsletter", $this)){
            return true;
        }else{
            return false;
        }
    }

    public function poweroff_entry($id)
    {
        $this->db->set('statusnewsletter', 1);
        $this->db->where('idnewsletter', $id);
        $this->db->update('newsletter');
        return true;
    }

    public function poweron_entry($id)
    {
        $this->db->set('statusnewsletter', 0);
        $this->db->where('idnewsletter', $id);
        $this->db->update('newsletter');
        return true;
    }

    public function delete_entry($id)
    {
        $this->db->set('statusnewsletter', 3);
        $this->db->where('idnewsletter', $id);
        $this->db->update('newsletter');
        return true;
    }
   
    /*
    public function checkDoublont($contenu){
        $this->db->where("contenunewsletter", $contenu);
        $query = $this->db->get_where("newsletter", array("idnewsletter !="=>$_POST["editnewsletter"]));
        if($query->num_rows() == 0){
            return true;
        }else{
            return false;
        }
    }

    public function update_entry()
    {
        $this->db->set('contenunewsletter', $_POST['libeler']); // please read the below note
        $this->db->set('datenewsletter',date("Y-m-d"));
        $this->db->where('idnewsletter', $_POST['editnewsletter']);

        if($this->db->update('newsletter')){
            return true;
        }else{
            return false;
        }
    }*/

    public function getnewsletterByID($id)
    {
        $this->idnewsletter = $id;
        $this->statusnewsletter = 0;

        $query = $this->db->get_where("newsletter", array('emailnewsletter'=>$id));
        if ($query)
        {
            return $query->result();
        } else {
            return false;
        }
    }

    public function getnewsletterEmitByID($id)
    {
        $this->idnewsletter = $id;
        $this->statusnewsletter = 0;

        $query = $this->db->get_where("newsletter", array('objetnewsletter'=>$id));
        if ($query)
        {
            return $query->result();
        } else {
            return false;
        }
    }

    public function getnewsletterByAdmin($id)
    {
        $this->db->where("emailnewsletter =".$id." or emailnewsletter = 0");
        $query = $this->db->get("newsletter");
        if ($query)
        {
            return $query->result();
        } else {
            return false;
        }
    }

    public function getOneData($id, $value)
    {
        foreach($this->getnewsletterByID($id) as $row):
            return $row->$value;
        endforeach;
    }

    public function getAllnewsletterByStatus($status)
    {
        $this->statusnewsletter = $status;
        $query = $this->db->get_where("newsletter", array('statusnewsletter'=>$this->statusnewsletter));
        return $query->result();
    }
}
