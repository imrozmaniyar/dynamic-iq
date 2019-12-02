<?php
//include_once("../configure.php");
namespace Inquilab\Util\Random\RandomString;
include_once 'Random.php';

/**
 * Description of RandomString
 *
 * @author Vikram
 */
class RandomString implements \Inquilab\Util\Random\Random\Random
{

    private $validCharacters = "ABCDEFGHIJKLMNPQRSTUXYVWZ123456789";
    private $length          = 0;

    public function __construct($length)
    {
        $this->length = $length;
    }

    public function __toString()
    {
        return $this->get($this->length);
    }

    public function get()
    {

        $validCharNumber = strlen($this->validCharacters);
        $result          = "";

        for ($i = 0; $i < $this->length; $i++) {
            $index = mt_rand(0, $validCharNumber - 1);
            $result .= $this->validCharacters[$index];
        }

        return $result;
    }

}
