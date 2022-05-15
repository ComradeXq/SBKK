<!DOCTYPE HTML>
<HTML>
<HEAD>
  <meta http-equiv="Content-Type" content="text/html: charset=utf-8">
  <link rel ="stylesheet" href="style.css">
<style>
      select {
      width: 255px;
      height: 35px;
      padding: 4px;
      border-radius:4px;

      background: white;
      border: 1px;
      outline: none;
      display: inline-block;
      -webkit-appearance:none;
      -moz-appearance: none;
      appearance: none;
      cursor: pointer;
      }
      button{
        margin-top: 10px;
      }

    </style>

</HEAD>
<body>

<nav class="bar">
  <ul class="topmenu">
    <li><a href="main.php">Сервер</a></li>
    <li><a href="#">Руководство пользователя<i class="fa fa-angle-down"></i></a>
      <ul class="submenu">
        <li><a href="user.php">Пользователь</a></li>
        <li><a href="">Администратор</a></li>
      </ul>
    </li>
    <li><a href="#">Контакты</a></li>
    <li><a href="#">Пользователь</a>
        <ul class="submenu">
          <li><a href="profile.php">Страница пользователя</a></li>
          <li><a href="setting.php">Настройки</a></li>
          <li><a href="exit.php">Выход</a></li>
      </ul>
    </li>
  </ul>
</nav>
<h2 class="HeadText">Создание нового пользователя</h2>
<div class="imgcontainer">
    <img src="PhotoAuth/avatar.webp " alt = "Avatar" class="avatar">
</div>
<form action="create_user.php" method="post">
  <div class="container">
    <label>Ввести полное имя пользователя 
      <input placeholder="Enter full name" type="text" name="name_new" required>
    </label>
    <label>Ввести логин пользователя 
      <input placeholder="Enter login" type="text" name="login_new" required>
    </label>
    <label>Ввести email пользователя
      <input placeholder="Enter email" type="text" name="mail_new" required>
    </label>
    <label>Ввести пароль пользователя 
      <input placeholder="Enter Password" type="password" name="password_new" required>
    </label>   
    <button type="submit">Подтвердить изменения</button>
  </form>
</body>
<script language="javascript">
  $(".five li ul").hide();
  $(".five li:has('.submenu')").hover(
    function(){
      $(".five li ul").stop().fadeToggle(300);
    }
);

</script>
</HTML>