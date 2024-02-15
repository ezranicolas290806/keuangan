<!DOCTYPE html>
<html lang="en">
<head>
<title>@yield('title')

</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #00BFFF;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 24px 15px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #00BFFF;
  color: red;
}


/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column.side, .column.middle {
    width: 100%;
  }
}
</style>
</head>
<body>

<div class="topnav">
  <a href="#">Pemasukan</a>
  <a href="#">Pengeluaran</a>
  <a href="#">Laporan</a>
</div>

<div class="row">
  <div class="column side">
    <h2>TES</h2>
    <p></p>
  </div>
  

  
</body>
</html>


