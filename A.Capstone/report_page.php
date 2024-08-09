<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .sidenav {
      height: 100%;
      width: 130px;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #4c0000;
      overflow-x: hidden;
      padding-top: 20px;
      display: flex;
      flex-direction: column;
      justify-content: flex-end; /* Aligns content to the bottom */
    }
    .sidenav a {
      padding: 10px 8px 6px 10px;
      text-decoration: none;
      font-size: 25px;
      color: #ffffff;
      display: block;
    }
    .vertical-title {
      position: fixed;
      font-family: "Times New Roman", Times, serif;
      top: 35%;
      left: 110px; /* Adjust this based on your sidebar width */
      transform: translate(-50%, -50%) rotate(-90deg);
      transform-origin: left top;
      font-size: 50px;
      color: #ffffff;
    }
    .btn-custom {
      background-color: #A38F58;
      border-color: #A38F58;
      color: white;
      font-family: "Times New Roman", Times, serif;
      font-size: 30px;
      padding: 40px 30px;
    }
    .btn-custom:hover {
      background-color: #8C7B4B;
      border-color: #8C7B4B;
    }
  </style>
</head>
<body>

<div class="sidenav" id="sidebar">
    <div class="vertical-title">
        lib ko'to
    </div>
  <a href="#about">About</a>
  <a href="#services">Services</a>
  <a href="#clients">Clients</a>
  <a href="#contact">Contact</a>
</div>

<div class="container mt-5" style="margin-left: 180px;">
  <div class="row">
    <div class="col-sm-3 d-flex justify-content-center align-items-center" style="height: 600px;">
        <button type="button" class="btn btn-custom">Acquisition</button>
    </div>
    <div class="col-sm-3 d-flex justify-content-center align-items-center" style="height: 600px;">
        <button type="button" class="btn btn-custom">Cataloging</button>
    </div>
    <div class="col-sm-3 d-flex justify-content-center align-items-center" style="height: 600px;">
        <button type="button" class="btn btn-custom">Circulation</button>
    </div>
    <div class="col-sm-3 d-flex justify-content-center align-items-center" style="height: 600px;">
        <button type="button" class="btn btn-custom">Inventory</button>
    </div>
  </div>
</div>

</body>
</html>
