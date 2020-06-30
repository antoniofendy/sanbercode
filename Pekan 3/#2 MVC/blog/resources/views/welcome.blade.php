<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Welcome</title>

    <style>

        body{
            background-color: #eee;
        }

        .header, .footer{
            background-color: lightblue;
            height: 30px;
            text-align: center;
            color: white;
        }

        .konten{
            padding: 20px;
            min-height: 300px;
            background-color: white;
        }

    </style>

    </head>
    <body>

    

    <div class="container">

        <div class="header">
            <p>Sanberbook</p>
        </div>

        <div class="konten">
            <h2>Selamat Datang <?= " ".$f_name." ".$l_name; ?></h2>
            <p>Terima kasih telah bergabung di Sanberbook. Social Media kita bersama</p>
        </div>

        <div class="footer">
            <p>Copyright &copy; Sanberbook</p>
        </div>
    </div>
    
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>