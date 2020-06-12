
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
                    let paginationBody = `<li class="page-item">
                    <a class="page-link" onclick="pagination(1)" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                    </li>`;


                    if(value.current_page-1 >= 1)
                        paginationBody += `<li class="page-item"><a onclick="pagination(${value.current_page-1})" href="#" class="page-link">...${value.current_page-1}</a></li>`;
                    paginationBody += `<li class="page-item active"><a onclick="pagination(${value.current_page})" href="#" class="page-link">${value.current_page}</a></li>`;
                        
                    if(value.current_page+1 <= value.last_page)
                        paginationBody += `<li class="page-item"><a onclick="pagination(${value.current_page+1})" href="#" class="page-link">${value.current_page+1}...</a></li>`;

                    paginationBody += `<li class="page-item">
                    <a class="page-link" onclick="pagination(${value.last_page})" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                    </li>`;
                    body.innerHTML = paginationBody;
                });
            }
                
        })
}



document.addEventListener("DOMContentLoaded", () => {
    pagination(1);
})