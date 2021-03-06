<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/thank-you-page.css">
    <title>Спасибо!</title>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-158652659-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-158652659-1');
</script>


	</head>
<body>
    
	<div class="container">
        <div class="row mt-5">
            <div class="col-12 text-center">
                <h2>Спасибо. Ваш заказ принят!</h2>
            <h4>
                Вы ввели следующие данные:<br/>
            </h4>
            <h4>
                Имя: <?php if(!empty($_GET['name'])) { echo htmlspecialchars($_GET["name"]); } ?><br/>
                Телефон: <?php if(!empty($_GET['phone'])) { echo htmlspecialchars($_GET["phone"]); } ?>
            </h4>

            <h4>Мы позвоним Вам в ближайшие 15 минут. Держите телефон рядом.<br>
                Наш колл центр работает с 09:00 до 21:00</h4>
            </div>
        </div>
    </div>
</body>
</html>

