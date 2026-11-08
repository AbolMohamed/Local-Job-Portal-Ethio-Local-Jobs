<footer class="footer" style="background-color: #1e88e5; color: white; padding: 40px 0;">
    <!-- Footer content -->
<!-- Pharmacy Footer Navigation -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
<link href="footer/nav.css" rel="stylesheet">

<?php
require 'constants/settings.php'; 
if ($user_online == "true") {?>
<nav class="pharmacy-nav">
<!-- Home -->
  <a href="index.php" class="nav-item active">
    <i class="material-icons nav-icon">home</i>
    <span class="nav-label">መነሻ</span>
  </a>
  
  <!-- Job -->
  <a href="job-list.php" class="nav-item">
    <i class="material-icons nav-icon">works</i>
    <span class="nav-label">ስራዎች</span>
</a>
  <!-- Notification -->
  <a href="all_notifications.php" class="nav-item">
    <i class="material-icons nav-icon">notifications</i>
    <span class="nav-label">ማሳወቂያ</span>
    <span class="cart-badge" id="notification-item">0</span>
</a>
  
  <!-- Message -->
  <a href="chat/index.php" class="nav-item">
    <i class="material-icons nav-icon">messages</i>
    <span class="nav-label">ከተከታታዮችዎ ጋር ይወያዩ</span>
    <span class="cart-badge" id="message-item">0</span>
</a>
  <!-- Settings -->
  <?php print'
  <a href="'.$myrole.'" class="nav-item">';?>
    <i class="material-icons nav-icon">settings</i>
    <span class="nav-label">ቅንብሮች</span>
  </a>
  </nav>
<?php
} else {
?>
<nav class="pharmacy-nav">
  <!-- Home -->
  <a href="index.php" class="nav-item active">
    <i class="material-icons nav-icon">home</i>
    <span class="nav-label">መነሻ</span>
  </a>
  
  <!-- Job -->
  <a href="job-list.php" class="nav-item">
    <i class="material-icons nav-icon">works</i>
    <span class="nav-label">ስራዎች</span>
</a>
  <!-- About -->
  <a href="#" class="nav-item">
    <i class="material-icons nav-icon">info</i>
    <span class="nav-label">ስለ እኛ</span>
  </a>
  </nav>
<?php
}
?>

<style>
  /* Base Styles */
  .pharmacy-nav {
    display: flex;
    justify-content: space-around;
    align-items: center;
    position: fixed;
    bottom: 0;
    width: 100%;
    background: #ffffff;
    box-shadow: 0 -2px 15px rgba(0,0,0,0.1);
    padding: 8px 0;
    z-index: 1000;
  }
  
  .nav-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-decoration: none;
    color: #666;
    font-size: 12px;
    position: relative;
    flex: 1;
    padding: 5px 0;
    transition: all 0.3s ease;
  }
  
  .nav-icon {
    font-size: 24px;
    margin-bottom: 3px;
  }
  
  /* Active State */
  .nav-item.active {
    color: #2a5bd7;
  }
  
  .nav-item.active .nav-icon {
    color: #2a5bd7;
  }
  
  /* Badges */
  .cart-badge, .alert-badge {
    position: absolute;
    top: 0;
    right: 20%;
    background: #d30e0e;
    color: white;
    border-radius: 50%;
    width: 18px;
    height: 18px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 10px;
    font-weight: bold;
  }
  
  /* Alert Items */
  .alert-item .nav-icon {
    color: #ff9800;
  }
  
  .alert-item.active .nav-icon {
    color: #d30e0e;
  }
  
  /* Hover Effects */
  .nav-item:hover {
    transform: translateY(-3px);
  }
  
  .nav-item:hover .nav-icon {
    color: #2a5bd7;
  }
</style>
</footer>