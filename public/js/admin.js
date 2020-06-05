document.addEventListener("DOMContentLoaded", () => {
    const userTypes = document.querySelectorAll(".userType");

    if(Cookies.get("admin") == null || Cookies.get("admin") == 0) {
        userTypes.forEach(element => {
            element.innerHTML = "Użytkownik"
        });

        const admins = document.querySelectorAll(".admin");

        admins.forEach(element => {
            $(element).hide();
        });
    } else {
        userTypes.forEach(element => {
            element.innerHTML = "Administrator";
        });

    }
})