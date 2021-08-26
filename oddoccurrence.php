<!-- Given an array of integers, find the one that appears an odd number of times.

There will always be only one integer that appears an odd number of times.

Examples
[7] should return 7, because it occurs 1 time (which is odd).
[0] should return 0, because it occurs 1 time (which is odd).
[1,1,2] should return 2, because it occurs 1 time (which is odd).
[0,1,0,1,0] should return 0, because it occurs 3 times (which is odd).
[1,2,2,3,3,3,4,3,3,3,2,2,1] shold return 4, because it appears 1 time (which is odd). -->

<!-- Solution One -->

function findIt(array $seq) : int
{
    // Enter your code here
  $count_array = array_count_values($seq);
  foreach($count_array as $num => $int) {
    if($int % 2 != 0){
      return (int)$num;
    }
  }
}

<!-- Solution Two -->

function findIt(array $seq) : int
{
    $nums = array_count_values($seq);
    foreach ($nums as $key => $val) {
      if ($val % 2) {
        return $key;
      }
    }
}

<!-- Solution Three -->

function findIt(array $seq) : int
{
    return array_reduce($seq, function($carry, $value) {
          return $carry ^ $value;
    });
}

<!-- Solution Four -->

function findIt(array $seq) : int
{
  $counter = [];
  foreach($seq as $number){
    if(array_key_exists($number, $counter)){
      $counter[$number] += 1;
    } else {
      $counter[$number] = 1;
    }
  }
  foreach($counter as $index => $count){
    if($count % 2 != 0){
      return $index;
    }
  }
}

<!-- Solution Five -->

function findIt(array $seq) : int {
  $num = 0;
  for($i = 0; $i < count($seq); $i++){
    $num ^= $seq[$i];
  }
  return $num;
}

<!-- Solution Six -->

function findIt(array $seq) : int {
    return key(array_filter(array_count_values($seq), function($a) {return $a % 2 !== 0;}));
}

<!-- Solution Seven -->

function findIt(array $seq) : int{
    for($i = min($seq); $i <= max($seq); $i++){
      $hm = 0;
      for($j = 0; $j < count($seq); $j++){
        if($seq[$j] == $i)
          $hm ++;
      }
      if($hm % 2 == 1)
        return $i;
    } 
}
