chmod +x setup_project.sh
./setup_project.sh

cd w-admin
valet link
npm install
npm run build
composer install #vendor

.env file create 
php artisan key:generate

Change the file permissions to make the script executable:
    chmod +x setup_project.sh

Run script
    ./setup_project.sh

cd w-admin
