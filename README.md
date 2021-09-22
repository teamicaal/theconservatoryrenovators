# Wraith

Wraith is built using the Roots stack of [Bedrock](https://roots.io/bedrock/) and [Sage](https://roots.io/sage/) (not Trellis).

## Features

- Better folder structure
- Dependency management with [Composer](https://getcomposer.org)
- Easy WordPress configuration with environment specific files
- Environment variables with [Dotenv](https://github.com/vlucas/phpdotenv)
- Autoloader for mu-plugins (use regular plugins as mu-plugins)
- Enhanced security (separated web root and secure passwords with [wp-password-bcrypt](https://github.com/roots/wp-password-bcrypt))
- Automatic compiling and syntax validation with [Webpack](https://webpack.github.io/) and [ESLint](https://eslint.org/)
- Automatic updates in local evironment with [BrowserSync](https://browsersync.io/)
- Easy package management with [Yarn](https://yarnpkg.com/)
- Templating with [Laravel Blade](https://laravel.com/docs/8.x/blade)
- Utility based [Tailwind CSS](https://tailwindcss.com/) - v2.1.2
- Easy control over js routes
- Smaller dist css files with [PurgeCSS](https://purgecss.com/)
- Cleaner WordPress outputted markup & more nice features with [Soil plugin](https://roots.io/plugins/soil/)

## Requirements

- PHP >= 7.3
- Composer - [Install](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)
- [Node.js](https://nodejs.org/en/) >=8.0.0
- [Yarn](https://yarnpkg.com/)

## Quick Install

**Requirements**
- [Gitub CLI](https://github.com/cli/cli#installation)
- GitHub Command Line Tools (installed from GitHub Desktop app)
- [wp dotenv CLI](https://github.com/aaemnnosttv/wp-cli-dotenv-command)

We have created a terminal command to help you get started with a new working repo in < 1 minute. It's recommdeded to set this up as a bash command, so you can specify a project name to run all commands. Some elements of these commands will change depending on your folder OS, folder structure and text editor of choice, but here's an example for [Atom](https://atom.io), using [Hyper](https://hyper.is) terminal':

**Atom**
```
gh repo create teamicaal/$1 --private
cd ~/Local\ Sites
git clone --bare https://github.com/teamicaal/wraith.git
cd wraith.git
git push --mirror https://github.com/teamicaal/$1.git
cd ..
rm -rf wraith.git
git clone https://github.com/teamicaal/$1.git
cd $1
valet link $1
github
atom ~/Local\ Sites/$1
open -a Hyper
wp dotenv init --template=.env.example --with-salts
wp dotenv set DB_NAME local_$1 --quote-single
wp dotenv set DB_USER root --quote-single
wp dotenv set DB_PASSWORD root --quote-single
wp dotenv set WP_HOME http://$1.test --quote-single
wp dotenv set ACF_PRO_KEY b3JkZXJfaWQ9Njc4NzZ8dHlwZT1wZXJzb25hbHxkYXRlPTIwMTUtMTEtMDIgMTI6MDY6MjI= --quote-single
composer install
cd web/app/themes/wraith
composer install
yarn
```

Once this is done, you just need to set up a local database and run `yarn start` in the theme directory.

## Manual Installation

1. Create a new empty repository for your project in teamicaal. Make sure it's set to private.
2. In Terminal, cd into your local GitHub create a bare clone of this repository
  ```
  $ git clone --bare https://github.com/teamicaal/wraith.git
  ```
3. Mirror-push to the new repository
  ```
  $ cd wraith.git
  $ git push --mirror https://github.com/teamicaal/new-repository.git
  ```
4. Remove the temporary local repository you created earlier
  ```
  $ cd ..
  $ rm -rf wraith.git
  ```
5. Visit your new repository. Set the default branch to master, and remove any unnecessary branches
6. Create a local database for your project and import it from the [theme dev site](https://wraith.icaal.dev)
- If you're using [Laravel Valet](https://laravel.com/docs/8.x/valet)
  ```
  $ cd new-repository
  $ valet link your-domain
  ```
7. Update environment variables in the `.env` file. Wrap values that may contain non-alphanumeric characters with quotes, or they may be incorrectly parsed. Note that we use `wr_` as the database prefix, as opposed to the default `wp_`

- Database variables
  - `DB_NAME` - Database name
  - `DB_USER` - Database user
  - `DB_PASSWORD` - Database password
  - `DB_HOST` - Database host
- `WP_ENV` - Set to environment (`development`, `staging`, `production`)
- `WP_HOME` - Full URL to WordPress home (https://example.com)
- `WP_SITEURL` - Full URL to WordPress including subdirectory (https://example.com/wp)
- `AUTH_KEY`, `SECURE_AUTH_KEY`, `LOGGED_IN_KEY`, `NONCE_KEY`, `AUTH_SALT`, `SECURE_AUTH_SALT`, `LOGGED_IN_SALT`, `NONCE_SALT`
  - Generate with [Bedrock WordPress salts generator](https://roots.io/salts.html)

If you need to host your database on a public server (e.g. s1.icaal.co.uk) set your `DB_HOST` to `127.0.0.1:5555`. You'll then need to open up an SSH tunnel to forward localhost requests to the server
```
$ ssh -N -L 5555:127.0.0.1:3306 dev@s1.icaal.co.uk -vv
```

8. Update the `.browserSync` in `/web/app/themes/your-theme/webpack.mix.js`
9. In your project directory, update any dependencies
  ```
  $ composer install
  ```
10. Add the `uploads` folder from the [theme dev site](https://wraith.icaal.dev)
11. In your theme directory, update any dependencies
  ```
  $ cd web/app/themes/your-theme
  $ composer install
  ```
12. Build theme theme package with Yarn and start developing. BrowserSync will launch a proxy server at localhost:3000 and will Webpack will start watching for file changes.
  ```
  $ yarn
  $ yarn start
  ```
13. Access WordPress admin at `https://example.com/wp/wp-admin/`

14. Update the password for the default WordPress user

15. Configure the WordPress settings as you would with any other website e.g. site title, tagline, search engine visibility, default categories etc.

16. Run a search & replace on the database to update all instances of the old URL, and refresh your permalinks

17. You can run the following commands in the theme directory to prep the files for distribution
- `yarn build` - Build theme for quick distribution (recommended for pushing to staging server)
- `yarn build:production` - Build theme and run optimise scripts defined in `/resources/assets/build/webpack.config.optimize.js`. By default this includes image optimisation for `/resources/assets`, UglifyJS, minifying CSS and PurgeCSS. This must be done for production servers.

## Documentation

Bedrock documentation is available at [https://roots.io/docs/bedrock/master/installation/](https://roots.io/docs/bedrock/master/installation/).
Sage documentation is available at [https://roots.io/docs/sage/9.x/installation/](https://roots.io/docs/sage/9.x/installation/).
