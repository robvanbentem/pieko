<?php
/**
 * Created by: Rob van Bentem
 * Date: 3/4/14
 * Time: 8:58 PM
 */

class ApiController extends Controller {

    /**
     * @param array $array
     * @return string
     * @throws Exception
     */
    public function toJson(array $array)
    {
        if($json = json_encode($array)){
            return $json;
        }

        throw new Exception('Cannot encode to json');
    }

} 