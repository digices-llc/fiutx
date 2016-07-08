<?php

/**
 * Exchange Struct
 * Classed object represents US Financial Securities Exchange as identified by NASDAQ FTP
 * 
 * @category   Finance
 * @package    fiutx
 * @author     Roderic Linguri <roderic@rolcapital.com>
 * @copyright  2016 Digices LLC
 * @license    http://www.php.net/license/3_01.txt
 * @version    0.0.1
 * @link       https://github.com/digices-llc/fiutx.git
 */

class Exchange
{
    /** @property *int* id **/
    public $id;

    /** @property *char* key **/
    public $key;

    /** @property *str* symbol **/
    public $symbol;

    /** @property *str* name **/
    public $name;

    /** @method constructor **/
    public function __construct($id,$key,$symbol,$name)
    {
        $this->id = $id;
        $this->key = $key;
        $this->symbol = $symbol;
        $this->name = $name;
    }

}
