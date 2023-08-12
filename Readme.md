download and install composer: https://getcomposer.org/Composer-Setup.exe

add php to your environment variables: https://dinocajic.medium.com/add-xampp-php-to-environment-variables-in-windows-10-af20a765b0ce
make sure to restart vscode

in terminal/ vscode terminal install DotEnv by typing in:
composer require vlucas/phpdotenv

in terminal/ vscode terminal install Twilio by typing in:
composer require twilio/sdk

create or edit the .env file (the .env file should be located at the root of the project)
example contents of the .env file:

TWILIO_ACCOUNT_SID='ACb75232c7b9179e415f208b7390efa24e'
TWILIO_AUTH_TOKEN='342c34ee1f2b098bc092ba50d6df24fd'
TWILIO_NUMBER='+13135135433'

You can now test the SMS functionality, everytime a doctor changes an appointment status, the patient should receive an sms