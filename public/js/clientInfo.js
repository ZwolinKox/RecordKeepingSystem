document.addEventListener("DOMContentLoaded", () => {
    fetch('/api/clients/'+getParam(),
    {
        method: "get",
        headers:
        {
            "Content-Type": "application/json",
            "Accept": "application/json",
            "Authorization": "Bearer " + Cookies.get("token")
        },
    }).then(res => {
        if(!res.ok) {
            location.href = "/client_info";
        }

        return res.json();
    }).then(res => {
        document.querySelector("#cust_name").innerHTML = res.name;

        if(res.address == "") 
            document.querySelector("#moreInformation").innerHTML = "Brak zdefiniowanych adresów przejdź do edycji aby dodać jakiś.";
        else
            document.querySelector("#moreInformation").innerHTML = "Brak dodatkowych informacji";

        if(res.private)
            document.querySelector("#cust_type").innerHTML = "Klient prywatny";
        else 
            document.querySelector("#cust_type").innerHTML = "Firma";

        document.querySelector("#cust_creation_date").innerHTML = res.created_at;
        document.querySelector("#cust_edition_date").innerHTML = res.updated_at;
        document.querySelector("#cust_id").innerHTML = res.id;

        //Tu jeszcze informacja o grupach

        if(!res.send_sms)
            document.querySelector("#cust_sms").innerHTML = "";

        if(!res.send_email)
            document.querySelector("#cust_email").innerHTML = "";

        if(res.phone1 != "")
            document.querySelector("#cust_telnum").innerHTML = res.phone1;

        if(res.phone2 != "")
            document.querySelector("#cust_telnum").innerHTML += ", "+res.phone2;

        if(res.email1 != "")
            document.querySelector("#cust_emails").innerHTML = res.email1;

        if(res.email2 != "")
            document.querySelector("#cust_emails").innerHTML += ", "+res.email1;

        document.querySelector("#cust_address").innerHTML = res.address;

        fetch('/api/clients/groups/'+getParam(),
        {
            method: "get",
            headers:
            {
                "Content-Type": "application/json",
                "Accept": "application/json",
                "Authorization": "Bearer " + Cookies.get("token")
            },
        }).then(res => {
            if(!res.ok) {
                location.href = "/client_info";
            }

            return res.json();
        }).then(res => {
            console.log(res);
            res.forEach(element => {
                document.querySelector("#cust_group").innerHTML += element.name +" , ";
            });

            let groups = document.querySelector("#cust_group").innerHTML;
            document.querySelector("#cust_group").innerHTML = groups.substr(0, groups.length - 2);
        })

    })
})