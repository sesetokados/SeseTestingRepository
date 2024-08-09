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

  #authorbutton{
    background-color:  #39ac39; /* Custom background color */
    color: white; /* Text color */
    border-radius: 20px;
    padding: 0px 8px; /* Padding inside the button */
    font-size: 18px; /* Font size */
	  font-family: "Times New Roman", Times, serif;
  }
  #savebutton{
    background-color: #39ac39;;
      color: white;
      border-radius: 12px; 
      padding: 5px 23px;
      font-size: 18px;
      font-family: "Times New Roman", Times, serif;
      border: none;
	  margin-right: 10px;
	  position: relative;
	  left: 805px;
  }
  #cancelbutton{
    background-color: #660000;
      color: white;
      border-radius: 12px; /* Custom border radius for Cancel button */
      padding: 5px 23px;
      font-size: 18px;
      font-family: "Times New Roman", Times, serif;
      border: none;
	  margin-right: 10px;
	  position: relative;
	  left: 805px;
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

<div class="header">
    <h1>Cataloguing</h1>
</div>

<div class="container mt-5" style="margin-left: 250px;">
    <div class="row">
        <div class="col-sm-7">
            <div class="row catalogue-item">
                <div class="col-2">
                    Cover Page
                </div>
                <div class="col-4">
                    <button type="addauthor" class="btn" id="authorbutton">+ Add Author</button>
                </div>
                
            </div>
            <div class="row catalogue-item">
                <div class="col-2">
                    Loc Symbol
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" id="locsym" name="locsym">
                </div>
                <div class="col-2 row2">
                    Call No.
                </div>
                <div class="col-4 row2">
                    <input type="text" class="form-control" id="call" name="call">
                </div>
            </div>
            <div class="row catalogue-item">
                <div class="col-2">
                    Author
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" id="author" name="author">
                </div>
                <div class="col-2 row2">
                    Statement
                </div>
                <div class="col-4 row2">
                    <input type="text" class="form-control" id="statement" name="statement">
                </div>
            </div>
                 <button type="addauthor" class="btn btn-custom" >+ Add Author</button>
            <div class="row catalogue-item">
                <div class="col-2">
                    Title
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="col-2 row2">
                    Subtitle
                </div>
                <div class="col-4 row2">
                    <input type="text" class="form-control" id="subtitle" name="subtitle">
                </div>
            </div>
            <div class="row catalogue-item">
                <div class="col-2">
                    Edition
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" id="edition" name="edition">
                </div>
                <div class="col-2 row2">
                    Series
                </div>
                <div class="col-4 row2">
                    <input type="text" class="form-control" id="series" name="series">
                </div>
            </div>
            <div class="row catalogue-item">
                <div class="col-2">
                    ISBN
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" id="ISBN" name="ISBN">
                </div>
            </div>
            <div class="row catalogue-item">
                <div class="col-2">
                    Publisher
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" id="publisher" name="publisher">
                </div>
            </div>
            <div class="row catalogue-item">
                <div class="col-2">
                    Physc Desc.
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" id="physical" name="physical">
                </div>
            </div>
            <div class="row catalogue-item">
                <div class="col-2">
                    Notes
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" id="notes" name="notes">
                </div>
            </div>
            <div class="row catalogue-item">
                <div class="col-2">
                    Copies
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" id="copies" name="copies">
                </div>
                <div class="col-2 row2">
                    Barcode
                </div>
                <div class="col-4 row2">
                    <input type="text" class="form-control" id="barcode" name="barcode">
                </div>
            </div>
            <div class="row catalogue-item">
                <div class="col-2">
                    Location
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" id="location" name="location">
                </div>
                <div class="col-2 row2">
                    Format
                </div>
                <div class="col-4 row2">
                    <input type="text" class="form-control" id="format" name="format">
                </div>
            </div>
            <div class="row catalogue-item">
                <div class="col-2">
                    Currency
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" id="currency" name="currency">
                </div>
                <div class="col-2 row2">
                    Cost
                </div>
                <div class="col-4 row2">
                    <input type="text" class="form-control" id="cost" name="cost">
                </div>
            </div>
            <div class="row catalogue-item">
                <div class="col-2">
                    Vendor
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" id="vendor" name="vendor">
                </div>
                <div class="col-2 row2">
                    Date
                </div>
                <div class="col-4 row2">
                    <input type="date" class="form-control" id="title" name="title">
                </div>
            </div>
        </div>
    </div>
    <button type="addauthor" class="btn" id="cancelbutton">Cancel</button>
    <button type="addauthor" class="btn" id="savebutton">Save</button>
</div>

</body>
</html>
