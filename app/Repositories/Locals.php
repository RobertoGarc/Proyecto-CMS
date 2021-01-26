<?php

namespace App\Repositories;

use DB;

class Locals{
	public function postBannerAdm($data){
		try{
			\DB::table('banner')
			->update([
				'bn_titulo'=>$data->bn_titulo,
				'bn_descripcion'=>$data->bn_descripcion,
				'bn_imagen'=>$data->bn_imagen,
				'bn_fondo'=>$data->bn_fondo
			]);
			return "ok";
		}catch(\Exception $e){
			return $e;
		}
	}

	public function getBanner(){
		try{
			$retorno=\DB::table('banner')->first();
			return $retorno;
		
		}catch(\Exception $e){
			return $e->getMessage();
		}
	}

	public function getEstudiantes(){
		try{
			$retorno=DB::table('estudiantes')->select('id','nombres','apellidos','cedula','direccion','telefono')->get();
			return $retorno;
		
		}catch(\Exception $e){
			return $e->getMessage();
		}
	}

	public function updateMenu($params){
		try{
			\DB::table('menu')
			->where('menu_id',1)
			->update([
				'menu_nombre'=>$params->menu_nombre,
				'menu_enlace'=>$params->menu_enlace
				
			]);
			return "ok";
		}catch(\Exception $e){
			return $e;
		}
	}

	public function getMenu(){
		try{
			$retorno=\DB::table('menu')->get();
			return $retorno;
		
		}catch(\Exception $e){
			return $e->getMessage();
		}
	}
}
