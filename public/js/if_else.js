// ignore these lines for now
// just know that the variable 'color' will end up with a random value from the colors array
var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

var favorite = 'blue'; // TODO: change this to your favorite color from the list

// TODO: Create a block of if/else statements to check for every color except indigo and violet.

if(color=='red') {
	console.log('red');
} else if(color=='orange') {
	console.log('orange');
} else if(color=='yellow') {
	console.log('yellow');
} else if(color=='green') {
	console.log('green');
} else if(color=='blue') {
	console.log('blue');
} else {
	console.log('indigo and violet');
}

// TODO: When a color is encountered log a message that tells the color, and an object of that color.
//       Example: Blue is the color of the sky.
// TODO: Have a final else that will catch indigo and violet.
// TODO: In the else, log: I do not know anything by that color.

if(color=='blue') {
	console.log('Blue is the color of the sky.');
} else if(color=='yellow') {
	console.log('Yellow is the color of the taxi cab.');
} else if(color=='red') {
	console.log('Red is the color of my sweater.')
} else if(color=='orange') {
	console.log('Orange is the color of a tangerine.');
} else if(color=='green') {
	console.log('Green is the color of grass.')
} else {
	console.log('I do not know anything by that color.');
}

// TODO: Using the ternary operator, conditionally log a statement that
//       says whether the random color matches your favorite color.

if(color==favorite) {
	console.log('true');
} else {
	console.log('false');
}
// (color==favorite)?console.log('true'):console.log('false');









