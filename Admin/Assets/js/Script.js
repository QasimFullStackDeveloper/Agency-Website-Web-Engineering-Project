$(document).ready(function () {
    $(document).on('DOMNodeInserted', '.sidelink', function () {
        const navLinks = $('.side-link');

        function setActiveLink(clickedLink) {
            navLinks.removeClass('active');
            if (clickedLink) {
                $(clickedLink).addClass('active');
            }
        }

        navLinks.each(function () {
            $(this).on('click', function () {
                setActiveLink(this);
            });
        });

        const currentPath = window.location.pathname;
        let activeLinkFound = false;

        navLinks.each(function () {
            if ($(this).attr('href') === currentPath) {
                setActiveLink(this);
                activeLinkFound = true;
            }
        });

        if (!activeLinkFound) {
            setActiveLink(navLinks.first());
        }
    });
});

$(document).ready(function () {
    $('#SideBar').load('/Admin/Assets/Pages/Sidebar.html');
});

/*          Added By Qasim Testing        */

// Load Users into the Table
// function loadUsers() {
//     $.ajax({
//         url: '/Admin/userApi.php',
//         type: 'GET',
//         data: { action: 'fetch' },
//         success: function (response) {
//             const users = JSON.parse(response);
//             const userTableBody = $('#userTableBody');
//             userTableBody.empty();

//             users.forEach((user) => {
//                 const userRow = `
//             <tr>
//               <td>${user.user_id}</td>
//               <td><img src="${user.image}" alt="User Image" class="user-img" /></td>
//               <td>${user.name}</td>
//               <td>${user.email}</td>
//               <td>${user.is_active ? 'Yes' : 'No'}</td>
//               <td>${user.is_deleted ? 'Yes' : 'No'}</td>
//               <td>
//                 <button class="btn btn-warning btn-sm edit-btn" data-id="${user.user_id}" data-name="${user.name}" data-active="${user.is_active}" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button>
//                 <button class="btn btn-danger btn-sm delete-btn" data-id="${user.user_id}" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button>
//               </td>
//               <td>${user.date}</td>
//             </tr>
//           `;
//                 userTableBody.append(userRow);
//             });
//         },
//     });
// }

// Edit User
// $('#editForm').on('submit', function (e) {
//     e.preventDefault();
//     const userId = $('#editUserId').val();
//     const userName = $('#editUserName').val();
//     const isActive = $('#editIsActive').val();

//     $.ajax({
//         url: '/Admin/userApi.php',
//         type: 'POST',
//         data: { action: 'edit', user_id: userId, name: userName, is_active: isActive },
//         success: function (response) {
//             $('#editModal').modal('hide');
//             loadUsers();
//         },
//     });
// });

// Open Edit Modal with Data
// $(document).on('click', '.edit-btn', function () {
//     const userId = $(this).data('id');
//     const userName = $(this).data('name');
//     const isActive = $(this).data('active');

//     $('#editUserId').val(userId);
//     $('#editUserName').val(userName);
//     $('#editIsActive').val(isActive);
// });

// Delete User
// $('#confirmDeleteButton').on('click', function () {
//     const userId = $('#deleteUserId').val();

//     $.ajax({
//         url: '/Admin/userApi.php',
//         type: 'POST',
//         data: { action: 'delete', user_id: userId },
//         success: function (response) {
//             $('#deleteModal').modal('hide');
//             loadUsers();
//         },
//     });
// });

// Open Delete Modal with Data
// $(document).on('click', '.delete-btn', function () {
//     const userId = $(this).data('id');
//     $('#deleteUserId').val(userId);
// });

// Initialize
// $(document).ready(function () {
//     loadUsers();
// });