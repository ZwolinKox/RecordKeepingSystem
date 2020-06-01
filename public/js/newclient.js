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

    .then(res =>
    {
        if (res.ok)
        {
            return res.json()
        }
        else
        {
            console.log("siema");
            document.querySelector("#error").innerHTML+=
            `<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Uwaga!</strong> Nie udało sie utworzyć klienta.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>`;
        }
    })

    .then(res =>
    {
        console.log(res);
        
    })
    .catch(res =>
     {
        console.log("smieszny");
        document.querySelector("#error").innerHTML+=
        `<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Uwaga!</strong> Nie udało sie utworzyć klienta.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>`;

    })
    

})
