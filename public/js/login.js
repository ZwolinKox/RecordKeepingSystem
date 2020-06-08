
document.querySelector("#login").addEventListener("click", () =>
{
    document.querySelector("#errors").innerHTML = `<span class="loginLoading">Trwa logowanie..</span>
    <span class="spinner-border text-primary" role="status">
    </span>`;

    //Dane logowania
    const ob = {
        email : document.querySelector("#email").value,
        password : document.querySelector("#passwd").value
    }

    canLogin = false;
    
    fetch("/api/login",
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
            canLogin = true; 
        else {
            document.querySelector("#errors").innerHTML = `<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Nie udało się zalogować
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>`;
        }
        
        return res;
    })
    .then(res => res.json())
    .then(res =>
    {
        if(canLogin) {
            const token = JSON.parse(JSON.stringify(res)).access_token;
            const admin = JSON.parse(JSON.stringify(res)).admin;

            Cookies.set('token', token, { expires: 7 });
            Cookies.set('admin', admin, { expires: 7 });
    
            location.href = "/"; 
        }
    })

})

