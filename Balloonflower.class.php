<?php

class Balloonflower {
	
	public function __construct() {
		$this->adjectives = array(
			'White-labeled',
			'Bandwidth-enabled',
			'Productivity boosting',
			'Crowdsourced',
			'Downdrilling',
			'Early adopting',
			'Freemium model based',
			'Iterated',
			'Influenced',
			'Curated',
			'Disruptive',
			'Sustainable',
			'Auto-catalytic',
			'Toilet cleaning',
			'Hypothesized',
			'Lean',
			'Goran Ivanišević look-a-like',
			'SAAS', 
			'Cloud-based',
			'Looping',
			'Low-hanging fruit generating',
			'Monetized',
			'Pipelined',
			'Pivoted',
			'Viral',
			'HTML5',
		);
		
		$this->nouns = array(
			'Platform',
			'Social network',
			'Protocol',
			'Framework',
			'Banana',
			'Thai massage',
			'Facebook app',
			'iPhone app',
			'iPad app',
			'Windows Phone app',
			'BlackBerry app',
			'Web app',
			'Holy grail',
			'Splash page',
			'Unicycle',
			'Sybian',
			'Goatee',
			'Fleshlight'
		);
		
		// some stuff to set up a startup here
		$this->idea = $this->generateIdea();
	}
	
	public function customerValidation() {
		// some customer validation stuff here
	}
	
	public function generateIdea($idea = null) {
		$randomAdjectives = array();
		for($i=0;$i<rand(2,4);$i++) {
			$randomAdjectives[] = $this->adjectives[rand(0,count($this->adjectives)-1)];
		}
		$randomAdjectives = array_unique($randomAdjectives);
		$idea = implode(' ',$randomAdjectives).' ';
		$idea .= $this->nouns[rand(0,count($this->nouns)-1)];
		return $idea;
	}
	
	public function drinkBeer() {
		$this->chug('beer');
	}
	
	public function drinkFisk($name) {
		if(!$name!='James Digby') {
			die('Sorry, you do not meet the requirements for drinking Fisk.');
		} else {
			$this->chug('Fisk');
		}
	}
	
	public function chug($drink,$name=null) {
		if($drink=='Fisk' AND $name=='James Digby') {
			
			$this->chug($drink,$name);
		} elseif($drink=='beer') {
			
		}
	}
	
}