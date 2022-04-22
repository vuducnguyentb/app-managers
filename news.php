<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

/* Header/logo Title */
.header {
  padding: 80px;
  text-align: center;
  background: #1abc9c;
  color: white;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 40px;
}

/* Sticky navbar - toggles between relative and fixed, depending on the scroll position. It is positioned relative until a given offset position is met in the viewport - then it "sticks" in place (like position:fixed). The sticky value is not supported in IE or Edge 15 and earlier versions. However, for these versions the navbar will inherit default position */
.navbar {
  overflow: hidden;
  background-color: #333;
  position: sticky;
  position: -webkit-sticky;
  top: 0;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}


/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Active/current link */
.navbar a.active {
  background-color: #666;
  color: white;
}

/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}

/* Main column */
.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 20px;
}

/* Fake image, just for this example */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>

<div class="header">
  <h1>Phần Mềm Quản Lí Nhà Trọ Của Thủy</h1>
  </b>  Created By Lê Ngọc Thủy </p>
</div>

<div class="navbar">
  <a href="http://house_rental.test/index.php?page=news" class="active">Home</a>
  <a href="http://house_rental.test/index.php?page=home">Dùng Thử </a>
  <a href="#">Khuyến Mại</a>
  <a href="http://house_rental.test/index.php?page=site_settings" class="right">Liên Hệ</a>
</div>

<div class="row">
  <div class="side">
    <h2></h2>
    <h5>Phòng trọ khách hàng tự decore</h5>
    <img src="img/tu-thiet-ke-trang-tri-phong-tro-1067x800.jpg" alt="Phòng " title="phòng trọ đẹp" style="height: 200px;">
   

    <p>khi thuê phòng trọ ở hệ thống nhà trọ của thủy, sẽ cho bạn cảm giác thoải mái</p>
    <h3>Những loại phòng cơ bản</h3>
    <img src="img/22_1592726520.jpg" alt="Phòng khép kín " title="phòng kép kín" style="height: 60px;">
    <img src="img/fef285f0-d322-4002-a635-be0120993590_1588063665.jpg" alt="Phòng không khép kín " title="phòng không kép kín" style="height: 60px;">

  <div class="main">
    <h3>Hệ Thống Nhà Trọ Ưu Tiên Cho Sinh Viên ĐHTNMT Hà Nội </h3>
    <img src="img/phong-tro-sinh-vien.jpg" alt="Phòng " title="phòng trọ đẹp" style="height: 200px;">
    <p>Khi sinh viên trường ĐHTNMT đến kí hợp đồng ở nhà trọ sẽ được giảm 5% tiền trọ tháng đầu tiên</p>
    <br>
    <h2>TITLE HEADING</h2>
    <h5>Title description, Sep 2, 2017</h5>
    <div class="fakeimg" style="height:200px;">Image</div>
    <p>Some text..</p>
    <p>.</p>
  </div>
</div>
                                                                              

</body>
</html>
