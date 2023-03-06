<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <style>
    ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
  </style>
  
  </head>
  <body>
  
  <ul>
  <li><a class="active" href="{{url('/')}}">Home</a></li>
  <li><a href="{{url('/customer/view')}}">Customer View</a></li>
  <li><a href="{{url('/register')}}">Register</a></li>
  <li><a href="">About</a></li>
</ul>

    <form action="{{$url}}" method="post">
        @csrf
        <!-- <pre>
          @php 
            print_r($errors->all());
          @endphp
        </pre> -->
        <h1>{{$title}}</h1>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
              <input type="text" name="name" class="form-control"  />
              <span class='text-danger'>
                    <!-- @error('name')
                      {{$message}}
              @enderror -->
                </span>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="email" name="email" class="form-control"  />
              <span class='text-danger'>
                    <!-- @error('name')
                      {{$message}}
              @enderror -->
                </span>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Password</label>
              <input type="password" name="password" class="form-control"  />
              <span class='text-danger'>
                    <!-- @error('name')
                      {{$message}}
              @enderror -->
                </span>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Country</label>
              <input type="text" name="country" class="form-control"  />
              <span class='text-danger'>
                    <!-- @error('name')
                      {{$message}}
              @enderror -->
                </span>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">State</label>
              <input type="text" name="state" class="form-control" />
              <span class='text-danger'>
                    <!-- @error('name')
                      {{$message}}
              @enderror -->
                </span>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Address</label>
           
              <input type="text-area" name="address" class="form-control" />
              <span class='text-danger'>
                    <!-- @error('name')
                      {{$message}}
              @enderror -->
                </span>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Date of Birth</label>
              <input type="date" name="dob" class="form-control"   />
              <span class='text-danger'>
                    <!-- @error('name')
                      {{$message}}
              @enderror -->
                </span>
        </div>
        
 
         
     
        
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>