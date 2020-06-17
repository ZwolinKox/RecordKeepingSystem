function getParam() {
    return location.href.substring(location.href.lastIndexOf('/') + 1);
}

document.addEventListener('DOMContentLoaded', () => {
    fetch("/api/clients/" + getParam(),
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
            if (res.ok) {
                return res.json();
            } else {
                return;
            }
        }).then(res => {
            values = JSON.parse(JSON.stringify(res));

            if (values.private == 1)
                document.querySelector("#eclient_fac").checked = false;
            else
                document.querySelector("#eclient_fac").checked = true;

            if (values.send_email == 1)
                document.querySelector("#eclient_email").checked = true;
            else
                document.querySelector("#eclient_email").checked = false;

            if (values.send_sms == 1)
                document.querySelector("#eclient_sms").checked = true;
            else
                document.querySelector("#eclient_sms").checked = false;

            document.querySelector("#eclient_name").value = values.name;
            document.querySelector("#eclient_tnum").value = values.phone1;
            document.querySelector("#eclient_atnum").value = values.phone2;
            document.querySelector("#eclient_dea").value = values.email1;
            document.querySelector("#eclient_aea").value = values.email2;

            fetch("/api/clients/groups/" + getParam(),
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
                if (res.ok) {
                    return res.json();
                } else {
                    return;
                }
            })
            .then(res => {
                values = JSON.parse(JSON.stringify(res));

                values.forEach(element => {
                    document.querySelector("#eclient_deleteGroup").innerHTML +=
                    `<option value="${element.id}">${element.name}</option>`
                })

                document.querySelector("#eclient_deleteGroupButton").addEventListener("click", () =>
                 {
                                                    console.log(document.querySelector("#eclient_deleteGroup").value);
                                                    const ob_ng = {
                                                        group: document.querySelector("#eclient_deleteGroup").value, 
                                                        client: getParam()
                                                    }

                                                    fetch("/api/groups/disconnect",
                                                    {
                                                        method: "post",
                                                        headers:
                                                        {
                                                            "Content-Type": "application/json",
                                                            "Accept": "application/json",
                                                            "Authorization": "Bearer " + Cookies.get("token")
                                                        },
                                                        body: JSON.stringify(ob_ng)
                                                    }).then(res => {
                                                        if(res.ok)
                                                            location.reload();
                                                        else {
                                                            alert("Wielbłąd");
                                                        }
                                                    })
                })
            })

            

            fetch("/api/groups",
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
                if (res.ok) {
                    return res.json();
                } else {
                    return;
                }
            })
            .then(res => {
                values = JSON.parse(JSON.stringify(res));
                
                values.data.forEach(element => {
                    document.querySelector("#eclient_addgroup").innerHTML +=
                    `<option value="${element.id}">${element.name}</option>`
                })

                document.querySelector("#eclient_addGroupButton").addEventListener("click", () =>
                 {
                                                    console.log(document.querySelector("#eclient_addgroup").value);
                                                    const ob_ng = {
                                                        group: document.querySelector("#eclient_addgroup").value, 
                                                        client: getParam()
                                                    }

                                                    fetch("/api/groups/connect",
                                                    {
                                                        method: "post",
                                                        headers:
                                                        {
                                                            "Content-Type": "application/json",
                                                            "Accept": "application/json",
                                                            "Authorization": "Bearer " + Cookies.get("token")
                                                        },
                                                        body: JSON.stringify(ob_ng)
                                                    }).then(res => {
                                                        if(res.ok)
                                                            location.reload();
                                                        else {
                                                            alert("Wielbłąd");
                                                        }
                                                    })
                })
            })
            

            $("#loading").fadeOut("slow", function () {
                $("#main").fadeIn("slow", function () {
                });
            });

            const id = values.id;

            document.querySelector("#eclient_sbutton").addEventListener("click", () => {
                const ob = {
                    body: {
                        name: document.querySelector("#eclient_name").value,
                        private: !document.querySelector("#eclient_fac").checked,
                        send_sms: document.querySelector("#eclient_sms").checked,
                        send_email: document.querySelector("#eclient_email").checked,
                        phone1: document.querySelector("#eclient_tnum").value,
                        phone2:  document.querySelector("#eclient_atnum").value,
                        email1:  document.querySelector("#eclient_dea").value,
                        email2: document.querySelector("#eclient_aea").value,
                    }
                }
                    console.log(id);
                fetch("/api/clients/update/" + id,
                    {
                        method: "post",
                        headers:
                        {
                            "Content-Type": "application/json",
                            "Accept": "application/json",
                            "Authorization": "Bearer " + Cookies.get("token")
                        },
                        body: JSON.stringify(ob)
                    }).then(res => {
                        if (res.ok) {
                            document.querySelector("#logs").innerHTML =
                                `<div class="alert alert-success alert-dismissible fade show" role="alert">
                                Zmiany zapisane
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>`
                        } else {
                            document.querySelector("#logs").innerHTML =
                                `<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                Nie udało się zapisać zmian!
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>`
                        }

                        location.reload();
                    })

            })
        })

})