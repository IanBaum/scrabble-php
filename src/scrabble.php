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
            $allPoints = [$onePoint, $twoPoints, $threePoints, $fourPoints, $fivePoints, $eightPoints, $tenPoints];
            $allPoints_Values = [1,2,3,4,5,8,10];
            $wordUpper = strtoupper($word);
            $letters = str_split($wordUpper);

                foreach($letters as $letter){
                    for($index=0;$index < count($allPoints); $index++){
                        foreach($allPoints[$index] as $letterValues){
                            if($letter === $letterValues){
                                $this->score += $allPoints_Values[$index];
                            }
                        }
                    }
                }
        return $this->score;
        }
    }
?>
