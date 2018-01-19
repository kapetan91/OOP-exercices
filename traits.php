<?php

trait BasicComputations {
    public function add($x, $y) {
        return $x + $y;
    }

    public function multiply($x, $y) {
        return $x * $y;
    }

    public function divide($x, $y) {
        return $x / $y;
    }
    public function sqrt ($x){
    	return $x * $x;
    }
}


class SimpleCalculator {
    use BasicComputations;
}

class ScientificCalculator {
    use BasicComputations;
}

$simpleCalcultor = new SimpleCalculator();
$scientificCalculator = new ScientificCalculator();

echo $simpleCalcultor->add(2,2) . '<br>';
echo $scientificCalculator->sqrt(9);
