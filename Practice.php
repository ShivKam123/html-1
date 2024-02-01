<?php
$m = new mysqli("localhost","root","","shivank");
echo $m->connect_error ? die("<b><big><strong>Could Not Connect....".$m->connect_error."</strong></big></b>") :
    "<b><big><strong>Database Connected Successfully</strong></big></b> <br>";

$qr = true;
$qr = $m->query("Create Database if not exists Shivank");
// $qr = true;
var_dump($qr);
// $qr = $m->query("insert into lb(Name,Number,Email,Amount) values('Vasu','1234567890','NULL','10000')");
// var_dump($qr);
// $qr = $m->query("insert into acmast(Name) values('Shivank')");
// var_dump($qr);
// $qr = $m->query("insert into acmast(To) values('0')");
// var_dump($qr);
// $qr = $m->query("insert into acmast(Deposit) values('0')");
// var_dump($qr);
// $qr = $m->query("insert into acmast(Withdrawal) values('0')");
// var_dump($qr);
// $qr = $m->query("insert into acmast(Name,Deposit,Withdrawal) values('SK','0','0')");
// var_dump($qr);
// $qr = $m->query("insert into lena(Name,Number,Email,Amount) values('Vasu','1234567890','NULL','10000')");
// var_dump($qr);
// $qr = $m->query("update lb set Number = 10 where Account = 1000000001");
// var_dump($qr);
// $qr = $m->query("Create Table if not exists sk(id int not null auto_increment,primary key(id),name varchar(35),
//                 age int(3),salary int(7),dept varchar(20))");
$qr = $m->query("Create Table if not exists AK(Id bigint(10),Name varchar(35),Age int(3),Salary int(10),Department varchar(20))");
var_dump($qr);
// $qr = $m->query("insert into AK(Id,Name,Age,Salary,Department) values('1','SK','20','1000','Sales'),
//                                 ('2','AK','20','1000','Sales'),('3','AJ','20','1000','Sales')");
// $qr = $m->query("update AK set Age = 25 , Salary = 100000 where Id = 2");
// var_dump($qr);
$v = 100;
$k = "Salary";
$qr = $m->query("update AK set $k = '$v' where Id = 2");
var_dump($qr);
$m->close();
echo $qr ? "Command Run Successfully" : "Command Failed";
?>