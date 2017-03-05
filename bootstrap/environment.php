<?php
/*
|--------------------------------------------------------------------------
| Detect The Application Environment
|--------------------------------------------------------------------------
|
| Laravel takes a dead simple approach to your application environments
| so you can just specify a machine name for the host that matches a
| given environment, then we will automatically detect it for you.
|
*/
$env = $app->detectEnvironment(function()
{
    switch(gethostname()) {
        case 'production.com':
            $setEnv = 'production';
            break;
        case 'staging.com':
            $setEnv = 'staging';
            break;
        case 'xxx.com':
            $setEnv = 'local';
            break;
        default:
            $setEnv = 'local';
    }
    putenv('APP_ENV=' . $setEnv);

    $dotenv = new Dotenv\Dotenv(__DIR__ . '/../', '.env.' . getenv('APP_ENV'));
    // Loads environment variables from `.env` to `getenv()`, `$_ENV` and `$_SERVER` automagically.
    $dotenv->overload();
});