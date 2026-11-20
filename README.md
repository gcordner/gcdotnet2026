# gcdotnet2026

A minimal custom WordPress block theme for [geoffcordner.net](https://geoffcordner.net).

## Requirements

- WordPress 6.4+
- PHP 8.1+
- Node.js (for the asset build)

## Setup

Clone the repo, then install dependencies:

    npm install
    composer install

## Build

Compile theme assets:

    npm run build

For development with file watching:

    npm start

Built with [`@wordpress/scripts`](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-scripts/).

## Code Quality

Lint PHP against WordPress Coding Standards:

    composer lint

Auto-fix what can be fixed:

    composer fix

## License

GPL-2.0-or-later
