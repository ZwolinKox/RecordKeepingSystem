
function getStatusName(id) {
    switch (id) {
        case 1:
            return "Oczekuje na diagnoze"   
        case 2:
            return "Oczekuje na dostawe"   
        case 3:
            return "Wymaga potwierdzenia kosztów u klienta"   
        case 4:
            return "Potwierdzone"
        case 5:
            return "W trakcie naprawy"  
        case 6:
            return "Oczekuje na podzespoły"
        case 7:
            return "W trakcie testów"  
        case 8:
            return "Podsumowanie naprawy"  
        case 9:
            return "Nie zaakceptowane"  
        case 10:
            return "Anulowane"
        case 11:
            return "Naprawa nie jest możliwa"
        case 12:
            return "Do odbioru" 
        case 13:
            return "Przekazano do wysyłki"
        case 14:
            return "Odebrane"
        case 15:
            return "Zezłomowane"
        default:
            return "Nieznany";
    }
}

function deleteOrder() {
    if(confirm("Na pewno chcesz usunąć to zlecenie?")) {
        fetch('/api/orders/delete/'+getParam(),
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

function setStatus(id) {

    const obj = {
        status : id
    };

    fetch('/api/orders/status/'+getParam(),
    {
        method: "put",
        headers:
        {
            "Content-Type": "application/json",
            "Accept": "application/json",
            "Authorization": "Bearer " + Cookies.get("token")
        },
        body: JSON.stringify(obj)
    }).then(res => {
        location.reload();
    })
}

function getParam() {
    return location.href.substring(location.href.lastIndexOf('/') + 1);
}


document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll(".setStatus").forEach(element => {
        element.addEventListener('click', () => {
            setStatus(element.id);
        });
    });

    
    document.querySelectorAll(".editOrder").forEach(element => {
        element.addEventListener("click", () => {
            location.href = "/edit_order/"+getParam();
        })
    });

    document.querySelectorAll(".deleteOrder").forEach(element => {
        element.addEventListener("click", () => {
           deleteOrder();
        })
    });

    document.querySelectorAll(".order_history").forEach(element => {
        element.addEventListener('click', () => {
            location.href ="/order_history/"+getParam();
        });
    });

    document.querySelectorAll(".order_info").forEach(element => {
        element.addEventListener('click', () => {
            location.href ="/order_info/"+getParam();
        });
    });

    document.querySelectorAll(".order_notes").forEach(element => {
        element.addEventListener('click', () => {
            location.href ="/order_notes/"+getParam();
        });
    });

    document.querySelector("#sendFile").addEventListener("click", () => {
        const file = document.querySelector("#inputGroupFile01").files[0];


        let formData = new FormData();
        formData.append('file', file);

        fetch('/api/orders/upload/'+getParam(),
        {
            method: "post",
            headers:
            {
                "Authorization": "Bearer " + Cookies.get("token")
            },
            body: formData
        }).then(res => {
            if(!res.ok) {
                document.querySelector("#fileLogs").innerHTML =
                `<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Nie udało się załączyć pliku!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>`;

            } else {
                document.querySelector("#fileLogs").innerHTML =
                `<div class="alert alert-success alert-dismissible fade show" role="alert">
                Pomyślnie załączono plik.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>`;
            }
        })


    })

    document.querySelector("#sendNoteButton").addEventListener("click", () => {

        const ob = {
            order : getParam(),
            text: document.querySelector("#noteText").value
        }

        fetch('/api/ordernotes/',
        {
            method: "put",
            headers:
            {
                "Accept" : "application/json",
                "Content-Type" : "application/json",
                "Authorization": "Bearer " + Cookies.get("token")
            },
            body: JSON.stringify(ob)
        }).then(res => {
            if(!res.ok) {
                document.querySelector("#noteLogs").innerHTML =
                `<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Nie udało się utworzyć notatki!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>`;

            } else {
                document.querySelector("#noteLogs").innerHTML =
                `<div class="alert alert-success alert-dismissible fade show" role="alert">
                Pomyślnie dodano notatkę.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>`;
            }
        })


    })
})