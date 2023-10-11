<?php
class RouteParameterHandler
{

    public function insertIdInURL($url, $ids){
        $url = explode('/', $url);
        $i = 0;
        foreach ($url as $key => $value) {
            if (strpos($value, ':') !== false) {
                $url[$key] = $ids[$i];
                $i++;
            }
        }
        return implode('/', $url);
    }

}