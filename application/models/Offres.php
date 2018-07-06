<?php
defined('BASEPATH') or exit('No direct script access allowed');

class offres extends CI_Model
{
    public $id;
    public $intituler;
    public $details;
    public $dates;
    public $datefin;
    public $status;

    public function __construct()
    {

        parent::__construct();
        $this->load->database();
        //$this->db->method_name();
    }

    public function getAlloffres()
    {
        $this->db->where('status != 3');
        $query = $this->db->get("offres");
        return $query->result();
    }

    public function countAlloffres()
    {
        $query = $this->db->get_where("offres", array("status"=>0));
        return $query->num_rows();
    }

    public function checkDoublontadd($contenu){
        $this->db->where("contenuoffres", $contenu);
        $query = $this->db->get("offres");
        if($query->num_rows() == 0){
            return true;
        }else{
            return false;
        }
    }

    public function insertoffres()
    {
        $this->intituler = $_POST['intituler']; // please read the below note
        $this->details = $_POST['details'];
        $this->dates = $_POST['dates'];
        $this->datefin = $_POST['datefin'];
        $this->status = 0;

        if($this->db->insert("offres", $this)){
            return true;
        }else{
            return false;
        }
    }

    public function poweroff_entry($id)
    {
        $this->db->set('status', 1);
        $this->db->where('id', $id);
        $this->db->update('offres');
        return true;
    }

    public function poweron_entry($id)
    {
        $this->db->set('status', 0);
        $this->db->where('id', $id);
        $this->db->update('offres');
        return true;
    }

    public function delete_entry($id)
    {
        $this->db->set('status', 3);
        $this->db->where('id', $id);
        $this->db->update('offres');
        return true;
    }
   
    /*
    public function checkDoublont($contenu){
        $this->db->where("contenuoffres", $contenu);
        $query = $this->db->get_where("offres", array("idoffres !="=>$_POST["editoffres"]));
        if($query->num_rows() == 0){
            return true;
        }else{
            return false;
        }
    }

    public function update_entry()
    {
        $this->db->set('contenuoffres', $_POST['libeler']); // please read the below note
        $this->db->set('dateoffres',date("Y-m-d"));
        $this->db->where('idoffres', $_POST['editoffres']);

        if($this->db->update('offres')){
            return true;
        }else{
            return false;
        }
    }*/

    public function getoffresByID($id)
    {
        $this->idoffres = $id;
        $this->statusoffres = 0;

        $query = $this->db->get_where("offres", array('emailoffres'=>$id));
        if ($query)
        {
            return $query->result();
        } else {
            return false;
        }
    }

    public function getoffresEmitByID($id)
    {
        $this->idoffres = $id;
        $this->statusoffres = 0;

        $query = $this->db->get_where("offres", array('objetoffres'=>$id));
        if ($query)
        {
            return $query->result();
        } else {
            return false;
        }
    }

    public function getoffresByAdmin($id)
    {
        $this->db->where("emailoffres =".$id." or emailoffres = 0");
        $query = $this->db->get("offres");
        if ($query)
        {
            return $query->result();
        } else {
            return false;
        }
    }

    public function getOneData($id, $value)
    {
        foreach($this->getoffresByID($id) as $row):
            return $row->$value;
        endforeach;
    }

    public function getAlloffresByStatus($status)
    {
        $this->statusoffres = $status;
        $query = $this->db->get_where("offres", array('statusoffres'=>$this->statusoffres));
        return $query->result();
    }
}
