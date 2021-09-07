# Quickstart
1. Clone me
2. Install dependecies ```composer install```
3. Create a new database with a name of your liking, (good if 'tinkergram')
4. Rename ```.env.example``` to ```.env.```, update ```.env``` with your database credentials
5. Start WAMP/MAMP
6. Run ```php artisan migrate``` to migrate database schemas
7. Run ```php artisan key:generate``` to generate an application key
8. Run ```php artisan storage:link``` to link storage folder
9. Run ```php artisan serve``` to start server
10. Head to localhost:8000 to see your application

# Requirements (At least what i used)
- Composer 2.1.6
- Laravel installer 4.2.8
- NPM 7.21.0
- MySQL 5.7.34 (from mamp)
