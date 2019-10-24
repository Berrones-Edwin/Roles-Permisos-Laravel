<?php

// No me funciono
    function ischecked($role, $permissionID){

        for ($i=0; $i < count($role->permissions); $i++) 
            return $role->permissions[$i]->id == $permissionID ? 'checked' : '';
               
        
    }