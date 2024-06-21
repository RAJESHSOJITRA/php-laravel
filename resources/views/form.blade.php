<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <form action="{{ url('/') }}/register" method="post">
        @csrf
        <pre>
          @php
              print_r($errors->all());
          @endphp
        </pre>
        <div class="container">
            <h1 class="text-center">Registarion form</h1>

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" aria-describedby="name">
                <span class='text-danger'>
                    @error('name')
                        {{ $message }}
                    @enderror
                </span>
                <div id="name" class="form-text">We'll never share your name with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="country" class="form-label">country</label>
                <input type="text" name="country" class="form-control" id="country" aria-describedby="country">
                <span class='text-danger'>
                    @error('name')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="mb-3">
                <legend>Choose your gender:</legend>
                <label for="male">Male</label>
                <input type="radio" name="gender" id="male" value="male">
                <span class='text-danger'>
                    @error('gender')
                        {{ $message }}
                    @enderror
                </span>
                <label for="female">Female</label>
                <input type="radio" name="gender" id="female" value="female">
                <span class='text-danger'>
                    @error('gender')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                <span class='text-danger'>
                    @error('email')
                        {{ $message }}
                    @enderror
                </span>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                <span class='text-danger'>
                    @error('password')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <span class='text-danger'>
                    @error('checkmeout')
                        {{ $message }}
                    @enderror
                </span>
                <label class="form-check-label" name="checkmeout" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
