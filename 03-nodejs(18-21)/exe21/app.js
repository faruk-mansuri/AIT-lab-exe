const readline = require('readline');

const rl = readline.createInterface({
  input: process.stdin,
  output: process.stdout,
});

rl.question('enter your expression to calculate: ', (input) => {
  try {
    console.log(eval(input));
  } catch (error) {
    console.log(error);
  }
  rl.close();
});
