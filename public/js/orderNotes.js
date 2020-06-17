document.addEventListener("DOMContentLoaded", () => {
    
    fetch('/api/orders/notes/'+getParam(),
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
        console.log(res);

        let table = document.querySelector("#tableBody");

        table.innerHTML = "";

        res.forEach(element => {
            table.innerHTML += `
            <tr>
                <td class="td_style_list">${element.user}</td>
                <td class="td_style_list">${element.created_at}</td>
                <td class="td_style_list">${element.text}</td>
            </tr>
            `
        });
    })
})