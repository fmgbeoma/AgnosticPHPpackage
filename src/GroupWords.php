<?php

namespace AgnosticPackage;
require "../vendor/autoload.php";

class GroupWords
{
    /**
     * method to categorize words according to the number of occurrences
     */
    public function categorize()
    {
        $sampleInput = "Andrei: Prosper, Have you finished the curriculum? \nProsper: Yes. \nAndrei: Tight, Tight, Tight!!!";

        $text = str_replace([":","?",",","!", ".", "\n"], '', $sampleInput);

        $newText = explode(" ", $text);

        print_r(array_count_values($newText));
    }

}

$c = new GroupWords();
$c->categorize();