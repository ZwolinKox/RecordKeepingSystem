document.querySelector("#createclient").addEventListener("click", () =>
{
    
    //Dane logowania
    const ob = {
        private : !document.querySelector("#firma").checked,  
        name : document.querySelector("#imienazwisko").value,
        phone1 : document.querySelector("#tel").value,
        phone2 : document.querySelector("#altertel").value,
        email1 : document.querySelector("#email").value,
        email2 : document.querySelector("#alteremail").value,
        send_sms : document.querySelector("#smsyinformacyjne").checked,
        send_email : document.querySelector("#emaileinformacyjne").checked
    }
    console.log("elo")
    fetch("/api/clients",
    {
        method: "put",
        headers:
        {
            "Content-Type": "application/json",
            "Accept" : "application/json",
            "Authorization" : "Bearer "+Cookies.get("token")
        },
        body: JSON.stringify(ob)
    })

    .then(res => res.json())

    .then(res =>
    {
        console.log(res);
    })

})
