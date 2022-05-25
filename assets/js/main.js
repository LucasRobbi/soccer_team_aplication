
/* Data Table -------------------------------------------------------------------------------------------------- */

document.addEventListener('DOMContentLoaded', function () {
    let table = new DataTable('#myTeams');
});



/* API Football ------------------------------------------------------------------------------------------------ */

var myHeaders = new Headers();
myHeaders.append("x-rapidapi-key", "3e00b6948cddd21e1c9d5875a21b03fa");
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


/* DROPZONE PLAYERS*/
// for (let index = 0; index < array.length; index++) {
    const draggableElement = document.querySelector("#myDraggableElement");    
// }
const draggableElement2 = document.querySelector("#myDraggableElement2");
const draggableElement3 = document.querySelector("#myDraggableElement3");

    draggableElement.addEventListener("dragstart", e => {
        e.dataTransfer.setData("text/plain", draggableElement.id);
    })
    draggableElement2.addEventListener("dragstart", e => {
        e.dataTransfer.setData("text/plain", draggableElement2.id);
    })
    draggableElement3.addEventListener("dragstart", e => {
        e.dataTransfer.setData("text/plain", draggableElement3.id);
    })

    for (const dropZone of document.querySelectorAll(".drop-zone-player")){

        dropZone.addEventListener("dragover", e => {
            e.preventDefault();
            dropZone.classList.add("drop-zone-over");
        });
        dropZone.addEventListener("dragleave", e => {
            dropZone.classList.remove("drop-zone-over");
        });

        dropZone.addEventListener("drop", e => {
            e.preventDefault();
            const droppedElementId = e.dataTransfer.getData("text/plain");
            const droppedElement =  document.getElementById(droppedElementId);
        
            dropZone.appendChild(droppedElement);
            dropZone.classList.remove("drop-zone-over");
        });
    }




