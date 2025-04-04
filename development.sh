#!/bin/bash

cd source
concurrently "npm run dev" "php artisan octane:start --port=12101 --watch"
