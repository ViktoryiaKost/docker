
const addUserBtn= document.getElementById("add-user");
const content= document.getElementById("content");
let addUserForm;
const createUser = () => {
    fetch('/users/new', )
        .then(function (response) {
            return response.text();
        })
        .then(function (data) {

            content.innerHTML = data;
            addUserForm = document.getElementById("form");
            addUserForm.addEventListener("submit", e=>submitForm(e));
        });
}

const submitForm = (e) => {
    e.preventDefault();
    const formData = new FormData(addUserForm);

    fetch('/users/create', {method: 'POST',
        body: formData})
        .then(function (response) {
            return response.text();
        })
        .then(function (data) {

            content.innerHTML = data;
        });
}


addUserBtn.addEventListener("click", createUser);


