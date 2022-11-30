

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="create-quiz-wang.css">
    <link rel="icon" href="../images/logo_computer.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<style>
  :root {
    --theme-primary: #6F1E51;
    --theme-sub: #8e44ad;
    --theme-cut: #fff;
    --theme-cut-sub: #f1c40f;
    --theme-fade-f7: #f7f7f7;
    --theme-fade-e5: #e5e5e5;
    --theme-fade-ad: #adadad;
    --danger: #EA2027;
    --warning: #FFC312;
    --success: #1abc9c;
    --info: #3498db; 
    --liner1:linear-gradient(to bottom, #929b92, #a8b4b1, #c4ccce, #e2e5e7, #ffffff);
}
.btn {
    display: flex;
    justify-content: center;
    align-items: center;
    text-decoration: none;
    border: none;
    font-size: 1rem;
    border-radius: 5px;
    transition: .3s ease;
    cursor: pointer;
    padding: 10px 20px;
}
.btn-primary { background: var(--color-primary); color: var(--color-light); }
.btn-danger { background: var(--danger); color: var(--color-light); }
.btn-warning { background: var(--warning); color: #333; }
.btn-success { background: var(--success); color: var(--color-light); }
.btn-info { background: var(--info); color: var(--color-light); }
.color-primary { color: var(--color-primary) !important;}
.color-danger { color: var(--danger) !important; }
.color-warning { color: var(--warning) !important; }
.color-success { color: var(--success) !important; }
.color-info { color: var(--info) !important; }

  .sidebar {
    max-width: 300px;
    width: 100%;
    height: 100vh;
    overflow: auto;
    background: linear-gradient(to bottom, #e9adf6, #e9c4fd, #ecd9ff, #f3ecff, #ffffff);
    padding: 0 10px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    position: fixed;
}
.sidebar-top,.sidebar-bottom {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
}

.fontawesome {
    font-size: 1.3rem;
    margin-right: 15px;
}

.sb-logo {
    width: 100px;
    height: 100px;
    margin: 30px 0;
}
.sb-logo img {
    width: 100%;
    height: 100%;
    object-fit: contain;
}

.sb-ul {
    width: 100%;
}
.sb-ul li {
    list-style: none;
}
.sb-ul li a {
    display: flex;
    text-decoration: none;
    font-size: 1.1rem;
    font-weight: bold;
    color: #000;
    padding: 15px 30px;
    transition: .3s ease;
    border-radius: 10px;
    position: relative;
    letter-spacing: 0.3px;
}
.sb-ul li a:hover {
    color: #000;
    background:linear-gradient(to bottom, #f897f8, #ea7df5, #d862f4, #c446f3, #ac25f4);
    margin: 0 0 0 9px;
    transition: 0.5s  ease;
}
.btn-logout {
    background: var(--danger);
    color: var(--theme-cut);
    border-radius: 10px;
    margin: 30px;
}
.btn-logout:hover{
    background: var(--theme-sub) !important;
    color: #000;
    font-weight: bold;
}

.dashboard {
    width: 80%;
    margin-left: 18rem;
    overflow: auto;
    background:linear-gradient(to bottom, #e4ebe4, #e8f1ef, #eff5f7, #f8fafc, #ffffff);
    padding: 30px;

}
.main-profile{
    margin-top: 28px;
    text-align: center;
}

.content-dashboard{
  background: rgba(0, 0, 0, 0.1);
  border-radius: 10px;
  width: 100%px;
  margin: auto;
}
.header{
      width: 50%;
      height: 9vh;
      /*background-color: #94989D;*/
      margin: 30px auto;
      border-radius: 5px;
      padding: 5px;
      display: flex;
      justify-content: center;
      align-items: center;

  }
  .content{
      width: 50%;
      /* height: 100vh; */
      background-color: rgba(0, 0, 0, 0.1);
      margin: 20px auto;
      border: none;
      border-radius: 5px;
  }

  input[type=text]{
    background: none;
    width: 100%;
    font-size: 25px;
    color: #000;
    border: none;
    outline: none;
    padding: 5px;
    padding-left: 20px;
    border-bottom: 3px solid #FFFFFF;
  }
  ::placeholder{
    color: #000;
  }

  .right-box-IDK{
    width: 50px;
    height: 50px;
    background: #1abc9c;
    
  }
  

  
    /* Full-width input fields */
.addinput {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
.add {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
.add-cancel {
  background-color: #e74c3c;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

nav button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 50%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

.custom-select {
  position: relative;
  font-family: Arial;

}

.custom-select select {
  display: none; /*hide original SELECT element:*/
}

.select-selected {
  background-color: DodgerBlue;
}

/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}

/*style items (options):*/
.select-items {
  position: absolute;
  background-color: DodgerBlue;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}

.class-left{
    width: 35%;
    height: 100%;
    /* background-color: red; */
}
.class-left-right{
    width: 100%;
    height: 100%;
    /* background-color: pink; */
    display: flex;
}
.class-right{
    display: flex;
}


</style>
<body>

      <div class="sidebar">
                    <div class="sidebar-top">
                        <div class="sb-logo">
                            <a href="index.php">
                            <img src="../images/logo_computer.png">
                            </a> 
                        </div>
                                <ul class="sb-ul">
                                <li>
                                    <a onclick="document.getElementById('id01').style.display='block'" 
                                    class="" 
                                    style="margin-right: 10px;">
                                    <i class='bx bxs-file-plus fontawesome '></i>
                                    เพิ่มคำถาม</a>
                                </li>
                                <li>
                                    <a onclick="document.getElementById('id02').style.display='block'" 
                                    class="" 
                                    style="margin-right: 10px;">
                                    <i class='bx bx-bookmark-minus fontawesome'></i>
                                    ลบคำถาม</a>
                                </li>
                                <li>
                                    <a onclick="document.getElementById('id03').style.display='block'" 
                                    class="" 
                                    style="margin-right: 10px;">
                                    <i class="fas fa-user-plus fontawesome "></i>
                                    ห้องเรียน</a>
                                </li>
                                <li>
                                    <a name='submit' type="submit" style="cursor: pointer; margin-right: 10px;" 
                                    class="" 
                                    value="">
                                    <i class="fas fa-pen fontawesome "></i>
                                    สร้าง</a>
                                </li>
                                <li>
                                    <a href="#">
                                    <i class="fas fa-home fontawesome">
                                    </i>ทดสอบ</a>
                                </li>
                                <li>
                                    <a href="#">
                                    <i class="fas fa-home fontawesome">
                                    </i>ทดสอบ</a>
                                </li>
                                <li>
                                    <a href="#">
                                    <i class="fas fa-home fontawesome">
                                    </i>ทดสอบ</a>
                                </li>
                            </ul>
                    </div>
                        <div class="sidebar-bottom">
                        <a href="../create-quiz.php" style="margin-right: 10px;" class="btn btn-logout">
                        <i class="fa-solid fa-right-from-bracket style-icon-logout"></i>
                        ออก</a>
                    </div>
                </div>

                    <div class="dashboard">
                      <div class="content-dashboard ">
                          <form action="check-quiz-wang.php" method="POST">
                              <div class="header">
                                  <input type="text" value="" name="quizname" placeholder="ชื่อแบบทดสอบ" required>
                                  <span></span>
                              </div>
                            <div class="main-profile">
                              <form action="check-quiz-wang.php" method="post">
                                  <div id="allquestion">
                                      <div class="content" id="">
                                          <div class="question">
                                              <div style="margin: 0 10px;">
                                                  <input type="text" name="questionname[]" id="" value="" placeholder="ชื่อคำถาม" style="width: 100%;" required>
                                              </div>
                                                <div class="c-1" >
                                                    <input type="text" value="" name="c-1[]" placeholder="คำถามที่ 1" style="width: 100%;" required>
                                                </div>

                                                <div class="c-2">
                                                    <input type="text" value="" name="c-2[]" placeholder="คำถามที่ 2"  required>
                                                </div>

                                                <div class="c-3">
                                                    <input type="text" value="" name="c-3[]" placeholder="คำถามที่ 3" required>
                                                </div>
                                                
                                                <div class="c-4">
                                                    <input type="text" value="" name="c-4[]" placeholder="คำถามที่ 4" required>
                                                </div>
                                          </div>
                                                <div class="answer">
                                                    <input type="text" value="" name="answer[]" placeholder="คำตอบ" required>
                                                </div>
                                      </div>
                                  </div>
                                  <button name='submit' type="submit" style="cursor: pointer; margin-right: 10px;" class="create-button" value="">สร้าง</button>
                                  <div class="right-box-IDK">
                                    ff
                                </div>

                                </form>
                            </div>
                          </form>
                      </div>
                    </div>
                        
                    


    <div id="id01" class="modal">
      <div class="modal-content animate">

      
    <!-- <form class="modal-content animate"> -->
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container" >
      <label for="uname" style="font-size: 20px;"><b>เพิ่มคำถาม</b></label>
      <input type="number" placeholder="ระบุจำนวน" name="addq" required class="addinput" id="addinputq" style="font-size: 20px;">

      <button type="button" class="add" style="font-size: 20px;" onclick="addq();">เพิ่ม</button>
      <button style="font-size: 20px;" type="submit" class="add-cancel" onclick="document.getElementById('id01').style.display='none'">ยกเลิก</button>
    </div>

    <!-- </form> -->
    </div>
    </div>

    <div id="id02" class="modal">
      <div class="modal-content animate">
    <!-- <form class="modal-content animate" action="/action_page.php" method="post"> -->
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label for="uname" style="font-size: 20px;"><b>ลบคำถาม</b></label>
      <input type="number" style="font-size: 20px;" placeholder="ระบุจำนวน" name="removeq" required class="addinput" id="removeinput">

      <button type="submit" class="add" style="font-size: 20px;" onclick="remove()">ลบ</button>
      <button type="submit" style="font-size: 20px;" class="add-cancel" onclick="document.getElementById('id02').style.display='none'">ยกเลิก</button>
    </div>

    <!-- </form> -->
    </div>
    </div>

    <div id="id03" class="modal">
      <!-- <div class="modal-content animate"> -->
    <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <div class="class-left-right">
      <div class="class-left">
      <label for="uname" style="font-size: 20px;"><b>วุฒิการศึกษา</b></label>
      <!-- <input type="number" style="font-size: 20px;" placeholder="ระบุจำนวน" name="removeq" required class="addinput" id="removeinput"> -->
      <br>
      <div class="custom-select" style="width:200px;">
        <select>
          <option value="0">default</option>
          <option value="1">ปวช</option>
          <option value="2">ปวส</option>
          <option value="3">ปวส ม.6</option>
        </select>
      </div>
      <br>
      <label for="uname" style="font-size: 20px;"><b>ปีไหน</b></label>
      <div class="custom-select" style="width:200px;">
        <select>
          <option value="0">default</option>
          <option value="1">ปี1</option>
          <option value="2">ปี2</option>
          <option value="3">ปี3</option>
        </select>
      </div>
      <br>
      <label for="uname" style="font-size: 20px;"><b>กลุ่ม</b></label>
      <div class="custom-select" style="width:200px;">
        <select>
          <option value="0">default</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
        </select>
      </div>
      <br>
      <label for="uname" style="font-size: 20px;"><b>วิชา</b></label>
      <div class="custom-select" style="width:200px;">
        <select>
          <option value="0">default</option>
          <option value="1">คณิต</option>
          <option value="2">วิท</option>
          <option value="3">ไทย</option>
        </select>
      </div>
      
      <br>
      </div>
      <div class="class-rigth">
         <label for="uname" style="font-size: 20px;"><b>นักเรียน/เลขที่</b></label>
      <div class="student-check" style="display: flex; justify-content: space-around; width: 190%; height: 22%; align-items: center;">
      <div style="display: flex; height: 20px;">
      <input type="checkbox" style="margin-right: 5px;">
          <p style="margin-right: 10px;">1</p>
      </div>
        <div style="display: flex; height: 20px;">
          <input type="checkbox" style="margin-right: 5px;">
            <p style="margin-right: 10px;">2</p>
        </div>
          <div style="display: flex; height: 20px;">
          <input type="checkbox" style="margin-right: 5px;">
          <p style="margin-right: 10px;">3</p>
        </div>
          <div style="display: flex; height: 20px;">
          <input type="checkbox" style="margin-right: 5px;">
          <p style="margin-right: 10px;">4</p>
          </div>
          <div style="display: flex;height: 20px;">
          <input type="checkbox" style="margin-right: 5px;">
          <p style="margin-right: 10px;">5</p>
          </div>
      </div>
      <div class="student-check" style="display: flex; justify-content: space-around;  width: 190%; height: 22%; align-items: center;">
      <div style="display: flex; height: 20px;">
      <input type="checkbox" style="margin-right: 5px;">
          <p style="margin-right: 10px;">6</p>
      </div>
        <div style="display: flex; height: 20px;">
          <input type="checkbox" style="margin-right: 5px;">
            <p style="margin-right: 10px;">7</p>
        </div>
          <div style="display: flex; height: 20px;">
          <input type="checkbox" style="margin-right: 5px;">
          <p style="margin-right: 10px;">8</p>
        </div>
          <div style="display: flex; height: 20px;">
          <input type="checkbox" style="margin-right: 5px;">
          <p style="margin-right: 10px;">9</p>
          </div>
          <div style="display: flex;height: 20px;">
          <input type="checkbox" style="margin-right: 5px;">
          <p style="margin-right: 10px;">10</p>
          </div>
      </div>
      <div class="student-check" style="display: flex; justify-content: space-around; width: 190%; height: 22%; align-items: center;">
      <div style="display: flex; height: 20px;">
      <input type="checkbox" style="margin-right: 5px;">
          <p style="margin-right: 10px;">11</p>
      </div>
        <div style="display: flex; height: 20px;">
          <input type="checkbox" style="margin-right: 5px;">
            <p style="margin-right: 10px;">12</p>
        </div>
          <div style="display: flex; height: 20px;">
          <input type="checkbox" style="margin-right: 5px;">
          <p style="margin-right: 10px;">13</p>
        </div>
          <div style="display: flex; height: 20px;">
          <input type="checkbox" style="margin-right: 5px;">
          <p style="margin-right: 10px;">14</p>
          </div>
          <div style="display: flex;height: 20px;">
          <input type="checkbox" style="margin-right: 5px;">
          <p style="margin-right: 10px;">15</p>
          </div>
      </div>
      <div class="student-check" style="display: flex; justify-content: space-around;  width: 190%; height: 22%; align-items: center;">
      <div style="display: flex; height: 20px;">
      <input type="checkbox" style="margin-right: 5px;">
          <p style="margin-right: 10px;">16</p>
      </div>
        <div style="display: flex; height: 20px;">
          <input type="checkbox" style="margin-right: 5px;">
            <p style="margin-right: 10px;">17</p>
        </div>
          <div style="display: flex; height: 20px;">
          <input type="checkbox" style="margin-right: 5px;">
          <p style="margin-right: 10px;">18</p>
        </div>
          <div style="display: flex; height: 20px;">
          <input type="checkbox" style="margin-right: 5px;">
          <p style="margin-right: 10px;">19</p>
          </div>
          <div style="display: flex;height: 20px;">
          <input type="checkbox" style="margin-right: 5px;">
          <p style="margin-right: 10px;">20</p>
          </div>
      </div>
      
      </div>
      </div>



      <button type="submit" class="add" style="font-size: 20px;">ตกลง</button>
      <!-- <button type="reset">reset</button> -->
      <button type="submit" style="font-size: 20px;" class="add-cancel" onclick="document.getElementById('id03').style.display='none'">ยกเลิก</button>
    </div>

    </form>
    <!-- </div> -->
    </div>

    
    
    <script src="../js/script.js"></script>
</body>
</html>