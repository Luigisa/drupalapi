<?php

namespace Helvetia\CoreLib\App;

use GuzzleHttp\Client;

class HelvetiaCore {

  private $serverUri;

  private $action;

  private $user;

  /**
   * HelvetiaCore constructor.
   *
   * @param string $serverUri
   */
  public function __construct(string $serverUri, string $action, string $user) {
    $this->serverUri = $serverUri;
    $this->action = $action;
    $this->user = $user;
  }

  /**
   * @param string $serverUri
   *
   * @return HelvetiaCore
   */
  public static function build(
    string $serverUri,
    string $action,
    string $user
  ): HelvetiaCore {
    return new self($serverUri, $action, $user);
  }

  public function execute() {

    if ($this->action == 'getDatosUsuario') {
      $response = $this->getDatosUsuario();
    }

    return $response;
  }

  private function getDatosUsuario() {
    $baseUri = 'http://wsacpt.helvetia.es';
    $requestUri = '/rest/b2b/v1/users/' . $this->user;

    $client = new Client([
      'base_uri' => $baseUri,
    ]);

    $response = $client->request('GET', $requestUri, [
      'query' => ['codUsuario' => 'MARISANT'],
    ]);

    return $response->getBody()->getContents();
  }
}
