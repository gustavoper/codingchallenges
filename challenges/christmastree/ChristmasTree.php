<?php

/**
 * ChristmasTree.php - A simple class to solve the notorious Christmas Tree Challenge.
 * Thatś the improved version of "Stairs Challenge"
 */
class ChristmasTree
{

    private $spaceChar;
    private $christmasChar;
    private $lines;

    /**
     * ChristmasTree constructor.
     * @param $lines
     */
    public function __construct($lines)
    {
        $this->spaceChar = " ";
        $this->christmasChar = "#";
        $this->lines = $lines;
    }


    /**
     * Show the tree
     * @return string
     */
    public function printTree()
    {
        $printOut = "";
        $char = $this->christmasChar;
        $rightChar = "";
        for ($lineCount = 1; $lineCount <= $this->lines; $lineCount++) {
            //$printOut.= str_pad($char,intval($this->lines),$this->spaceChar,STR_PAD_LEFT).$rightChar."\n";
            $printOut .= str_pad($char, intval($this->lines) * 2, $this->spaceChar, STR_PAD_BOTH) . "\n";
            //$rightChar.=$this->christmasChar;
            $char .= $this->christmasChar . $this->christmasChar;
        }
        return $printOut;
    }



}



