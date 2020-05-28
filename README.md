# HTMLTableToCSV in PHP :elephant: :clipboard:

A simple PHP tool to parse HTML table to CSV files.

## Requirements :page_facing_up: 

* PHP 7
* PHP Simple HTML DOM Parser (https://sourceforge.net/projects/simplehtmldom/files/)

## Installation :gear:

Install PHP, unzip PHP Simple HTML DOM Parser folder and add them to PATH

## Run :runner:

### Setup script (editable values) :wrench:

Edit variables into main.php

```bash
$DOMPATH = './simplehtmldom_1_9_1/simple_html_dom.php'; # DOM PATH
$link = 'www.google.com'; # site link
$id = 't01'; # table ID
$CSVName = './files/file.csv'; # PATH and name
```

### Start script :rocket:

```bash
php main.php > main.html
```

## LICENSE :copyright:

[LICENSE](./LICENSE)


