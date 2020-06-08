
document.addEventListener("DOMContentLoaded", () => {
    
    document.querySelector("#create").addEventListener("click", () => {
        let passwd2 = document.querySelector("#passwd2").value;

        const ob = {
            name : document.querySelector("#name").value,
            password : document.querySelector("#passwd").value,
            email : document.querySelector("#email").value,
            admin : document.querySelector("#admin").checked,
        }

        if(passwd2 != ob.password) {
            document.querySelector("#errors").innerHTML = `<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Hasła się nie zgadzają
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>`;
            
            return;
        }

        fetch("/api/register",
        {
            method: "post",
            headers:
            {
                "Content-Type": "application/json",
                "Accept" : "application/json"
            },
            body: JSON.stringify(ob)
        })
        .then(res => {
            
            if(res.ok) 
                document.querySelector("#errors").innerHTML = `<div class="alert alert-success alert-dismissible fade show" role="alert">
                Udało się stworzyć użytkownika
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>`;
            else {
                document.querySelector("#errors").innerHTML = `<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Nie udało się utworzyć użytkownika
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>`;
            }
            
            return res.json();
        })
    })

})