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

    public function extractIdFromURL($url){
        $url = explode('/', $url);
        $ids = [];
        foreach ($url as $key => $value) {
            if (is_numeric($value)) {
                $ids[] = $value;
            }
        }
        return $ids;
    }


    public function routeTemplateFromURL($url){
        $url = explode('/', $url);
        foreach ($url as $key => $value) {
            if (is_numeric($value)) {
                $url[$key] = ':id';
            }
        }
        return implode('/', $url);
    }
}