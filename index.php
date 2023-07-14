<?php 
function calculateDistance($point1, $point2) {
    return sqrt(pow($point2[0] - $point1[0], 2) + pow($point2[1] - $point1[1], 2));
}
function isSquare($coordinates) {
    $combinations = combinations($coordinates, 4);
foreach ($combinations as $combination) {
        $distances = array();
        for ($i = 0; $i < 4; $i++) {
            for ($j = $i + 1; $j < 4; $j++) {
                $distances[] = calculateDistance($combination[$i], $combination[$j]);
            }
        }
 sort($distances);
 if ($distances[0] == $distances[1] && $distances[1] == $distances[2] && $distances[2] == $distances[3] && $distances[4] == $distances[5]) {
  return true;
}
}
return false;
}
// Helper function to generate combinations
function combinations($array, $r) {
$n = count($array);
if ($r > $n) {
return array();
}
$combinations = array();
$indices = range(0, $r - 1);
$combinations[] = array_intersect_key($array, array_flip($indices));
while (true) {
$i = $r - 1;
while ($i >= 0 && $indices[$i] == $i + $n - $r) {
  $i--;
}
if ($i < 0) {
  break;
}
$indices[$i]++;
for ($j = $i + 1; $j < $r; $j++) {
  $indices[$j] = $indices[$j - 1] + 1;
}
$combinations[] = array_intersect_key($array, array_flip($indices));
}
return $combinations;
}

 ?>