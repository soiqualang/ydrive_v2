<?php

$configFile = dirname(__FILE__) . '/config.php';

if (file_exists($configFile))
{
    include $configFile;
}
else
{
    die("Please rename the config-sample.php file to config.php and add your Flickr API key and secret to it\n");
}

spl_autoload_register(function($className)
{
    $className = str_replace ('\\', DIRECTORY_SEPARATOR, $className);
    include (dirname(__FILE__) . '/../src/' . $className . '.php');
});

use \DPZ\Flickr;

$flickr = new Flickr($flickrApiKey, $flickrApiSecret);

$parameters =  array(
    'user_id' => '146329215@N08',
    'per_page' => 500,
    'extras' => 'url_sq,path_alias',
	'format' => 'json',
);

$response = $flickr->call('flickr.photos.search', $parameters);

$out = array_values($response);
//echo json_encode($out, JSON_FORCE_OBJECT);

$photos = $response['photos'];

?>
<!DOCTYPE html>
<html>
    <head>
        <title>DPZFlickr Example</title>
        <link rel="stylesheet" href="example.css" />
    </head>
    <body>
        <h1>Photos from dopiaza</h1>
        <ul id="photos">
            <?php foreach ($photos['photo'] as $photo) { ?>
                <li>
                    <a href="<?php echo sprintf("http://flickr.com/photos/%s/%s/", $photo['pathalias'], $photo['id']) ?>">
                        <img src="<?php echo $photo['url_sq'] ?>" />
                    </a>
                </li>
            <?php } ?>
        </ul>
        <p><a href="index.php">Unauthenticated Example</a> |
            <a href="auth.php">Authenticated Example</a> |
            <a href="convert-token.php">Convert Token Example</a> <br/>
            <a href="upload.php">Upload Photo Example</a> |
            <a href="replace.php">Replace Photo Example</a>
        </p>
    </body>
</html>

