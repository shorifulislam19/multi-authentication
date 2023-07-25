<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Admin LOgin Form</title>
  </head>
  <body>
  
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">

              @if($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error )
                  <li>{{ $error }}</li>
                    
                  @endforeach
                </ul>
              </div>
              @endif

              @if (Session::has('error-msg'))
              <p class="text-danger">{{ Session::get('error-msg') }}</p>
                
              @endif
                <form action="{{ route('admin-login') }}" class="mt-5" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter Your Email">
                        
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter Your Password">
                        
                    </div>
                    <div class="form-group">
                            <input type="submit" name="admin_login" class="form-control btn btn-success mt-3">
                        
                    </div>
                </form>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>