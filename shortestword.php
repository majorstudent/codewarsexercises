<!-- Description:
Simple, given a string of words, return the length of the shortest word(s).

String will never be empty and you do not need to account for different data types.

FUNDAMENTALS -->

<!-- Solution One -->

function findShort($str){
  $wordsArray = preg_split('/\s+/', $str);
  $minLength = strlen($wordsArray[0]);
  foreach ($wordsArray as $word) {
    if (strlen($word) < $minLength) {
      $minLength = strlen($word);
    }
  }
  return $minLength;
}

<!-- Sollution Two -->

function findShort($str){
  $min = 10;
  $arr = explode(" ",$str);
  foreach($arr as $key)   
    if(strlen($key) < $min)
      $min = strlen($key);  
  return $min;
}

<!-- Solution Three -->

function findShort($str){
  $arr = explode(' ', $str);
  usort($arr,'sortByLength');
  return strlen($arr[0]);
}
function sortByLength($a,$b){
  return strlen($a)-strlen($b);
}

<!-- Solution Four -->

function findShort($str)
{
      //Spliting the string into array
      $a=explode(' ', $str);
      
      //Finding the smallest word
      $small = strlen($a[0]);
      for ($i=1;$i < count($a);$i++)
      {
          
          if ( $small > strlen($a[$i]) )
            $small=strlen($a[$i]);
          
      }
      
      return $small;
      
}
