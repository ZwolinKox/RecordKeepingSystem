document.addEventListener("DOMContentLoaded", () => {

    document.querySelector("#login").addEventListener('click', () => {
        const ob = {
            email: document.querySelector("#email").value,
            name: document.querySelector("#name").value
        }

        fetch("users/passreset",
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
                                Wysłano email z nowy hasłem na email ${ob.email}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>`;
                } else {
                    document.querySelector("#logs").innerHTML =
                        `<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                Nie udało się zresetować hasła
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>`;
                }
            })
    })

})