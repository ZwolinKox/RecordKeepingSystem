
let patternValue = "";
let admin = -1;

function setAdmin(value) {
    admin = value;
    pagination(1);
}

function deleteEmployee(name, id) {
    // Na chwilę obecną usuwanie nie działa, bo klucze obce blokują operację. Niedługo zastosujemy cascade/soft delete
    if(confirm("Na pewno chcesz usunąć klienta "+name)) {
        fetch('/api/users/delete/'+id,
        {
            method: "get",
            headers:
            {
                "Content-Type": "application/json",
                "Accept": "application/json",
                "Authorization": "Bearer " + Cookies.get("token")
            },
        }).then(res => {
            if(res.ok) {
                location.reload();
            } else {  

            }
        })
    }
}

function fillTable(table, element) {
    if(admin === 1 && element.admin !== 1)
        return;
    else if (admin === 0 && element.admin !== 0)
        return;

    if(element.admin)
        element.admin = "Tak";
    else
        element.admin = "Nie";

    table.innerHTML += `
                    <tr>

                        <td class="td_style_list">${element.name}</td>
                        <td class="td_style_list">${element.email}</td>
                        <td class="td_style_list">${element.admin}</td>
                        <td class="td_style_list">

                            <button type="button" class="btn btn-danger list-button" onclick="deleteEmployee('${element.name}',${element.id})">Usuń</button>
                            <button type="button" class="btn btn-outline-secondary list-button"
                            onclick="window.location.href='/edit_acc/${element.id}'">Edytuj</button>

                        </td>

                    </tr>
                    `;
}

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
        email: patternValue,
    }

    fetch('/api/users/search?page='+page,
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
        .then(res => { 
            if(res.ok) {
                $( "#loading" ).fadeOut( "slow", () => {
                    $( "#main" ).fadeIn( "slow", function() {
                    });
                });

                validData = true;
                return res.json();               
            }
                
        }).then(res => {
            
            if(validData) {
                value = JSON.parse(JSON.stringify(res));
                let table = document.querySelector("#userTable");

                table.innerHTML = "";

                value.data.forEach(element => {
                    

                    //Rozwiązanie dziwne, no ale ciężko o inne w pętli forEach
                    if(admin == 1 && element.admin == 1) 
                        fillTable(table, element);
                    else if(admin == 0 && element.admin == 0)
                        fillTable(table, element);
                    else 
                        fillTable(table, element);

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