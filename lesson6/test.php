 <?php 

	if (isset($_GET['number']) === false) {
    	header('Location: list.php');
    exit;
	}

	$all_test = glob('tests/*.json');
	$number = $_GET['number'];
	$get = file_get_contents($all_test[$number]);
	$test = json_decode($get, true);

	
		function check_test($test_file)
		{
			foreach($test_file as $key => $item){
				if(!isset($_POST['answer' . $key])){
					echo 'Должны быть решены все задания!';
					exit;
				}
			}
		
			$i = 0;
			$questions = 0;
			foreach($test_file as $key => $item){
				$questions++;

           		if($item['correct_answer'] === $_POST['answer' . $key]){
           			$i++;

           		echo '<div>';
           		echo 'Вопрос: ' . $item['question'] . '<br?';
           		echo 'Ваш ответ ' . $item['answers'][$_POST['answer' . $key]] . '<br>';
           		echo 'Правильный ответ: ' . $item['answers'][$item['correct_answer']] . '<br>';
           		echo '</div>';
           		echo '<hr>';
			}
			echo '<p>Итого правилных ответов: ' . $i . 'из' . $questions . '</p>';
		}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Тест</title>
</head>
<body>

	<a href="<?php echo isset($_POST['check-test']) ? $_SERVER['HTTP_REFERER'] : 'list.php' ?>">Назад</a><br>
	<a href="admin.php">Загрузить тест</a>

	<?php if(isset($_GET['number']) && !isset($_POST['check-test'])): ?>
		<form method="post">
			<h1><?php echo basename($all_test[$number]); ?></h1>
			<?php foreach($test as $key => $item): ?>
			<fieldset>
				<legend><?= $item['question'] ?></legend>
				<label>
					<input type="radio" name="answer<?php echo $key ?>" value="0">
					<?= $item['answers'][0] ?>
				</label><br>
				<label>
					<input type="radio" name="answer<?php echo $key ?>" value="1">
					<?= $item['answers'][1] ?>
				</label><br>
				<label>
					<input type="radio" name="answer<?php echo $key ?>" value="2">
					<?= $item['answers'][2] ?>
				</label><br>
			</fieldset>
			<?php endforeach ?>
			<input type="submit" name="check-test" value="Проверить">
		</form> 
	<?php endif?>
	<div>
		<?php if(isset($_POST['check-test'])) echo check_test($test); ?>
	</div>
</body>
</html> 
