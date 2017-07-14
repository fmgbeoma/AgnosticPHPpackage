<?php

namespace AgnosticPackage;
require "../vendor/autoload.php";

/**
 *
 * @author: Fredrick Mgbeoma
 *
 */

class CrudUrban
{
    public $urban;
    /**
     * Instantiate the Urban class
     * CrudUrban constructor.
     */

    public function __construct()
    {
        $this->urban = new Urban();
    }

    /**
     * Add new meaning to a word
     * @param $addMeaning
     * @return bool
     */
    public function add($addMeaning): bool
    {
        foreach ($this->urban->urbanWords as $key => $value) {
            if ($key == "description") {
                $value = $addMeaning;
            }
            echo $key . " = " . $value . "\n";
        }
        return true;
    }

    /**
     * Retrieve the meaning of a word
     * @param $retrieveMeaning
     * @return bool
     */
    public function read($retrieveMeaning): bool
    {
        if ($this->urban->urbanWords['word'] == $retrieveMeaning){
            $result = $this->urban->urbanWords['description'];
            echo "Meaning of " . $retrieveMeaning . " is: " . $result;
            return true;
        }
        echo "No result for: " . $retrieveMeaning;
        return false;
    }


    /**
     * @param $updateMeaning
     * @return bool
     */
    public function update($updateMeaning): bool
    {
        if ($this->urban->urbanWords['word'] == $updateMeaning){
            $result = $this->urban->urbanWords['description'] .= ' Just an addition';
            echo "Meaning of " . $updateMeaning . " is: " . $result;
            return true;
        }

        echo "No result for: " . $updateMeaning;
        return false;
    }

    /**
     * @param $deleteMeaning
     * @return bool
     */
    public function delete($deleteMeaning): bool
    {
        if ($this->urban->urbanWords['word'] == $deleteMeaning){
           $result = $this->urban->urbanWords['description'] == ' ';
            echo "Meaning of " . $deleteMeaning . " is: " . $result;
            return true;
        }

        echo "No result for: " . $deleteMeaning;
        return false;
    }
}

$c = new CrudUrban();
$c->update('cool');
//$c->read("cool");