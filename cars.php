interface RaceCarInterface
{
    public function getVMax();
    public function getAcceleration();
}

interface EngineInterface
{
    public function getHP();
}

	class RaceCar implements RaceCarInterface, EngineInterface{
	public $silnik;
		public function getVMax(){
		$this->silnik=$silnik;
		public $VMax = $silnik*40;
		}
		public function getAcceleration(){
       	$this->silnik=$silnik;
		public $acceleration=$silnik*50;
		}
		

}

	class Engine extends RaceCar{
		public function getHP(){
		$this->silnik=$silnik;
		public $HP=$silnik/100;
		}
	}