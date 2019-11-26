$(document).ready(function() {
    $parent = $("#manage-users");
    const manageUsers = {
        init: () => {
            manageUsers.datatables();
        },
        datatables: () => {
            const url = $('#data-url').data('route');
            $('#table-users').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url
                },
                columns: [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                    { data: 'name', name: 'name' },
                    { data: 'email', name: 'email' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'action', name: 'action', class: 'text-right', orderable: false, searchable: false },
                ],
                language: {
                    paginate: {
                        previous: "<i class='fas fa-angle-left'></i>",
                        next: "<i class='fas fa-angle-right'></i>"
                    }
                }
            });
        }
    }

    if ($parent.length) {
        manageUsers.init();
    }
})