# slimcli service
This project shows a simple way to use slim framework on Cli, And still be able to catch command Args. 

## Commands
- Build the service and keep track the logs 
`make buils` 
- Run the service
`make run`
- Get inside the service docker container
`make enter`
- Run code static analysis 
`make static-analysis`

For more commands check `make help`.

## Run Service
After `make run`, with the current setup, run `php ./bin/console.php` to see the list of commands already have been added.

To use the test command:

`
php ./bin/console.php slimcli:validate_transform
`

## Register new command to the service: 
Add the command namespace to `config/command.php`, and the service will auto register it.