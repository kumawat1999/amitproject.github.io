<?php

namespace App\Models;

use CodeIgniter\Model;

class CurdToAjaxModal extends Model
{

    public function __construct(){
        $this->db = \config\Database::connect();
    }

    protected $DBGroup          = 'default';
    protected $table            = 'curd_to_ajax';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function add($array){
        $results = $this->db->table('curd_to_ajax')->insert($array);
        return $results;
    }

    public function getUserData(){
        $result=$this->db->query("select * from curd_to_ajax")->getResult();
        return $result;
    }
    public function deleteData($id){
        $result=$this->db->table('curd_to_ajax')->where(['id'=>$id])->delete();
        return $result;
    }
    
   
   
}
