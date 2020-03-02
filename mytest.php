<?php
function SecondGreatLow($param){
	if(is_array($param)){
		$param=array_unique($param);
		if(count($param)>1){
			asort($param);
			unset($param[0]);
			return implode(" ",$param);	
		}else{
			return "Minimum 2 array value";
		}
	}else{
		return "Invalid Array";
	}
}

function MultiplicativePresistence($n){
	if (strlen($n)==1) {
		return $n;
	} else {
		return MultiplicativePresistence( (int)substr($n,0,1)*(int)substr($n,1,(strlen($n)-1)) );
	}
}

function MeanMode($dataArr){
	if(!is_array($dataArr)){
		return "Invalid Array";
	}else{	
		$multiDArr = [];
		for ($i = 0; $i < count($dataArr); $i++) {
			$key = $dataArr[$i];
			if (isset($multiDArr[$key])) {
				$multiDArr[$key] = $multiDArr[$key] + 1;
			} else {
				$multiDArr[$key] = 1;
			}
		}

		$highestOccuring = 0;
		$highestOccuringKey = null;
		foreach ($multiDArr as $key => $value) {

			if ($value > $highestOccuring) {
				$highestOccuring = $value;
				$highestOccuringKey = $key;
			}

		}
		return $highestOccuringKey;
	
	}
}

echo "1. SecondGreatLow \n";
echo SecondGreatLow(array(7,7,12,98,106));
echo"\n";
echo"\n";
echo "2. MultiplicativePresistence \n";
echo MultiplicativePresistence(39);
echo"\n";
echo"\n";
echo "3. MeanMode \n";
echo MeanMode(array(5,3,3,3,1));
?>
