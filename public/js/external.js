

var movies = [
{
	"title": "The Hobbit: The battle",
	"year": 2004,
	"rating": "pg-13",
	"length": 144,
	"metascrore": 65,
	"director": "Peter Jackson",
	"description": "Best fantasy movie."
},
{
	"title": "Office Space",
	"year": 2000,
	"rating": "pg-13",
	"length": 144,
	"metascrore": 72,
	"director": "Someone",
	"description": "Stuff here."
},
{
	"title": "Grandma's Boy",
	"year": 2004,
	"rating": "pg-13",
	"length": 144,
	"metascrore": 85,
	"director": "wat",
	"description": "Cult classic."
},
{
	"title": "Valley Girl",
	"year": 1983,
	"rating": "pg-13",
	"length": 144,
	"metascrore": 71,
	"director": "Someoneelse",
	"description": "Awesome 80s movie."
},
{
	"title": "Starwars",
	"year": 1975,
	"rating": "pg-13",
	"length": 144,
	"metascrore": 99,
	"director": "fat guy",
	"description": "Awesome space movie."
},
];



// Title (year) | rating
// length: 25 | metascore
// director
// description
// ===============================

movies.forEach(function(element, index, movies){
console.log(element.title + "(" + element.year + ")" + " | " + element.rating);
console.log("Length: " + element.length + " | " + "metascrore: " + element.metascrore);
console.log("Director: " + element.director);
console.log("Description: " + element.description);
console.log('===============================');

console.log(movies);

if(element.rating == 'pg-13') {
	console.warn('You must be 13 yrs or older or have an adult!');
}


