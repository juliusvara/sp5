# SPRINT 5
## HOW TO RUN:
    Make sure you have installed ampps and composer in ampps/www!
    1) Clone git repository to your PC.
    2) run php composer.phar create-project laravel/laravel for example "test" in your ampps/www folder, then copy Vendor folder and paste it inside your cloned project folder.
    3) Git bash inside cloned projects repository and run following commands:
            1. php ../composer.phar require laravel/ui
            2. create .env file and copy .env.example content to .env file.
            3. Create database using phpmyadmin or ms workbench.
            4. Configure .env file with your DB name and DB password.
            5. Inside git bash run php artisan migrate.
            6. Then run php artisan db:seed --class=UserSeeder
            7. Run php artisan serve.
            8. Go to provided link. Login credentials are: login is "Mindaugas@b.com", password is "pass".
            9. You'll need to click the button "generate key" and you're set to go!.