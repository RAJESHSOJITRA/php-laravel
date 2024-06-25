<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
        
          <a class="navbar-brand" href="#" style="color:white">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('/')}}" style="color: white">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('/customer/create')}}"style="color: white">Register</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('/customer/view')}}"style="color: white">Customer</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

    <div class="container">
        {{-- <a href="{{url('/customer/create')}}"></a> --}}
        <button class="btn btn-primary d-inline-block m-2 float-right">Add</button>
      </a> <table class="border border-primary">
          
            <thead >
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Dob</th>
                    <th>Adreess</th>
                    <th>State</th>
                    <th>Country</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($customers as $customer )
                  
             <tr class="border border-primary">    
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->email}}</td>
                    <td>{{$customer->gender}}</td>
                    <td>{{$customer->dob}}</td>
                    <td>{{$customer->adress}}</td>
                    <td>{{$customer->state}}</td>
                    <td>{{$customer->country}}</td>
              
                    <td>
                        @if ($customer->status=="1")
               <span class="badge text-bg-success" >Active  </span>  
                       @else
                                <span class="badge text-bg-danger">InActive</span>  
                           
                        @endif
                        </td>
                        <td>
                          {{--this is url method 'customer/view/delete/' --}}
                          
          <a href="{{url('customer/delete/')}}/{{$customer->customers_id}}">
                   <button class="btn btn-danger">delete</button> </a>
              <a href="{{url('customer/edit/')}}/{{$customer->customers_id}}">
                    <button class="btn btn-danger">Edit</button></a>
                       </td>
                </tr>
                @endforeach 
            </tbody>
        </table>
    </div>
    </body>
</html>
