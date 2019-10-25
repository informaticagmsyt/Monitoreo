<?php
class m_agro extends CI_Model
{

  public $desde;
  public $hasta;
    function _construct(){
        parent::__construct();
        $this->desde=null;
        $this->hasta=null;  
    }   /*
 public function contar_proyectos(){
    $this->db->query("SELECT COUNT(*)");
    $this->db->from('proyecto');
    $this->db->where('estatus_proyecto','Paralizado');
    $paralizado = $this->db->get();
    return $paralizado->result();
}
*/
public function setDesdeHasta($desde, $hasta){
  $this->desde=$desde;
  $this->hasta=$hasta;
}
   public function registrar($param,$param_1){
        $campos = array(
            'cedula'   => strtoupper($param['cedula']),
            'nombre'   => strtoupper($param['nombre']),  
            'apellido' => strtoupper($param['apellido']),
            'sexo' => strtoupper($param['sexo']),
            'f_nacimiento'=>$param['f_nacimiento']
        );
        $insert= $this->db->insert('personas',$campos);
        $lastId = $this->db->insert_id();
        if ($lastId > 0) {
           $datos = array(
            'telefono'=> strtoupper($param_1['tlf']),
            'email'   => strtoupper($param_1['email']),  
            'id_persona_contacto '=> $param['id_persona_contacto '] = $lastId 
        );
        $insert   =  $this->db->insert('contacto',$datos);
            if (!$insert) {
                    echo ' <script>  
                            alert("Erro al Registar Usuario");
                            document.location.href = "'.base_url().'"; 
                        </script>';
                } else {
                    echo ' <script>  
                            alert("El Registro en la Unidad de Acompañamiento Agro Productivo fue Completado con Exito");
                            document.location.href = "'.base_url('index.php/C_registro_agro').'"; 
                            </script>';
                }
        }else{
                            echo ' <script>  
                                    alert("Erro al Registar Usuario");
                                    document.location.href = "'.base_url().'"; 
                                  </script>';
                          }         
     }
/****************************************************************************************************************************************************/     
public function agro_amazonas(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='1' and estados.id_estado='1'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
public function agro_anzoategui(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='1' and estados.id_estado='2'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
 public function agro_apure(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='1' and estados.id_estado='3'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
  public function agro_aragua(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='1' and estados.id_estado='4'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 } 
  public function agro_barinas(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='1' and estados.id_estado='5'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function agro_bolivar(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='1' and estados.id_estado='6'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function agro_carabobo(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='1' and estados.id_estado='7'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function agro_cojedes(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='1' and estados.id_estado='8'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function agro_delta(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='1' and estados.id_estado='9'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function agro_distrito(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='1' and estados.id_estado='24'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function agro_falcon(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='1' and estados.id_estado='10'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function agro_guarico(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='1' and estados.id_estado='11'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function agro_lara(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='1' and estados.id_estado='12'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function agro_merida(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='1' and estados.id_estado='13'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function agro_miranda(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='1' and estados.id_estado='14'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function agro_monagas(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='1' and estados.id_estado='15'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function agro_esparta(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='1' and estados.id_estado='16'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function agro_portuguesa(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='1' and estados.id_estado='17'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function agro_sucre(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='1' and estados.id_estado='18'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function agro_tachira(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='1' and estados.id_estado='19'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function agro_trujillo(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='1' and estados.id_estado='20'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function agro_vargas(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='1' and estados.id_estado='21'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function agro_yaracuy(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='1' and estados.id_estado='22'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }
   public function agro_zulia(){
  $this->db->query("SELECT count ('planes.planes')");
  $this->db->from('public.personas, public.planes_personas, public.planes, public.direccion, public.estados');
  $this->db->where("personas.id_persona = direccion.id_persona_direccion AND planes_personas.key_id_personas = personas.id_persona AND
  planes.id_planes = planes_personas.key_id_planes AND direccion.estado = estados.id_estado AND planes.id_planes='1' and estados.id_estado='23'");
  if($this->desde && $this->hasta){
     
    $this->db->where('personas.f_creacion >=', $this->desde." 00:00:00");
    $this->db->where('personas.f_creacion <=', $this->hasta." 23:59:00");
 
   }
  $aragua = $this->db->get();
    return $aragua->result();
 }

 
public function listar_agro(){
$this->db->select(" planes.planes,
personas.id_persona,
  planes.id_planes, 
  personas.cedula, 
  personas.nombre, 
  personas.apellido, 
  personas.sexo, 
  personas.f_nacimiento, 
  direccion.localidad, 
  direccion.nombre_localidad, 
  direccion.direccion_exacta, 
  estados.estado, 
  municipios.municipio, 
  parroquias.parroquia, 
  planes_personas.fecha_registro, 
  espacio_politico.e_social, 
  espacio_politico.n_social, 
  espacio_politico.movimiento, 
  planes.id_planes, 
  contacto.telefono, 
  contacto.email, 
  figura_juridica.r_social, 
  laboral.grado_instruccion, 
  laboral.profesion_oficio, 
  laboral.trabaja, 
  solicitud.t_asesoramiento, 
  solicitud.t_solicitud");
  $this->db->from('public.personas, 
  public.planes, 
  public.planes_personas, 
  public.direccion, 
  public.estados, 
  public.municipios, 
  public.parroquias, 
  public.espacio_politico, 
  public.contacto, 
  public.figura_juridica, 
  public.laboral, 
  public.solicitud');
  $this->db->where( "personas.id_persona = planes_personas.key_id_personas AND
  personas.id_persona = direccion.id_persona_direccion AND
  personas.id_persona = contacto.id_persona_contacto AND
  personas.id_persona = figura_juridica.id_persona_figura AND
  personas.id_persona = laboral.id_persona_laboral AND
  personas.id_persona = solicitud.id_persona_solicitud AND
  planes.id_planes = planes_personas.key_id_planes AND
  direccion.estado = estados.id_estado AND
  direccion.municipio = municipios.id_municipio AND
  direccion.parroquia = parroquias.id_parroquia AND
  direccion.id_persona_direccion = espacio_politico.id_persona_espacio AND planes.id_planes='1'");
  $listado = $this->db->get();
    return $listado->result();

}


public function buscar($id){
  $this->db->select(" planes.planes,
  personas.id_persona,
    planes.id_planes, 
    personas.cedula, 
    personas.nombre, 
    personas.apellido, 
    personas.sexo, 
    personas.f_nacimiento, 
    direccion.localidad, 
    direccion.nombre_localidad, 
    direccion.direccion_exacta, 
    estados.id_estado, 
    municipios.id_municipio, 
    parroquias.id_parroquia, 
    estados.estado, 
    municipios.municipio, 
    parroquias.parroquia, 
    planes_personas.fecha_registro, 
    espacio_politico.e_social, 
    espacio_politico.n_social, 
    espacio_politico.movimiento, 
    planes.id_planes, 
    contacto.telefono, 
    contacto.email, 
    figura_juridica.r_social, 
    laboral.grado_instruccion, 
    laboral.profesion_oficio, 
    laboral.trabaja, 
    solicitud.t_asesoramiento, 
    solicitud.t_solicitud");
    $this->db->from('public.personas, 
    public.planes, 
    public.planes_personas, 
    public.direccion, 
    public.estados, 
    public.municipios, 
    public.parroquias, 
    public.espacio_politico, 
    public.contacto, 
    public.figura_juridica, 
    public.laboral, 
    public.solicitud');
    $this->db->where( "personas.id_persona = planes_personas.key_id_personas AND
    personas.id_persona = direccion.id_persona_direccion AND
    personas.id_persona = contacto.id_persona_contacto AND
    personas.id_persona = figura_juridica.id_persona_figura AND
    personas.id_persona = laboral.id_persona_laboral AND
    personas.id_persona = solicitud.id_persona_solicitud AND
    planes.id_planes = planes_personas.key_id_planes AND
    direccion.estado = estados.id_estado AND
    direccion.municipio = municipios.id_municipio AND
    direccion.parroquia = parroquias.id_parroquia AND
    direccion.id_persona_direccion = espacio_politico.id_persona_espacio ");
    $this->db->where('personas.id_persona',$id );
    $listado = $this->db->get();
      return $listado->result();
  
  }

  public function getPlanes(){
    $this->db->select("*");
    $this->db->from('public.planes');
    $listado = $this->db->get();
      return $listado->result();
  }
}
?>
