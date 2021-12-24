<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body style="background-color: #2a9df4;">
    <section style="height: 100vh; margin-top: 10rem;">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-6">
            {{-- card content --}}
            <div class="card rounded-3">
              <div class="card-body">
                @if(\Session::has('alert'))
                  <div class="alert alert-danger" role="alert">
                    {{ Session::get('alert') }}
                  </div>
                @endif
                @if(\Session::has('alert-success'))
                  <div class="alert alert-primary" role="alert">
                    {{ Session::get('alert-success') }}
                  </div>
                @endif
                <h3 class="card-title text-center">Login</h3>
                <form action="{{ url('/loginPost') }}" method="post">
                  <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                    <label for="floatingInput">Email address</label>
                  </div>
                  <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                    <label for="floatingPassword">Password</label>
                  </div>
                  {{-- button --}}
                  <div class="d-grid gap-2 mt-3">
                    <button class="btn btn-primary rounded-3 pt-3 pb-3" type="submit">Login</button>
                  </div>
                  {{-- end button --}}
                </form>

                <p class="mt-4 ms-auto">Belum Punya Akun ? <a href="/register" class="text-danger">Daftar</a></p>
              </div>
            </div>
            {{-- end card content --}}
          </div>
        </div>
      </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>