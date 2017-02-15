<?php

return array(
    // Zend_Validate_Alnum
    "Invalid type given. String, integer or float expected" => "Podana wartość musi być ciągiem znaków, liczbą całkowitą lub liczbą zmiennoprzecinkową",
    "'%value%' contains characters which are non alphabetic and no digits" => "Wartość musi zawierać tylko litery i cyfry",
    "'%value%' is an empty string" => "Podana wartość jest pustym ciągiem znaków",

    // Zend_Validate_Alpha
    "Invalid type given. String expected" => "Podana wartość nie jest ciągiem znaków",
    "'%value%' contains non alphabetic characters" => "Wartość zawiera znaki spoza alfabetu",
    "'%value%' is an empty string" => "Podana wartość jest pustym ciągiem znaków",

    // Zend_Validate_Barcode
    "'%value%' failed checksum validation" => "Błędna suma kontrolna dla wartości",
    "'%value%' contains invalid characters" => "Wartość zawiera niedozwolone znaki",
    "'%value%' should have a length of %length% characters" => "Wartość musi być długości %length% znaków",
    "Invalid type given. String expected" => "Podana wartość nie jest ciągiem znaków",

    // Zend_Validate_Between
    "'%value%' is not between '%min%' and '%max%', inclusively" => "Wartość nie zawiera się w przedziale od '%min%' do '%max%' włącznie",
    "'%value%' is not strictly between '%min%' and '%max%'" => "Wartość nie zawiera się w przedziale od '%min%' do '%max%'",

    // Zend_Validate_Callback
    "'%value%' is not valid" => "Wartość jest niepoprawna",
    "An exception has been raised within the callback" => "Wystąpił wyjątek podczas działania funkcji sprawdzającej",

    // Zend_Validate_Ccnum
    "'%value%' must contain between 13 and 19 digits" => "Wartość musi zawierać od 13 do 19 cyfr",
    "Luhn algorithm (mod-10 checksum) failed on '%value%'" => "Wykonanie algorytmu Luhna (suma kontrolna modulo 10) dla wartości zakończyło się niepowodzeniem",

    // Zend_Validate_CreditCard
    "'%value%' seems to contain an invalid checksum" => "Wartość zawiera niepoprawną sumę kontrolną",
    "'%value%' must contain only digits" => "Numer karty musi zawierać tylko cyfry",
    "Invalid type given. String expected" => "Podana wartość nie jest ciągiem znaków",
    "'%value%' contains an invalid amount of digits" => "Numer zawiera niepoprawną liczbę cyfr",
    "'%value%' is not from an allowed institute" => "Numer nie jest z dozwolonej instytucji",
    "'%value%' seems to be an invalid creditcard number" => "Wartość jest niepoprawnym numerem karty",
    "An exception has been raised while validating '%value%'" => "Wystąpił błąd podczas sprawdzania poprawności",

    // Zend_Validate_Date
    "Invalid type given. String, integer, array or Zend_Date expected" => "Podana wartość musi być ciągiem znaków, liczbą, tablicą lub obiektem Zend_Date",
    "'%value%' does not appear to be a valid date" => "Wartość nie jest poprawną datą w formacie '%format%'",
    "'%value%' does not fit the date format '%format%'" => "Wartość nie jest poprawną datą w formacie '%format%'",

    // Zend_Validate_Db_Abstract
    "No record matching '%value%' was found" => "Nie znaleziono rekordu dla podanej wartości",
    "A record matching '%value%' was found" => "Znaleziono rekord dla podanej wartości",

    // Zend_Validate_Digits
    "Invalid type given. String, integer or float expected" => "Podana wartość musi być ciągiem znaków, liczbą całkowitą lub liczbą zmiennoprzecinkową",
    "'%value%' must contain only digits" => "Pole może zawierać tylko cyfry",
    "'%value%' is an empty string" => "Podana wartość jest pustym ciągiem znaków",

    // Zend_Validate_EmailAddress
    "Invalid type given. String expected" => "Podana wartość nie jest ciągiem znaków",
    "'%value%' is no valid email address in the basic format local-part@hostname" => "Wartość nie jest poprawnym adresem e-mail w formacie nazwa@serwer",
    "'%hostname%' is no valid hostname for email address '%value%'" => "Podany adres e-mail zawiera niepoprawną nazwę serwera",
    "'%hostname%' does not appear to have a valid MX record for the email address '%value%'" => "Serwer nie posiada poprawnie zdefiniowanego rekordu MX dla podanego adresu",
    "'%hostname%' is not in a routable network segment. The email address '%value%' should not be resolved from public network" => "Serwer nie rutowalnym segmentem sieci. Podany e-mail nie powinien być wykrywany z sieci publiczej",
    "'%localPart%' can not be matched against dot-atom format" => "Część lokalna adresu e-mail nie jest w formacie dot-atom",
    "'%localPart%' can not be matched against quoted-string format" => "Część lokalna adresu e-mail nie jest w formacie quoted-string",
    "'%localPart%' is no valid local part for email address '%value%'" => "Część lokalna adresu e-mail jest niepoprawna",
    "'%value%' exceeds the allowed length" => "Podana wartość przekroczyła dozwoloną długość",

    // Zend_Validate_File_Count
    "Too many files, maximum '%max%' are allowed but '%count%' are given" => "Wybrano '%count%' plików. Dopuszczalna liczba plików to '%max%'",
    "Too few files, minimum '%min%' are expected but '%count%' are given" => "Wybrano '%count%' plików. Minimalna liczba plików to '%min%'",

    // Zend_Validate_File_Crc32
    "File '%value%' does not match the given crc32 hashes" => "Błędna suma kontrolna CRC32 podanego pliku",
    "A crc32 skrót could not be evaluated for the given file" => "Nie można obliczyć sumy kontrolnej CRC32 dla podanego pliku",
    "File '%value%' is not readable or does not exist" => "Plik nie istnieje lub nie można go odczytać",

    // Zend_Validate_File_ExcludeExtension
    "File '%value%' has a false extension" => "Plik ma niepoprawne rozszerzenie",
    "File '%value%' is not readable or does not exist" => "Plik nie istnieje lub nie można go odczytać",

    // Zend_Validate_File_ExcludeMimeType
    "File '%value%' has a false mimetype of '%type%'" => "Plik ma niepoprawny typ MIME",
    "The mimetype of file '%value%' could not be detected" => "Nie można wykryć typu MIME dla podanego pliku",
    "File '%value%' is not readable or does not exist" => "Plik nie istnieje lub nie można go odczytać",

    // Zend_Validate_File_Exists
    "File '%value%' does not exist" => "Plik nie istnieje",

    // Zend_Validate_File_Extension
    "File '%value%' has a false extension" => "Plik ma niepoprawne rozszerzenie",
    "File '%value%' is not readable or does not exist" => "Plik nie istnieje lub nie można go odczytać",

    // Zend_Validate_File_FilesSize
    "All files in sum should have a maximum size of '%max%' but '%size%' were detected" => "Wybrane pliki łącznie zajmują '%size%'. Maksymalny dopuszczalny rozmiar to '%max%'",
    "All files in sum should have a minimum size of '%min%' but '%size%' were detected" => "Wybrane pliki łącznie zajmują '%size%'. Minimalny dopuszczalny rozmiar to '%min%'",
    "One or more files can not be read" => "Jeden lub więcej plików nie mogą zostać odczytane",

    // Zend_Validate_File_Hash
    "File '%value%' does not match the given hashes" => "Plik ma niedopuszczalną wartość skrótu",
    "A skrót could not be evaluated for the given file" => "Nie można obliczyć funkcji skrótu dla podanego pliku",
    "File '%value%' is not readable or does not exist" => "Plik nie istnieje lub nie można go odczytać",

    // Zend_Validate_File_ImageSize
    "Maximum allowed width for image '%value%' should be '%maxwidth%' but '%width%' detected" => "Obraz ma szerokość '%width%'. Maksymalna szerokość to '%maxwidth%'",
    "Minimum expected width for image '%value%' should be '%minwidth%' but '%width%' detected" => "Obraz ma szerokość '%width%'. Minimalna szerokość to '%minwidth%'",
    "Maximum allowed height for image '%value%' should be '%maxheight%' but '%height%' detected" => "Obraz ma wysokość '%height%'. Maksymalna wysokość to '%maxheight%'",
    "Minimum expected height for image '%value%' should be '%minheight%' but '%height%' detected" => "Obraz ma wysokość '%height%'. Minimalna wysokość to '%minheight%'",
    "The size of image '%value%' could not be detected" => "Nie można określić rozmiaru pliku",
    "File '%value%' is not readable or does not exist" => "Plik nie istnieje lub nie można go odczytać",

    // Zend_Validate_File_IsCompressed
    "File '%value%' is not compressed, '%type%' detected" => "Plik typu '%type%' nie jest skompresowany",
    "The mimetype of file '%value%' could not be detected" => "Nie można wykryć typu MIME dla pliku",
    "File '%value%' is not readable or does not exist" => "Plik nie istnieje lub nie można go odczytać",

    // Zend_Validate_File_IsImage
    "File '%value%' is no image, '%type%' detected" => "Plik typu '%type%' nie jest obrazem",
    "The mimetype of file '%value%' could not be detected" => "Nie można wykryć typu MIME dla pliku",
    "File '%value%' is not readable or does not exist" => "Plik nie istnieje lub nie można go odczytać",

    // Zend_Validate_File_Md5
    "File '%value%' does not match the given md5 hashes" => "Plik ma niedopuszczalny skrót MD5",
    "A md5 skrót could not be evaluated for the given file" => "Nie można obliczyć funkcji skrótu MD5 dla podanego pliku",
    "File '%value%' is not readable or does not exist" => "Plik nie istnieje lub nie można go odczytać",

    // Zend_Validate_File_MimeType
    "File '%value%' has a false mimetype of '%type%'" => "Plik ma niepoprawny typ MIME '%type%'",
    "The mimetype of file '%value%' could not be detected" => "Nie można wykryć typu MIME dla pliku '%value%'",
    "File '%value%' is not readable or does not exist" => "Plik nie istnieje lub nie można go odczytać",

    // Zend_Validate_File_NotExists
    "File '%value%' exists" => "Plik istnieje",

    // Zend_Validate_File_Sha1
    "File '%value%' does not match the given sha1 hashes" => "Plik ma niedopuszczalny skrót SHA-1",
    "A sha1 skrót could not be evaluated for the given file" => "Nie można obliczyć funkcji skrótu SHA-1 dla podanego pliku",
    "File '%value%' is not readable or does not exist" => "Plik nie istnieje lub nie można go odczytać",

    // Zend_Validate_File_Size
    "Maximum allowed size for file '%value%' is '%max%' but '%size%' detected" => "Podany plik ma rozmiar '%size%'. Maksymalny rozmiar pliku to '%max%'",
    "Minimum expected size for file '%value%' is '%min%' but '%size%' detected" => "Podany plik ma rozmiar '%size%'. Minimalny rozmiar pliku to '%min%'",
    "File '%value%' is not readable or does not exist" => "Plik nie istnieje lub nie można go odczytać",

    // Zend_Validate_File_Upload
    "File '%value%' exceeds the defined ini size" => "Rozmiar pliku przekroczył zdefiniowaną wartość w ini",
    "File '%value%' exceeds the defined form size" => "Rozmiar pliku przekroczył zdefiniowaną wartość w formularzu",
    "File '%value%' was only partially uploaded" => "Plik został wysłany częściowo",
    "File '%value%' was not uploaded" => "Plik nie został wysłany",
    "No temporary directory was found for file '%value%'" => "Nie zdefiniowano tymczasowego katalogu",
    "File '%value%' can't be written" => "Nie można zapisać pliku",
    "A PHP extension returned an error while uploading the file '%value%'" => "Rozszerzenie PHP zgłosiło wyjątek podczas wysyłania pliku",
    "File '%value%' was illegally uploaded. This could be a possible attack" => "Plik został niepoprawnie wysłany. Istnieje możliwość wystąpienia ataku",
    "File '%value%' was not found" => "Nie znaleziono pliku",
    "Unknown error while uploading file '%value%'" => "Nieznany błąd podczas wysyłania pliku",

    // Zend_Validate_File_WordCount
    "Too much words, maximum '%max%' are allowed but '%count%' were counted" => "Podano '%count%' słów. Maksymalna liczba słów to '%max%'",
    "Too less words, minimum '%min%' are expected but '%count%' were counted" => "Podano '%count%' słów. Minimalna liczba słów to '%min%'",
    "File '%value%' is not readable or does not exist" => "Plik nie istnieje lub nie można go odczytać",

    // Zend_Validate_Float
    "Invalid type given. String, integer or float expected" => "Podana wartość musi być ciągiem znaków, liczbą całkowitą lub liczbą zmiennoprzecinkową",
    "'%value%' does not appear to be a float" => "Wartość nie jest liczbą zmiennoprzecinkową",

    // Zend_Validate_GreaterThan
    "'%value%' is not greater than '%min%'" => "Wartość nie jest większa niż '%min%'",

    // Zend_Validate_Hex
    "Invalid type given. String expected" => "Podana wartość nie jest ciągiem znaków",
    "'%value%' has not only hexadecimal digit characters" => "Wartość nie jest wartością heksadecymalną",

    // Zend_Validate_Hostname
    "Invalid type given. String expected" => "Podana wartość nie jest ciągiem znaków",
    "'%value%' appears to be an IP address, but IP addresses are not allowed" => "Wartość jest adresem IP a nie nazwą hosta",
    "'%value%' appears to be a DNS hostname but cannot match TLD against known list" => "Wartość zawiera nieznane TLD",
    "'%value%' appears to be a DNS hostname but contains a dash in an invalid position" => "Nazwa hosta zawiera znak '-' w niedozwolonym miejscu",
    "'%value%' appears to be a DNS hostname but cannot match against hostname schema for TLD '%tld%'" => "Nazwa hosta jest niezgodna ze schematem dla TLD '%tld%'",
    "'%value%' appears to be a DNS hostname but cannot extract TLD part" => "Nie można rozpoznać TLD dla podanej nazwy hosta",
    "'%value%' does not match the expected structure for a DNS hostname" => "Wartość nie jest poprawną nazwą hosta",
    "'%value%' does not appear to be a valid local network name" => "Wartość nie jest poprawną nazwą sieci lokalnej",
    "'%value%' appears to be a local network name but local network names are not allowed" => "Wartość prawdopodobnie jest nazwą sieci lokalnej. Nazwy sieci lokalnych są niedozwolone",
    "'%value%' appears to be a DNS hostname but the given punycode notation cannot be decoded" => "Nie można zdekodować punycode dla podanej nazwy hosta",

    // Zend_Validate_Iban
    "Unknown country within the IBAN '%value%'" => "Niepoprawny kraj w podanej wartości IBAN",
    "'%value%' has a false IBAN format" => "Wartość nie jest w formacie IBAN",
    "'%value%' has failed the IBAN check" => "Wystąpił błąd podczas sprawdzania IBAN dla podanej wartości",

    // Zend_Validate_Identical
    "The two given tokens do not match" => "Podane wartości nie są takie same",
    "No token was provided to match against" => "Nie podano wartości do porównania",

    // Zend_Validate_InArray
    "'%value%' was not found in the haystack" => "Nie znaleziono wartości",

    // Zend_Validate_Int
    "Invalid type given. String or integer expected" => "Podana wartość musi być ciągiem znaków lub liczbą całkowitą",
    "'%value%' does not appear to be an integer" => "Wartość nie jest liczbą całkowitą",

    // Zend_Validate_Ip
    "Invalid type given. String expected" => "Podana wartość nie jest ciągiem znaków",
    "'%value%' does not appear to be a valid IP address" => "Wartość nie jest poprawnym adresem IP",

    // Zend_Validate_Isbn
    "Invalid type given. String or integer expected" => "Podana wartość musi być ciągiem znaków lub liczbą całkowitą",
    "'%value%' is no valid ISBN number"  => "Wartość nie jest poprawnym ISBN",

    // Zend_Validate_LessThan
    "'%value%' is not less than '%max%'" => "Wartość nie jest mniejsza niż '%max%'",

    // Zend_Validate_NotEmpty
    "Invalid type given. String, integer, float, boolean or array expected" => "Podana wartość musi być ciągiem znaków, liczbą całkowitą, liczbą zmiennoprzecinkową, wartością logiczną lub tablicą",
    "Value is required and can't be empty" => "To pole jest wymagane",

    // Zend_Validate_PostCode
    "Invalid type given. String or integer expected" => "Podana wartość musi być ciągiem znaków lub liczbą całkowitą",
    "'%value%' does not appear to be a postal code" => "Wartość nie jest poprawnym kodem pocztowym",

    // Zend_Validate_Regex
    "Invalid type given. String, integer or float expected" => "Podana wartość musi być ciągiem znaków, liczbą całkowitą lub liczbą zmiennoprzecinkową",
    "'%value%' does not match against pattern '%pattern%'" => "Wartość nie pasuje do wzorca",
    "There was an internal error while using the pattern '%pattern%'" => "Wystąpił błąd podczas dopasowania wyrażenia do wzorca",

    // Zend_Validate_Sitemap_Changefreq
    "'%value%' is no valid sitemap changefreq" => "Wartość nie jest poprawną wartością changefreq",
    "Invalid type given. String expected" => "Podana wartość nie jest ciągiem znaków",

    // Zend_Validate_Sitemap_Lastmod
    "'%value%' is no valid sitemap lastmod" => "Wartość nie jest poprawną wartością lastmod",
    "Invalid type given. String expected" => "Podana wartość nie jest ciągiem znaków",

    // Zend_Validate_Sitemap_Loc
    "'%value%' is no valid sitemap location" => "Wartość nie jest poprawną lokalizacją mapy strony",
    "Invalid type given. String expected" => "Podana wartość nie jest ciągiem znaków",

    // Zend_Validate_Sitemap_Priority
    "'%value%' is no valid sitemap priority" => "Wartość nie jest poprawną priorytetem mapy strony",
    "Invalid type given. Numeric string, integer or float expected" => "Podana wartość musi być ciągiem znaków, liczbą całkowitą lub liczbą zmiennoprzecinkową",

    // Zend_Validate_StringLength
    "Invalid type given. String expected" => "Podana wartość nie jest ciągiem znaków",
    "'%value%' is less than %min% characters long" => "Wartość zawiera mniej niż %min% znaków",
    "'%value%' is more than %max% characters long" => "Wartość zawiera więcej niż %max% znaków",
);
