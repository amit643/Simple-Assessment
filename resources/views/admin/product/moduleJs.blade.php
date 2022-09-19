<script type="text/javascript">
    $(document).ready(function() {
        var table = $('.product-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('product.get') }}",

            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'author',
                    name: 'author'
                },
                {
                    data: 'publisher',
                    name: 'publisher'
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
