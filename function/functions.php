<?php

// Set Session Message

function set_message($msg)
{
    if (!empty($msg)) 
    {
        $_SESSION['MESSAGE'] = $msg;
    } 
    else 
        {
            $msg = "";
        }
}

// Display Message
function display_message()
{
    if (isset($_SESSION['MESSAGE'])) 
    {
        echo $_SESSION['MESSAGE'];
        unset($_SESSION['MESSAGE']);
    }
}

//Error Message
function display_error($error)
{
    return '<div class="alert alert-danger">' . $error . '</div>';
}

// set_message(display_error(error: "please Fill in the Blanks"));

// Success Message
function display_succes($success)
{
    return '<div class="alert alert-success">' . $success . '</div>';
}



    