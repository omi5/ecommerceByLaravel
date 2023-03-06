<!DOCTYPE html>
<html>
<head>
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
  <li><a href="{{url('/customer')}}">Register</a></li>
  <li><a href="{{url('/customer/trash')}}">Trash Data</a></li>
</ul>

</body>
</html>


