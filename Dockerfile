FROM php:7.4-cli
COPY . /usr/src/app/MeetingRoomApp
WORKDIR /usr/src/app/MeetingRoomApp
CMD [ "php", "./app/MeetingRoomApp.php" ]