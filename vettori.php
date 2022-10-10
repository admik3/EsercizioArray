<?php
class RandomArray {
    private $rArr = array();


    public function riempi() {
        for($i=0; $i < 10; $i++) {
            $arr[] = rand(0, 100);
        }
        return $arr;
    }

    public function stampa($arr) {
        echo "<table border=2><tr>";
        foreach($arr as $a) {
            echo "<td>$a</td>";
        }
        echo "</tr></table>";
    }

    public function get_array() {
        return $rArr;
    }
    public function set_array($arr) {
        $rArr = $arr;
    }
}

$rArr = new RandomArray();
$arr = $rArr->riempi();
$rArr->stampa($arr);

?>