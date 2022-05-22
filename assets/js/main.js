
/* Data Table -------------------------------------------------------------------------------------------------- */

document.addEventListener('DOMContentLoaded', function () {
    let table = new DataTable('#myTeams');
});



/* API Football ------------------------------------------------------------------------------------------------ */

var myHeaders = new Headers();
myHeaders.append("x-rapidapi-key", "XxXxXxXxXxXxXxXxXxXxXxXx");
myHeaders.append("x-rapidapi-host", "v3.football.api-sports.io");

fetch("https://v3.football.api-sports.io/players/seasons", {
    "method": "GET",
    "headers": {
        "x-rapidapi-host": "v3.football.api-sports.io",
        "x-rapidapi-key": "3e00b6948cddd21e1c9d5875a21b03fa"
    }

})
.then(response => {
	console.log(response);
})
.catch(err => {
	console.log(err);
});


  