## Credits to `raiym/instagram-php-scraper`

To install via composer: `composer require robert-grubb/insta-scraper`

To instantiate:

```
use InstaScraper\Insta;

$Instagram = new Insta();
```

For main package documentation: https://github.com/postaddictme/instagram-php-scraper

This fork includes the following:

- getMediaWithTag()
    - This method will find the first media with a specific tag.

- Fixes getMedias issue (Because instagram removed the /media page)
    - Now pulls from their timeline data via a graphql request, then grabs the data for each array item. (Increases load times, but not by much)

- Retry logic for applications that request media data at a higher rate

## Getting a media item with specific hashtag:

```
use InstaScraper\Insta;
$Instagram = new Insta();
$post = $Instagram->getMediaWithTag('test', '#awesome');
var_dump($post); // Returns InstaScraper\Model\Media Object
```
