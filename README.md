# Fontawesome5 plugin for Difra Framework

Binds components/font-awesome to Difra.

## How to use

1. Add config inclusion to nginx's *server {}* section:
    ```
    include /full-project-path/vendor/difra/fontawesome5/bin/nginx.conf;
    ```
1. Include fontawesome5 instance in the config.php. For example:
    ```php
    'instances' => [
        'main' => [
             'include' => [
                'fontawesome5' => true
             ]
        ]
    ],
    ```
