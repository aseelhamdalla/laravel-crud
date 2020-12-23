<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <div class="jumbotron m-5">
            <img src="{{asset('uploads/photo/'.$users["image"])}}" alt="image" width='100px' height='100px'  class="card-img-top" style="width:300px; height:400px" alt="..." >

          <h1>Student ID is :{{$id}}</h1>   
          {{$users["fullname"]}}  
               <p class="card-text">{{$users["email"]}} </p>
               <p class="card-text">{{$users["address"]}} </p>
               <p class="card-text">{{$users["mobile"]}} </p>
        
      </div>
      
    
         



</body>
</html>