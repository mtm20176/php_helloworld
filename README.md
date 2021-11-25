# PHP application

This PHP application is to let me test a JetBrains PhpStorm IDE

###### Languages, frameworks used:

* PHP 7.4 local interpreter built-in the Docker image marktmilligan/phpstorm

###### Notes / To run this app after cloning, we recommend:

* The built-in web server in PhpStorm will automatically be running once IDE is started

* In PhpStorm, set web server port to 8080 ( in settings -> build, execution, deployment -> debugger )

* In PhpStorm, set web server in settings -> build, execution, deployment -> deployment - use in place web server

* To test in a Coder workspace, setup the Coder CLI locally for SSH and setup SSH port forwarding e.g., ssh -L 8080:localhost:8080 coder.mark-php - then http://localhost:8080/hw brings up the index.php dynamic HTML

* You can also test the php by curling localhost:8080 from a Coder terminal

###### Known issues

* Coder Dev URLs do not work even though the listening shows port 8080 active, thus requiring local SSH port forwarding

