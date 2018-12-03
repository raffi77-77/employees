<script>
    var calculated_table_height = window.innerHeight - 160;
    var employees_datatable = jQuery('#datatable_table').DataTable({
        processing: true,
        serverSide: true,
        "columnDefs": [{
            "defaultContent": "-",
            "targets": "_all"
        }],
        "scrollY":        calculated_table_height +"px",
        "scrollCollapse": true,

        columns: [
                @foreach($table_fields as $field)
            {
                data: '{{ ($field == 'age') ? 'date_of_birth' : $field }}', name: '{{ ($field == 'age') ? 'date_of_birth' : $field }}'
            },
                @endforeach

            {
                data: 'actions', name: 'actions', searchable: false, orderable: false,
            },

        ],
        ajax: "{{ route('employee.getlist') }}",


        initComplete: function () {
            var dataTable = this;
            dataTable.api().columns().every(function () {
                var column = this;
                var filterContainer = jQuery(dataTable).find("thead .column-filters th").get(column.index()); //$(column.footer())
                var filterElement = jQuery(filterContainer).find("select");
                filterElement.on('change', function () {
                    column.search(jQuery(this).val() !== null ? jQuery(this).val() : "").draw();
                });
            });
        },

        "language": {
            "searchPlaceholder": "search...",
        },

        "bSortClasses": false,
        search: {
            "caseInsensitive": false
        },
        responsive: false,
        searchHighlight: true
    });
</script>
