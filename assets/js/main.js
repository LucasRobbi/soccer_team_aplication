

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

/* VALIDATION URL WEBSITE TEAM*/

function is_url(str)
{
  regexp =  /^(?:(?:https?|ftp):\/\/)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})))(?::\d{2,5})?(?:\/\S*)?$/;
        if (regexp.test(str))
        {
          return true;
        }
        else
        {
          return false;
        }
}


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

    for (const playerDroped of document.querySelectorAll(".playerSearched")){
        
        playerDroped.addEventListener("dragleave", e => {
            playerDroped.classList.add("overrideIni");
        });

        playerDroped.addEventListener("drop", e => {
            e.preventDefault();
            const droppedElementId = e.dataTransfer.getData("text/plain");
            const droppedElement =  document.getElementById(droppedElementId);
            playerDroped.classList.add("overrideIni");
        
            playerDroped.appendChild(droppedElement);
            playerDroped.classList.remove("drop-zone-over");
        });
    }

    $( document ).ready(function() {
         formationChange();
    });

    function cleanFormation(){
        $('.field').html("");
    }

    function formationChange(){
        cleanFormation();
        let player = '<div class="drop-zone-player"><div class="text-inside-position"></div></div>';
        let goalKeeper = '<div class="position goalkeeper"><div class="drop-zone-player"><div class="text-inside-postion"></div></div></div>'
        let value = $("#teamFormation").val().toString();

        $('.field').append(goalKeeper);
        for(var i = 0; i < value.length; i++){
            var positionOpen = '<div id="position'+ i +'" class="position"></div>';
            $('.field').append(positionOpen);
            for(var j = 0; j < value.charAt(i); j++ ){
                $("#position" + i).append(player);
            }
        }
        
    }