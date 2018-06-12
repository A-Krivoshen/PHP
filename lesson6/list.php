 <?php 

	$all_files = glob('tests/*.json');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Список тестов</title>
</head>
<body>
	<a href="admin.php">Загрузить тест</a>
	<hr> 
	<?php if (!empty($all_files)): ?>
        <?php foreach ($all_files as $file): ?>
            <div>
                <h2><?php echo str_replace('tests/', '', $file); ?></h2><br>
                <strong>Загружен: <?php echo date("d-m-Y H:i", filemtime($file)); ?></strong><br>
                <a href="test.php?number=<?php echo array_search($file, $all_files); ?>">Перейти на страницу с тестом ></a>
            </div>
            <hr>

         <?php endforeach; ?>
    <?php endif; ?>

	<?php if(empty($all_files)) echo 'Не загружено ни одного теста'; ?>
	
</body>
</html>