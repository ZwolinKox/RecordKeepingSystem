document.addEventListener("DOMContentLoaded", () => {

    document.querySelector("#saveNewPassword").addEventListener('click', () => {
        const oldPassword = document.querySelector('#edit_my_acc_oldPassword').value;
        const password = document.querySelector('#edit_my_acc_newPassword').value;
        const repeatPassword = document.querySelector('#edit_my_acc_repeatPassword').value;

        console.log(password);
        console.log(repeatPassword);

        const ob = {
            password : password,
            oldPassword : oldPassword
        }

        if(password != repeatPassword) {
            document.querySelector("#passwordLogs").innerHTML =
                `<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Hasła się nie zgadzają!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>`;
            return;
        }

        fetch("/api/users/changePassword",
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
            if(res.ok) {
                document.querySelector("#passwordLogs").innerHTML =
                `<div class="alert alert-success alert-dismissible fade show" role="alert">
                Hasło zostało zmienione
                </div>`;
            } else {
                document.querySelector("#passwordLogs").innerHTML =
                `<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Nie udało się zapisać hasła
                </div>`;
            }
        })

    })
})