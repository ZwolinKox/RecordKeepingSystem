let patternValue = "";

function setPattern() {
    const pattern1 = document.querySelectorAll('.searchPattern')[0].value;
    const pattern2 = document.querySelectorAll('.searchPattern')[1].value;
    
    if(pattern1 != "")
        patternValue = pattern1;
    else
        patternValue = pattern2;
}

function deleteGroup(name, id) {
    if(confirm("Na pewno chcesz usunąć użytkownika "+name)) {
        fetch('/api/groups/delete/'+id,
        {
            method: "get",
            headers:
            {
                "Content-Type": "application/json",
                "Accept": "application/json",
                "Authorization": "Bearer " + Cookies.get("token")
            },
        }).then(res => {
            if(res.ok)
                location.reload();
            else {
                alert("Wielbłąd");
            }
        })
    }
}

function editGroup(id) {

    const x = "#nname" + id;

    let nname = document.querySelector(x).value;

    const ob = {
        body: {
            name : nname
        }
    }
    
    fetch('/api/groups/update/'+id,
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
        if(res.ok)
            location.reload();
        else {
            alert("Wielbłąd");
        }
    })
    
}

function addGroup() {

    let cname = document.querySelector("#addGroupinp").value;

    const ob = {
        name : cname
    }
    
    fetch("/api/groups",
    {
        method: "put",
        headers:
        {
            "Content-Type": "application/json",
            "Accept": "application/json",
            "Authorization": "Bearer " + Cookies.get("token")
        },
        body: JSON.stringify(ob)
    }).then(res => {
        if(res.ok)
            location.reload();
        else {
            alert("Wielbłąd");
        }
    })
    
}

function addSideGroup() {

    let cname = document.querySelector("#addSideGroup").value;

    const ob = {
        name : cname
    }
    
    fetch("/api/groups",
    {
        method: "put",
        headers:
        {
            "Content-Type": "application/json",
            "Accept": "application/json",
            "Authorization": "Bearer " + Cookies.get("token")
        },
        body: JSON.stringify(ob)
    }).then(res => {
        if(res.ok)
            location.reload();
        else {
            alert("Wielbłąd");
        }
    })
    
}

function pagination(page) {
    let validData = false;

    const ob = {
        name : patternValue
    }

    fetch('/api/groups/search?page='+page,
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
                let table = document.querySelector("#groupTable");

                table.innerHTML = "";
                value.data.forEach(element => {
                    
                    table.innerHTML += `

<tr>

    <td class="td_style_list">${element.name}</td>
    <td class="td_style_list">${element.count}</td>
    <td class="td_style_list">

        <button type="button" onclick="deleteGroup('${element.name}',${element.id})" class="btn btn-danger list-button">Usuń</button>


        <button type="button" class="btn btn-outline-secondary list-button" data-toggle="modal" data-target="#changeGroupName${element.id}">
            Edytuj
        </button>

        <div class="modal fade" id="changeGroupName${element.id}" tabindex="-1" role="dialog" aria-labelledby="changeGroupNameLabel${element.id}" aria-hidden="true">

            <div class="modal-dialog" role="document">

                <div class="modal-content">

                    <div class="modal-header">

                        <h5 class="modal-title" id="changeGroupNameLabel${element.id}">Zmiana nazwy</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>

                    <div class="modal-body">

                        <div id="GroupEditLogs${element.id}"></div>

                        <input type="text" class="form-control mt-2 nname" placeholder="Wprowadź nową nazwę" id="nname${element.id}">

                    </div>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                        <button onclick="editGroup(${element.id})" type="button" class="btn btn-primary">Zapisz</button>
                                                            
                    </div>
                                                        
                </div>

            </div>

        </div>

    </td>

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