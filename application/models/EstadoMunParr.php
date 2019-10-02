<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class EstadoMunParr  extends CI_Model{


        

    function __construct(){

    
        parent::__construct();
  

    }
     

    function get(){
    
      
        $this->db->select(' id_estado, estado');
        $this->db->from('estados');
       
     $query = $this->db->get();

        $row=$query->row();
        $obj = new stdClass;
        
  
 
        $index=array(); 
        $i=0;      
        foreach ($query->result() as $row)
        {
      

            $obj->response=array(
                "status"=>"ok",
                "http_code"=>200
            );

            $index[$i]["id"]=$row->id_estado;
            $index[$i]["estado"]=$row->estado;

            
         

          $i++;
          $obj->error=array("code"=>"","message"=>"");
         $obj->comments="Recurso encontrado exitosamente";

        }
        $obj->data=$index;


              return $obj;
           
        
    }

    function getMunicipio($id_estado){
    
       
        $this->db->select('id_municipio, id_estado, municipio');
         $this->db->from('municipios');
        $this->db->where('id_estado', $id_estado);
         $query = $this->db->get();
 
       
        $obj = new stdClass;
        
  
 
        $index=array(); 
        $i=0;      
        foreach ($query->result() as $row)
        {
      

            $obj->response=array(
                "status"=>"ok",
                "http_code"=>200
            );

            $index[$i]["id"]=$row->id_municipio;
            $index[$i]["municipio"]=$row->municipio;

            
         

          $i++;
          $obj->error=array("code"=>"","message"=>"");
         $obj->comments="Recurso encontrado exitosamente";

        }
        $obj->data=$index;


              return $obj;
           
        
    }
    function getParroquia($id_municipio){
    
      
        $this->db->select('id_parroquia, id_municipio, parroquia');
        $this->db->from('parroquias');
        $this->db->where('id_municipio', $id_municipio);
          $query = $this->db->get();

       
        $obj = new stdClass;
         
  
 
        $index=array(); 
        $i=0;      
        foreach ($query->result() as $row)
        {
      

            $obj->response=array(
                "status"=>"ok",
                "http_code"=>200
            );

            $index[$i]["id"]=$row->id_parroquia;
            $index[$i]["parroquia"]=$row->parroquia;

            
         

          $i++;
          $obj->error=array("code"=>"","message"=>"");
         $obj->comments="Recurso encontrado exitosamente";

        }
        $obj->data=$index;


              return $obj;
           
        
    }


    
   
}