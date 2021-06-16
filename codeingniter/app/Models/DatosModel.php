<?php
namespace App\Models;
use CodeIgnater\Model;
class DatosModel extends Model{
    public fuction obtenerInformacion($data){
           $gModel =$this->$this->db->table('persona'):
           $Model->whare($data);
           return $gModel->get()->getResultArray();
      
      
    }
  
  
    public fuction listarTodo(){
         $gModel = $this ->db->query("SELECT * FROM persona");
          return $gModel->getResult();
      
      
    }
  
    
    public fuction insertar($data){
          $gModel = $this->db->table('persona');
          $gModel->insert($data);
          return $this->db->insertID();
      
     
    }
  
  public fuction actualizar($data,$id){
        $gModel = $this->db->table('persona');
        $gModel->set($data);
        $gModel->where($id);
        return $gModel->update();
    
    
  }
  
  public fuction eliminar($id){
        $gModel = $this->db->table('persona');
        $gModel->where($id);
        return $gModel->delete();
    
  }
  
 
}
    

