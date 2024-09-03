
# Laravel Slack Notifier

Laravel Slack Notifier is used to send messages in specific slack channel using slack webhook url.

Add your slack webhook url in .env file. Your webhook URL will look something like this:
```bash
SLACK_HOOK_URL="https://hooks.slack.com/services/T00000000/B00000000/XXXXXXXXXXXXXXXXXXXXXXXX"
```

## Installation

You can install the package via composer:

```bash
composer require "fabmedia/laravel-slack-notifier @dev"
```

## Usage

You can send message by using the `sendNotification` method.

```php
use Fabmedia\SlackNotifier\SlackNotifier;

$slackNotifier = new SlackNotifier();
$slackNotifier->sendNotification('This is a test message');
```

Alternatively, you could also send block message by using the `sendNotificationBlock` method.

```php
use Fabmedia\SlackNotifier\SlackNotifier;


$block = [
	[
		'type' => 'section',
		'text' => [
			'type' => 'mrkdwn',
			'text' => '*A new visitor has submitted an inquiry*',
		],
	],
	[
		'type' => 'divider',
	],
	[
		'type' => 'section',
		'text' => [
			'type' => 'mrkdwn',
			'text' => "*Name:* {$name}",
		],
	],
	[
		'type' => 'section',
		'text' => [
			'type' => 'mrkdwn',
			'text' => "*Email:* {$email}",
		],
	],
	[
		'type' => 'section',
		'text' => [
			'type' => 'mrkdwn',
			'text' => "*Message:*\n{$message}",
		],
	],
];

$slackNotifier = new SlackNotifier();
$slackNotifier->sendNotificationBlock($block);
```


## License

The MIT License (MIT). Please see [LICENSE](LICENSE) for more information.
