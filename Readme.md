How to execute the project.
There is index.php file which will work as a base file for request.
Every request will be serve via index.php file.
To add a passenger run command via terminal:-
php -r "require 'index.php'; addPassenger('N', 'V', 27, 'M');"
To Assign Flight To Passenger run command:-
php -r "require 'index.php'; assignSeats('N');"