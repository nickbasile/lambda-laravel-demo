# lambda-laravel-demo
This is a demo Laravel project for Lambda School. It is a "reverse job board" where potential employers can find Lambda School students to join their teams.

## Installation
Follow these steps to get set up. If you get stuck, please refer to the Laravel [installation documentation](https://laravel.com/docs/5.8/installation).
1. Make sure you have [Composer](https://getcomposer.org/download/) and [Laravel Valet](https://laravel.com/docs/5.8/valet#installation) installed.
   - If you didn't have Valet installed, make sure you run the [park command](https://laravel.com/docs/5.8/valet#the-park-command).
1. Clone this repository to your machine.
1. Run `composer install` and `npm install` in the cloned directory.
1. Duplicate `.env.example` and rename it `.env`
1. Update your `.env` file's database configuration, the `MAIL_DRIVER` using a [Mailtrap.io account](https://mailtrap.io/), `APP_NAME`, and `APP_URL`.
   - If you don't have a database set up, you can follow the [Valet documentation](https://laravel.com/docs/5.8/valet#installation) to set up MySQL.
1. Generate your application key by running `php artisan key:generate` in the root of your project.
1. Check that everything is working by running the test suite with `vendor/bin/phpunit` in the root of your project.
1. Populate the database with dummy data by running `php artisan migrate:fresh --seed` in the root of your project.
1. If you use the default Valet settings, navigate to `http://lambda-laravel-demo.test` to view the project.

## Need Help?
If you're a Lambda School student and you need some help, please reach out to me on Slack.

If you're not a Lambda School student, then feel free to reach out on [Twitter](https://twitter.com/nickjbasile) or [make an issue](https://github.com/nickbasile/lambda-laravel-demo/issues).

## Additional Resources
- [Laravel Documentation](https://laravel.com/docs/5.8)
- [Laracasts.com](https://laracasts.com/)
- [Laravel from Scratch on Laracasts.com](https://laracasts.com/series/laravel-from-scratch-2018)
- [Laravel News](https://laravel-news.com/)

## Laravel Folks to Follow
- [Taylor Otwell's Twitter](https://twitter.com/taylorotwell)
- [Mohamed Said's Twitter](https://twitter.com/themsaid)
- [Jeffrey Way's Twitter](https://twitter.com/jeffrey_way)
- [Adam Wathan's Twitter](https://twitter.com/adamwathan)
- [Matt Stauffer's Twitter](https://twitter.com/stauffermatt)
- [Freek Van der Herten's Twitter](https://twitter.com/freekmurze)
- [Marcel Pociot's Twitter](https://twitter.com/marcelpociot)
