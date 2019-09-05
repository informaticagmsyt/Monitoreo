<?php
class m_siembra_caracas extends CI_Model
{
    function _construct(){
        parent::__construct();  
    }   

public function listar_siembra(){
$this->db->select("parroquias.id_parroquia,
parroquias.parroquia,
siembra.id_siembra,
siembra.cedula,
siembra.nombre,
siembra.apellido,
siembra.telefono,
siembra.celular,
siembra.email,
siembra.parroquia,
siembra.eje,
siembra.sector,
siembra.movimiento,
siembra.espacio,
siembra.tipo_proyecto,
siembra.electricidad,
siembra.internet,
siembra.agua");
  $this->db->from('siembra,parroquias');
  $this->db->where("siembra.parroquia = parroquias.id_parroquia GROUP BY(cedula)");
  $listado = $this->db->get();
    return $listado->result();
}

 
}
?>
