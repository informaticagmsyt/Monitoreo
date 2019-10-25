<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_principal extends CI_Controller {
		function __construct(){
            parent::__construct();
            $this->load->database();
            $this->load->Model('m_asesorate');
            $this->load->Model('m_listado');
            $this->load->Model('m_agro');
            $this->load->Model('m_brigadas');
            $this->load->Model('m_ingenio');
            $this->load->Model('m_emprende');
             if ($this->session->userdata('login') ==FALSE) {
            redirect(base_url('index.php/c_login'));
             }
        }
	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('layout/aside');
		if(isset($_REQUEST['desde'] ) && isset($_REQUEST['hasta'] ) && !empty($_REQUEST['desde'] ) && !empty($_REQUEST['hasta'] )){
			
			$desde=date("Y-m-d", strtotime($_REQUEST['desde'])); 
			$hasta=date("Y-m-d", strtotime($_REQUEST['hasta'])); 
			$this->m_listado->setDesdeHasta($desde, $hasta);
			$this->m_asesorate->setDesdeHasta($desde, $hasta);
			$this->m_agro->setDesdeHasta($desde, $hasta);
			$this->m_brigadas->setDesdeHasta($desde, $hasta);
			$this->m_emprende->setDesdeHasta($desde, $hasta);
			$this->m_ingenio->setDesdeHasta($desde, $hasta);
		}

/*****************************************************************************************************************************/
        $contar    = $this->m_listado->listado_total();
        $agro      = $this->m_listado->listado_agro();
        $asesorate = $this->m_listado->listado_asesorate();	
        $brigadas  = $this->m_listado->listado_brigadas();
        $emprende  = $this->m_listado->listado_emprende();
        $ingenio   = $this->m_listado->listado_ingenio();			
/*****************************************************************************************************************************/		
		$amazonas   = $this->m_listado->listado_amazonas();
		$anzoategui = $this->m_listado->listado_anzoategui();
		$apure      = $this->m_listado->listado_apure();
		$aragua     = $this->m_listado->listado_aragua();
		$barinas    = $this->m_listado->listado_barinas();
		$bolivar    = $this->m_listado->listado_bolivar();
		$carabobo   = $this->m_listado->listado_carabobo();
		$cojedes    = $this->m_listado->listado_cojedes();
		$delta      = $this->m_listado->listado_delta();
		$distrito   = $this->m_listado->listado_distrito();
		$falcon     = $this->m_listado->listado_falcon();
		$guarico    = $this->m_listado->listado_guarico();
		$lara       = $this->m_listado->listado_lara();
		$merida     = $this->m_listado->listado_merida();
		$miranda    = $this->m_listado->listado_miranda();
		$monagas    = $this->m_listado->listado_monagas();
		$esparta    = $this->m_listado->listado_esparta();
		$portuguesa = $this->m_listado->listado_portuguesa();
		$sucre      = $this->m_listado->listado_sucre();
		$tachira    = $this->m_listado->listado_tachira();
		$trujillo   = $this->m_listado->listado_trujillo();
		$vargas     = $this->m_listado->listado_vargas();
		$yaracuy    = $this->m_listado->listado_yaracuy();
		$zulia      = $this->m_listado->listado_zulia();
/********************************************************************************************************************************/
		$asesorate_amazonas = $this->m_asesorate->asesorate_amazonas();
		$ingenio_amazonas   = $this->m_ingenio->ingenio_amazonas();
		$agro_amazonas      = $this->m_agro->agro_amazonas();
		$emprende_amazonas  = $this->m_emprende->emprende_amazonas();
		$brigadas_amazonas  = $this->m_brigadas->brigadas_amazonas();
/********************************************************************************************************************************/
		$asesorate_anzoategui = $this->m_asesorate->asesorate_anzoategui();
		$ingenio_anzoategui   = $this->m_ingenio->ingenio_anzoategui();
		$emprende_anzoategui  = $this->m_emprende->emprende_anzoategui();
		$agro_anzoategui      = $this->m_agro->agro_anzoategui();
		$brigadas_anzoategui  = $this->m_brigadas->brigadas_anzoategui();
/********************************************************************************************************************************/
		$asesorate_apure = $this->m_asesorate->asesorate_apure();
		$brigadas_apure  = $this->m_brigadas->brigadas_apure();
		$ingenio_apure   = $this->m_ingenio->ingenio_apure();
		$emprende_apure  = $this->m_emprende->emprende_apure();
		$agro_apure  = $this->m_agro->agro_apure();
		/********************************************************************************************************************************/
		$asesorate_aragua = $this->m_asesorate->asesorate_aragua();
		$brigadas_aragua  = $this->m_brigadas->brigadas_aragua();
		$ingenio_aragua   = $this->m_ingenio->ingenio_aragua();
		$emprende_aragua  = $this->m_emprende->emprende_aragua();
		$agro_aragua      = $this->m_agro->agro_aragua();
/********************************************************************************************************************************/
		$asesorate_barinas = $this->m_asesorate->asesorate_barinas();
		$brigadas_barinas  = $this->m_brigadas->brigadas_barinas();
		$ingenio_barinas   = $this->m_ingenio->ingenio_barinas();
		$emprende_barinas  = $this->m_emprende->emprende_barinas();
		$agro_barinas      = $this->m_agro->agro_barinas();
/********************************************************************************************************************************/
		$asesorate_bolivar = $this->m_asesorate->asesorate_bolivar();
		$brigadas_bolivar  = $this->m_brigadas->brigadas_bolivar();
		$ingenio_bolivar   = $this->m_ingenio->ingenio_bolivar();
		$emprende_bolivar  = $this->m_emprende->emprende_bolivar();
		$agro_bolivar      = $this->m_agro->agro_bolivar();
/********************************************************************************************************************************/
		$asesorate_carabobo = $this->m_asesorate->asesorate_carabobo();
		$brigadas_carabobo  = $this->m_brigadas->brigadas_carabobo();
		$ingenio_carabobo   = $this->m_ingenio->ingenio_carabobo();
		$emprende_carabobo  = $this->m_emprende->emprende_carabobo();
		$agro_carabobo      = $this->m_agro->agro_carabobo();
/********************************************************************************************************************************/
		$asesorate_cojedes = $this->m_asesorate->asesorate_cojedes();
		$brigadas_cojedes  = $this->m_brigadas->brigadas_cojedes();
		$ingenio_cojedes   = $this->m_ingenio->ingenio_cojedes();
		$emprende_cojedes  = $this->m_emprende->emprende_cojedes();
		$agro_cojedes      = $this->m_agro->agro_cojedes();
/********************************************************************************************************************************/
		$asesorate_delta = $this->m_asesorate->asesorate_delta();
		$brigadas_delta  = $this->m_brigadas->brigadas_delta();
		$ingenio_delta   = $this->m_ingenio->ingenio_delta();
		$emprende_delta  = $this->m_emprende->emprende_delta();
		$agro_delta      = $this->m_agro->agro_delta();
/********************************************************************************************************************************/
		$asesorate_distrito = $this->m_asesorate->asesorate_distrito();
		$brigadas_distrito  = $this->m_brigadas->brigadas_distrito();
		$ingenio_distrito   = $this->m_ingenio->ingenio_distrito();
		$emprende_distrito  = $this->m_emprende->emprende_distrito();
		$agro_distrito      = $this->m_agro->agro_distrito();
/********************************************************************************************************************************/
		$asesorate_falcon = $this->m_asesorate->asesorate_falcon();
		$brigadas_falcon  = $this->m_brigadas->brigadas_falcon();
		$ingenio_falcon   = $this->m_ingenio->ingenio_falcon();
		$emprende_falcon  = $this->m_emprende->emprende_falcon();
		$agro_falcon      = $this->m_agro->agro_falcon();
/********************************************************************************************************************************/
		$asesorate_guarico = $this->m_asesorate->asesorate_guarico();
		$brigadas_guarico  = $this->m_brigadas->brigadas_guarico();
		$ingenio_guarico   = $this->m_ingenio->ingenio_guarico();
		$emprende_guarico  = $this->m_emprende->emprende_guarico();
		$agro_guarico      = $this->m_agro->agro_guarico();
/********************************************************************************************************************************/
		$asesorate_lara    = $this->m_asesorate->asesorate_lara();
		$brigadas_lara     = $this->m_brigadas->brigadas_lara();
		$ingenio_lara      = $this->m_ingenio->ingenio_lara();
		$emprende_lara     = $this->m_emprende->emprende_lara();
		$agro_lara         = $this->m_agro->agro_lara();
/********************************************************************************************************************************/
		$asesorate_merida  = $this->m_asesorate->asesorate_merida();
		$brigadas_merida   = $this->m_brigadas->brigadas_merida();
		$ingenio_merida    = $this->m_ingenio->ingenio_merida();
		$emprende_merida   = $this->m_emprende->emprende_merida();
		$agro_merida       = $this->m_agro->agro_merida();
/********************************************************************************************************************************/
	    $asesorate_miranda  = $this->m_asesorate->asesorate_miranda();
		$brigadas_miranda   = $this->m_brigadas->brigadas_miranda();
		$ingenio_miranda    = $this->m_ingenio->ingenio_miranda();
		$emprende_miranda   = $this->m_emprende->emprende_miranda();
		$agro_miranda       = $this->m_agro->agro_miranda();
/********************************************************************************************************************************/
	    $asesorate_monagas  = $this->m_asesorate->asesorate_monagas();
		$brigadas_monagas   = $this->m_brigadas->brigadas_monagas();
		$ingenio_monagas    = $this->m_ingenio->ingenio_monagas();
		$emprende_monagas   = $this->m_emprende->emprende_monagas();
		$agro_monagas       = $this->m_agro->agro_monagas();
/********************************************************************************************************************************/
	    $asesorate_esparta  = $this->m_asesorate->asesorate_esparta();
		$brigadas_esparta   = $this->m_brigadas->brigadas_esparta();
		$ingenio_esparta    = $this->m_ingenio->ingenio_esparta();
		$emprende_esparta   = $this->m_emprende->emprende_esparta();
		$agro_esparta       = $this->m_agro->agro_esparta();
/********************************************************************************************************************************/
	    $asesorate_portuguesa  = $this->m_asesorate->asesorate_portuguesa();
		$brigadas_portuguesa   = $this->m_brigadas->brigadas_portuguesa();
		$ingenio_portuguesa    = $this->m_ingenio->ingenio_portuguesa();
		$emprende_portuguesa   = $this->m_emprende->emprende_portuguesa();
		$agro_portuguesa       = $this->m_agro->agro_portuguesa();
/********************************************************************************************************************************/
	    $asesorate_sucre  = $this->m_asesorate->asesorate_sucre();
		$brigadas_sucre   = $this->m_brigadas->brigadas_sucre();
		$ingenio_sucre    = $this->m_ingenio->ingenio_sucre();
		$emprende_sucre   = $this->m_emprende->emprende_sucre();
		$agro_sucre       = $this->m_agro->agro_sucre();
/********************************************************************************************************************************/
	    $asesorate_tachira  = $this->m_asesorate->asesorate_tachira();
		$brigadas_tachira   = $this->m_brigadas->brigadas_tachira();
		$ingenio_tachira    = $this->m_ingenio->ingenio_tachira();
		$emprende_tachira   = $this->m_emprende->emprende_tachira();
		$agro_tachira       = $this->m_agro->agro_tachira();
/********************************************************************************************************************************/
	    $asesorate_trujillo  = $this->m_asesorate->asesorate_trujillo();
		$brigadas_trujillo   = $this->m_brigadas->brigadas_trujillo();
		$ingenio_trujillo    = $this->m_ingenio->ingenio_trujillo();
		$emprende_trujillo   = $this->m_emprende->emprende_trujillo();
		$agro_trujillo       = $this->m_agro->agro_trujillo();
/********************************************************************************************************************************/
	    $asesorate_vargas  = $this->m_asesorate->asesorate_vargas();
		$brigadas_vargas   = $this->m_brigadas->brigadas_vargas();
		$ingenio_vargas    = $this->m_ingenio->ingenio_vargas();
		$emprende_vargas   = $this->m_emprende->emprende_vargas();
		$agro_vargas       = $this->m_agro->agro_vargas();
/********************************************************************************************************************************/
	    $asesorate_yaracuy  = $this->m_asesorate->asesorate_yaracuy();
		$brigadas_yaracuy   = $this->m_brigadas->brigadas_yaracuy();
		$ingenio_yaracuy    = $this->m_ingenio->ingenio_yaracuy();
		$emprende_yaracuy   = $this->m_emprende->emprende_yaracuy();
		$agro_yaracuy       = $this->m_agro->agro_yaracuy();
/********************************************************************************************************************************/
	    $asesorate_zulia  = $this->m_asesorate->asesorate_zulia();
		$brigadas_zulia   = $this->m_brigadas->brigadas_zulia();
		$ingenio_zulia    = $this->m_ingenio->ingenio_zulia();
		$emprende_zulia   = $this->m_emprende->emprende_zulia();
		$agro_zulia       = $this->m_agro->agro_zulia();
/********************************************************************************************************************************/
		$this->load->view('v_principal',compact('contar','agro','asesorate','brigadas','emprende','ingenio','amazonas','anzoategui','apure','aragua','barinas','bolivar','carabobo','cojedes','delta','distrito','falcon','guarico',
			'lara','merida','miranda','monagas','esparta','portuguesa','sucre','tachira','trujillo','vargas','yaracuy','zulia','agro_amazonas','asesorate_amazonas',
			'brigadas_amazonas','emprende_amazonas','ingenio_amazonas','asesorate_anzoategui','ingenio_anzoategui','emprende_anzoategui','agro_anzoategui','brigadas_anzoategui','brigadas_apure','asesorate_apure','ingenio_apure','emprende_apure','agro_apure','brigadas_aragua','asesorate_aragua','ingenio_aragua','emprende_aragua','agro_aragua','brigadas_barinas','asesorate_barinas','ingenio_barinas','emprende_barinas','agro_barinas','brigadas_bolivar','asesorate_bolivar','ingenio_bolivar','emprende_bolivar','agro_bolivar','brigadas_carabobo','asesorate_carabobo','ingenio_carabobo','emprende_carabobo','agro_carabobo','brigadas_cojedes','asesorate_cojedes','ingenio_cojedes','emprende_cojedes','agro_cojedes','brigadas_delta','asesorate_delta','ingenio_delta','emprende_delta','agro_delta','brigadas_distrito','asesorate_distrito','ingenio_distrito','emprende_distrito','agro_distrito','brigadas_falcon','asesorate_falcon','ingenio_falcon','emprende_falcon','agro_falcon','brigadas_guarico','asesorate_guarico','ingenio_guarico','emprende_guarico','agro_guarico','brigadas_lara','asesorate_lara','ingenio_lara','emprende_lara','agro_lara','brigadas_merida','asesorate_merida','ingenio_merida','emprende_merida','agro_merida','brigadas_miranda','asesorate_miranda','ingenio_miranda','emprende_miranda','agro_miranda','brigadas_monagas','asesorate_monagas','ingenio_monagas','emprende_monagas','agro_monagas','brigadas_esparta','asesorate_esparta','ingenio_esparta','emprende_esparta','agro_esparta','brigadas_portuguesa','asesorate_portuguesa','ingenio_portuguesa','emprende_portuguesa','agro_portuguesa','brigadas_sucre','asesorate_sucre','ingenio_sucre','emprende_sucre','agro_sucre','brigadas_tachira','asesorate_tachira','ingenio_tachira','emprende_tachira','agro_tachira','brigadas_trujillo','asesorate_trujillo','ingenio_trujillo','emprende_trujillo','agro_trujillo','brigadas_vargas','asesorate_vargas','ingenio_vargas','emprende_vargas','agro_vargas','brigadas_yaracuy','asesorate_yaracuy','ingenio_yaracuy','emprende_yaracuy','agro_yaracuy','brigadas_zulia','asesorate_zulia','ingenio_zulia','emprende_zulia','agro_zulia'));
		
		$this->load->view('layout/footer');
	}
}
 