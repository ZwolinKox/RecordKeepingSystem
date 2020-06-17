document.addEventListener("DOMContentLoaded", () => {
    

    fetch('/api/orders/statuses/'+getParam(),
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
        let table = document.querySelector("#tableBody");

        table.innerHTML = "";

        res.forEach(element => {
            table.innerHTML += `
            <tr>
                <td class="td_style_list">${element.id}</td>
                <td class="td_style_list">${element.created_by}</td>
                <td class="td_style_list">${element.date}</td>
                <td class="td_style_list"><span class="badge badge-warning">${getStatusName(element.status)}</span></td>
            </tr>
            `
        });
    })
})