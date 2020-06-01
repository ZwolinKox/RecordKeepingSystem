document.querySelector("#login").addEventListener("click", () =>
{
    //Dane logowania
    const ob = {
        email : document.querySelector("#email").value,
        password : document.querySelector("#passwd").value
    }
    
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

    .then(res => res.json())

    .then(res =>
    {
        console.log(res);
        const token = JSON.parse(JSON.stringify(res)).access_token;
        Cookies.set('token', token, { expires: 7 });
        console.log( Cookies.get('token'))
    })

})