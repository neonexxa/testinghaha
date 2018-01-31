<?php 
namespace Towords\Search;

class Search extends \Towords\Base
{
    public function search($value)
    {
        try{
            $response = $this->callTwitter($value);
            return $response;
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }    
}