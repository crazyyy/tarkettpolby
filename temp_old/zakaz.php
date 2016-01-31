<div>
<div class="zakazi">
<div style="float: left;">
<CENTER><B><font size="4">Сформировать Заявку :</font></B></CENTER><br>
<div id="ugolkr">       
<table border="0" width="365" align="center" cellpadding="20" cellspacing="0">
<tr>
<td>
<form action="/options.php" method="post">
<table cellspacing="0"><tr><td>
 Ф.И.О.:<br>
 <input type="text" name="fio" width="20"></td><td>
 Ваш e-mail:<br>
 <input type="text" name="email" width="20"></td></tr>
 <tr><td>Контактный телефон:<br>
 <input type="text" name="ma" width="20"></td><td>
 Наименование товара:<br>
 <input type="text" name="mai" width="20"></td></tr>
 <tr><td>Адрес:<br>
 <input type="text" name="il" width="20"></td><td>
 Количество:<br>
 <input type="text" name="mail" width="20"></td></tr>
</table><table cellspacing="0"> <tr><td>Текст сообщения:<br>
<textarea name="money" cols="50" rows="5"></textarea></td></tr>
</table>
<p>Введите числа с картинки: 
		<?php 
		$i=1;
		do
		{
		$num[$i] = mt_rand(0,9);
		echo "<img src='/images/".$num[$i].".gif' border='0' align='bottom' style='width:15px !important;'  vspace='5px'>";
		$i++;
		}
		while ($i<5);
		$captcha = $num[1].$num[2].$num[3].$num[4];
		?>
<input name="captcha" type="hidden" value="<?php echo $captcha ;?>">
<input name="pr" style=" margin-bottom:11px" type="text" size="6" maxlength="4"></p>
<p><input type="submit" class="bt1" value="Отправить Заявку"></p>
</form>
</td>
</tr>
</table>
</div>
</div>
<a href="#close" style="color: #000; font-size: 20px;">Х</a></div>
</div>