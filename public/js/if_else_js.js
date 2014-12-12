var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

var favorite = 'blue'; 

// todo: Create a block of if/else statements to check for every color except indigo and violet.
// todo: When a color is encountered log a message that tells the color, and an object of that color.
//       Example: Blue is the color of the sky.
if (color == 'red') {
	console.log('Red is the color of an apple.');
} else if (color == 'orange') {
	console.log('Orange is the color of a leaf during the fall.');
} else if (color == 'yellow') {
	console.log('Yellow is the color of the sun.');
} else if (color == 'green') {
	console.log('Green is the color of grass.');
} else if (color == 'blue') {
	console.log('Blue is the color of the sky.');
} else {
	console.log('I do not know anything by that color.');
}



// todo: Have a final else that will catch indigo and violet.
// todo: In the else, log: I do not know anything by that color.

if (color == favorite) {
	console.log('You guessed my favorite color, blue!');
} else {
	console.log(color + ' is not my favorite color.');
}

// todo: Using the ternary operator, conditionally log a statement that
//       says whether the random color matches your favorite color.