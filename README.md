# Design-Patterns
The intent of the repository is to inspire developers to use design patterns. Look for the relevant example that may fit in a situtation and try using it.

> **NOTE**:
> As of now some of the patterns example are missing UML diagrams. This will be added with time.

# Contribution-Guides
Your contribution may have a very good impact on the community thus try sharing every possible example that you can either think of or had experienced in the past.

The repository is not based on any framework but rather an inspiration of [No Framework](https://github.com/PatrickLouys/no-framework-tutorial)

The code structure for the repository is as follows:
- `app`
- `bootstraps`
- `public`
- `stubs`
- `tests`

The life cycle of the application is as follows:

- `public/index.php` serves as the entry point for the entire application which loads `boostrap/autoload.php`
- `bootstrap/autoload.php` processes `HTTP` request and forwards the route to the relevant `Controller method` defined in `bootstrap/routes.php`. 

In order to contribute and add real world example for the related pattern, please follow the guidelines:
- Fork the repository
- Create a folder inside `app/Patterns/{Type e.g Creational, Behavioral or Structural}/{Pattern Name}/{Example Name}/your code
- Please create a READMe.md and include a UML diagram. [Example README.md](https://github.com/basherr/PHP-Design-Patterns/tree/master/app/Patterns/Creational/AbstractPattern/TvManufacturer)
- Add `unit tests`
- Create `Application.php` with a method named `render` to describe the usage. [Example Application.php](https://github.com/basherr/PHP-Design-Patterns/blob/master/app/Patterns/Creational/AbstractPattern/TvManufacturer/Application.php)
- Please run `composer test` and make sure all tests are passing
- Create a PR agains the master branch

Please feel free to contribute and create pull requests.

# Console Commands
The only console command available for creating tests is:

`php .\bootstraps\console_autoload.php MyAwesomeTestName`

# Licenese
All of the codebases are **MIT licensed** unless otherwise specified.
