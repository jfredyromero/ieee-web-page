<?php

// Importamos los PHP Modules
require_once('dotenv-loader.php');

// Cargamos las variables de entorno
$dotenv = new DotEnv(__DIR__ . '/../../.env');
$dotenv->load();

// Prints all the html entries needed for Vite
function vite($entry)
{
    return "\n" . jsTag($entry)
        . "\n" . jsPreloadImports($entry)
        . "\n" . cssTag($entry);
}

// Some dev/prod mechanism would exist in your project
function isDev($entry)
{
    // This method is very useful for the local server
    // if we try to access it, and by any means, didn't started Vite yet
    // it will fallback to load the production files from manifest
    // so you still navigate your site as you intended!

    static $exists = null;
    if ($exists !== null) {
        return $exists;
    }
    $handle = curl_init(getenv('VITE_HOST') . '/' . $entry);
    curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($handle, CURLOPT_NOBODY, true);

    curl_exec($handle);
    $error = curl_errno($handle);
    curl_close($handle);

    return $exists = !$error;
}

// Helpers to print tags
function jsTag($entry)
{
    $url = isDev($entry)
        ? getenv('VITE_HOST') . '/' . $entry
        : assetUrl($entry);

    if (!$url) {
        return '';
    }
    return '<script type="module" crossorigin src="'
        . $url
        . '"></script>';
}

function jsPreloadImports($entry)
{
    if (isDev($entry)) {
        return '';
    }

    $res = '';
    foreach (importsUrls($entry) as $url) {
        $res .= '<link rel="modulepreload" href="'
            . $url
            . '">';
    }
    return $res;
}

function cssTag($entry)
{
    // not needed on dev, it's inject by Vite
    if (isDev($entry)) {
        return '';
    }

    $tags = '';
    foreach (cssUrls($entry) as $url) {
        $tags .= '<link rel="stylesheet" href="'
            . $url
            . '">';
    }
    return $tags;
}

// Helpers to locate files
function getManifest()
{
    $content = file_get_contents('dist/manifest.json');
    return json_decode($content, true);
}

function assetUrl($entry)
{
    $manifest = getManifest();
    return isset($manifest[$entry])
        ? 'dist/' . $manifest[$entry]['file']
        : '';
}

function importsUrls($entry)
{
    $urls = array();
    $manifest = getManifest();

    if (!empty($manifest[$entry]['imports'])) {
        foreach ($manifest[$entry]['imports'] as $imports) {
            $urls[] = 'dist/' . $manifest[$imports]['file'];
        }
    }
    return $urls;
}

function cssUrls($entry)
{
    $urls = array();
    $manifest = getManifest();

    if (!empty($manifest[$entry]['css'])) {
        foreach ($manifest[$entry]['css'] as $file) {
            $urls[] = 'dist/' . $file;
        }
    }
    return $urls;
}
