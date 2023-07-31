<?php

namespace App\Models;

use CodeIgniter\Model;


class CurdThreeAjax extends Model
{
    
    public function __construct(){
        $this->db = \config\Database::connect();
    }
    
    protected $DBGroup          = 'default';
    protected $table            = 'ci1table';
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

    public function add_query($query){
        $result= $this->db->table('ci1table')->insert($query);
        return $result;
    }
    public function mydata(){
        $result= $this->db->query('select * from ci1table')->getResult();
        return $result;
    }
    public function DeleteD($ids){
        $resultdelete= $this->db->table('ci1table')->where(['id'=>$ids])->delete();
        return $resultdelete;
    }
   
    public function EditQuery($ids){
        $result= $this->db->table('ci1table')->where(['id'=>$ids])->update();
        return $result;
    }
   
}
