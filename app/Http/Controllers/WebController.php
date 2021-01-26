<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Locals;
class WebController extends Controller
{
    //
	private $_locals;
	function __construct(Locals $locals){
		$this->_locals=$locals;
	}

	public function obtenerBanner(){
		$template='layout.template-home';
		$result=$this->_locals->getBanner();

		return \View::make('website.page')
		->with('banner',$result)
		->with('template',$template);

	}

	public function obtenerEstudiantes(){
		$template='layout.template-estudiantes';
		$result=$this->_locals->getEstudiantes();

		return \View::make('estudiantes')
		->with('estudiante',$result)
		->with('template',$template);

	}

	public function guardarBannerAdm(Request $req){
		$template='administracion.banner';
		$data=(object)[
			'bn_titulo'=>$req->input('bnTitulo'),
			'bn_descripcion'=>$req->input('bnDescripcion'),
			'bn_imagen'=>$req->input('bnImagen'),
			'bn_fondo'=>$req->input('bnFondo')
		];
		$this->_locals->postBannerAdm($data);
		$result=$this->_locals->getBanner();

		return \View::make('administracion.page')
		->with('banner',$result)
		->with('template',$template);
		
	}


		public function obtenerBannerAdm(){
		$template='administracion.banner';
		$result=$this->_locals->getBanner();

		return \View::make('administracion.page')
		->with('banner',$result)
		->with('template',$template);

	}

	public function obtenerMenu(){
		$template='layout.template-home';
		$result=$this->_locals->getMenu();

		return \View::make('website.page')
		->with('menu',$result)
		->with('template',$template);

	}

}
