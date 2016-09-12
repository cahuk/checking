<?php

namespace cahuk\checking\components;

/**
 * Class RemoteContentMaxSizeCheck
 * @package cahuk\checking\components
 */
class RemoteContentMaxSizeCheck extends LinkAvailableCheck
{
    private $maxSize = 2621440; // 2.5 * 1024 * 1024 = 2621440 Kb. Max size of file


    /**
     * @return boolean
     */
    protected function checking()
    {
        /*$filePath = $this->getDataCheck();
        $file = new \SplFileInfo($filePath);
        if($file->isFile() && $file->getSize() <= $this->getMaxSize()) {
            return true;
        } else {
            return false;
        }*/

    }

    /**
     * @param int $maxSize Kb
     */
    public function setMaxSize($maxSize)
    {
        $this->maxSize = $maxSize;
    }
}