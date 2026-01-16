<?php
// core/Response.php
namespace StoneFw;

class Response
{
    protected string $content;
    protected int $status = 200;

    public function __construct(string $content = '', int $status = 200)
    {
        $this->content = $content;
        $this->status = $status;
    }

    public function send()
    {
        http_response_code($this->status);
        echo $this->content;
    }
}
