# Controller
Controller part of MVC architecture.

# Getting Started

The first thing you need do is update the repository.

```sh
    composer update
```

```sh
    composer dump-autoload -o
```

------

To Controller work, you need follow the PSR-4 Rules ( You can find about in internet ).
Using the Composer, just create in your project a composer.json file and add this:
```json
    "autoload": {
        "psr-4": {
            "Aplication\\Controller\\":[<Controllers path>]
        }
    }
```