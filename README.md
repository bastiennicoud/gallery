# Gallery

A little web app for the CLD2 module.

## Ready for dev

```zsh
# Clone the repo locally
git clone https://github.com/bastiennicoud/gallery.git foldername

cd foldername

# Install the php dependencies
composer install

# ! Copy the .env.example file to .env
# And add to it your dev env configuration (db connexion)

# Generate an app key
php artisan key:generate

# Migrate the database
php artisan migrate

# Start php server
php artisan serve
```