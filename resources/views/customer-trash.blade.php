<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
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


<h1>Trash Table</h1>

<table id="customers">
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Country</th>
    <th>State</th>
    <th>DOB</th>
    <th>Status</th>
    <th>Action</th>
  </tr>
  @foreach($customers as $customer)
  <tr>
    <td>{{$customer->name}}</td>
    <td>{{$customer->email}}</td>
    <td>{{$customer->country}}</td>
    <td>{{$customer->state}}</td>
    <td>{{$customer->dob}}</td>
    <td>
        @if($customer->status == 1)
        Active
        @else
        InActive
        @endif
    </td>
    <td>
       
        <a href="{{url('/customer/restore')}}/{{$customer->customer_id}}"><button>Restore</button></a>
        
        <a href="{{route('customer.force-delete',['id' => $customer->customer_id])}}"><button>Delete</button></a>
        
    </td>
  </tr>
  @endforeach
</table>

</body>
</html>


