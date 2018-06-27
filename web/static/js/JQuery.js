
if ((localStorage.niePokazujNigdy == 0 || !localStorage.niePokazujNigdy) && (sessionStorage.niePokazuj == 0 || !sessionStorage.niePokazuj))
    $(function () {
    $("#dialog").dialog({
        title:" Witaj użytkowniku! ",
        resizable: false,
        position: {
            my: "center center",
            at: "center center"
        },
        show: 'blind',
        hide: 'blind',
        width: 500,
       
        buttons: {
            
            "zamnkij": function () {
                
                $(this).dialog("close");
                if (document.getElementById("myCheck").checked == true) {
                    localS();
                }
                else sessionS();
            }
        }
    });
});
function localS() {
    if (typeof (Storage) !== "undefined") {
        localStorage.niePokazujNigdy = 1;
    }
}
function sessionS(){
    if (typeof (Storage) !== "undefined") {
        sessionStorage.niePokazuj = 1;
    }
}


$(function () {
    $("#accordion").accordion();
});


