<?php

class FileNotFoundExeption extends Exception
{

}

class PermissionsDenied extends Exception
{

}

try {
    throw new FileNotFoundExeption('test');
    var_dump('try');
}
catch (FileNotFoundExeption | PermissionsDenied $e) {
    var_dump('catch');
}
catch (Exception $e) {
    var_dump('general catch');
}
finally {
    var_dump('finally');
}