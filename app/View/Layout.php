<!doctype html>

<html class="has-navbar-fixed-top">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Upload de Arquivo</title>
    <style>
        body {
            background-color: rgb(233, 233, 233);
        }

        .form-group {
            margin-top: 100px;
            width: 350px;
            margin-left: auto;
            margin-right: auto;
        }

        .position {
            margin-left: 26px;

        }

        .po {
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="container">
        <?php echo $this->addHeader(); ?>
    </div>

    <div class="Main ">
        <?php echo $this->addMain(); ?>
    </div>

    <div class="container ">
        <?php echo $this->addFooter(); ?>
    </div>

</body>

</html>