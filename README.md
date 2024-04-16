### Table of Contents

- [About](#about)
- [Screenshot](#screenshot)
- [Build With](#build-with)
- [Installation](#installation)
- [License](#license)

## <a name="about">About</a>

Forumoria is a simple, self-host and an open source project for your next forum.

## <a name="screenshot">Screenshot</a>

![Forumoria screenshot](/screenshot.png)

## <a name="build-with">Build With</a>

1. Laravel
2. Inertia
3. Vue
4. Tailwind

## <a name="installation">Installation</a>

1. `git clone https://github.com/propanto/forumoria`
2. `composer install`
3. `cp .env.example .env` and configure the `.env` file by your needs
4. Set database configs on `.env` file
5. `php artisan key:generate`
6. `php artisan migrate --seed`
7. Install `Meilisearch` on your machine from [here](https://www.meilisearch.com/docs/learn/getting_started/installation) and configure the `.env` file
8. `pnpm i & pnpm run dev`

## <a name="license">License</a>

[MIT](./LICENSE)
