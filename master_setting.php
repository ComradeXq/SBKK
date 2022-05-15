<!DOCTYPE HTML>
<HTML>
    <HEAD>
    <meta http-equiv="Content-Type" content="text/html: charset=utf-8">
        <title>BrigadaSBKKCorporation</title>
        <style type = "text/css">
        body {font-family: Arial, Helvetica, sans-serif;}
        form {border: 3px solid #f1f1f1;}
        <link rel ="stylesheet" href="style.css">
        .HeadText{text-align: center;}

        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;

        }
        img.avatar {
            width: 20%;
            border-radius: 60%;
        }
        .container {
            padding: 5% 35% 0% 35%;
        }

        .auth_success{
            padding: 5% 40% 5% 40%;
            text-align: center;
            font-size: 20px;


        }
        .container1 {
            padding: 0% 25% 0% 25%;
            text-align: center;
        }        
        .HeadText{text-align: center;}

        span.psw {
            float: right;
            padding-top: 16px;
        }

        @media screen and (max-width: 300px) {
            span.psw {
            display: block;
            float: none;
            }
            .cancelbtn {
            width: 100%;
            }
        }        
        </style>

    </HEAD>
    <BODY>
        <h2 class="HeadText">Добро пожаловать на страницу авторизации</h2>
            <div class="imgcontainer">
                <img src="PhotoAuth/avatar.webp " alt = "Avatar" class="avatar">
            </div>
    <?php
    $host='localhost';
    $database = 'sbk';
    $user = 'postgres';
    $password = '12345'; 
    # Создаем соединение с базой PostgreSQL с указанными выше параметрами
    $cn = pg_connect("host=$host port=5432 dbname=$database user=$user password=$password")
        or die("Failed to create connection to database: ". pg_last_error(). "<br/>");
    
    $login=$_COOKIE['user'];
  //выборка данных
    $result = pg_query($cn,"SELECT * FROM operator WHERE login = '$login'");
    $user = pg_fetch_assoc($result);
    $role = $user["role"];
    if ($role!="admin"): ?>
            <div class="container">
                <form action="check.php" method="post">
                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="login" id="login" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password" id="password" required>

                    <button type="submit">Login</button>
                </form>
            </div>
        <?php else: ?>
            <p class="auth_success">Вы успешно авторизовались <?=$_COOKIE['user']?></p>
            <div class="container1">
                <form action="main.php">
                <button>Перейти на основной сайт</button>
            </form>
            </div>
        <?php endif; ?>
    </BODY>
</HTML>