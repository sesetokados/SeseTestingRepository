<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">
  <link href="(css)admin_lists.css" rel="stylesheet">
</head>
<body>
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

  <div class="menu-container">
    <div class="button-group">
        <button>Borrow List</button>
        <div class="button-separator"></div>
        <button>Return List</button>
        <div class="button-separator"></div>
        <button>Interested List</button>
    </div>
    <div class="horizontal-line"></div>
  </div>

  <div class="bodey">
    Return List
  </div>

  <div class="card-bodey">
    <table class="list-border">
      <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Sublocation</th>
        <th>Call Number</th>
        <th width="240px">Action</th>
      </tr>
    </table>
  </div>

  <script>
    document.getElementById('searchInput').addEventListener('input', function() {
      if (this.value.trim() !== '') {
        this.placeholder = ''; // Remove placeholder text when user types
      } else {
        this.placeholder = 'Search...'; // Restore placeholder when input is empty
      }
    });
  </script>
</body>
</html>