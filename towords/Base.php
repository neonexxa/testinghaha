<?php 
namespace Towords;
class Base
{

    public function __construct()
    {
        
    }

    protected function callTwitter()
    {
        try{
            $response = '{"name": "test"}';
            return json_decode($response);
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }
    protected function statusCodeHandling($e)
    {
        $response = array("statuscode" => $e->getResponse()->getStatusCode(),
        "error" => json_decode($e->getResponse()->getBody(true)->getContents()));
        return $response;
    }

}
