<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CodeIgniter test page</title>
    <link type="text/css" rel="stylesheet" href="/css/style.css">

</head>
<body>

<div id="container">
    <h1>CodeIgniter Test Page!</h1>

    <div id="body">
        <p>This is a test page.</p>

        <code>application/views/test_message.php</code>

        <p>The corresponding controller for this page is found at:</p>
        <code>application/controllers/Test.php</code>

    </div>

    <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>