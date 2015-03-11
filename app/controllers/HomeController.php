<?php

class HomeController extends BaseController {
	var $_metas;
	
	public function __construct()
	{
		$metas = array(
			'extra-normal' => array(
				'titulo' => 'Tendencia Extra Normal Ripley, Otoño-Invierno 2015 #tueliges',
				'keyword' => 'tendencia, ripley, otoño invierno 2015, extra normal, moda, new york',
				'descripcion' => ''
			),
			'militar' => array(
				'titulo' => 'Tendencia Militar Ripley, Otoño-Invierno 2015 #tueliges',
				'keyword' => 'tendencia, ripley, otoño invierno 2015, militar, moda, new york',
				'descripcion' => ''
			),
			'tomboy' => array(
				'titulo' => 'Tendencia Tomboy Ripley, Otoño-Invierno 2015 #tueliges',
				'keyword' => 'tendencia, ripley, otoño invierno 2015, tomboy, moda, new york',
				'descripcion' => ''
			),
			'bohemio' => array(
				'titulo' => 'Tendencia Bohemia Ripley, Otoño-Invierno 2015 #tueliges',
				'keyword' => 'tendencia, ripley, otoño invierno 2015, bohemio, moda, new york',
				'descripcion' => ''
			),
			'masculine' => array(
				'titulo' => 'Tendencia Masculine Ripley, Otoño-Invierno 2015 #tueliges',
				'keyword' => 'tendencia, ripley, otoño invierno 2015, masculine, moda, new york',
				'descripcion' => ''
			),
			'metalicos' => array(
				'titulo' => 'Tendencia Metálicos Ripley, Otoño-Invierno 2015 #tueliges',
				'keyword' => 'tendencia, ripley, otoño invierno 2015, metalicos, moda, new york',
				'descripcion' => ''
			),
			'animal-print' => array(
				'titulo' => 'Tendencia Animal Print Ripley, Otoño-Invierno 2015. #tueliges',
				'keyword' => 'tendencia, ripley, otoño invierno 2015, animal print, moda, new york',
				'descripcion' => ''
			),
			'cuadros' => array(
				'titulo' => 'Tendencia Cuadros Ripley, Otoño-Invierno 2015. #tueliges',
				'keyword' => 'tendencia, ripley, otoño invierno 2015, cuadros, moda, new york',
				'descripcion' => ''
			)
		);
		$this->_metas = $metas;
	}

	public function index()
	{
		return View::make('home');
	}

	public function extraNormal()
	{
		return View::make('tendencias/extra-normal')
					->with('meta', $this->_metas['extra-normal']);
	}

}
