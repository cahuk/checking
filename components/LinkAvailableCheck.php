<?php

/**
 * Class LinkAvailableCheck
 *
 * @package checking\components
 */

namespace checking\components;


class LinkAvailableCheck extends ACheck\AbstractSpecificCheck
{
    /**
     * @return boolean
     */
    protected function checking()
    {
        $link = $this->getDataCheck();
        $res = $this->checkLinkStatus($link);
        return $res;
    }

    /**
     * @param $url string
     * @return bool
     */
    protected function checkLinkStatus($url)
    {
        $headers = get_headers($url);
        $linkStatus = false;
        if(in_array("HTTP/1.1 200 OK", $headers) || in_array("HTTP/1.0 200 OK", $headers)){
            $linkStatus = true;
        }

        return $linkStatus;
    }


}