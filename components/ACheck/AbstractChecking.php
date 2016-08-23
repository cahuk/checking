<?php

/**
 * Class AbstractChecked
 *
 * For use you mast realize method checking
 * thereafter, you can invoke a method check() in the context of the program
 *
 * @package checking\ACheck
 */

namespace checking\components\ACheck;


abstract class AbstractChecking
{
    protected $status = false;
    protected $returnVal = null;
    protected $dataCheck = null;

    /**
     * @return bool
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return bool|mixed
     */
    public function check()
    {
        $result = $this->status = $this->checking();

        if($result==false && $this->returnVal !== null) {
            $result = $this->getReturnVal();
        }

        return $result;
    }

    /**
     * @param null $dataCheck
     */
    public function setDataCheck($dataCheck)
    {
        $this->dataCheck = $dataCheck;
    }

    /**
     * @return mixed
     */
    public function getDataCheck()
    {
        return $this->dataCheck;
    }

    /**
     * @return null
     */
    public function getReturnVal()
    {
        return $this->returnVal;
    }

    /**
     * @return boolean
     */
    abstract protected function checking();
}