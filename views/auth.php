<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
        crossorigin="anonymous"
    >
    <title>CRM: Authorization</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 mt-5 shadow shadow-lg">
                <form action="auth/signin" method="post">
                    <div class="mt-4 px-4">
                        <input
                            type="text"
                            class="form-control"
                            id="login"
                            name="login"
                            placeholder="Login:"
                        >
                    </div>
                    <div class="my-4 px-4">
                        <input
                            type="password"
                            class="form-control" 
                            id="password" 
                            name="password" 
                            placeholder="Password:"
                        >
                    </div>
                    <div class="text-center mb-4">
                        <button class="btn btn-primary btn-lg">Submit</button>
                    </div>
                </form>
                <?php
                    if($_SESSION['message'])
                    {
                        echo '<div class="alert alert-danger text-center mx-4 mb-4">';
                        echo $_SESSION['message'];
                        echo '</div>';
                    }

                    unset($_SESSION['message']);
                ?>
            </div>
        </div>
    </div>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
        crossorigin="anonymous">
    </script>
</body>
</html>