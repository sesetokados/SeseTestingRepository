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
    .search-container {
  position: fixed;
  right: 20px; /* Adjust based on the desired position */
  top: 10%;
  width: 300px; /* Adjust width as needed */
  z-index: 2;
  display: flex;
  align-items: center; /* Align items vertically */
}
.search {
  width: 260px; /* Adjust width to fit image */
  padding: 10px;
  box-sizing: border-box;
  font-family: "DM Serif Display", serif;
  height: 40px;
  background-color: #fff;
  border: 1px solid #ccc;
  border-radius: 5px;
}
.search::placeholder {
  color: #888; /* Placeholder color */
  font-style: italic;
}
.search-submit {
  position: absolute;
  right: 50px; /* Position image inside the input field */
  top: 50%;
  transform: translateY(-50%);
  width: 20px; /* Adjust width of the image */
  height: 20px; /* Adjust height of the image */
  border: none; /* Remove border */
  background: none; /* Remove background */
  cursor: pointer; /* Show pointer cursor on hover */
}
   
  </style>
</head>
<body>

<div class="header">
    <h1> My Borrowed Books </h1>
    </div>

   
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

  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" id="searchInput" class="search" name="search" placeholder="Search...">
      <input type="image" src="LibKo'To Assets/search.png" alt="Submit" class="search-submit">
    </form>
  </div>

  

</body>
</html>