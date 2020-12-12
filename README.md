# Design-Patterns
The intent of the repository is to inspire developers to understand and use design patterns through various examples. Please consider adding example for any pattern that may help others understand the pattern well.

# Installation

Please follow the guidelines in order to run this project.

- Clone the repo using `git clone https://github.com/basherr/PHP-Design-Patterns.git`
- Run the following command inside the cloned folder: `composer install`
- Make sure all the test cases passes by running `composer test` command
- To serve the project, navigate inside `public/` folder and run the command: `php -S localhost:8000`

Checkout the [routes.php](https://github.com/basherr/PHP-Design-Patterns/blob/master/bootstraps/routes.php) for testing any specific pattern example.

If you find some implementation wrong or vague, please create an issue and let us help each other in the path for learning **Design Patterns**.

# Example Creational Design Patterns
- [Abstract Pattern](https://github.com/basherr/PHP-Design-Patterns/tree/master/app/Patterns/Creational/AbstractPattern)
  - [Tv Manufacturer Example](https://github.com/basherr/PHP-Design-Patterns/tree/master/app/Patterns/Creational/AbstractPattern/TvManufacturer) - *Contributed by owner*
- [Builder Pattern](https://github.com/basherr/PHP-Design-Patterns/tree/master/app/Patterns/Creational/Builder)
  - [Database](https://github.com/basherr/PHP-Design-Patterns/tree/master/app/Patterns/Creational/Builder/Database) - *Contributed by owner*
  - [Resturant](https://github.com/basherr/PHP-Design-Patterns/tree/master/app/Patterns/Creational/Builder/Database/Resturant) - *Contributed by owner*
- [Factroy Method Pattern](https://github.com/basherr/PHP-Design-Patterns/tree/master/app/Patterns/Creational/FactoryMethod)
  - [Car Manufacturer](https://github.com/basherr/PHP-Design-Patterns/tree/master/app/Patterns/Creational/FactoryMethod/CarManufacturer) - *Contributed by owner*
  - [Logger](https://github.com/basherr/PHP-Design-Patterns/tree/master/app/Patterns/Creational/FactoryMethod/Logger) - *Contributed by owner*
- [Pool Pattern](https://github.com/basherr/PHP-Design-Patterns/tree/master/app/Patterns/Creational/Pool)
  - [StringReverse Worker](https://github.com/basherr/PHP-Design-Patterns/tree/master/app/Patterns/Creational/Pool/Worker)  - *Contributed by owner*
- [Prototype Pattern](https://github.com/basherr/PHP-Design-Patterns/tree/master/app/Patterns/Creational/Prototype)
  - [AcmePrototype](https://github.com/basherr/PHP-Design-Patterns/tree/master/app/Patterns/Creational/Prototype/AcmePrototype)  - *Contributed by owner*
- [Static Factory Pattern](https://github.com/basherr/PHP-Design-Patterns/tree/master/app/Patterns/Creational/StaticFactory)
  - [Suppliers](https://github.com/basherr/PHP-Design-Patterns/tree/master/app/Patterns/Creational/StaticFactory/Suppliers) - *Contributed by owner*

# Example Structural Design Patterns
- [Adapter Pattern](https://github.com/basherr/PHP-Design-Patterns/tree/master/app/Patterns/Structural/AdapterPattern)
  - [Human Adapter](https://github.com/basherr/PHP-Design-Patterns/tree/master/app/Patterns/Structural/AdapterPattern/Human) - *Contributed by owner*
  - [Operating Systems Adapter](https://github.com/basherr/PHP-Design-Patterns/tree/master/app/Patterns/Structural/AdapterPattern/OperatingSystems) - *Contributed by owner*
- [Bridge Pattern](https://github.com/basherr/PHP-Design-Patterns/tree/master/app/Patterns/Structural/BridgePattern)
  - [Flight Supplier Bridge](https://github.com/basherr/PHP-Design-Patterns/tree/master/app/Patterns/Structural/BridgePattern/FlightApi) - *Contributed by owner*
- [Composite Pattern](https://github.com/basherr/PHP-Design-Patterns/tree/master/app/Patterns/Structural/CompositePattern)
  - [Composite Form](https://github.com/basherr/PHP-Design-Patterns/tree/master/app/Patterns/Structural/CompositePattern/Form) - *Contributed by owner*
- [Decorator Pattern](https://github.com/basherr/PHP-Design-Patterns/tree/master/app/Patterns/Structural/DecoratorPattern)
  - [Active Record](https://github.com/basherr/PHP-Design-Patterns/tree/master/app/Patterns/Structural/DecoratorPattern/ActiveRecord) - *Contributed by owner*
- [Facade](https://github.com/basherr/PHP-Design-Patterns/tree/master/app/Patterns/Structural/Facade)
  - [Quickbooks](https://github.com/basherr/PHP-Design-Patterns/tree/master/app/Patterns/Structural/Facade/Quickbooks) - *Contributed by owner*
- [Proxy Pattern](https://github.com/basherr/PHP-Design-Patterns/tree/master/app/Patterns/Structural/ProxyPattern)
  - [File Reader Proxy](https://github.com/basherr/PHP-Design-Patterns/tree/master/app/Patterns/Structural/ProxyPattern/FileReader) - *Contributed by owner*
- [Registery Pattern](https://github.com/basherr/PHP-Design-Patterns/tree/master/app/Patterns/Structural/RegisteryPattern)
  - [Exam Registery](https://github.com/basherr/PHP-Design-Patterns/tree/master/app/Patterns/Structural/RegisteryPattern/Exam) - *Contributed by owner*

# Example Behavior Design Patterns
- [Chain Of Responsibility Pattern](https://github.com/basherr/PHP-Design-Patterns/tree/master/app/Patterns/Behavioral/ChainOfResponsibility)
  - [Handle Http Request](https://github.com/basherr/PHP-Design-Patterns/tree/master/app/Patterns/Behavioral/ChainOfResponsibility/HandleHttpRequests) - *Contributed by owner*
- [Command Pattern](https://github.com/basherr/PHP-Design-Patterns/tree/master/app/Patterns/Behavioral/Command/)
  - [API Scrapper](https://github.com/basherr/PHP-Design-Patterns/tree/master/app/Patterns/Behavioral/Command/ApiScrapper) - *Contributed by owner*
- [Iterator Pattern](https://github.com/basherr/PHP-Design-Patterns/tree/master/app/Patterns/Behavioral/Iterator)
  - [Hotel Suppliers](https://github.com/basherr/PHP-Design-Patterns/tree/master/app/Patterns/Behavioral/Iterator/HotelSuppliers) - *Contributed by owner*
- [Observer Pattern](https://github.com/basherr/PHP-Design-Patterns/tree/master/app/Patterns/Behavioral/Observer)
  - [User Signup Observer](https://github.com/basherr/PHP-Design-Patterns/tree/master/app/Patterns/Behavioral/Observer/NewUserSignedup) - *Contributed by owner*


# Contribution-Guides
Your contribution may have a very good impact on the community thus try sharing every possible example that you can either think of or had experienced in the past.

The repository is not based on any framework but rather inspired by [No Framework](https://github.com/PatrickLouys/no-framework-tutorial)

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
- Create a folder inside `app/Patterns/{Type e.g Creational, Behavioral or Structural}/{Pattern Name}/{Example Name}/your code`
- Please create a READMe.md and include a UML diagram. [Example README.md](https://github.com/basherr/PHP-Design-Patterns/tree/master/app/Patterns/Creational/AbstractPattern/TvManufacturer)
- Add `unit tests`
- Create `Application.php` with a method named `render` to describe the usage. [Example Application.php](https://github.com/basherr/PHP-Design-Patterns/blob/master/app/Patterns/Creational/AbstractPattern/TvManufacturer/Application.php)
- Please run `composer test` and make sure all tests are passing
- Create a PR agains the master branch

Please feel free to contribute and create pull requests.

# Console Commands
The only console command available for creating tests is:

`php .\bootstraps\console_autoload.php MyAwesomeTestName`

# Discussions

[Discord](https://discord.gg/G89qtfGR)

# Licenese
All of the codebases are **MIT licensed** unless otherwise specified.
