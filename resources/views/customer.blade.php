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

    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="color:white">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}"
                            style="color: white">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="{{ url('/customer/create') }}"style="color: white">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{url('/customer/login')}}"style="color: white">login</a>
                      </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="{{ url('/customer/view') }}"style="color: white">Customer</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    {{-- <form  action="{{ url('/') }}/register"  method="post"> --}}

    {{-- this customers is used for post the input field --}}
    <form action="{{ $url }}" method="post">
           
          @csrf
        <pre>
          @php
              print_r($errors->all());
          @endphp
        </pre>
        <div class="container">
            <h1 class="text-center">{{ $title }}</h1>

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" aria-describedby="name" value="{{$customer->name}}">
                <span class='text-danger'>
                    @error('name')
                        {{ $message }}
                    @enderror
                </span>
                <div id="name" class="form-text">We'll never share your name with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp"value="{{$customer->email}}">
                <span class='text-danger'>
                    @error('email')
                        {{ $message }}
                    @enderror
                </span>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="country" class="form-label">country</label>
                <input type="text" name="country" class="form-control" id="country" aria-describedby="country" value="{{$customer->country}}">
                <span class='text-danger'>
                    @error('country')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="mb-3">
                <label for="state" class="form-label">state</label>
                <input type="text" name="state" class="form-control" id="state" aria-describedby="state" value="{{$customer->state}}">
                <span class='text-danger'>
                    @error('state')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="mb-3">
                <label for="dob" class="form-label">Date of Birth</label>
                <input type="date" name="dob" class="form-control" id="state" aria-describedby="state"
                    style="max-width:200px;" value="{{$customer->dob}}">
                <span class='text-danger'>
                    @error('date of birth')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="mb-3">
                <label for="adress" class="form-label">Adress</label>
                <input type="text" name="adress" class="form-control" id="adress" aria-describedby="adress" value="{{$customer->adress}}">
                <span class='text-danger'>
                    @error('adress')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="mb-3">
                <legend>Choose your gender:</legend>
                <label for="male">Male</label>
                <input type="radio" name="gender" id="male" value="male" 
              {{$customer->gender=="male"? "checked":"" }}>
                <span class='text-danger'>
                    @error('gender')
                        {{ $message }}
                    @enderror
                </span>
                <label for="female">Female</label>
                <input type="radio" name="gender" id="female" value="female"
                {{$customer->gender=="female"? "checked":""}}>
                <span class='text-danger'>
                    @error('gender')
                        {{ $message }}
                    @enderror
                </span>
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
