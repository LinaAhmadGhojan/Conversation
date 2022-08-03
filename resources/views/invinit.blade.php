<!DOCTYPE html>
<html>
<head>
    <title>invited</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
     
<div class="container">
    <div class="card bg-light mt-3">
        <div class="card-header">
            invited Seat 
        </div>
        <div class="card-body">
            
            <br>
            <br>
            <br>
            <br>
            <a href="{{ route('form.invinit') }}" class="btn btn-success">Add Invited</a>

            <table class="table table-bordered mt-3">
               
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date</th>
                   
                </tr>
                @foreach($invinit as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->created_at }}</td>
                 
                </tr>
                @endforeach
            </table>
  
        </div>
    </div>
</div>
     
</body>
</html>