
document.addEventListener("DOMContentLoaded", () => {

  let validData = false;

  fetch("/api/groups/light",
    {
      method: "get",
      headers:
      {
        "Content-Type": "application/json",
        "Accept": "application/json",
        "Authorization": "Bearer " + Cookies.get("token")
      },
    })
    .then(res => {

      console.log(res);

      if (res.ok) {
        $("#loading").fadeOut("slow", () => {
          $("#main").fadeIn("slow", function () {
          });
        });

        validData = true;
        return res.json();
      }

    }).then(res => {
      if (validData) {
        value = JSON.parse(JSON.stringify(res));
        console.log(value);

        let groupSelect = document.querySelector("#nclient_group");
        groupSelect.innerHTML = '<option value="0">Brak grupy</option>';

        value.forEach(element => {
          console.log(element);
          groupSelect.innerHTML += `<option value="${element.id}">${element.name}</option>`
        });

      }

    })

  document.querySelector("#nclient_sbutton").addEventListener("click", () => {
    //////////////////ZMIENIŁEM ID W CLIENT_INFO
    //Dane logowania
    const ob = {
      private: !document.querySelector("#nclient_fac").checked,
      name: document.querySelector("#nclient_name").value,
      phone1: document.querySelector("#nclient_tnum").value,
      phone2: document.querySelector("#nclient_atnum").value,
      email1: document.querySelector("#nclient_dea").value,
      email2: document.querySelector("#nclient_aea").value,
      send_sms: document.querySelector("#nclient_sms").checked,
      send_email: document.querySelector("#nclient_email").checked,
      gruop: document.querySelector("#nclient_group").value
    }
    // funkcja sprawdzajaca poprawnosc emaili
    function validateEmail(email) {
      const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(email);
    }
    // funkcja sprawdzajaca poprawvnosc numerow telefonu
    function validateNumber(phone) {
      const re = /^\d{9}$/;
      return re.test(phone);
    }
    if (ob.name != "") {
      if ((ob.send_sms == 1 && ob.phone1 != "") || ob.send_sms == 0) {
        if ((ob.send_email == 1 && ob.email1 != "") || ob.send_email == 0) {
          if (validateEmail(ob.email1) == 1 || ob.email1 == "") {
            if (validateEmail(ob.email2) == 1 || ob.email2 == "") {
              if (validateNumber(ob.phone1) == 1 || ob.phone1 == "") {
                if (validateNumber(ob.phone2) == 1 || ob.phone2 == "") {
                  fetch("/api/clients",
                    {
                      method: "put",
                      headers:
                      {
                        "Content-Type": "application/json",
                        "Accept": "application/json",
                        "Authorization": "Bearer " + Cookies.get("token")
                      },
                      body: JSON.stringify(ob)
                    })

                    .then(res => {
                      if (res.ok) {
                        return res.json(),
                          /*document.querySelector("#error").innerHTML +=
                          `<div class="alert alert-success alert-dismissible fade show" role="alert">
                            Udało sie utworzyć klienta.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>`;*/

                          $("#main").fadeOut("slow", () => {
                            $("#successCreateClient").fadeIn("slow", () => {
                            })
                          })
                      }
                      else {
                        document.querySelector("#error").innerHTML +=
                          `<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Uwaga!</strong> Nie udało sie utworzyć klienta.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>`;
                      }
                    })

                    .then(res => {
                      console.log(res);
                    })
                  /*.catch(res =>
                  {
                    console.log("nie dzialo")
                      document.querySelector("#error").innerHTML+=
                      `<div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <strong>Uwaga!</strong> Nie udało sie utworzyć klienta.
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>`;

                  })
                  */
                }
                else {
                  document.querySelector("#error").innerHTML +=
                    `<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Uwaga!</strong> Podałeś nieprawidłowy alternatywny adres telefonu.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  </div>`;
                }
              }
              else {
                document.querySelector("#error").innerHTML +=
                  `<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Uwaga!</strong> Podałeś nieprawidłowy adres telefonu.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  </div>`;
              }
            }
            else {
              document.querySelector("#error").innerHTML +=
                `<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Uwaga!</strong> Podałeś nieprawidłowy alternatywny adres email.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>`;
            }
          }
          else {
            document.querySelector("#error").innerHTML +=
              `<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Uwaga!</strong> Podałeś nieprawidłowy adres e-mail.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>`;
          }
        }
        else {
          document.querySelector("#error").innerHTML +=
            `<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Uwaga!</strong> Musisz podać adres email klienta.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>`;
        }
      }
      else {
        document.querySelector("#error").innerHTML +=
          `<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Uwaga!</strong> Musisz podać numer telefonu  klienta.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>`;
      }
    }
    else {
      document.querySelector("#error").innerHTML +=
        `<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Uwaga!</strong> Musisz podać imię i nazwisko klienta.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>`;
    }

  })

})


