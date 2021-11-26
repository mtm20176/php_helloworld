# PHP application

This PHP application is to let me test a JetBrains PhpStorm IDE

###### Languages, frameworks used:

* PHP 7.4 local interpreter built-in the Docker image marktmilligan/phpstorm

###### Notes / To run this app after cloning, we recommend:

* The built-in web server in PhpStorm will automatically be running once IDE is started

* In PhpStorm, set web server port to 8080 ( in settings -> build, execution, deployment -> debugger )

* In PhpStorm, set web server in settings -> build, execution, deployment -> deployment - use in place web server

* To test in a Coder workspace, you have 2 choices: a Devl URL or local machine port forwarding with SSH.

* Create a Dev URL for port 1026 - and create a Run configuration for a web server using port 1026 and start the web server with the Run command

* OR setup the Coder CLI locally for SSH and setup SSH port forwarding e.g., ssh -L 8080:localhost:8080 coder.mark-php - then http://localhost:8080/hw brings up the index.php dynamic HTML - this approach uses the built-in already running web server

* You can also test the php by curling localhost:8080 from a Coder terminal

###### Known issues

* Coder Dev URLs do not work with the built-in running web server, even though the listening shows port 8080 active, thus requiring local SSH port forwarding.  I suspect that web server is not started and allowing all network interfaces e.g., 0.0.0.0 to connect to it and that is why external Dev URLs do not work.

