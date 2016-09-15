<?php
    require_once __DIR__."/../src/scrabble.php";

    class ScrabbleTest extends PHPUnit_Framework_TestCase{

        function testWordScore_one(){
            //Arrange
            $testScrabble = new Scrabble;
            $testWord = "A";

            //Act
            $result = $testScrabble->wordScore($testWord);

            //Assert
            $this->assertEquals(1, $result);
        }

        function testWordScore_two(){
            //Arrange
            $testScrabble = new Scrabble;
            $testWord = "ga";

            //Act
            $result = $testScrabble->wordScore($testWord);

            //Assert
            $this->assertEquals(3, $result);
        }

        function testWordScore_three(){
            //Arrange
            $testScrabble = new Scrabble;
            $testWord = "gap";

            //Act
            $result = $testScrabble->wordScore($testWord);

            //Assert
            $this->assertEquals(6, $result);
        }

        function testWordScore_four(){
            //Arrange
            $testScrabble = new Scrabble;
            $testWord = "chad";

            //Act
            $result = $testScrabble->wordScore($testWord);

            //Assert
            $this->assertEquals(10, $result);
        }
        function testWordScore_five(){
            //Arrange
            $testScrabble = new Scrabble;
            $testWord = "chadk";

            //Act
            $result = $testScrabble->wordScore($testWord);

            //Assert
            $this->assertEquals(15, $result);
        }
        function testWordScore_eight(){
            //Arrange
            $testScrabble = new Scrabble;
            $testWord = "chadkj";

            //Act
            $result = $testScrabble->wordScore($testWord);

            //Assert
            $this->assertEquals(23, $result);
        }
        function testWordScore_ten(){
            //Arrange
            $testScrabble = new Scrabble;
            $testWord = "chadkjq";

            //Act
            $result = $testScrabble->wordScore($testWord);

            //Assert
            $this->assertEquals(33, $result);
        }
    }
?>
