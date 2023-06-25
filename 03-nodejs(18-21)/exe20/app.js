const readline = require('readline');

const rl = readline.createInterface({
  input: process.stdin,
  output: process.stdout,
});

rl.question('Enter your name: ', (input) => {
  console.log(input.toLowerCase());
  console.log(input.toUpperCase());
  rl.close();
});
