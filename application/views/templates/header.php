<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CodeIgniter test page</title>
    <link type="text/css" rel="stylesheet" href="/css/style.css">

    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #dddddd;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            padding: 8px;
        }
    </style>

</head>
<body>

<nav>
    <ul>
        <?php if(isset($menuitems)) {
            foreach ($menuitems as $item):
                echo sprintf('<li><a href="%s">%s</a></li>', $item['url'], $item['title']);
            endforeach;
        } ?>
    </ul>
</nav>

<div id="container">
    <h1><?php echo (isset($title) ? $title : "titel"); ?></h1>



    <div id="body">