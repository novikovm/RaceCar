<?php
class Config {
private static $instance;
private static $config = array(
"contact_email" => "nekitko123@gmail.com",
"website" => "v-ie.uek.krakow.pl/~s172926/index.html",
);
private function __construct() {}
private function __clone() {}
public static function getInstance() {
if (self::$instance === null) {
self::$instance = new Config();
}
return self::$instance;
}
public function setEmail($email) {
$this->config["contact_email"] = $email;
}
public function getEmail() {
return $this->config["contact_email"];
}
}
$conf1 = Config::getInstance();
echo $conf1->getEmail();
$conf2 = Config::getInstance();
$conf2->setEmail("my_new_email@gmail.com");
echo $conf1->getEmail();