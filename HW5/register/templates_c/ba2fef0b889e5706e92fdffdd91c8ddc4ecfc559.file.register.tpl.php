<?php /* Smarty version Smarty-3.0.7, created on 2011-05-03 23:33:42
         compiled from "../templates_c/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6912453374dbce6781548c8-97475946%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba2fef0b889e5706e92fdffdd91c8ddc4ecfc559' => 
    array (
      0 => '../templates_c/register.tpl',
      1 => 1304416311,
      2 => 'file',
    ),
    '660999d210f74d28ee46d5b2195450c1dd93e26b' => 
    array (
      0 => '../templates_c/index.tpl',
      1 => 1304456451,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6912453374dbce6781548c8-97475946',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="bg" lang="bg">
  <head>
    <title> </title>
    <meta http-equiv="content-type" 
    content="text/html;charset=utf-8" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <link rel="stylesheet" href="/xampp/fmi-php/HW5/site_media/style.css" type="text/css" media="screen" />
    <script type="text/javascript" src="/xampp/fmi-php/HW5/site_media/js/external.js">  
    </script>
    <!--[if lte IE 6]>
    <p bgcolor = "#7A0900">
    <em>Сайтът изглежда по този начин, защото използвате internet explorer 6 или по-стара версия. Моля използвайте <a href = "http://www.mozilla.com/">browser</a>.
    </em></p>
    <![endif]-->

  </head>
  <body>
    <div id = "menu">
      <map id = "coffee" name="menu">
        <area alt = "начало" shape="poly" title="начало" href="/xampp/fmi-php/HW5/" coords="84,269,87,268,90,268,92,267,98,267,102,265,105,265,107,264,110,264,114,263,120,263,128,261,143,256,153,256,156,255,159,255,165,253,169,252,172,252,176,251,182,251,185,252,187,253,187,256,188,258,188,267,186,269,184,270,182,272,180,273,177,273,175,274,171,275,169,276,166,277,163,277,159,279,156,280,152,282,144,284,140,286,137,287,131,287,129,288,122,288,120,289,83,289,79,285,79,276,80,274,82,272,83,270,87,268,102,268" />
      </map>
      <img id = "menu_cup" usemap = "#menu" src="/xampp/fmi-php/HW5/site_media/images/menu1.png" alt = "меню"/>
      <div id = "mouse"></div>
    </div>
    <div id = "main">
      <div id = "header">
        <ul id = "hmenu">
        <li><a href = "/xampp/fmi-php/HW5/">Начало</a></li>
        <li><a href = "/xampp/fmi-php/HW5/search/">Търсене</a></li>
        </ul>
        <ul id = "hmenu2">
	<?php if ($_smarty_tpl->getVariable('is_logged_user')->value){?>
          <li id="hello">Здравейте, <?php echo $_smarty_tpl->getVariable('user_name')->value;?>
! </li>
          <li><a href="/xampp/fmi-php/HW5/logout/">[изход]</a></li>
	<?php }else{ ?>
          <li id="login"><a href="/xampp/fmi-php/HW5/login/">Вход</a></li>
          <li id="register"><a href="/xampp/fmi-php/HW5/register/">Регистрация</a></li>
	<?php }?>
        </ul>
	<?php if ($_smarty_tpl->getVariable('isset_flash')->value){?>
	<div id="flash">
	  <?php echo $_smarty_tpl->getVariable('flash')->value;?>

	</div>
	<?php }?>
      </div>
      <div id = "content">

      

<div class = "container">
<form method="post" action="../register/">

<label for="FirstName">Име: </label><br/>
<input type="text" id="FirstName" name="FirstName"/>
<br/>

<label for="LastName">Фамилия: </label><br/>
<input type="text" id="LastName" name="LastName"/>
<br/>

<label for="email">E-mail: </label><br/>
<input type="text" id="Email" name="Email"/>
<br/>

<label for="password">Парола: </label><br/>
<input type="password" id="Password" name="Password"/>
<br/>

<br/>
<input type="submit" name="register" value="Регистрация"/>
</form>
</div>

 
        <div id = "footer">Валентина Динкова</div>
      </div>
    </div>
  </body>
</html>
