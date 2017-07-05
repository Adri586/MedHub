<!DOCTYPE html>
<html lang="{$config.language}">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>
        {$config.pageName} - {$config.pageSlogan[$config.language]}
    </title>
    <link rel="stylesheet" href="/web/css/vendor/bootstrap.css">
    <link rel="stylesheet" href="/web/css/vendor/bootstrap-theme.css">
    <link rel="stylesheet" href="/web/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="/web/css/global.css">

    {if $config.customerType == "patient"}
        <link rel="stylesheet" href="/web/css/patient_styles.css">
    {/if}

    {if $config.customerType == "medical_staff"}
        <link rel="stylesheet" href="/web/css/medical_staff_styles.css">
    {/if}

    {if $config.theme == "dark"}
        <link rel="stylesheet" href="/web/css/dark_theme.css">
    {/if}
</head>
<body>
<div id="particles-js"></div>