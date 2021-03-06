<?php

class HomeController extends BaseController {
	var $_metas;
	
	public function __construct()
	{
		$metas = array(
			'tendencias' => array(
				'titulo' => 'Tendencias Ripley Otoño-Invierno 2015 #tueliges',
				'keyword' => 'tendencias, ripley, otoño invierno 2015, new york, moda, militar, tomboy, bohemio, masculine, metalicos, animal print, cuadros, mylife, tueliges',
				'descripcion' => 'Masculine, bohemio, militar...descubre las nuevas tendencias que te trae Ripley este Otoño Invierno 2015'
			),
			'extra-normal' => array(
				'titulo' => 'Tendencia Extra Normal Ripley, Otoño-Invierno 2015 #tueliges',
				'keyword' => 'tendencia, ripley, otoño invierno 2015, extra normal, moda, new york',
				'descripcion' => 'Me fascinó este look Extra Normal de la nueva colección Otoño-Invierno 2015 de Ripley #tueliges'
			),
			'militar' => array(
				'titulo' => 'Tendencia Militar Ripley, Otoño-Invierno 2015 #tueliges',
				'keyword' => 'tendencia, ripley, otoño invierno 2015, militar, moda, new york',
				'descripcion' => 'Me fascinó este look Militar de la nueva colección Otoño-Invierno 2015 de Ripley #tueliges'
			),
			'tomboy' => array(
				'titulo' => 'Tendencia Tomboy Ripley, Otoño-Invierno 2015 #tueliges',
				'keyword' => 'tendencia, ripley, otoño invierno 2015, tomboy, moda, new york',
				'descripcion' => 'Me fascinó este look Tomboy de la nueva colección Otoño-Invierno 2015 de Ripley #tueliges'
			),
			'bohemio' => array(
				'titulo' => 'Tendencia Bohemia Ripley, Otoño-Invierno 2015 #tueliges',
				'keyword' => 'tendencia, ripley, otoño invierno 2015, bohemio, moda, new york',
				'descripcion' => 'Me fascinó este look Bohemio de la nueva colección Otoño-Invierno 2015 de Ripley #tueliges'
			),
			'masculine' => array(
				'titulo' => 'Tendencia Masculine Ripley, Otoño-Invierno 2015 #tueliges',
				'keyword' => 'tendencia, ripley, otoño invierno 2015, masculine, moda, new york',
				'descripcion' => 'Me fascinó este look Masculino de la nueva colección Otoño-Invierno 2015 de Ripley #tueliges'
			),
			'metalicos' => array(
				'titulo' => 'Tendencia Metálicos Ripley, Otoño-Invierno 2015 #tueliges',
				'keyword' => 'tendencia, ripley, otoño invierno 2015, metalicos, moda, new york',
				'descripcion' => 'Me fascinó este look Metálico de la nueva colección Otoño-Invierno 2015 de Ripley #tueliges'
			),
			'animal-print' => array(
				'titulo' => 'Tendencia Animal Print Ripley, Otoño-Invierno 2015. #tueliges',
				'keyword' => 'tendencia, ripley, otoño invierno 2015, animal print, moda, new york',
				'descripcion' => 'Me fascinó este look Animal Print de la nueva colección Otoño-Invierno 2015 de Ripley #tueliges'
			),
			'cuadros' => array(
				'titulo' => 'Tendencia Cuadros Ripley, Otoño-Invierno 2015. #tueliges',
				'keyword' => 'tendencia, ripley, otoño invierno 2015, cuadros, moda, new york',
				'descripcion' => 'Me fascinó este look Cuadros de la nueva colección Otoño-Invierno 2015 de Ripley #tueliges'
			),
			'videos' => array(
				'titulo' => 'Videos Tendencias Ripley Otoño-Invierno 2015 #tueliges',
				'keyword' => 'tendencias, ripley, otoño invierno 2015, moda, mylife, tueliges, new york, comercial, making of',
				'descripcion' => 'Mira nuestro nuevo comercial de tendencias Otoño-Invierno 2015 #tueliges'
			),
			'imprescindibles' => array(
				'titulo' => 'Imprescindibles por menos. Otoño Invierno 2015. Tendencias Ripley #tueliges',
				'keyword' => 'tendencias, moda, otoño invierno 2015, imprescindibles, mylife, tu eliges, ripley',
				'descripcion' => 'Me fascinó este look Imprescindible de la nueva colección Otoño-Invierno 2015 de Ripley #tueliges'
			),
			'must-camisa-blanca' => array(
				'titulo' => 'Este Otoño Invierno la camisa blanca es un auténtico must. Encuéntrala en Ripley.',
				'keyword' => 'tendencias, moda, otoño invierno 2015, ripley, must, camisa blanca, blusa blanca,  mylife, tueliges',
				'descripcion' => 'La camisa blanca es un must de la temporada. Yo elijo esta. #tueliges'
			),
			'must-capas-livianas' => array(
				'titulo' => 'Este Otoño Invierno las capas livianas son un auténtico must. Encuéntralas en Ripley.',
				'keyword' => 'tendencias, moda, otoño invierno 2015, ripley, must, capa, capas livianas, mylife, tueliges',
				'descripcion' => 'La capa es un must de la temporada. Yo elijo esta. #tueliges'
			),
			'must-casacas-livianas' => array(
				'titulo' => 'Este Otoño Invierno las casacas livianas son un auténtico must. Encuéntralas en Ripley.',
				'keyword' => 'tendencias, moda, otoño invierno 2015, casacas, casacas livianas, must, ripley, mylife, tueliges, que me pongo',
				'descripcion' => 'Las casacas livianas son un must de la temporada. Yo elijo esta. #tueliges'
			),
			'must-cuello-tortuga' => array(
				'titulo' => 'Este Otoño Invierno el cuello de tortuga es un auténtico must. Encuéntralo en Ripley.',
				'keyword' => 'tendencias, mylife, moda, cuello tortuga, must, otoño invierno 2015, ripley, que me pongo',
				'descripcion' => 'Las chompas con cuello de tortuga son un must de la temporada. Yo elijo esta. #tueliges'
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
					->with('meta', $this->_metas['tendencias']);
	}
	
	public function masculine()
	{
		return View::make('tendencias/masculine')
					->with('meta', $this->_metas['tendencias']);
	}
	
	public function animalPrint()
	{
		return View::make('tendencias/animal-print')
					->with('meta', $this->_metas['tendencias']);
	}
	
	public function cuadros()
	{
		return View::make('tendencias/cuadros')
					->with('meta', $this->_metas['tendencias']);
	}
	
	public function bohemio()
	{
		return View::make('tendencias/bohemio')
					->with('meta', $this->_metas['tendencias']);
	}
	
	public function militar()
	{
		return View::make('tendencias/militar')
					->with('meta', $this->_metas['tendencias']);
	}
	
	public function tomboy()
	{
		return View::make('tendencias/tomboy')
					->with('meta', $this->_metas['tendencias']);
	}
	
	public function metalicos()
	{
		return View::make('tendencias/metalicos')
					->with('meta', $this->_metas['tendencias']);
	}
	public function videos()
	{
		return View::make('videos')
					->with('meta', $this->_metas['videos']);
	}
	public function imprescindibles()
	{
		return View::make('imprescindibles')
					->with('meta', $this->_metas['tendencias']);
	}
	public function camisaBlanca()
	{
		return View::make('must/camisa-blanca')
					->with('meta', $this->_metas['tendencias']);
	}
	public function capasLivianas()
	{
		return View::make('must/capas-livianas')
					->with('meta', $this->_metas['tendencias']);
	}
	public function casacasLivianas()
	{
		return View::make('must/casacas-livianas')
					->with('meta', $this->_metas['tendencias']);
	}
	public function cuelloTortuga()
	{
		return View::make('must/cuello-tortuga')
					->with('meta', $this->_metas['tendencias']);
	}
	public function participaGana()
	{
		return View::make('participa-gana')
					->with('meta', $this->_metas['tendencias']);
	}
	public function verPrendaExtraNormal($url_prenda = 'cacharel-chompa-carola-pantalon-caracas')
	{
		$prendas = Prendas::where('categoria', '=', 'extra-normal');
		$prendas->where('url', '=', $url_prenda);
		return View::make('tendencias/extra-normal')
				->with('prenda', $prendas->first())
				->with('meta', $this->_metas['extra-normal']);
	}
	public function verPrendaMasculine($url_prenda = 'marquis-chompa-window-pantalon-gris')
	{
		$prendas = Prendas::where('categoria', '=', 'masculine');
		$prendas->where('url', '=', $url_prenda);
		return View::make('tendencias/masculine')
				->with('prenda', $prendas->first())
				->with('meta', $this->_metas['masculine']);
	}
	public function verPrendaImprescindibles($url_prenda = 'index-polo-rib')
	{
		$prendas = Prendas::where('categoria', '=', 'imprescindibles');
		$prendas->where('url', '=', $url_prenda);
		return View::make('imprescindibles')
				->with('prenda', $prendas->first())
				->with('meta', $this->_metas['imprescindibles']);
	}
	public function verPrendaMustCamisaBlanca($url_prenda = 'navigata-blusa-fefe')
	{
		$prendas = Prendas::where('categoria', '=', 'must/camisa-blanca');
		$prendas->where('url', '=', $url_prenda);
		return View::make('must/camisa-blanca')
				->with('prenda', $prendas->first())
				->with('meta', $this->_metas['must-camisa-blanca']);
	}
	public function verPrendaMustCapasLivianas($url_prenda = 'oasis-capa-plain')
	{
		$prendas = Prendas::where('categoria', '=', 'must/capas-livianas');
		$prendas->where('url', '=', $url_prenda);
		return View::make('must/capas-livianas')
				->with('prenda', $prendas->first())
				->with('meta', $this->_metas['must-capas-livianas']);
	}
	public function verPrendaMustCasacasLivianas($url_prenda = 'oasis-capa-plain')
	{
		$prendas = Prendas::where('categoria', '=', 'must/marquis-casaca-bone');
		$prendas->where('url', '=', $url_prenda);
		return View::make('must/casacas-livianas')
				->with('prenda', $prendas->first())
				->with('meta', $this->_metas['must-casacas-livianas']);
	}
	public function verPrendaMustCuelloTortuga($url_prenda = 'marquis-sweater-cami')
	{
		$prendas = Prendas::where('categoria', '=', 'must/cuello-tortuga');
		$prendas->where('url', '=', $url_prenda);
		return View::make('must/cuello-tortuga')
				->with('prenda', $prendas->first())
				->with('meta', $this->_metas['must-cuello-tortuga']);
	}
}
