<?php

/**
 * Class AbstractSpecificCheck
 *
 * @package checking\components
 */

namespace checking\components;


class FileExtensionCheck extends ACheck\AbstractSpecificCheck
{
    protected $extension = [];


    public function setExtension(array $ext)
    {
        $this->extension = $ext;
    }
    /**
     * @return boolean
     */
    protected function checking()
    {
        $filePath = $this->getDataCheck();
        $file = new \SplFileInfo($filePath);
        if($file->isFile() && in_array($file->getExtension(), $this->extension)) {
            return true;
        } else {
            return false;
        }
    }
}