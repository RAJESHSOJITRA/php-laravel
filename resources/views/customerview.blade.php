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
    <div class="container">
        <table class="border border-primary">
          
            <thead >
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Dob</th>
                    <th>State</th>
                    <th>Country</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($customers as $customer )
                  
             <tr class="border border-primary">    
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->email}}</td>
                    <td>{{$customer->gender}}</td>
                    <td>{{$customer->dob}}</td>
                    <td>{{$customer->state}}</td>
                    <td>{{$customer->country}}</td>

                    <td>
                        @if ($customer->status=="1")
                                Active
                           
                       @else
                        inActive
                           
                        @endif
                        </td>
                </tr>
                @endforeach 
            </tbody>
        </table>
    </div>
    </body>
</html>
