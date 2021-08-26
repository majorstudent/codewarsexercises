<!-- Jaden Smith, the son of Will Smith, is the star of films such as The Karate Kid (2010) and After Earth (2013). Jaden is also known for some of his philosophy that he delivers via Twitter. When writing on Twitter, he is known for almost always capitalizing every word. For simplicity, you'll have to capitalize each word, check out how contractions are expected to be in the example below.

Your task is to convert strings to how they would be written by Jaden Smith. The strings are actual quotes from Jaden Smith, but they are not capitalized in the same way he originally typed them. -->

<!-- Solution is by PieterD from codewars solutions -->

function toJadenCase($string) 
{
   if ( empty( $string )) {
     return null;
   }
   else {
     return ucwords( $string );
   }
}

<!-- Second Solution-->

use function ucwords as toJadenCase;

<!-- Third Solution -->

function toJadenCase($string) 
{
   $new_string = [];
   $words = explode(" ", $string);
   foreach($words as $str)
   {
     $new_string[] = ucfirst($str);
   }
   return implode($new_string," ");
}

<!-- fourth solution -->

function toJadenCase($string)
{
    return implode(' ', array_map(function($item){ return ucfirst($item);},explode(' ',$string)));
}

