
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
        })
        .then(res => {
            if (res.ok) {
                return res.json();
            } else {
                return;
            }
        }).then(res => {
            values = JSON.parse(JSON.stringify(res));

            if (values.admin == 1)
                document.querySelector("#userType").innerHTML = "Administrator";
            else
                document.querySelector("#userType").innerHTML = "Pracownik";

            document.querySelector("#userName").innerHTML = values.name;
            document.querySelector("#edit_my_accadm_name").value = values.name;
            document.querySelector("#edit_my_acc_email").value = values.email;



            $("#loading").fadeOut("slow", function () {
                $("#main").fadeIn("slow", function () {
                });
            });

            const id = values.id;

            document.querySelector("#send").addEventListener("click", () => {
                const ob = {
                    body: {
                        name: document.querySelector("#edit_my_accadm_name").value,
                        email:  document.querySelector("#edit_my_acc_email").value
                    }
                }
                    console.log(id);
                fetch("/api/users/update/" + id,
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