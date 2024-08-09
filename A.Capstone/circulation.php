<!DOCTYPE html>
<html lang="en">
<head>
  <title>Circulation</title>
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
      padding: 10px;
      text-decoration: none;
      display: block;
      text-align: center;
      margin-left: 15px;
    }
    .sidenav img {
      width: 20px; /* Adjust width as needed */
      height: auto; /* Maintain aspect ratio */
      display: block;
    }
    .vertical-title {
      position: fixed;
      font-family: "Times New Roman", Times, serif;
      top: 35%;
      left: 120px; /* Adjust this based on your sidebar width */
      transform: translate(-50%, -50%) rotate(-90deg);
      transform-origin: left top;
      font-size: 40px;
      color: #ffffff;
    }
	  .header {
      font-family: "Times New Roman", Times, serif;
      position: absolute;
      top: 50px;
      left: 200px;
    }
	  h1{
		  font-size: 55px;
		  font-weight: bold;
    }
    .btn-custom {
      background-color:  #39ac39; /* Custom background color */
      color: white; /* Text color */
      border-radius: 20px;
      padding: 1px 25px; /* Padding inside the button */
      font-size: 18px; /* Font size */
	    font-family: "Times New Roman", Times, serif;
      margin-left: 1200px;
      margin-top: 450px;
    }
    .btn-custom:hover {
      background-color: #218838; /* Darker shade for hover effect */
    }
    h2{
      font-family: "Times New Roman", Times, serif;
      position: absolute;
      top: 110px;
      left: 470px;
      font-size: 45px;
		  font-weight: bold;
    }
    .date{
      padding: 10px; /* Add padding inside the input field */
      font-family: "Times New Roman", Times, serif;
      font-size: 18px;
	    position: center;
	    margin-left: 380px;
      margin-top: 170px;
    }
    .date input{
      background-color: #d9d9d9;
      border: none;
      padding: 5px;
      font-size: 18px;
      margin-right: 277px;
    }
   
  </style>
</head>
<body>

<div class="header">
    <h1> Circulation </h1>
    </div>

    <h2> Courses with most books borrowed </h2>

    <div class="sidenav" id="sidebar">
    <div class="vertical-title">
      LibKo'To
    </div>
    <a href="#home"><img src="LibKo'To Assets/home.png" alt="About"></a>
    <a href="#user"><img src="LibKo'To Assets/user.png" alt="Services"></a>
    <a href="#lists"><img src="LibKo'To Assets/suitcase.png" alt="Clients"></a>
    <a href="#report"><img src="LibKo'To Assets/report.png" alt="Contact"></a>
    <a href="#logout"><img src="LibKo'To Assets/logout.png" alt="Clients"></a>
    <a href="#about"><img src="LibKo'To Assets/info.png" alt="Contact"></a>
  </div>

<div class="date">
  <label for="date_from">Date Acquired</label>
  <input type="date" id="date_from" name="date_from">
 
  <label for="date_to">Date Acquired</label>
  <input type="date" id="date_to" name="date_to">
</div>

<button type="download" class="btn btn-custom">Download</button>

</body>
</html>