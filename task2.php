<? session_start(); ?>
<? if($_COOKIE['loggedIn']) : ?>
    <div style="text-align:center; vertical-align:middle">
	<p>Имя, <?= $_COOKIE['login']; ?></p>
    <a href="<?= $_SERVER['PHP_SELF']; ?>?logout=true">Выйти</a>
	</div>
<? else : ?>
	<div style="text-align:center; vertical-align:middle">
    <form  action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
        <label>Логин</label><br/>
		<input type="text" name="login" required><br>
        <label>Пароль</label><br/>
		<input type="password" name="password" required><br>
        <label>email</label><br/>
		<input type="email" name="email" required><br><br/>
        <input type="submit" name="submit" value="login">
    </form>
	</div>
<? endif; ?>
 
<?
$login = 'login';
$password = 'pass';
$email = 'email@test.ru';
 
if(isset($_POST['submit']) && !empty($_POST['submit'])) {
        $data['login'] = $_POST['login'] == $login ? $_POST['login'] : false;
        $data['pass'] = $_POST['password'] == $password ? $_POST['password'] : false;
        $data['email'] = $_POST['email'] == $email ? $_POST['email'] : false;
       
        foreach($data as $key => $value) {
                if(!$value) $error[] = $key;
        }
       
        if(empty($error)) {
                setcookie('loggedIn', true);
                setcookie('SESSID', session_id());
                setcookie('login', $data['login']);
                session_start();
                header('Location: ' . $_SERVER['PHP_SELF']);
        }
        else {
                print_r($error);
        }
}
 
if($_GET['logout'] == true) {
        setcookie("loggedIn", false);
        setcookie("SESSID", "");
        setcookie("login", "");
        header('Location: ' . $_SERVER['PHP_SELF']);
        session_destroy();
}
?>
