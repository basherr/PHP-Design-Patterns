<?php namespace App\Factory\Behavioral\Command\ApiScrapper;

class KlookApiScrapper extends AbstractApiScrapper
{
  private $_url = 'https://sandbox-api.klktech.com/v2/activities';
  private $_authKey = '103a8f33693e65d7b8841e939553fd235d99ecf0146de0b7faa55ad34bc105eb';
  private $_offset;
  private $_limit = 2;
  private $_http;

  public function __construct(HttpRequest $http, $offset = 0)
  {
    $this->_offset = $offset;
    $this->_http = $http;
  }

  public function execute(): void
  {
    $request = [
      'limit' => $this->_limit, 'offset' => $this->_offset,
      'fields' => 'activity_id,title,price,category_id,country_id,published'
    ];
    
    try {
      $response = $this->_http->setHeaders(['X-API-KEY' => $this->_authKey])->get($this->_url, $request);
      $this->map($response);
      $this->success();
    } catch (\Exception $e) {
      $this->fail();
    }
    
  }

  public function map($response): void
  {
    foreach($response->activities as $activity) {
      echo "Scrapped: " . $activity->title . '<br/>';
    }

    if(isset($response->links->next)) {
      $offset = $this->_offset + $this->_limit;
      Queue::get()->add(new KlookApiScrapper($this->_http, $offset));
    }
  }

  public function getOffset()
  {
    return $this->_offset;
  }
}