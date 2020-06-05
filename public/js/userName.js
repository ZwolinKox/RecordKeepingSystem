document.addEventListener("DOMContentLoaded", () => {
    const userNames = document.querySelectorAll(".userName");
    let userName = "";



    if (Cookies.get('token') != null) {
        fetch("/api/user",
            {
                method: "get",
                headers:
                {
                    "Content-Type": "application/json",
                    "Accept": "application/json",
                    "Authorization": "Bearer " + Cookies.get("token")
                },

            }).then(res => res.json())
            .then(res => {
                const name = JSON.parse(JSON.stringify(res)).name;

                Cookies.set("userName", name);
                Cookies.set("admin", JSON.parse(JSON.stringify(res)).admin);

                if (name !== undefined)
                    userName = name;

                userNames.forEach(element => {
                    $(element).hide();
                    element.innerHTML = userName;
                    $(element).fadeIn("slow", function () {
                    });
                });
            })
    }


})