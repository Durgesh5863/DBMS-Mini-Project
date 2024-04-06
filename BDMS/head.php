<html>

<head>


<style>

.header {
  overflow:hidden;
  background-color: #0466C8;
  top: 0;
  width:100%;
  padding: 10px 5px;
  color:#FFF  ;
}

/* Style the header links */
.header a {
  float: left;
  color: white;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
  font-weight:bold;
}

/* Style the logo link (notice that we set the same value of line-height and font-size to prevent the header to increase when the font gets bigger */
.header a.logo {
  font-size: 25px;
  font-weight: bold;
  color:#FFF  ;
}
.header a.logo:hover{
  color:yellow;
}

/* Change the background color on mouse-over */
.header-right a:hover{
    color: #fff;
}
.header-right a::after{
    content: '';
    position: relative;
    width: 100%;
    height: 3px;
    right: 0;
    background: #fff;
    border-radius: 5px;
    transform: scaleX(0);
    transition: transform .5s;
    display: flex;
    justify-content: space-around;
    align-self: center;
}
.header-right a:hover::after{
    transform: scaleX(1);
}
/* Float the link section to the right */
.header-right {
  float: right;
}

/* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */
@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}
/* Style the active/current link*/
a.act{
background: linear-gradient(to right, #fd746c 0%, #ff9068 100%);
color: white;
border-radius:30px;
}
a.logo2{
  background-color: #333;
}
</style>
</head>

<body>
  <div class="header">
    <a href="home.php" class="logo"<?php if($active=='home') echo "class='logo2'"; ?>>Blood Bank & Donation </a>
    <div class="header-right">
      <a href="admin/login.php"  <?php if($active=='about') echo "class='act'"; ?>  >Admin Login</a>
      <a href="about_us.php"  <?php if($active=='about') echo "class='act'"; ?> >About Us</a>
      <a href="why_donate_blood.php"  <?php if($active=='why') echo "class='act'"; ?>>Why Donate Blood</a>
      <a href="donate_blood.php"  <?php if($active=='donate') echo "class='act'"; ?>>Become A Donor</a>
      <a href="need_blood.php" <?php if($active=='need') echo "class='act'"; ?>>Need Blood</a>
      <a href="contact_us.php" <?php if($active=='contact') echo "class='act'"; ?>>Contact Us</a>
    </div>
  </div>

</body>
</html>
