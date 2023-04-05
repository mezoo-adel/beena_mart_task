<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://alunos.b7web.com.br/media/courses/laravel-vue.png" width="400" alt="Laravel Vue Logo"></a></p>


## About This Project

It's a simple Laravel Project contains VUE framework inside html page, just page gets,create data to database by simple API.

## How to run the project ??

after you download/clone the project, you should follow these steps: </br>
<pre>
    1- go to project directory and open terminal/cmd. </br>
    2- copy the .env.example file and rename it to .env </br>
    3- run the following commands: </br>
        - composer update. </br>
        - php artisan key:generate. </br>
        - php artisan migrate. "make sure that DB name is in .env file, enter yes to create the database" </br>
        - php artisan db:seed </br>
    4- finally run "php artisan serve"</br>
    5- "optional" if you want to create 5 more default products using factory: </br>
        - run php artisan tinker </br>
        - \App\Models\Item::factory(5)->create(). </br>
        - press ctrl+c to exit tinker. </br>
        
</pre>
You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
