<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
  .row.heading h2 {
      color: #fff;
      font-size: 52.52px;
      line-height: 95px;
      font-weight: 400;
      text-align: center;
      margin: 0 0 40px;
      padding-bottom: 20px;
      text-transform: uppercase;
  }
  ul {
      margin: 0;
      padding: 0;
      list-style: none;
  }
  .heading.heading-icon {
      display: block;
  }
  .padding-lg {
      display: block;
      padding-top: 60px;
      padding-bottom: 60px;
  }
  .practice-area.padding-lg {
      padding-bottom: 55px;
      padding-top: 55px;
  }
  .practice-area .inner {
      border: 1px solid #999999;
      text-align: center;
      margin-bottom: 28px;
      padding: 40px 25px;
  }
  .our-webcoderskull .cnt-block:hover {
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
      border: 0;
  }
  .practice-area .inner h3 {
      color: #3C3C3C;
      font-size: 24px;
      font-weight: 500;
      font-family: 'Poppins', sans-serif;
      padding: 10px 0;
  }
  .practice-area .inner p {
      font-size: 14px;
      line-height: 22px;
      font-weight: 400;
  }
  .practice-area .inner img {
      display: inline-block;
  }
  .our-webcoderskull {
      /* background: url("http://www.webcoderskull.com/img/right-sider-banner.png") no-repeat center top / cover; */
  }
  .our-webcoderskull .cnt-block {
      float: left;
      width: 100%;
      background: #fff;
      padding: 30px 20px;
      text-align: center;
      border: 2px solid #D5D5D5;
      margin: 0 0 28px;
  }
  .our-webcoderskull .cnt-block figure {
      width: 148px;
      height: 148px;
      border-radius: 100%;
      display: inline-block;
      margin-bottom: 15px;
  }
  .our-webcoderskull .cnt-block img {
      width: 148px;
      height: 148px;
      border-radius: 100%;
  }
  .our-webcoderskull .cnt-block h3 {
      color: #2A2A2A;
      font-size: 20px;
      font-weight: 500;
      padding: 6px 0;
      text-transform: uppercase;
  }
  .our-webcoderskull .cnt-block h3 a {
      text-decoration: none;
      color: #2A2A2A;
  }
  .our-webcoderskull .cnt-block h3 a:hover {
      color: #337AB7;
  }
  .our-webcoderskull .cnt-block p {
      color: #2A2A2A;
      font-size: 13px;
      line-height: 20px;
      font-weight: 400;
  }
  .our-webcoderskull .cnt-block .follow-us {
      margin: 20px 0 0;
  }
  .our-webcoderskull .cnt-block .follow-us li {
      display: inline-block;
      width: auto;
      margin: 0 5px;
  }
  .our-webcoderskull .cnt-block .follow-us li .fa {
      font-size: 24px;
      color: #767676;
  }
  .our-webcoderskull .cnt-block .follow-us li .fa:hover {
      color: #025A8E;
  }
</style>
<body>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  
<div class="our-webcoderskull ">   
  <div class="container mt-5"> 
    <div class="row">
      @foreach($users as $key=>$value)
              <div class="col-8 col-md-4 col-lg-4"> 
                  <div class="cnt-block equal-hight" style="height: 349px; " >
                    <td><img src="{{asset('uploads/photo/'. $users[$key]["image"])}}" alt="image" width='100px' height='100px'  ></td>{{$users[$key]["fullname"]}}
                      <h5>{{$users[$key]["fullname"]}}</h5>
                      <p>Freelance Web Developer</p>
                      <ul class="follow-us clearfix">
                        <a href="{{('trainee/'.$users[$key]["id"])}}">{{$users[$key]["fullname"]}}</a><i class="fa fa-github" aria-hidden="true"></i></a></li>
                          <li><a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                      </ul>
                    </div>
                  </div>
 

@endforeach 
</div> 

</div> 
</div>
<!-- Optional JavaScript; choose one of the two! -->
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
