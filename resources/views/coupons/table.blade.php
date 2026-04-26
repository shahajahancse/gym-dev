<style>
    .pagination {
        justify-content: flex-end;
    }

    .dataTables_filter {
        text-align: -webkit-right;
    }

    .dataTables_filter label {
        display: flex;
        width: fit-content;
    }
</style>


<div class="table-responsive">
    <!-- Date Range Filter Form -->
    <div class="form-inline mb-3">
        <label for="from_date" class="mr-2">Date Range filter:</label>
        <input id="daterange" class="form-control" type="text" name="daterange" value="">
    </div>
    <table class="table" id="purchasePackages-table">
        <thead>
            <tr>
                <th>SL</th>
                <th>Title</th>
                <th>Code</th>
                <th>Amount</th>
                <th>Expire Date</th>
                <th>Type</th>
                <th>Remark</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($coupons as $key => $value)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $value->title }}</td>
                    <td>{{ $value->coupon_code }}</td>
                    <td>{{ $value->amount }}</td>
                    <td>{{ date('Y-m-d', strtotime($value->expire_date)) }}</td>
                    <td>
                        @if ($value->type == 1)
                            <span class="badge badge-danger">Fixed</span>
                        @else
                            <span class="badge badge-success">Percent</span>
                        @endif
                    </td>
                    <td>{{ $value->note }}</td>
                    <td>{{ date('Y-m-d', strtotime($value->created_at)) }}</td>
                    <td>
                        <div class='btn-group'>
                            @if (if_can('purchase-package-edit'))
                            <a href="{{ route('coupons.edit', [$value->id]) }}"
                                class='btn btn-outline-primary btn-xs'>
                                <i class="im im-icon-Pen" data-toggle="tooltip" data-placement="top" title="Edit"></i>
                            </a>
                            @endif

                            @if (if_can('purchase-package-delete'))
                            {!! Form::open(['route' => ['coupons.destroy', $value->id], 'method' => 'delete']) !!}
                                {!! Form::button('<i class="im im-icon-Remove" data-toggle="tooltip" data-placement="top" title="Delete"></i>', [
                                    'type' => 'submit',
                                    'class' => 'btn btn-outline-danger btn-xs',
                                    'onclick' => "return confirm('Are you sure?')",
                                ]) !!}
                            {!! Form::close() !!}
                            @endif
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@section('footer_scripts')
    <!-- Datatables -->
    <script src="{{ asset('vendors/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables/js/dataTables.bootstrap4.min.js') }}"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> --}}
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>

    <!-- Include Moment.js -->
    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>

    <!-- Include Date Range Picker -->
    <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css">

    <script>
        $(function() {
            let table = $('.table').DataTable({
            searching: true,
            paging: true,
            lengthChange: true,
            pageLength: 10,
            info: true,
            responsive: true,
            dom: 'lBfrtip',
            buttons: [
                'copy', 'excel', 'pdf', 'print'
            ]
        });
        table.search('').draw();
            // Date range vars
            minDateFilter = "";
            maxDateFilter = "";
            $("#daterange").daterangepicker();
            $("#daterange").on("apply.daterangepicker", function(ev, picker) {
                minDateFilter = Date.parse(picker.startDate);
                maxDateFilter = Date.parse(picker.endDate);

                $.fn.dataTable.ext.search.push(function(settings, data, dataIndex) {
                    var date = Date.parse(data[11]);
                    console.log(date);
                    if (
                        (isNaN(minDateFilter) && isNaN(maxDateFilter)) ||
                        (isNaN(minDateFilter) && date <= maxDateFilter) ||
                        (minDateFilter <= date && isNaN(maxDateFilter)) ||
                        (minDateFilter <= date && date <= maxDateFilter)
                    ) {
                        return true;
                    }
                    return false;
                });
                table.draw();
            });
        });
    </script>
@endsection
