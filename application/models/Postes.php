<?php
defined('BASEPATH') or exit('No direct script access allowed');

class postes extends CI_Model
{
    public $id;
    public $libeller;
    public $status;

    public function __construct()
    {

        parent::__construct();
        $this->load->database();
        //$this->db->method_name();
    }

    public function getAllpostes()
    {
        $this->db->where('status != 3');
        $query = $this->db->get("postes");
        return $query->result();
    }

    public function countAllpostes()
    {
        $query = $this->db->get_where("postes", array("status"=>0));
        return $query->num_rows();
    }

    public function checkDoublontadd($contenu){
        $this->db->where("contenupostes", $contenu);
        $query = $this->db->get("postes");
        if($query->num_rows() == 0){
            return true;
        }else{
            return false;
        }
    }

    public function insertpostes()
    {
        $this->libeller = $_POST['libeller']; // please read the below note
        $this->status = 0;

        if($this->db->insert("postes", $this)){
            return true;
        }else{
            return false;
        }
    }

    public function poweroff_entry($id)
    {
        $this->db->set('status', 1);
        $this->db->where('id', $id);
        $this->db->update('postes');
        return true;
    }

    public function poweron_entry($id)
    {
        $this->db->set('status', 0);
        $this->db->where('id', $id);
        $this->db->update('postes');
        return true;
    }

    public function delete_entry($id)
    {
        $this->db->set('status', 3);
        $this->db->where('id', $id);
        $this->db->update('postes');
        return true;
    }
   
    /*
    public function checkDoublont($contenu){
        $this->db->where("contenupostes", $contenu);
        $query = $this->db->get_where("postes", array("idpostes !="=>$_POST["editpostes"]));
        if($query->num_rows() == 0){
            return true;
        }else{
            return false;
        }
    }

    public function update_entry()
    {
        $this->db->set('contenupostes', $_POST['libeler']); // please read the below note
        $this->db->set('datepostes',date("Y-m-d"));
        $this->db->where('idpostes', $_POST['editpostes']);

        if($this->db->update('postes')){
            return true;
        }else{
            return false;
        }
    }*/

    public function getpostesByID($id)
    {
        $this->idpostes = $id;
        $this->statuspostes = 0;

        $query = $this->db->get_where("postes", array('emailpostes'=>$id));
        if ($query)
        {
            return $query->result();
        } else {
            return false;
        }
    }

    public function getpostesEmitByID($id)
    {
        $this->idpostes = $id;
        $this->statuspostes = 0;

        $query = $this->db->get_where("postes", array('objetpostes'=>$id));
        if ($query)
        {
            return $query->result();
        } else {
            return false;
        }
    }

    public function getpostesByAdmin($id)
    {
        $this->db->where("emailpostes =".$id." or emailpostes = 0");
        $query = $this->db->get("postes");
        if ($query)
        {
            return $query->result();
        } else {
            return false;
        }
    }

    public function getOneData($id, $value)
    {
        foreach($this->getpostesByID($id) as $row):
            return $row->$value;
        endforeach;
    }

    public function getAllpostesByStatus($status)
    {
        $this->statuspostes = $status;
        $query = $this->db->get_where("postes", array('statuspostes'=>$this->statuspostes));
        return $query->result();
    }
}
