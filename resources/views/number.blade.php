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
         Excel Seat 
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
                                    <select name="name">
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
                    @if($number>=1)
                    <th>ID</th>
                    @endif
                    @if($number>=2)
                    <th>Name</th>
                    @endif
                    @if($number>=3)
                    <th>Email</th>
                    @endif
                    @if($number>=4)
                    <th>Phone</th>
                    @endif
                    @if($number>=5)
                    <th>Detination</th>
                    @endif
                    @if($number>=6)
                    <th>Job</th>
                    @endif
                    @if($number>=7)
                    <th>Question</th>
                    @endif
                </tr>
                @foreach($seat as $item)
                <tr>
                    @if($number>=1)
                    <td>{{ $item->id }}</td>
                    @endif
                    @if($number>=2)
                    <td>{{ $item->name }}</td>
                    @endif
                    @if($number>=3)
                    <td>{{ $item->email }}</td>
                    @endif
                    @if($number>=4)
                    <td>{{ $item->phone }}</td>
                    @endif
                    @if($number>=5)
                    <td>{{ $item->destination }}</td>
                    @endif
                    @if($number>=6)
                    <td>{{ $item->job }}</td>
                    @endif
                    @if($number>=7)
                    <td>{{ $item->question }}</td>
                    @endif
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