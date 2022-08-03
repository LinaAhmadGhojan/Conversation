<!DOCTYPE html>
<html>
<head>
    <title>Excel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
     
<div class="container">
    <div class="card bg-light mt-3">
        <div class="card-header">
         Register Seat 
        </div>
        <div class="card-body">
            <form action="{{ route('seat.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Import User Data</button>
            </form>
         
          
            <table class="table table-bordered mt-3">
                <tr>
                    <th colspan="2">
                        List Of seats
                        <a class="btn btn-warning float-end" href="{{ route('seat.export') }}">Export User Data</a>
                    </th>
                    <th colspan="2">
                        Number Colum
                        <form action="{{ route('number.column') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div  class="form-control" style="text-align: center">
                                <select name="number_column">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                </select>
                            <button class="btn btn-success">Number Column</button>
                            </div>
                        </form>                    </th> 
                        
                        <th colspan="2">
                            Sort
                            <form action="{{ route('seat.sort') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div style="    text-align: center;" class="form-control">
                                    <select name="name" style="    width: 35%;
                                    ">
                                        <option value="name">Name</option>
                                        <option value="email">Email</option>
                                        <option value="job">Job</option>
                                        <option value="destination">destination</option>
                                        <option value="question">question</option>
                                    </select>
                                    <select name="type">
                                        <option value="asc">asc</option>
                                        <option value="desc">desc</option>
                                       
                                    </select>
                                <button class="btn btn-success">Sort</button>
                                </div>
                            </form>                    
                          </th>

                             
                        <th colspan="2">
                            Search
                            <form action="{{ route('seat.search') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div style="    text-align: center;" class="form-control">
                                <input style="    width: 60%;
                                " type="text" name="name" >
                                <button class="btn btn-success">Search</button>
                                </div>
                            </form>                    
                          </th>
                </tr>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Detination</th>
                    <th>Job</th>
                    <th>Question</th>
                </tr>
                @foreach($seat as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->destination }}</td>
                    <td>{{ $item->job }}</td>
                    <td>{{ $item->question }}</td>
                    <td style="    text-align: center;">
                        <a href="{{ route('generate',$item->id) }}" class="btn btn-primary">Generate QR </a>
                    </td>
                </tr>
                @endforeach
            </table>
  
        </div>
    </div>
</div>
     
</body>
</html>