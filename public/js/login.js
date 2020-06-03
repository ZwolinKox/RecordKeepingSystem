
document.querySelector("#login").addEventListener("click", () =>
{
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
        
        return res;
    })
    .then(res => res.json())
    .then(res =>
    {
        if(canLogin) {
            const token = JSON.parse(JSON.stringify(res)).access_token;
            Cookies.set('token', token, { expires: 7 });
    
            location.href = "/"; 
        }
    })

})

