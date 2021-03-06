<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>CURD</title>
</head>
<body>
    <div class="container mt-5 ">
      <h1 class="text-center bg-dark text-white">CURD Using Query Builer</h1>
        <div class="row mt-5">
            <div class="col-sm-6 shadow bg-warning ">
              <h3>Create Student Info</h3>
                <form action="" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" id="name" name="name"
                        placeholder="Enter name">   
                    </div>
                    <div class="form-group">  
                      <label for="city">City</label>
                      <input type="text" class="form-control" id="city" name="city" 
                      placeholder="Enter city">   
                    </div>
                    <div class="form-group">
                      <label for="marks">Marks</label>
                      <input type="number" class="form-control" id="marks" name="marks"
                       placeholder="Enter marks">   
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                  </form>
            </div>
       
    
    <div class="col-sm-6 shadow bg-success">
      <h3>Show List of All Students Info</h3>
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">City</th>
            <th scope="col">Marks</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($student as $stu)
              <tr>
                <th>{{ $stu->id }}</th>
                <td>{{ $stu->name }}</td>
                <td>{{ $stu->city }}</td>
                <td>{{ $stu->marks }}</td>
                <td>
                  <a href="{{url('/edit',$stu->id)}}" class="btn btn-info btn-sm">Edit</a>
                  <a href="{{url('/delete',$stu->id)}}" class="btn btn-danger btn-sm">Delete</a>
                </td>
              </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  @if (session()->has('status'))
  <div class="alert alert-success mt-3">
    {{session('status')}}
  </div>
  @endif


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>