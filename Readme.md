> Your task is to create a CLI script
that will read JSON-based data
from a specific endpoint via HTTP.

> The script will contain several
sub-commands to filter and output
the loaded data.

> The commands
should be:
Find objects by price range (given
price_from and price_to as arguments). Find objects by a certain
sub-object definition. All given
sub-commands should only output
the number of objects in stock.

>Technical Requirements:
Implement the ReaderInterface for
fetching the JSON HTTP endpoint
and thus work with the OfferCollectionInterface and OfferInterface on
the loaded data.


## Setup

### JSON API
a simulated remote webservice.

In order for the demo to work there should be a webserver running this script.

Use the following command to get it setup locally:

```shell
php -S localhost:8007 output_json.php
```
### Filter Command

To get the expected result use a command with the following structure:
```
OFFERS_ENDPOINT=http://localhost:8007 php run.php SUBCOMMAND PARAM1 PARAM2 ... PARAMN
```

example:
```
OFFERS_ENDPOINT=http://localhost:8007 php app.php count_by_vendor_id 35
```

```
OFFERS_ENDPOINT=http://localhost:8007 php app.php count_by_price_range 5 20
```

```
OFFERS_ENDPOINT=http://localhost:8007 php app.php count_by_title_prefix Cha
```
