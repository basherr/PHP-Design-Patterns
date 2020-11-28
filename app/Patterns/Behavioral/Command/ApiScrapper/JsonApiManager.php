<?php
/**
* a generic class to handle all klk tech API requests
*/
namespace App\Patterns\Behavioral\Command\ApiScrapper;

use Yii;
use Curl\Curl;

class JsonApiManager implements HttpRequest
{
  private $_headers;

	public function setHeaders(array $headers)
	{
		$this->_headers = $headers;
	}

  protected function getHeaders()
  {
    return \array_merge([
      'Content-Type'=>'application/json',
      'cache-control' => 'no-cache',
      'Accept-Language' => 'en_US'
    ], $this->_headers);
  }

  public function get(string $url, array $request = []){
		return $this->execute($url, $request );
  }
  
  private function execute(string $url, $request, $type = 'GET') {
		$curl = new Curl();
		
		foreach ($this->getHeaders() as $key => $value) {
			$curl->setHeader($key, $value);
		}

		$curl->setOpt(CURLOPT_RETURNTRANSFER, 1);
		$curl->setOpt(CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
		
		switch ($type) {
			case 'GET':
			    if ($request != null) {
			        $url .= '?'.http_build_query($request);
					}
					$curl->get($url);
			    break;
			case 'POST':
					$curl->setOpt(CURLOPT_CUSTOMREQUEST, 'POST');
			    $curl->post($url,  json_encode($request) );
			    break;
			default:
				return FALSE;
		}
		return json_decode($curl->response);
	}
}