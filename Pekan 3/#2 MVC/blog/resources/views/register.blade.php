<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <title>Register</title>

        <style>

            body{
                background-color: #242568;
            }

            .container{
                background-color: #BFBFDA;
                padding: 20px;
                opacity: 0.9;
                box-sizing: border-box;
            }

            li{
                list-style: none;
            }

            .opt{
                margin-left: -20px;
            }

            .radio{
                margin-left: -20px;
            }

            .lbl{
                font-weight: bold;
            }

            .tb{
                border: none;
                background-color: #F7BB00;
                width: 100%;
            }

            .tb:active{
                margin-top: 2px;
            }

        </style>

    </head>
    <body>
    <div class="container w-50">

        <h2 class="text-center">Buat Account Baru</h2>

        <form action="{{ url('/welcome') }}" method="post">
            @csrf
            <div class="form-daftar">

                <div class="form-group">
                    <label for="lf_name" class="lbl">First Name</label>
                    <input type="text" name="f_name" placeholder="First Name" class="form-control form-control-sm" required>
                </div>

                <div class="form-group">
                    <label for="ll_name" class="lbl">Last Name</label>
                    <input type="text" name="l_name" placeholder="Last Name" class="form-control form-control-sm" required>
                </div>

                <div class="form-group">
                    <label for="gender" class="lbl">Gender</label>
                    <ul class="radio">
                        <li><input type="radio" name="gender" value="male" required>Male</li>
                        <li><input type="radio" name="gender" value="female">Female</li>
                        <li><input type="radio" name="gender" value="other">Other</li>
                    </ul>
                </div>

                <div class="form-group">
                    <label for="nationality" class="lbl">Nationality</label>
                    <select class="form-control" name="nationality" required>
                        <option value="indonesian">Indonesian</option>
                        <option value="singaporean">Singaporean</option>
                        <option value="malaysian">Malaysian</option>
                        <option value="australian">Australian</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="language" class="lbl">Language Spoken</label>
                    <ul class="opt" class="form-control">
                        <li><input type="checkbox" name="language" value="indonesia" required>Indonesia</li>
                        <li><input type="checkbox" name="language" value="english">English</li>
                        <li><input type="checkbox" name="language" value="other">Other</li>
                    </ul>
                </div>

                <div class="form-group">
                    <label for="bio" class="lbl">Bio</label>
                    <textarea name="bio" cols="30" rows="5" class="form-control form-control-sm" placeholder="About you" required></textarea>
                </div>

                <div class="form-group text-center">
                    <button type="submit" class="tb">Submit</button>
                </div>

            </div>

        </form>

    </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>