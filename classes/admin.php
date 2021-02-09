<?php


class admin extends utilisateur
{
    protected const TEST = 'YOYO';

    private array $banneUsers =[];
    protected string $code;

    public function generateCode(): string
    {
        return str_replace('utilisateur', 'admin', parent::generateCode());
//        $this->code = uniqid('admin-')."-".time();
//        return $this->code;
    }

    public function display(){
        echo "<p>".self::TEST."</p>";
        echo "<p>".admin::TEST."</p>";

        echo "<p>".parent::TEST."</p>";
        echo "<p>".utilisateur::TEST."</p>";
    }
}
