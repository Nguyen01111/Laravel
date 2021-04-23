<!DOCTYPE html>
<html>
<head>
	<title>Cetegory</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
  
                  <div class="container" style="margin-top: 5%" > 
                      <div><p>Category list</p></div>
                  	<table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col" width="20%">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col" width="20%" class="text-right">Action</th>
                       
                      </tr>
                    </thead>
                    <tbody>
                    	@foreach ($data as $d)
                      <tr>
                        <th>{{$d -> id}}</th>
                        <td>{{$d -> name}}</td>
                        <td class="text-right">	
                        	<a href="" class="btn-primary btn-sm" >sua</a>
                        	<a href="" class="btn-primary btn-sm" >xoa</a>
                        </td>
                      
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  <hr>
                  	<div >{{$data ->links()}}</div>
                  </div>
</body>
</html>
