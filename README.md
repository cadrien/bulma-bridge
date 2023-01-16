Bulma Bridge
===========

The Bulma bridge provides integration for [Twig](https://twig.symfony.com/) with
various Symfony components.

Installation
---------
This project using composer.
```bash
composer require cadrien/bulma-bridge
```

## Usage
Add Bulma form theme in Twig.
```yaml
twig:
  default_path: '%kernel.project_dir%/templates'
  paths:
    - ...
    - 'vendor/cadrien/bulma-bridge/'
  form_themes: [ 'Resources/views/form/bulma_1_layout.html.twig', '...' ]
```

Resources
---------

* [Contributing](https://cadrien.fr)
* [Report issues](https://github.com/cadrien/bulma-bridge/issues) and
  [send Pull Requests](https://github.com/cadrien/bulma-bridge/pulls)
  in the [main Symfony repository](https://github.com/cadrien/bulma-bridge)
