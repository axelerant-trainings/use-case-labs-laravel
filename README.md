# Laravel Usecase Labs
Laravel use-case solutions

## Installation
### DDev setup:
See ddev installation here: https://ddev.readthedocs.io/en/latest/users/install/ddev-installation/

```
git clone git@github.com:axelerant-trainings/use-case-labs-laravel.git
cd use-case-labs-laravel
cp .env.example .env
ddev start
ddev composer install
ddev php artisan key:generate
ddev php artisan migrate
ddev launch
```
### LAMP/LEMP setup
- Clone the project
- Copy `.env.example` to `.env`
- Create a virtual host (vhost) and set the document root to the `public` folder path in the cloned project
- Update `APP_URL` in `.env`
- Create your database and update the `.env` file.
- Execute `composer install`
- `php artisan key:generate`
- `php artisan migrate`
- Launch the project in your web browser

## How to use this repository
The repository is built such that the `main` branch will contain layout changes (i.e. css, templates, etc.) and
code that will affect the overall demo (generally layout changes).
Each usecase should be built in a separate branch checked out from `main`.

<pre>
For e.g.
If there is a usecase in the specifications document such as:

<strong>Task 2: Build a usecase to demonstrate CRUD using Eloquent</strong>

You will create a new branch checked out from `main`:
<em>git checkout -b task2-crud-eloquent main</em>

When you make commits, please prefix them with the task number:
<em>git commit -m "task 2: set relations for models"</em>

</pre>
