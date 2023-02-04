<?php
 
 function microtimeFloat()
 {
      list($usec, $sec) = explode(" ", microtime());
      return ((float)$usec + (float)$sec);
 }
 
 $timeStar = microtimeFloat();
 $timeEnd = microtimeFloat();
 
 echo $timeEnd - $timeStar;

