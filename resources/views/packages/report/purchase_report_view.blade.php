<!doctype html>
<html lang="en">
  <head>
    <title>Purchase Report</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .title{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        @media print {
            .btn{
                display: none;
            }
        }
    </style>
</head>
  <body>
      <div class="container-fluid">
            <div class="col-md-12">
                <div>
                    @include('reports_header')
                    <div class="title">Purchase Report</div>
                    <div style="text-align: right;color: white;">
                        <a onclick="print_w()" class="btn btn-primary">Print</a>
                    </div>
                </div>

            </div>
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Member Name</th>
                            <th>Package Name</th>
                            <th>Expired Date</th>
                            <th>Amount</th>
                            <th>Coupon Amt</th>
                            <th>Gross Amount</th>
                            <th>Pay Amount</th>
                            <th>Due Amount</th>
                            <th>Status</th>
                            <th>Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($member_details as $key => $purchase)
                            @php
                                if ($purchase->status == 3) {
                                    $status = 'Full Paid';
                                } elseif ($purchase->status == 2) {
                                    $status = 'Due';
                                } else {
                                    $status = 'Pending';
                                }
                            @endphp
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$purchase->mem_name}}</td>
                                <td>{{$purchase->pack_name}}</td>
                                <td>{{$purchase->expired_date}}</td>
                                <td>{{$purchase->amount}}</td>
                                <td>{{$purchase->coupon_amount}}</td>
                                <td>{{$purchase->gross_amount}}</td>
                                <td>{{$purchase->pay_amount}}</td>
                                <td>{{$purchase->due_amount}}</td>
                                <td>{{$status}}</td>
                                <td>{{$purchase->created_at}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
      </div>



    <script type="text/javascript">
        function print_w() {
            console.log("print");
            window.print();
        }
        setTimeout(() => {
            window.stop();
        }, 500);
    </script>
</body>
</html>
