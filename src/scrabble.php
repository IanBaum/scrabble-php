<?php
    class Scrabble{

      private $score;

        function wordScore($word){
          $onePoint = ["A", "E", "I", "O","U", "L", "N", "R", "S", "T"];
          $twoPoints = ["D", "G"];
          $threePoints = ["B", "C", "M", "P"];
          $fourPoints = ["F", "H", "V", "W", "Y"];
          $fivePoints = ["K"];
          $eightPoints = ["J", "X"];
          $tenPoints = ["Q", "Z"];
            $wordUpper = strtoupper($word);
            $letters = str_split($wordUpper);
            foreach($letters as $letter){
                foreach($onePoint as $points){
                    if($letter === $points){
                      $this->score += 1;
                    }
                }
                foreach($twoPoints as $points){
                    if($letter === $points){
                      $this->score += 2;
                    }
                }
                foreach($threePoints as $points){
                    if($letter === $points){
                      $this->score += 3;
                    }
                }
                foreach($fourPoints as $points){
                    if($letter === $points){
                      $this->score += 4;
                    }
                }
                foreach($fivePoints as $points){
                    if($letter === $points){
                      $this->score += 5;
                    }
                }
                foreach($eightPoints as $points){
                    if($letter === $points){
                      $this->score += 8;
                    }
                }
                foreach($tenPoints as $points){
                    if($letter === $points){
                      $this->score += 10;
                    }
                }
            }
            return $this->score;
        }
    }
?>
