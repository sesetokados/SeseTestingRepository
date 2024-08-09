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

    .header {
      font-weight: bold;
      font-family: "Times New Roman", Times, serif;
      margin-left: 180px;
      margin-top: 20px;
    }

    .catalogue-item {
      font-size: 20px;
      margin-bottom: 10px;
      font-family: "Times New Roman", Times, serif;
      font-weight: bold;
    }

    .btn-custom {
    background-color:  #39ac39; /* Custom background color */
    color: white; /* Text color */
    border-radius: 20px;
    padding: 0px 8px; /* Padding inside the button */
    font-size: 18px; /* Font size */
	  font-family: "Times New Roman", Times, serif;
    margin-left: 130px;
    margin-bottom: 10px;
  }

  .row2 {
    position: relative;
    left: 250px;
  }

  .search img { display:block; position:absolute; bottom:10px; left:225px; cursor:pointer; }


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

<div class="header">
    <h1>Library</h1>
</div>

    <div class="col-2 search" style="margin-left: 250px; position:relative; left: 900px; bottom: 50px;">
        <input type="text" class="form-control" id="search" name="search" value="Select">
        <img src="http://www.mricons.com/store/png/123454_42437_12_alt_glass_magnifying_icon.png" />
    </div>

<div class="header">
    <h1>Most Borrowed Books for May</h1>
</div>

</body>
</html>
