# Afosto.io SDK for PHP

The Afosto.io SDK for PHP makes it easy for developers to access and use `afosto-io` services. 

## Getting Started

If you run into any problems please do not hesitate to open an issue at this repository.

### Docs

API documentation can be found at [https://docs.afosto.app](https://docs.afosto.app).

### Prerequisites

To get started you'll need:
- a free afosto.io account (signup [here](https://login.afosto.app/signup))
- make sure you have [composer](getcomposer.org) installed to get started quickly
- php 7 


### Installing

You can easily install the client through composer: 

```bash
composer require afosto/io-sdk
```

## Built with

- [JanePHP](https://github.com/janephp/janephp) - For generation the api client
- [Swagger](https://swagger.io) - API management tool
- [Redoc](https://github.com/Rebilly/ReDoc) - Great API documentation tool

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/spooler-app/php-client/tags). 


## example 
Connecting with the SDK is easy.
you instantiate the sdk with client credentials, and you are ready to make requests
additionaly you can add the scopes you want you your request

```php
$scopes = ['iam:users:create'];
$client = new \Afosto\Sdk\Sdk("1234","123456",$scopes);
$user = $client->getAuthorizedClient()->createUser(
    (new \Afosto\Sdk\Model\IamUserModel)
        ->setEmail("info@afosto.com")
        ->setFirstName("info")
        ->setLastName("afosto")
);

//prints the created user id
print_r($user->getId());
```

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details