<?php

/**
 * Class AbstractSpecificCheck
 *
 * @package checking\ACheck\components
 */

namespace checking\components\ACheck;


abstract class AbstractSpecificCheck extends AbstractChecking
{
    /**
     * AbstractSpecificCheck constructor.
     * @param $dataCheck mixed
     * @param null $returnVal
     */
    public function __construct($dataCheck, $returnVal=null)
    {
        if($returnVal) {
            $this->returnVal = $returnVal;
        }

        $this->dataCheck = $dataCheck;
    }
}