<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="index.css">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
	<title>Анкета</title>
</head>
<body>
	<header>
		<p class="titul"><img src="images/titul.png"></p>
	</header>
<p class="hello">
	Чтобы образ получился достоверным, автор должен четко представлять себе все нюансы биографии и психологии героя. Анкета персонажа поможет автору избежать смысловых дыр и нестыковок. Благодаря разработанному досье вы сможете выстроить логичный сюжет, создадите живого объемного героя.<br>

	 Анкета персонажа – это документ, подробно описывающий героя книги, новеллы, сценария, игры. Автор разрабатывает его до начала работы с произведением. На каждого значимого героя пишется отдельное досье. Документ должен включать такие блоки как происхождение героя и его бэкграунд, внешность, особенности характера, взаимосвязи и другое.<br>

	Под этим документом могут также иметь виду «досье героя», «матрица героя» и даже «зарисовка героя» (хотя последнее скорее о чем-то более коротком).
</p>

<div id="vk">
 <a href="https://vk.com/himbeere_fondue" title="Щелкните здесь, чтобы перейти в группу художника">
 <img src="images/vk.png" alt="Группа в ВК"/>
 </a>
 </div>
	<p class="result">
		<?php  
			$firstName = $_POST['firstName'];
			$lastName = $_POST['lastName'];
			$gender = $_POST['gender'];
			$year = $_POST['year'];
			$race = $_POST['race'];
			$class = $_POST['class'];
			$lvl = $_POST['lvl'];
			$alignment = $_POST['alignment'];
			$weapon = $_POST['weapon'];
			$weaponDescription = $_POST['weaponDescription'];
			$magic = $_POST['magic'];
			$magicDescription = $_POST['magicDescription'];
			$faceDescription = $_POST['faceDescription'];
			$bioDescription = $_POST['bioDescription'];
			$dopDescription = $_POST['dopDescription'];

		    echo ' Имя ' . $firstName . '<br />';
			echo ' Фамилия (и/или клан) ' . $lastNameName . '<br />';
			echo ' Пол ' . $gender . '<br />';
			echo ' Возраст ' . $year . '<br />';
			echo ' Раса ' . $race . '<br />';
			echo ' Класс ' . $class . '<br />';
			echo ' Уровень (если есть) ' . $lvl . '<br />';
			echo ' Мировоззрение ' . $alignment . '<br />';
			echo ' Вид оружия ' . $weapon . '<br />';
			echo ' Подробности (класс оружия: меч, лук, посох, и т.д.) ' . $weaponDescription . '<br />';
			echo ' Магические способности ' . $magic . '<br />';
			echo ' Подробности (класс или школа магии) ' . $magicDescription . '<br />';
			echo ' Внешность ' . $faceDescription . '<br />';
			echo ' Биография ' . $bioDescription . '<br />';
			echo ' Дополнительно ' . $ddopDescription . '<br />';
		?>
		</p>
    <nav>
        <ul>
   <li> <a href="list/form.html" title="Назад">Назад</a></li> <br>
    <li><a href="index.html" title="На главную">На главную</a></li>
        </ul>
    </nav>
</body>
</html>