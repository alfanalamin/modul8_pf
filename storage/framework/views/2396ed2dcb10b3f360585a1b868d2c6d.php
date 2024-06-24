<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Data Master - Login</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css">
    <style>
        body {
            background-color: #007bff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 400px;
            /* Adjusted width for longer form */
            min-height: 550px;
            /* Adjusted min-height */
        }

        .login-container .bi {
            font-size: 50px;
            /* Adjusted icon size */
            color: #007bff;
            /* Set icon color to blue */
            margin-bottom: 20px;
        }

        .login-container h1 {
            font-size: 24px;
            margin-bottom: 40px;
            /* Increased margin-bottom */
        }

        .login-container input {
            margin-bottom: 20px;
            /* Adjusted margin-bottom */
        }

        .login-container .btn {
            background-color: #007bff;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
            /* Added margin-top */
        }

        .login-container .btn i {
            margin-right: 8px;
        }

        .separator {
            height: 1px;
            width: 100%;
            background-color: #e0e0e0;
            margin: 20px 0;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <i class="bi bi-hexagon-fill"></i>
        <h1>Employee Data Master</h1>
        <form method="POST" action="<?php echo e(route('login')); ?>">
            <div class="separator"></div>
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Enter Your Email" required
                    autofocus>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Enter Your Password" required>
            </div>
            <div class="separator"></div>
            <button type="submit" class="btn btn-primary btn-block">
                <i class="fas fa-sign-in-alt"></i> Log In
            </button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
<?php /**PATH D:\tugas najra\New folder\modul_6_pf\resources\views/auth/login.blade.php ENDPATH**/ ?>