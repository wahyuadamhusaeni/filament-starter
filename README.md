# Filament Starter

## Requirements

Make sure all dependencies have been installed before moving on:

- [PHP](https://secure.php.net/manual/en/install.php) >= 8.1
- [Composer](https://getcomposer.org/download/)
- [Node.js](http://nodejs.org/) >= 18
- [Yarn](https://yarnpkg.com/en/docs/install)

## Getting Started

Start by cloning the Filament Starter repository and configuring the `.env` file:

```sh
git clone https://github.com/wahyuadamhusaeni/filament-starter.git
cd filament-starter
```

After `.env` is configured, you can proceed to migrate & seed the database:

```sh
php artisan migrate:fresh --seed
```

Once the database is seeded, you can login at `/admin` using the default admin user:

```yaml
email: admin@admin.com
Password: admin
```

### Build Assets

The project assets are compiled using Vite. This can be done by installing the dependencies and running the build command with Yarn.

```sh
yarn install
yarn build
```

## Bug Reports

If you discover a bug in Filament Starter, please [open an issue](https://github.com/wahyuadamhusaeni/filament-starter/issues).

## Contributing

Contributing whether it be through PRs, reporting an issue, or suggesting an idea is encouraged and appreciated.
