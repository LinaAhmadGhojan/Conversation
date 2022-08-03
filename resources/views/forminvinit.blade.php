<!DOCTYPE html>
<html>
<head>
    <title>form seat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="row">
    <div class="col-sm-3"></div>
 <div class="col-sm-6">
    
    @if (count($errors) > 0)
    <div class="alert alert-success">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif

<br>
<br>
<br>
<br>
<br>
<br>

<h3>Seat Confirm </h3>
<form action="{{ route('forminvinit.sort') }}" method="POST" enctype="multipart/form-data">

    @csrf

    
    <div class="form-group">
        <label>Name</label>
        <input required type="text" class="form-control" name="name" id="name">
    </div>

    <div class="form-group">
        <label>Email</label>
        <input required type="email" class="form-control" name="email" id="email">
    </div>

   
    

    
    <div class="form-group">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" id="t&c" name="t&c">
            <label class="form-check-label">
                I agree to the terms and conditions.
            </label>
        </div>
        </div>

    <input type="reset" name="reset" value="Reset" class="btn btn-dark">
    <input type="submit" name="submit" value="Submit" class="btn btn-dark">

</form>
</div> 
</div>
</body>
 
</html>