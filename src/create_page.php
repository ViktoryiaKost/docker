<?php

$pageName = isset($_GET['name']) ? $_GET['name'] : '';

if (empty($pageName)) {
    http_response_code(400); 
    echo "Page name is required.";
    exit;
}

$pageName = basename($pageName);

$pageName = preg_replace('/\.php$/', '', $pageName);

$filePath = __DIR__ . '/' . $pageName . '.php';


if (file_exists($filePath)) {
    http_response_code(200); 
    include $filePath;
    exit;
}

$fileContent = <<<EOD
<?php
echo "This is new page: $pageName";
?>
EOD;

if (file_put_contents($filePath, $fileContent) !== false) {
    http_response_code(201);
    include $filePath;
} else {
    http_response_code(500); 
    echo "Unable to create the page.";
}
?>
