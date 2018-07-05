<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} | @yield('title') | MA</title>
    <meta name="description" content="Mediadeveloper opleidingstraject 2018 - 2019 | Mediacollege Amsterdam, worden wat je bent">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Mediacollege Amsterdam">
    <meta name="google-site-verification" content="Zf7PdLDwhu7f6JCjpfLfEjEN3v4sm78wRCXBTAkQKlI" />
    {{-- Favicon --}}
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#e62686">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="theme-color" content="#ffffff">

    <link href={{ asset('css/app.min.css') }} rel="stylesheet" type="text/css">
</head>

