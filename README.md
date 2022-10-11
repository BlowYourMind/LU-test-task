To run this project, you will need installed:
Composer,
php,
node,
mysql,
google account(to get captcha)

to launch this project:

1.clone repository
2.run composer install, npm install comands and wait about 3 minutes.
3.rename .env.example to .env
4.run php artisan key:generate in terminal
5.create database mysql
6.enter user and password from database to .env file -> DB_USERNAME="your username" DB_PASSWORD="your password"
7.create new schema in database with naming you want
8.write naming of schema to .env file -> DB_DATABASE= "Your name of schema"
9.run php artisan migrate:fresh --seed
10.You need to get Capthca keys https://www.google.com/recaptcha/admin/create.
10.1 To get them You need to fill the form. In field Label you have to write name you want. In field domain you have to write 127.0.0.1,
because in that domain will be launched this site.
11. After you get keys, you have to insert them in your .env file. NOCAPTCHA_SITEKEY= "Your sitekey" and NOCAPTCHA_SECRET="your secret key".
12.Now everything is set up, and you can launch site. Run php artisan serve
13.http://127.0.0.1:8000 this is your URL to the site.

Features: 
1. To read the content of news you need to press on the Article, the same with comments..
2. You can register, login and logout from session.
3. You can add comments to the news that is created automatically(while not authorised), using capthca.
4. You can create new posts when logged in, they will be automatically accessible to all users.
5. You can delete Posts and comments.

