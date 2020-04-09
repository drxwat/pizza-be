# PizzaBe


## Deploy

1. Create `.env` file in the root with correct MySQL connection config and `APP_KEY` OR configure Heroku config variables with the same values

2. Deploy the app to Heroku using github

3. Run `php artisan migrate` in the root to generate tables with mock data
