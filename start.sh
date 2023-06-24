#!/bin/bash

# Copy .env.example to .env
echo "Copying .env.example to .env..."
cp .env.example .env

# Build container
echo "Building containers..."
sudo docker-compose build app

# Build and start Laravel container
echo "Starting Laravel container..."
docker-compose up -d app

# Install PHP dependencies
echo "Installing PHP dependencies..."
docker-compose run --rm composer install

# Generate Laravel application key
echo "Generating Laravel application key..."
docker-compose run --rm artisan key:generate

