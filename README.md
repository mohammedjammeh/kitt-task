# Kitt Meeting Room Price Calculator

This is a PHP application that calculates the price of a meeting room based on the amount of minutes required.

The commands below are what you need to be able to run and test this application via terminal. Please ensure that you have docker running and all else should be fine. Feel free to email me at [mohammedjammeh@yahoo.com](mailto:mohammedjammeh@yahoo.com) if you have any issues.

#### Build Project:
```docker build -t meeting-room-app .```


#### Run Application:

When you run the command below on your terminal, a question should pop up asking how many minutes you want to book a room for. Once you enter the number minutes, it will respond with the price and tariff you're being charged with. Run it again if you want to ask with a different number of minutes.

```docker run -it --rm --name meeting-room-app meeting-room-app```

 
#### Run Tests:
Download Testing Package: ```composer install```

Run Tests: ```./vendor/bin/phpunit```



 <br />
Thank you for making it this far, have fun!
