- LARATWEETS
    A simnple social media app inspired by Twitter.

## Environment (via Docker / Laravel Sail)
- PHP 8.4.11
- LARAVEL 12.20
- DOCKER 28.3.2
- COMPOSER 2.8.9
- LIVEWIRE
- MYSQL

## HOW TO RUN

This Project runs fully inside Docker containers via Laravel Sail, so, no local installation of PHP, MYSQL or Redis is required.

# Clone the repository
git clone https://github.com/TiagoAFavaro/laravel-project01.git
cd LaraTweets

# Copy environment variables
cp .env.example .env

# Build and start containers
./vendor/bin/sail up -d

# run migrations
./vendor/bin/sail artisan migrate

# Access the app
./vendor/bin/sail artisan serve
