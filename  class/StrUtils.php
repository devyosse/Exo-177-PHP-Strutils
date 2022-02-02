<?php
class StrUtils
{
    private string $str = "";

    public function __construct(string $str)
    {
        $this->setStr($str);
    }

    /**
     * @return string
     */
    public function getStr(): string
    {
        return $this->str;
    }

    /**
     * @param string $str
     */
    public function setStr(string $str): void
    {
        $this->str = $str;
    }


    public function bold() : string{
        return "<p><strong>".$this->getStr()."</strong></p>";
    }

    public function italic() :string{
        return "<p><i>".$this->getStr()."</i></p>";
    }

    public function underline() :string{
        return "<p style='text-decoration: underline'>".$this->getStr()."</p>";
    }

    public function capitalize() :string{
        return "<p>".strtoupper($this->getStr())."</p>";
    }

    public function uglify() :string{
        return "<p style='text-decoration: underline'><strong><i>".$this->getStr()."</i></strong></p>";
    }
}
