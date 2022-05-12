FROM php:7.4-cli
COPY . /usr/src/bookingapp
WORKDIR /usr/src/bookingapp
CMD [ "php", "./Booking.php" ]