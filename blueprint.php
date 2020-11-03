<?php

class Session
{
    private static $self;

    public static function getSession(): self
    {
        return self::$self ?? self::$self = new Session();
    }

    private function __construct()
    {
        if ($_COOKIE['session_id'] ?? []) {
            session_id($_COOKIE['session_id']);
            session_start();
        } else {
            $sessionId = md5(rand(1, 100000) . md5(time()));
            session_id($sessionId);
            session_start();
            setcookie('session_id', $sessionId, time() + 240);
        }
    }

    public function set(string $key, $data)
    {
        $_SESSION[$key] = $data;
    }

    public function get(string $key, $default = null)
    {
        return $_SESSION[$key] ?? $default;
    }

    public function delete(string $key): void
    {
        unset($_SESSION[$key]);
    }
}



public static function all(): array
{
    $db = DB::getInstance();

    return $db
            ->query("SELECT id, email, created_at FROM users")
            ->fetch_all(MYSQLI_ASSOC) ?? [];

}










class MainController
{
    public function index()
    {
        $smarty = View::getInstance();

        $users = UserModel::all();
        $now = date("H:i:s", time());

        $smarty->assign('users', $users);
        $smarty->assign('time', $now);
        $smarty->display('index.tpl');
    }
}















class View
{
    private static $smarty;

    private function __construct()
    {
    }

    public static function getInstance(): Smarty
    {
        if (self::$smarty) {
            return self::$smarty;
        }

        $smarty = new Smarty();
        $smarty->setTemplateDir('Views');

        return self::$smarty = $smarty;
    }
}






















class DB
{
    private static $db;

    private function __construct()
    {
    }

    public static function getInstance(): mysqli
    {
        return self::$db ?? self::$db = new mysqli("localhost:3306", 'root', '', 'skillup');
    }
}

















$requestURI = ltrim($_SERVER['REQUEST_URI'], '/'); // /orders/update/12

$parts = explode('/', $requestURI);

$class = empty($parts[0]) ? 'user' : $parts[0];
$method = $parts[1] ?? 'index';
$parameter = $parts[2] ?? null;

$controller = ucfirst($class) . 'Controller'; //main => Main || user => User

$object = new $controller();
if (method_exists($object, $method)) {
    $object->$method();
} else {
    //header("Location: /" . $class);
    die("NOT FOUND");
}



