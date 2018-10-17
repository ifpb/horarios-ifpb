<?php

function flash($message, $alert_class = '')
{
    session()->flash('message', $message);

    if(!empty($alert_class))
        session()->flash('alert_class', 'alert-' . $alert_class);
    else
        session()->flash('alert_class', 'alert-success');
}