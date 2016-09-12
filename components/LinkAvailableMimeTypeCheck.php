<?php

namespace cahuk\checking\components;

/**
 * Class LinkAvailableMimeTypeCheck
 * @package cahuk\checking\components
 */
class LinkAvailableMimeTypeCheck extends LinkAvailableCheck
{
    const MIME_TYPES_IMAGES = 'images';

    public static $mimeTypes = [
        self::MIME_TYPES_IMAGES => [
            'image/jpeg',
            'image/png',
            'image/gif'
        ],
    ];

    /** @var array  */
    protected $allowMimeTypes = [];


    public function checking()
    {
        if($res = parent::checking()) {
            /*in_array("HTTP/1.1 200 OK", $this->headers) {

            }*/
        echo "<pre>";
            var_dump($this->headers);
            echo "</pre>";
        }

    }

    /**
     * @param array $allowMimeTypes
     */
    public function setAllowMimeTypes(array $allowMimeTypes)
    {
        $this->allowMimeTypes = $allowMimeTypes;
    }
}