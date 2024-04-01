<?php
declare(strict_types=1);

class Request {
    private array $data;

    public function __construct() {
        $this->data = $_POST;
    }

    public function get(string $key) {
        return $this->data[$key] ?? null;
    }

    public function callback(string $key, callable $callback) : void {
        if (isset($this->data[$key])) {
            $callback($this->data[$key]);
        }
    }
}

$request = new Request();

$password = $request->get("password");
echo $password;

$request->callback("password", function ($password) {
    echo "Password: " . $password;
});