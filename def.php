<?
session_start();
class template
{
        private $file = '';
        private $template = false;
    private $vars = array();
 
        function __construct($file)
        {
                $this->file = $file;
 
                if(empty($this->file) or !file_exists($this->file))
                {
                        exit('Шаблон не найден!');
                }
 
                $this->template = file_get_contents($this->file);
                return true;
 
        }
 
        function set($key,$var)
        {
                $this->vars[$key] = $var;
        }
 
        function parse()
        {
                if(count($this->vars) < 1) return false;
 
                foreach($this->vars as $find => $replace)
                {
                        $this->template = str_replace($find, $replace, $this->template);
                }
 
                echo $this->template;
                return true;
        }
}
include('database_config.php');
$content = "
<center><h4>Вход</h4></center><hr>
<form method='post' action='posts/auth_post.php'>
Логин : </br><input type='text' name='login'></br>
Пароль : </br><input type='password' name='password'></br>
<input type='submit' name='submit' value='Войти' class='btn'>
</form>
";
$res = mysql_query("SELECT `admin` FROM `users` WHERE login='$_SESSION[login]'");
$myres = mysql_fetch_array($res);
if($myres['admin'] == "1"){
$admin = " </br><a href='admin/'>Админ-панель</a> ";
}else{
$admin = "";
}
$content2 = "Привет,$_SESSION[login] .$admin </br> <a href='member.php'>Мой профиль</a> </br> <a href='exit.php'>Выйти</a> ";
$templ = mysql_query("SELECT `value` FROM `site_settings` WHERE `setting`='template'");
$rem = mysql_fetch_Array($templ);
$template = $rem['value'];
$logo_result = mysql_query("SELECT * FROM `site_settings` WHERE `setting`='logo'");
$li = mysql_fetch_array($logo_result);
$logo = $li['value'];
$podpis_result = mysql_query("SELECT * FROM `site_settings` WHERE `setting`='podpis'");
$li = mysql_fetch_array($podpis_result);
$podpis = $li['value'];
$tpl = new template("templates/$template/main.php");
if(empty($_SESSION['login'])){
$tpl->set('{login}', $content);
}else{
$tpl->set('{login}', $content2);
}
$tpl->set('{THEME}', "templates/$template");
$tpl->set('{logo}', $logo);
$tpl->set('{podpis}', $podpis);
?>
