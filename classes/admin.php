<?php


class admin extends utilisateur
{
    private static int $instancesCount = 0;
    protected const TEST = 'YOYO';

    private array $banneUsers =[];
    protected string $code;

    public function __construct(string $nom)
    {
        parent::__construct($nom);
        self::instancePlus();
    }

    public function generateCode(): string
    {
        return str_replace('utilisateur', 'admin', parent::generateCode());
//        $this->code = uniqid('admin-')."-".time();
//        return $this->code;
    }

//    public function display(){
//        echo "<p>".self::TEST."</p>";
//        echo "<p>".admin::TEST."</p>";
//
//        echo "<p>".parent::TEST."</p>";
//        echo "<p>".utilisateur::TEST."</p>";
//    }

    public static function instancePlus() {
        self::$instancesCount++;
    }

    public static function getInstancesCount(){
        return self::$instancesCount;
    }

}
