<!DOCTYPE html>
<html lang="en">
<head>

  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="activity1.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <style>

    .container_in
    {
        text-align: center;
        margin-top: 20px;
        background-color: palegreen;
        padding: 40px;
    }


  </style>

</head>
<body>

<div class="bg-info container-fluid p-5 text-white text-center ">
  <h1>Using Bootstrap css</h1>
  <p>Resize this responsive page to see the effect!</p> 

  <div class="row gap-lg-0">
    <div class="col-1"><div class="bg-warning rounded-3 p-2">col-1</div></div>
    <div class="col-1"><div class="bg-warning rounded-3 p-2">col-1</div></div>
    <div class="col-1"><div class="bg-warning rounded-3 p-2">col-1</div></div>
    <div class="col-1"><div class="bg-warning rounded-3 p-2">col-1</div></div>
    <div class="col-1"><div class="bg-warning rounded-3 p-2">col-1</div></div>
    <div class="col-1"><div class="bg-warning rounded-3 p-2">col-1</div></div>
    <div class="col-1"><div class="bg-warning rounded-3 p-2">col-1</div></div>
    <div class="col-1"><div class="bg-warning rounded-3 p-2">col-1</div></div>
    <div class="col-1"><div class="bg-warning rounded-3 p-2">col-1</div></div>
    <div class="col-1"><div class="bg-warning rounded-3 p-2">col-1</div></div>
    <div class="col-1"><div class="bg-warning rounded-3 p-2">col-1</div></div>
    <div class="col-1"><div class="bg-warning rounded-3 p-2">col-1</div></div>
  </div>

  <div class="row" style="margin-top: 10px;">
    <div class="col-4"><div class="bg-danger rounded-3 p-2">col-4</div></div>
    <div class="col-4"><div class="bg-danger rounded-3 p-2">col-4</div></div>
    <div class="col-4"><div class="bg-danger rounded-3 p-2">col-4</div></div>
  </div>

  <div class="row" style="margin-top: 10px;">
    <div class="col-4"><div class="bg-danger rounded-3 p-2">col-4</div></div>
    <div class="col-8"><div class="rounded-3 p-2" style="background-color: #8540f5;">col-8</div></div>
  </div>

  <div class="row" style="margin-top: 10px;">
    <div class="col-6"><div class="rounded-3 p-2" style="background-color: #198754;">col-6</div></div>
    <div class="col-6"><div class="rounded-3 p-2" style="background-color: #198754;">col-6</div></div>
  </div>

  <div class="row" style="margin-top: 10px;">
    <div class="col-12"><div class="bg-primary rounded-3 p-2" >col-6</div></div>
  </div>
  <br>
</div>
  

<div class="container_in">
  <h1>Using Internal CSS</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>

<div class="container_line" style="text-align: center;
        margin-top: 20px;
        background-color: pink;
        padding: 40px;">
  <h1>Using In LIne CSS</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>

<div class="container_ex">
  <h1>Using External CSS</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>

</body>
</html>
