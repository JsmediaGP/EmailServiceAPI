<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Compose Email</title>
</head>
<body>
    <br>
    <br>
    <form method="POST" action="<?php echo e(route('sendmail')); ?>">
        <?php echo csrf_field(); ?>
    <div class="container">
        <div>
        <label for="exampleFormControlInput1">Email address</label>
        <input type="email" class="form-control"  name="recipient_email" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group">
        <label for="exampleFormControlTextarea1">Message</label>
        <textarea class="form-control"  name="content" id="exampleFormControlTextarea1" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
        
    </form>


</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script><?php /**PATH /var/www/html/resources/views/email/index.blade.php ENDPATH**/ ?>