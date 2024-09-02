<?php

namespace Fabmedia\SlackNotifier;

use GuzzleHttp\Client;

class SlackNotifier
{
  protected $url;

  public function __construct()
  {
    $this->url = config('slack-notifier.url');
    if (empty($this->url)) {
      $this->url = env('SLACK_HOOK_URL', '');
    }
    $this->client = new Client();
		$this->headers = [
			'content-type' => 'application/json',
		];
  }

  public function sendNotification($message)
  {
    $body = json_encode([
			'text' => $message,
		]);

		$response = $this->client->post($this->url, [
			'headers' => $this->headers,
			'body' => $body,
		]);
		//
		return $response->getBody();
  }

  public function sendNotificationBlock($block)
  {
    $body = json_encode([
			'text' => 'Block Notification',
			'blocks' => $block,
		]);

		$response = $this->client->post($this->url, [
			'headers' => $this->headers,
			'body' => $body,
		]);
		//
		return $response->getBody();
  }
}
