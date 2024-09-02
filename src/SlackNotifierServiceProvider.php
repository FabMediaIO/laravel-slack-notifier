<?php

namespace Fabmedia\SlackNotifier;

use Illuminate\Support\ServiceProvider;

class SlackNotifierServiceProvider extends ServiceProvider
{
  /**
   * Register services.
   *
   * @return void
   */
  public function register()
  {
    // Register the config file
    $this->mergeConfigFrom(__DIR__ . '/../config/slack-notifier.php', 'slack-notifier');
  }

  /**
   * Bootstrap services.
   *
   * @return void
   */
  public function boot()
  {
    $this->publishes([
      __DIR__.'/../config/slack-notifier.php' => config_path('slack-notifier.php'),
    ]);
  }
}
