
function pagination(page) {
    let validData = false;

    fetch('/api/clients?page='+page,
        {
            method: "get",
            headers:
            {
                "Content-Type": "application/json",
                "Accept": "application/json",
                "Authorization": "Bearer " + Cookies.get("token")
            },
        })
        .then(res => { console.log(res);
            if(res.ok) {
                $( "#loading" ).fadeOut( "slow", () => {
                    $( "#main" ).fadeIn( "slow", function() {
                    });
                });

                validData = true;
                return res.json();               
            }
                
        }).then(res => {
            console.log(res);
            if(validData) {
                value = JSON.parse(JSON.stringify(res));
                let table = document.querySelector("#customerTable");

                table.innerHTML = "";
                value.data.forEach(element => {
                    
                    table.innerHTML += `
                    <tr>

                        <td class="td_style_list"><a href="client_info/${element.id}" class="link-list-info">${element.name}</a></td>
                        <td class="td_style_list">${element.phone1}</td>
                        <td class="td_style_list">${element.email1}</td>

                    </tr>
                    `

                });

                let paginationBodys = document.querySelectorAll(".paginationBody");

                paginationBodys.forEach(body => {
                    body.innerHTML = "";
                    for(let i = 1; i <= value.last_page; i++) {

                        if(i != value.current_page)
                            body.innerHTML += `<li class="page-item"><a onclick="pagination(${i})" href="#" class="page-link">${i}</a></li>`;
                        else
                            body.innerHTML += `<li class="page-item active"><a onclick="pagination(${i})" href="#" class="page-link">${i}</a></li>`;
                    }
                });
            }
                
        })
}



document.addEventListener("DOMContentLoaded", () => {
    pagination(1);
})