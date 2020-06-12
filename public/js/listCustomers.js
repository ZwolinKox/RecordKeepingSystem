let patternValue = "";

function setPattern() {
    const pattern1 = document.querySelectorAll('.searchPattern')[0].value;
    const pattern2 = document.querySelectorAll('.searchPattern')[1].value;
    
    if(pattern1 != "")
        patternValue = pattern1;
    else
        patternValue = pattern2;
}

function pagination(page) {
    let validData = false;

    const ob = {
        name : patternValue,
        email1: patternValue,
        phone1: patternValue 
    }

    fetch('/api/clients/search?page='+page,
        {
            method: "post",
            headers:
            {
                "Content-Type": "application/json",
                "Accept": "application/json",
                "Authorization": "Bearer " + Cookies.get("token")
            },
            body: JSON.stringify(ob)
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
                    
                    if(element.phone1 == "null")
                        element.id = "-";
                    if(element.email1 == "null")
                        element.id = "-";

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
                        <span aria-hidden="true">&laquo;1</span>
                    </a>
                    </li>`;

                    if(value.current_page-1 >= 1)
                        paginationBody += `<li class="page-item"><a onclick="pagination(${value.current_page-1})" href="#" class="page-link">${value.current_page-1}</a></li>`;
                    paginationBody += `<li class="page-item active"><a onclick="pagination(${value.current_page})" href="#" class="page-link">${value.current_page}</a></li>`;
                        
                    if(value.current_page+1 <= value.last_page)
                        paginationBody += `<li class="page-item"><a onclick="pagination(${value.current_page+1})" href="#" class="page-link">${value.current_page+1}</a></li>`;

                    paginationBody += `<li class="page-item">
                    <a class="page-link" onclick="pagination(${value.last_page})" href="#" aria-label="Next">
                        <span aria-hidden="true">${value.last_page}&raquo;</span>
                    </a>
                    </li>`;

                    body.innerHTML = paginationBody;
                });
            }
                
        })
}


document.addEventListener("DOMContentLoaded", () => {
    pagination(1);

    document.querySelectorAll(".search").forEach(element => {
        element.addEventListener('click', () => {
            setPattern();
            pagination(1);
        })
    });
})