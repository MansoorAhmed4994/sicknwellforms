<?php
    if(count($errors) > 0)
    {
        foreach($errors->all() as $error)
        {
         echo"
         
                <div class='alert alert-warning custom-alert'>
                    <strong>Warning! </strong>$error
                </div>
         
         ";
        }
    }
   
    if(session()->has('warning'))
    {
         
         echo"
         
                <div class='alert alert-warning custom-alert'>
                    <strong>Warning! </strong>".session()->get('warning')."         
                </div>
         
         "; 
    }
    else if(session()->has('success'))
    {
         
         echo"
         
                <center><div class='alert alert-success custom-alert'>
                    <strong></strong>".session()->get('success')."         
                </div></center>
         
         "; 
    }
?>