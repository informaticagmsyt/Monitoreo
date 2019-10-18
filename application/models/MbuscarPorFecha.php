<?php 


class MbuscarPorFecha extends CI_Model
{
   public function _construct(){

        parent::__construct(); 

    }   


    public function listar($desde,$hasta,$idplan){
        $this->db->select(" personas.cedula, 
        personas.nombre,   personas.apellido, 
        personas.id_persona,
        personas.sexo, 
        personas.f_nacimiento, 
        contacto.telefono, 
        contacto.email, 
        parroquias.parroquia, 
        direccion.nombre_localidad, 
        direccion.direccion_exacta, 
        direccion.id_persona_direccion, 
        municipios.municipio, 
        espacio_politico.e_social, 
        espacio_politico.n_social, 
        espacio_politico.movimiento, 
        figura_juridica.r_social, 
        laboral.grado_instruccion, 
        laboral.profesion_oficio, 
        laboral.trabaja,estados.estado, 
        planes.planes,
        planes.id_planes");
        $this->db->from(' public.personas, 
        public.direccion, 
        public.contacto, 
        public.estados, 
        public.municipios, 
        public.parroquias, 
        public.espacio_politico, 
        public.figura_juridica, 
        public.laboral, 
        public.planes, 
        public.planes_personas');
        $this->db->where( "personas.id_persona = direccion.id_persona_direccion AND
        personas.id_persona = contacto.id_persona_contacto AND
        personas.id_persona = planes_personas.key_id_personas AND
        direccion.estado = estados.id_estado AND
        direccion.parroquia = parroquias.id_parroquia AND
        direccion.municipio = municipios.id_municipio AND
        direccion.id_persona_direccion = espacio_politico.id_persona_espacio AND
        figura_juridica.id_persona_figura = direccion.id_persona_direccion AND
        laboral.id_persona_laboral = figura_juridica.id_persona_figura AND
        planes.id_planes = planes_personas.key_id_planes ");
      
        $this->db->where('planes.id_planes ', $idplan);
        
        $this->db->where('f_creacion >=', $desde." 00:00:00");
        $this->db->where('f_creacion <=', $hasta." 23:59:00");

       
        $listar = $this->db->get();
          return $listar->result();
      
      } 
}   