<?php
$topic     = $_GET['topic'] ?? '';
$version   = $_GET['version'] ?? '';
$component = $_GET['component'] ?? '';
$release   = $_GET['release'] ?? 'latest';

if ($topic === '' || $version === '' || $component === '') {
    header('Location: https://isotc204.org/ritso/', true, 303);
    exit;
}

$base = "https://isotc204.org/ontology-its-{$topic}-v{$version}/{$release}";

$wantsHtml = stripos($_SERVER['HTTP_ACCEPT'] ?? '', 'text/html') !== false;

// Item names are copied through as given (no CamelCase→kebab conversion).
if (stripos($component, 'SHACL') !== false || stripos($component, 'Alignment') !== false) {
    // SHACL / Alignment modules → always .ttl (no HTML docs page)
    $target = "{$base}/{$component}.ttl";
} elseif (stripos($component, 'Pattern') !== false) {
    // Pattern modules: HTML → class docs; RDF → module .ttl
    $target = $wantsHtml
        ? "{$base}/classes/{$component}/"
        : "{$base}/{$component}.ttl";
} elseif (preg_match('/^[A-Z]/', $component)) {
    // Class (UpperCamelCase)
    $target = $wantsHtml
        ? "{$base}/classes/{$component}/"
        : "{$base}/its-{$topic}.ttl";
} elseif (preg_match('/^[a-z]/', $component)) {
    // Property (lowerCamelCase)
    $target = $wantsHtml
        ? "{$base}/properties/{$component}/"
        : "{$base}/its-{$topic}.ttl";
} else {
    $target = "{$base}/{$component}.ttl";
}

header("Location: {$target}", true, 303);
exit;
