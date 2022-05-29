

/* DATA TABLE -------------------------------------------------------------------------------------------------- */

document.addEventListener('DOMContentLoaded', function () {
    let table = new DataTable('#myTeams');
});



/* API Football ------------------------------------------------------------------------------------------------ */

// var myHeaders = new Headers();
// myHeaders.append("x-rapidapi-key", "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx");
// myHeaders.append("x-rapidapi-host", "v3.football.api-sports.io");

// fetch("https://v3.football.api-sports.io/players/seasons", {
//     "method": "GET",
//     "headers": {
//         "x-rapidapi-host": "v3.football.api-sports.io",
//         "x-rapidapi-key": "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"
//     }

// })
// .then(response => {
// 	console.log(response);
// })
// .catch(err => {
// 	console.log(err);
// });

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


/* SQUAD FORMATION */
$( document ).ready(function() {
        formationChange();
        load_data();
});

function cleanFormation(){
    $('.field').html("");
}

var reverseString = function(string) {
    return string.split('').reverse().join('');
}

function formationChange(){
    cleanFormation();
    let value = $("#teamFormation").val().toString();

    value = reverseString(value);
    let positionTeamValue = 0;

    for(var i = 0; i < value.length; i++){
        var positionOpen = '<div id="position'+ i +'" class="position"></div>';
        $('.field').append(positionOpen);

        for(var j = 0; j < value.charAt(i); j++ ){
            $("#position" + i).append('<div id="positionTeamValue'+positionTeamValue+'" class="drop-zone-player" data-draggable="target"></div>');
            positionTeamValue ++;
        }
    }
    $('.field').append('<div class="position goalkeeper"><div id="positionTeamValue'+positionTeamValue+'" class="drop-zone-player" data-draggable="target"></div></div>');

    
}


(function(){

    //exclude older browsers by the features we need them to support
    //and legacy opera explicitly so we don't waste time on a dead browser
    if (!document.querySelectorAll || !('draggable' in document.createElement('span')) || window.opera ) { return; }

    //variable for storing the dragging item reference 
    //this will avoid the need to define any transfer data 
    //which means that the elements don't need to have IDs 
    var item = null;

    //dragstart event to initiate mouse dragging
    document.addEventListener('dragstart', function(e) {

        //set the item reference to this element
        item = e.target;
        
        //we don't need the transfer data, but we have to define something
        //otherwise the drop action won't work at all in firefox
        //most browsers support the proper mime-type syntax, eg. "text/plain"
        //but we have to use this incorrect syntax for the benefit of IE10+
        e.dataTransfer.setData('text', '');
    
    }, false);

    //dragover event to allow the drag by preventing its default
    //ie. the default action of an element is not to allow dragging 
    document.addEventListener('dragover', function(e) {

        if(item) { e.preventDefault(); }
    
    }, false);	

    //drop event to allow the element to be dropped into valid targets
    document.addEventListener('drop', function(e)
    {
        //if this element is a drop target, move the item here 
        //then prevent default to allow the action (same as dragover)
        if(e.target.getAttribute('data-draggable') == 'target') {

            e.target.appendChild(item);
            
            e.preventDefault();

        }
    
    }, false);
    
    //dragend event to clean-up after drop or abort
    //which fires whether or not the drop target was valid
    document.addEventListener('dragend', function(e) {

        item = null;
    
    }, false);

})();	

function load_data(query)
{
    $.ajax({
        url:"searchPlayerByName.php",
        method:"post",
        data:{query:query},
        success:function(data)
        {
            $('#resultSearch').html(data);
        }
    });
}

$('#searchPlayers').keyup(function(){
    var search = $(this).val();
    if(search != '')
    {
        load_data(search);
    }
    else
    {
        load_data();			
    }
});