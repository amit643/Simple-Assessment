<script type="text/javascript">
    $(document).ready(function() {
        var table = $('.user-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('user.get') }}",

            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'email',
                    name: 'email'
                },

                {
                    data: 'action',
                    name: 'action',
                    orderable: true,
                    searchable: true
                },
            ]
        });

    });
</script>
