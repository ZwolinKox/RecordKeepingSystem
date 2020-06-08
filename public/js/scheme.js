document.addEventListener('DOMContentLoaded', () => {

    fetch("/api/user",
    {
        method: "get",
        headers:
        {
            "Content-Type": "application/json",
            "Accept": "application/json",
            "Authorization": "Bearer " + Cookies.get("token")
        },
    }).then(res => res.json())
    .then(res => {
        console.log(res);
        if(!res.admin)
            location.href = "/";
    })


    let pattern = document.querySelector("#pattern");
    let inputState = document.querySelector("#inputState");
    let save = document.querySelector("#save");

    save.addEventListener('click', () => {
        document.querySelector("#logs").innerHTML = " ";

        const obj = {
             body : { 
                scheme : pattern.value,
                cycle: inputState.value
        }}; 

        console.log(JSON.stringify(obj));

        fetch("/api/scheme/update",
        {
            method: "post",
            headers:
            {
                "Content-Type": "application/json",
                "Accept": "application/json",
                "Authorization": "Bearer " + Cookies.get("token")
            },
            body : JSON.stringify(obj)
        }).then(res => {
            
            $( "#logs" ).fadeOut( "fast", function() {
            });

            if(!res.ok) {
                document.querySelector("#logs").innerHTML =
                `<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Nie udało się zapisać schematu!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>`;

            } else {
                document.querySelector("#logs").innerHTML =
                `<div class="alert alert-success alert-dismissible fade show" role="alert">
                Zapisano zmiany.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>`;
            }
            
            $( "#logs" ).fadeIn( "slow", function() {
            });

            return res.json();
        }).then(res => {
            console.log(res);
        })
        
    });

    let validData = false;

    fetch("/api/scheme",
        {
            method: "get",
            headers:
            {
                "Content-Type": "application/json",
                "Accept": "application/json",
                "Authorization": "Bearer " + Cookies.get("token")
            },
        })
        .then(res => {
            if(res.ok) {
                $( "#loading" ).fadeOut( "slow", () => {
                    $( "#main" ).fadeIn( "slow", function() {
                    });
                });

                validData = true;
                return res.json();               
            }
                
        }).then(res => {
            if(validData) {
                value = JSON.parse(JSON.stringify(res));

                pattern.value = value.scheme; 
                inputState.value = value.cycle;
            }
                
        })
})