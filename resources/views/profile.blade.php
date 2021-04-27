<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h3>Profile</h3>
                </div>
                <div class="card-body">
                    <h5>Selamat datang di halaman Profile, <strong>{{ Auth::user()->name }}</strong></h5>
                    <img src="/upload/avatar/{{ $user->avatar }}" style="width: 150px; height: 150px; float: left; border-radius: 50%; margin-right:25px; "><br>
                    <form enctype="multipart/form-data" action="/profile" method="POST">
                    @csrf
                    <label>Update Profile Image</label>
                    <br><br>
                    <input type="file" name="avatar" >
                    <input type="submit" class="pull-right btn btn-sm btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>