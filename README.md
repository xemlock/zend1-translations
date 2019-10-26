# zend1-translations

A Zend Framework 1 module providing translations of validation messages.

## Justification

The original translations contain `%value%` placeholder which causes the validated value
to be injected in the error messages, which is a horrific idea, especially for long input values.

## Installation

```
composer require xemlock/zend1-translations:dev-master
```

## License

MIT
