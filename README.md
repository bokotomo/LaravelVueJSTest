# LaravelVueJSTest

# version  
Laravel Framework 5.7.9  

# first setup
1.  
git clone https://github.com/Laradock/laradock.git  

2.  
cd laradock  
cp env-example .env  

3.  
DB_HOST=mysql  
REDIS_HOST=redis  
QUEUE_HOST=beanstalkd  

4.  
docker-compose up -d nginx mysql redis beanstalkd phpmyadmin  

5.  
docker-compose exec -it workspace bin/bash  

6.  
composer create-project laravel/laravel testapp  

7.  
docker-compose stop  

8.  
cd laradock/nginx/sites  

9.  
mv default.conf default.conf.back  

10.  
cp laravel.conf.example default.conf  

11.  
vim default.conf  

12.  
from /var/www/laravel/public to /var/www/testapp/public  

13.  
docker-compose up -d nginx mysql redis beanstalkd phpmyadmin  

14. 
http://localhost  

15. vue setup  
docker-compose exec -it workspace bin/bash  
cd testapp  
npm install  
npm run dev  

# npm run dev
docker-compose exec workspace /bin/bash -c "cd testapp && npm run dev"  

