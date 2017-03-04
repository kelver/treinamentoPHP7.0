<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 04/03/17
 * Time: 01:23
 */

class User
{
    public $name;
    public $email;

    public function __toString()
    {
        return "User: {$this->name}, E-Mail: {$this->email}\n";
    }
}

class Blog
{
    public $title;
    public $description;

    public function __toString()
    {
        return "Blog: {$this->title}, Description: {$this->description}\n";
    }
}
/*
$user = new User;
$user->name = "Kelver";
$user->email = "kelver@email.com";
echo $user;

$blog = new Blog();
$blog->title = "Blog";
$blog->description = "Description Blog";
echo $blog;

file_put_contents("data.save", serialize([$user, $blog]));
*/

$data = file_get_contents("data.save");
$data = unserialize($data, ["allowed_classes" => ["Blog"]]);
foreach ($data as $obj){
    if(is_object($obj))
        echo $obj;
}