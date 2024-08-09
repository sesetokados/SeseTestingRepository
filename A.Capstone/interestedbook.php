<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book Detail - Leadership and Revolution</title>
  <link rel="stylesheet" href="stylesss.css">
</head>
<body>
  <!-- Sidebar -->
  <div class="sidenav">
    <!-- Vertical Title for Sidebar -->
    <div class="vertical-sidenav-title">LibKo'To</div>

    <!-- Icons at the bottom -->
    <div class="icon-container">
      <a href="homepage.html"><img src="home.png" alt="Homepage" class="nav-icon"></a>
      <a href="view_profile.html"><img src="user.png" alt="View Profile" class="nav-icon"></a>
      <a href="suitcase.html"><img src="suitcase.png" alt="Inbox" class="nav-icon"></a>
      <a href="reports.html"><img src="lamp.png" alt="Reports" class="nav-icon"></a>
      <a href="logout.html"><img src="logout.png" alt="Logout" class="nav-icon"></a>
      <a href="info_about_website.html"><img src="info.png" alt="Info" class="nav-icon"></a>
    </div>
  </div>

  <div class="content">
    <div class="book-details-container">
      <div class="book-cover">
        <img src="sample book 1.jpg" alt="Leadership and Revolution">
      </div>
      <div class="book-details">
        <div class="book-title">
            <div><strong>Title:</strong></div>Leadership and Revolution</div>
        <div class="book-meta">
          <div class="book-meta-labels">
            <div><strong>Author:</strong> Lori Mazan</div>
            <div><strong>Sublocation:</strong> CAS Library</div>
            <div><strong>Call Number:</strong> GC HID 57.7 M456 2024</div>
            <div><strong>Issue Published:</strong> 09/26/23</div>
          </div>
          <button class="interest-button" onclick="showInterestNotice()">Mark as Interested</button>
        </div>
      </div>
    </div>
    <div class="overview">
      <strong><em>Overview</em></strong>
      <p>"Decades ago, when workers stayed at one job their entire careers, they could gradually, methodically work their way up the corporate ladder. This has left companies scrambling to attract and retain the finest talent. In Leadership Revolution: The Future of Developing Dynamic Leaders, Lori Mazan, Co-Founder, President and Chief Coaching Officer at Sounding Board, a global leadership development enterprise platform, makes it clear that what makes leaders successful has not changed, but how to make them successful has changed greatly. Many decision makers still rely on 1980s (or earlier) approaches and techniques, but Mazan will overturn those obsolete beliefs and show why the old development models don't work, how to attract and retain talent by accelerating and individualizing their growth, why and how remote workers make companies more profitable, how your staff can flourish with a sense of community and shared purpose without necessarily being 'in the office,' and much more. In short, she will detail exactly how you can become a leader who develops leaders." -- Provided by publisher.
      </p>
    </div>
  </div>

  <div id="interest-notice" class="notice-popup">
    <div class="notice-content">
      <p>Great! You have marked the book "Leadership and Revolution" by Lori Mazan as interested. Your position in queue is: 3. Please wait, and we will send you a notification when the book is available for borrowing.</p>
      <button class="confirm-button">Confirm</button>
      <button class="cancel-button" onclick="hideInterestNotice()">Cancel</button>
    </div>
  </div>

  <script>
    function showInterestNotice() {
      document.getElementById('interest-notice').style.display = 'block';
    }

    function hideInterestNotice() {
      document.getElementById('interest-notice').style.display = 'none';
    }
  </script>
</body>
</html>
