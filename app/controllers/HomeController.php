<?php

class HomeController extends BaseController {
	var $_metas;
	var $_prendas;
	
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
			),
            'videos' => array(
				'titulo' => 'Tendencia Cuadros Ripley, Otoño-Invierno 2015. #tueliges',
				'keyword' => 'tendencia, ripley, otoño invierno 2015, cuadros, moda, new york',
				'descripcion' => ''
			),
            'imprescindibles' => array(
				'titulo' => 'Tendencia Cuadros Ripley, Otoño-Invierno 2015. #tueliges',
				'keyword' => 'tendencia, ripley, otoño invierno 2015, cuadros, moda, new york',
				'descripcion' => ''
			),
			'camisa-blanca' => array(
				'titulo' => 'Tendencia Cuadros Ripley, Otoño-Invierno 2015. #tueliges',
				'keyword' => 'tendencia, ripley, otoño invierno 2015, cuadros, moda, new york',
				'descripcion' => ''
			),
			'capas-livianas' => array(
				'titulo' => 'Tendencia Cuadros Ripley, Otoño-Invierno 2015. #tueliges',
				'keyword' => 'tendencia, ripley, otoño invierno 2015, cuadros, moda, new york',
				'descripcion' => ''
			),
			'casacas-livianas' => array(
				'titulo' => 'Tendencia Cuadros Ripley, Otoño-Invierno 2015. #tueliges',
				'keyword' => 'tendencia, ripley, otoño invierno 2015, cuadros, moda, new york',
				'descripcion' => ''
			),
			'cuello-tortuga' => array(
				'titulo' => 'Tendencia Cuadros Ripley, Otoño-Invierno 2015. #tueliges',
				'keyword' => 'tendencia, ripley, otoño invierno 2015, cuadros, moda, new york',
				'descripcion' => ''
			),
			'participa-gana' => array(
				'titulo' => 'Tendencia Cuadros Ripley, Otoño-Invierno 2015. #tueliges',
				'keyword' => 'tendencia, ripley, otoño invierno 2015, cuadros, moda, new york',
				'descripcion' => ''
			)
		);
		$this->_metas = $metas;
		$this->_prendas = new Prendas();
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
	
	public function masculine()
	{
		return View::make('tendencias/masculine')
					->with('meta', $this->_metas['masculine']);
	}
	
	public function animalPrint()
	{
		return View::make('tendencias/animal-print')
					->with('meta', $this->_metas['animal-print']);
	}
	
	public function cuadros()
	{
		return View::make('tendencias/cuadros')
					->with('meta', $this->_metas['cuadros']);
	}
	
	public function bohemio()
	{
		return View::make('tendencias/bohemio')
					->with('meta', $this->_metas['bohemio']);
	}
	
	public function militar()
	{
		return View::make('tendencias/militar')
					->with('meta', $this->_metas['militar']);
	}
	
	public function tomboy()
	{
		return View::make('tendencias/tomboy')
					->with('meta', $this->_metas['tomboy']);
	}
	
	public function metalicos()
	{
		return View::make('tendencias/metalicos')
					->with('meta', $this->_metas['metalicos']);
	}
    public function videos()
	{
		return View::make('videos')
					->with('meta', $this->_metas['videos']);
	}
    public function imprescindibles()
	{
		return View::make('imprescindibles')
					->with('meta', $this->_metas['imprescindibles']);
	}
	public function camisaBlanca()
	{
		return View::make('must/camisa-blanca')
					->with('meta', $this->_metas['camisa-blanca']);
	}
	public function capasLivianas()
	{
		return View::make('must/capas-livianas')
					->with('meta', $this->_metas['capas-livianas']);
	}
	public function casacasLivianas()
	{
		return View::make('must/casacas-livianas')
					->with('meta', $this->_metas['casacas-livianas']);
	}
	public function cuelloTortuga()
	{
		return View::make('must/cuello-tortuga')
					->with('meta', $this->_metas['cuello-tortuga']);
	}
	public function participaGana()
	{
		return View::make('participa-gana')
					->with('meta', $this->_metas['participa-gana']);
	}
}
