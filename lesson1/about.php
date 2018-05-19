<!DOCTYPE html>

<?php
 $myname="Алексей Кривошеин";
 $myage=36;
 $myemail="a.krivoshein@gmail.com";
 $aboutme="Изучал верстку, работал с CMS Wordpress, полгода назад был у Вас на курсе, но потом по личным обстоятельствам не смог закончить курс, сейчас заново пришел, чему очень рад :)";
 $mycity="Москва";
?>
 <div>
  <h1>Домашние задание 1</h1>
  <p>Имя:<strong><?= $myname?></strong></p>
  <p>Возраст:<strong><?= $myage?></strong></p>
  <p>Электронная почта:<a href="mailto:a.krivoshein@gmail.com"<strong><?= $myemail?></strong></a></p>
  <p>Обо мне:<strong><?= $aboutme?></strong></p>
  <p>Город:<strong><?= $mycity?></strong></p>
</div>