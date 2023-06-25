const dateTime = new Date();

const year = dateTime.getFullYear();
const month = dateTime.getMonth() + 1;
const day = dateTime.getDate();
const date = `${day}-${month}-${year}`;

const hour = dateTime.getHours();
const minute = dateTime.getMinutes() + 1;
const second = dateTime.getSeconds();
const time = `${hour}-${minute}-${second}`;

module.exports = { date, time };
