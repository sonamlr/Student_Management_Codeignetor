<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            margin: 0;padding: 0;box-sizing: border-box;
            background-color: rgb(52, 210, 235);
            color: #000;
        }
        .flexitem{
            margin: auto;

        }
        form{
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        form h4{
            text-align: center;
        }
        .error{
            color: red;
        }
    </style>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="col-3 flexitem mt-5">
            <?php echo form_open('Login/do_login');?>
            <h4>Login Student</h4>
                <div class="form-group pb-3">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Username">
                    <?php echo form_error('username', '<div class="error">', '</div>'); ?>
                </div>
                <div class="form-group pb-3">
                    <label for="username">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password">
                    <?php echo form_error('password', '<div class="error">', '</div>'); ?>
                </div>
                <?php if (isset($error)) : ?>
                    <p style="color: red; text-align:center;"><?php echo $error; ?></p>
                <?php endif; ?>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>

