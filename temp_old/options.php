<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru-ru" lang="ru-ru" dir="ltr" >

<title>Сообщение отправлено</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="posadochnaya/main.css">
<?php
/* Проверяем существуют ли переменные, которые передала форма обратной связи. 
   Если не существуют, то мы их создаем.
   Если форма передала пустые значения мы их удаляем */
if (isset($_POST['fio'])) {$fio = $_POST['fio']; if ($fio == '') {unset($fio);}}
if (isset($_POST['email'])) {$email = $_POST['email']; if ($email == '') {unset($email);}}
if (isset($_POST['ma'])) {$ma = $_POST['ma']; if ($ma == '') {unset($ma);}}
if (isset($_POST['mai'])) {$mai = $_POST['mai']; if ($mai == '') {unset($mai);}}
if (isset($_POST['il'])) {$il = $_POST['il']; if ($il == '') {unset($il);}}
if (isset($_POST['mail'])) {$mail = $_POST['mail']; if ($mail == '') {unset($mail);}}
if (isset($_POST['money'])) {$money = $_POST['money']; if ($money == '') {unset($money);}}
if (isset($_POST['pr'])){$pr = $_POST['pr']; if ($pr == '') {unset($pr);}}
if (isset($_POST['captcha'])){$captcha = $_POST['captcha'];}

 

/* Проверяем заполнены ли все поля */
if (isset($fio) && isset($email))
{

  {
/* Формируем сообщение */
$address = "stroy-remontcck@mail.ru";
$sub = "Обратная связь интернет магазина напольных покрытий tarkettpol.by";
$mes = "Ф.И.О.: $fio \n E-mail: $email \n Контактный телефон: $ma \n Наименование товара и цвет : $mai \n Адрес : $il \n Город : $mail \n Сообщение : $money";

/* Отправка сообщения */
$verify = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
      if ($verify == 'true')
    
     {
       echo "<body bgcolor='609df9'>
<div style='margin-top: 30px'><table border='1' width='450' align='center' cellpadding='20' cellspacing='6' bgcolor='white'>
<tr>
<td>
<div style='margin'><div align='center'><center>СПАСИБО ЗА ЗАЯВКУ!! С ВАМИ СВЯЖУТСЯ!!<br/><a href='http://tarkettpol.by'>Вернуться на главную</a></center></div></div>
</tr>
</td>
</table></div>";
      }
      else 
	  {
	  echo "Сообщение не отправлено!";
	  }
  }
}
else
{
echo "<div class='nevse'><center>Вы заполнили не все поля!</center></div><a href='http://tarkettpol.by' class='nevs'><center>Вернуться и заполнить поля!</center></a>";
}
?>
