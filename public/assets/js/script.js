async function loginUser() {
    try {
        $.ajax({
            url: window.location.origin + '/api/user/login',
            type: 'POST',
            data: {
                email: document.getElementById('exampleInputEmail1').value,
                password: document.getElementById('exampleInputPassword1').value
            },
            success: function(response) {
                if (response.status === 1) {
                    localStorage.setItem('auth_token', response.token);
                    alert(response.message);
                    window.location.href = window.location.origin + '/users-data';
                } else {
                    alert(response.message);
                }
            },
            error: function(error) {
                console.error(error);
                alert(JSON.parse(error.responseText).message);
            }
        });
    } catch (error) {
        console.error('Error during login:', error);
        alert('An error occurred during login. Please try again later.');
    }
}

async function logoutUser() {
    try {
        localStorage.removeItem('auth_token');

        if(localStorage.getItem('auth_token')) {
            throw new Error('Failed to Log Out.');
        }
    } catch (error) {
        console.error('Error during logout:', error);
        alert('An error occurred during logging out. Please try again later.');
    }
}

async function signUp() {
    try {
        $.ajax({
            url: window.location.origin + '/api/user/register',
            type: 'POST',
            data: {
                customer_name: document.getElementById('exampleInputName').value,
                customer_email: document.getElementById('exampleInputEmail1').value,
                customer_address: document.getElementById('exampleInputAddress').value,
                customer_pincode: document.getElementById('customerPincode').value,
                customer_password: document.getElementById('exampleInputPassword1').value
            },
            success: function(response) {
                if (response.status === 1) {
                    localStorage.setItem('auth_token', response.token);
                    alert(response.message);
                    window.location.href = window.location.origin + '/users-data';
                } else {
                    alert(response.message);
                }
            },
            error: function(error) {
                console.error(error);
                alert(JSON.parse(error.responseText).message);
            }
        });
    } catch (error) {
        console.error('Error during sign up:', error);
        alert('An error occurred during sign up. Please try again later.');
    }
}

async function fetchUsers() {
    let flag = document.getElementById('get-users-data-select').value
    $.ajax({
        url: window.location.origin + '/api/get/users/' + flag,
        method: 'GET',
        headers: {
            "Authorization": "Bearer " + localStorage.getItem('auth_token'),
        },
        success: function(response) {
            if (response.status === 1) {
                let users = response.users;
                let userList = $('#userListTableBody');
                userList.empty();

                users.forEach(function(user, index) {
                    let isLastUser = index === users.length - 1;
                    userList.append(`
                    <tr>
                        <th class="text-danger ${isLastUser ? 'border-radius-bottom-left' : ''}" scope="row">${user.id}</th>
                        <td class="text-danger" >${user.name}</td>
                        <td class="text-danger">${user.email}</td>
                        <td class="text-danger ${isLastUser ? 'border-radius-bottom-right' : ''}">${user.status == 1 ? "<i class='fa-solid fa-face-smile-beam text-success'></i>" : "<i class='fa-solid fa-face-dizzy text-warning'></i>"}</td>
                    </tr>`);
                });
            } else {
                $('#userListTableBody').append(`
                <tr class="border-radius-bottom-left border-radius-bottom-right" scope="col-7">
                    <th class="text-danger">No Data Found.</th>
                </tr>`);
            }
        },
        error: function(error) {
            alert('Failed to fetch users: ' + JSON.parse(error.responseText).message + ' Sign In to get users data.');
        }
    });
}

if (window.location.href == window.location.origin + '/users-data') {
    $.ajax({
        url: window.location.origin + '/api/get/users/',
        method: 'GET',
        headers: {
            "Authorization": "Bearer " + localStorage.getItem('auth_token'),
        },
        success: function(response) {
            if (response.status === 1) {
                let users = response.users;
                let userList = $('#userListTableBody');
                userList.empty();
    
                users.forEach(function(user, index) {
                    let isLastUser = index === users.length - 1;
                    userList.append(`
                    <tr>
                        <th class="text-danger ${isLastUser ? 'border-radius-bottom-left' : ''}" scope="row">${user.id}</th>
                        <td class="text-danger" >${user.name}</td>
                        <td class="text-danger">${user.email}</td>
                        <td class="text-danger ${isLastUser ? 'border-radius-bottom-right' : ''}">${user.status == 1 ? "<i class='fa-solid fa-face-smile-beam text-success'></i>" : "<i class='fa-solid fa-face-dizzy text-warning'></i>"}</td>
                    </tr>`);
                });
            } else {
                $('#userListTableBody').append(`
                <tr scope="col-7">
                    <th class="text-danger border-radius-bottom-left border-radius-bottom-right">No Data Found.</th>
                </tr>`);
            }
        },
        error: function(error) {
            alert('Failed to fetch users: ' + JSON.parse(error.responseText).message + ' Sign In to get users data.');
        }
    });
}
