<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Message extends CI_Model
{
    public $id;
    public $sujet;
    public $texte;
    public $dates;
    public $email;
    public $numero;
    public $nom;

    public function __construct()
    {

        parent::__construct();
        $this->load->database();
        //$this->db->method_name();
    }

    public function getAllmessage()
    {
        $this->db->where('status != 3');
        $query = $this->db->get("message");
        return $query->result();
    }

    public function countAllmessage()
    {
        $query = $this->db->get_where("message", array("status"=>0));
        return $query->num_rows();
    }

    public function checkDoublontadd($contenu){
        $this->db->where("contenuMess", $contenu);
        $query = $this->db->get("message");
        if($query->num_rows() == 0){
            return true;
        }else{
            return false;
        }
    }

    public function insertMess()
    {
        $this->texte = $_POST['texte']; // please read the below note
        $this->dates = date("Y-m-d");
        $this->sujet = $_POST["sujet"];
        $this->numero = $_POST["numero"];
        $this->email = $_POST["email"];
        $this->nom = $_POST["nom"];

        if($this->db->insert("message", $this)){
            return true;
        }else{
            return false;
        }
    }

    public function poweroff_entry($id)
    {
        $this->db->set('statusMess', 1);
        $this->db->where('idMess', $id);
        $this->db->update('message');
        return true;
    }

    public function poweron_entry($id)
    {
        $this->db->set('statusMess', 0);
        $this->db->where('idMess', $id);
        $this->db->update('message');
        return true;
    }

    public function delete_entry($id)
    {
        $this->db->set('statusMess', 3);
        $this->db->where('idMess', $id);
        $this->db->update('message');
        return true;
    }
   
    /*
    public function checkDoublont($contenu){
        $this->db->where("contenuMess", $contenu);
        $query = $this->db->get_where("message", array("idMess !="=>$_POST["editmessage"]));
        if($query->num_rows() == 0){
            return true;
        }else{
            return false;
        }
    }

    public function update_entry()
    {
        $this->db->set('contenuMess', $_POST['libeler']); // please read the below note
        $this->db->set('dateMess',date("Y-m-d"));
        $this->db->where('idMess', $_POST['editmessage']);

        if($this->db->update('message')){
            return true;
        }else{
            return false;
        }
    }*/

    public function getMessByID($id)
    {
        $this->idMess = $id;
        $this->statusMess = 0;

        $query = $this->db->get_where("message", array('emailMess'=>$id));
        if ($query)
        {
            return $query->result();
        } else {
            return false;
        }
    }

    public function getMessEmitByID($id)
    {
        $this->idMess = $id;
        $this->statusMess = 0;

        $query = $this->db->get_where("message", array('objetMess'=>$id));
        if ($query)
        {
            return $query->result();
        } else {
            return false;
        }
    }

    public function getMessByAdmin($id)
    {
        $this->db->where("emailMess =".$id." or emailMess = 0");
        $query = $this->db->get("message");
        if ($query)
        {
            return $query->result();
        } else {
            return false;
        }
    }

    public function getOneData($id, $value)
    {
        foreach($this->getMessByID($id) as $row):
            return $row->$value;
        endforeach;
    }

    public function getAllMessByStatus($status)
    {
        $this->statusMess = $status;
        $query = $this->db->get_where("message", array('statusMess'=>$this->statusMess));
        return $query->result();
    }
}
