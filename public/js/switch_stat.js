
var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

switch (colors) {
    case "red":
        console.log("Red is the color of an apple.");
        break;
    case "orange":
        console.log("Orange is the color of a leaf during the fall.");
        break;
    case "yellow":
        console.log("Yellow is the color of the sun.");
        break;
    case "green":
        console.log("Green is the color of grass.");
        break;
    case "blue":
        console.log("Blue is the color of the sky.");
        break;
    default:
        console.log(color + ' is not my favorite color.');
}

var favorite = 'blue';

switch (favorite) {
	case "blue":
		console.log('You guessed my favorite color, blue!');
		break;
	default:
		console.log(color + ' is not my favorite color.');
}