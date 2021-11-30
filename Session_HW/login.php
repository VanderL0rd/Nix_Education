<?php

class SessWrapper
{
    public function SessStart($sess_id = null)
    {
        if (isset($sess_id))
            session_id($sess_id);
        session_start();
        return session_id();
    }

    public function SessDestoy()
    {
        if (isset($_SESSION)) {
            session_unset();
            session_destroy();
        }
    }
}

function main()
{
    $sess = new SessWrapper();
    if (isset($_POST)) {
        if ($_POST['password'] == '1234' && $_POST['password'] == 'example@ma.il') {
            $sess::SessStart();
            echo "<h1>Hello " . $_POST['name'] . "</h1><br>";
        } else {
            echo "<h1>You type something wrong</h1>";
        }
    }
}
main();
