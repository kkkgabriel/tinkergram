# Contents
- [Quickstart](#quickstart)
- [Requirements](#requirements)
- [Known issues](#known-issues)

# Quickstart
1. Clone me
2. Update composer ```composer update```
3. Install dependecies ```composer install```
4. Create a new database with a name of your liking, (good if 'tinkergram')
5. Rename ```.env.example``` to ```.env```, update ```.env``` with your database credentials
6. Start WAMP/MAMP
7. Run ```php artisan migrate``` to migrate database schemas
8. Run ```php artisan key:generate``` to generate an application key
9. Run ```php artisan storage:link``` to link storage folder
10. Run ```php artisan serve``` to start server
11. Head to localhost:8000 to see your application

# Requirements
(At least what i used)
- Composer 2.1.6
- Laravel installer 4.2.8
- NPM 7.21.0
- MySQL 5.7.34 (from mamp)

# Known issues
1. (Windows 10, git bash) > ```composer install``` 
> [ErrorException]
> tempnam(): file created in the system's temporary directory

Solution: Run powershell in admin
