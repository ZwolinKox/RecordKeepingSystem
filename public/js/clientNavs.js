function getParam() {
    return location.href.substring(location.href.lastIndexOf('/') + 1);
}

function deleteClient() {
    if(confirm("Na pewno chcesz usunąć klienta?")) {
        fetch('/api/clients/delete/'+getParam(),
        {
            method: "get",
            headers:
            {
                "Content-Type": "application/json",
                "Accept": "application/json",
                "Authorization": "Bearer " + Cookies.get("token")
            },
        }).then(res => {
            if(res.ok)
                $( "#main" ).fadeOut( "slow", () => {
                    $( "#successDelete" ).fadeIn( "slow", function() {
                    });
                });
            else {

            }
        })
    }
}

function editClient() {
    location.href = "/edit_client/"+getParam();
}

document.addEventListener("DOMContentLoaded", () => {

    document.querySelectorAll(".client_application").forEach(element => {
        element.addEventListener("click", () => {
            location.href = "/client_application/"+getParam();
        })
    });

    document.querySelectorAll(".client_notes").forEach(element => {
        element.addEventListener("click", () => {
            location.href = "/client_notes/"+getParam();
        })
    });

    document.querySelectorAll(".client_history").forEach(element => {
        element.addEventListener("click", () => {
            location.href = "/client_history/"+getParam();
        })
    });

    document.querySelectorAll(".client_info").forEach(element => {
        element.addEventListener("click", () => {
            location.href = "/client_info/"+getParam();
        })
    });
    
})