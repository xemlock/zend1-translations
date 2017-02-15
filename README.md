# zefram-translations

A Zend Framework 1 module providing better translations for built-in validation messages.

## Justification

The original translations contained `%value%` placeholder which caused the validated value
to be injected in the error message, which was a horrible idea, especially for long text
fields.

Also the error messages for date validating were broken, not only because of the mentioned
value placeholder, but also because they were misleading. If you specified the format as
`YYYY-MM-DD`, and the validated value was only a year, you would expect it to be a
a valid date, just not matching the required format. In such case validator should return
[`FALSEFORMAT`](https://github.com/zendframework/zf1/blob/d58c3841/library/Zend/Validate/Date.php#L37)
instead of [`INVALID_DATE`](https://github.com/zendframework/zf1/blob/d58c3841/library/Zend/Validate/Date.php#L36)
error. But contrary to expectations the latter is returned.

The quick solution for this, that would not require fixing the original date validator,
was to use a single message for both these errors, which contains the information about
invalid date and the required format.

## Installation

Add the following lines to `composer.json` of your application:

```json
"repositories": [
    {
        "type": "git",
        "url": "https://github.com/zeframphp/zefram-translations"
    }
],
"require": {
    "zefram/zefram-translations": "dev-master"
}
```