@extends('layout.mainlayout')

@section('content')


    <style>
        /* ===========================
                           PAGE HEADER
                        =========================== */
        .page-header-modern {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .page-header-modern h3 {
            font-size: 28px;
            font-weight: 700;
            color: #0d6efd;
            margin: 0;
        }

        .page-header-modern p {
            color: #6c757d;
            font-size: 15px;
            margin-top: 6px;
        }

        /* ===========================
                           CARD
                        =========================== */
        .modern-card {
            background: #fff;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .08);
            overflow: hidden;
        }

        /* ===========================
                           TABLE
                        =========================== */
        .table {
            margin: 0;
        }

        .table thead {
            background: #0d6efd;
        }

        .table thead th {
            color: #fff;
            font-weight: 600;
            font-size: 14px;
            border: none;
            padding: 15px;
            white-space: nowrap;
        }

        .table tbody td {
            padding: 15px;
            vertical-align: middle;
            border-bottom: 1px solid #eef2f7;
            font-size: 14px;
        }

        .table tbody tr {
            transition: .3s;
        }

        .table tbody tr:hover {
            background: #f8fbff;
        }

        /* ===========================
                           NAME
                        =========================== */
        .service-name {
            font-weight: 600;
            color: #212529;
        }

        /* ===========================
                           MESSAGE
                        =========================== */
        .message-box {
            max-width: 250px;
            white-space: normal;
            line-height: 1.6;
            color: #555;
        }

        /* ===========================
                           ACTION BUTTONS
                        =========================== */
        .action-btn {
            width: 38px;
            height: 38px;
            border: none;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: .3s;
        }

        .btn-delete {
            background: #ffe5e5;
            color: #dc3545;
        }

        .btn-delete:hover {
            background: #dc3545;
            color: #fff;
        }

        /* ===========================
                           BADGES
                        =========================== */
        .badge-gender {
            display: inline-block;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            background: #e7f1ff;
            color: #0d6efd;
        }

        .badge-age {
            display: inline-block;
            padding: 5px 12px;
            border-radius: 20px;
            background: #eef9ef;
            color: #198754;
            font-weight: 600;
        }

        /* ===========================
                           EMPTY STATE
                        =========================== */
        .table tbody tr td h5 {
            color: #6c757d;
            font-weight: 600;
        }

        /* ===========================
                           RESPONSIVE
                        =========================== */
        .table-responsive {
            border-radius: 12px;
        }

        @media(max-width:992px) {

            .page-header-modern {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }

            .table {
                min-width: 1200px;
            }
        }
    </style>
    <div class="page-wrapper">
        <div class="content">

            <div class="page-header-modern">
                <h3>Service Enquiries</h3>
                <p class="mb-0">
                    Manage website Service form submissions
                </p>
            </div>

            <div class="modern-card">

                <div class="table-responsive">

                    <table class="table align-middle mb-0">

                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Full Name</th>
                                <th>Contact</th>
                                <th>Email</th>
                                <th>Service Name</th>
                                <th>Property Type</th>
                                <th>Property Visit Date</th>
                                <th>Project Address</th>
                                <th>Message</th>
                                <th>Created</th>
                                <th width="100">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse($services as $service)

                                <tr>

                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $service->full_name }}</td>
                                    <td>{{ $service->contact }}</td>
                                    <td>{{ $service->email }}</td>
                                    <td>{{ $service->service }}</td>
                                    <td>{{ $service->property_type }}</td>
                                    <td>{{ $service->preferred_date }}</td>
                                    <td>{{ $service->address }}</td>

                                    <td>
                                        <div class="message-box">
                                            {{ \Illuminate\Support\Str::limit($service->message, 100) }}
                                        </div>
                                    </td>

                                    <td>{{ $service->created_at->format('d M Y') }}</td>

                                    <td>


                                        <form action="{{ route('service.destroy', $service->id) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="action-btn btn-delete"
                                                onclick="return confirm('Are you sure you want to delete this enquiry?')">
                                                <i class="ti ti-trash"></i>
                                            </button>
                                        </form>

                                        <!-- <button class="action-btn btn-delete delete-btn" data-id="{{ $service->id }}">
                                                                                    <i class="ti ti-trash"></i>
                                                                                </button> -->

                                    </td>

                                </tr>

                            @empty

                                <tr>
                                    <td colspan="6" class="text-center py-5">
                                        <h5>No Enquiries Found</h5>
                                    </td>
                                </tr>

                            @endforelse

                        </tbody>

                    </table>
                </div>



            </div>

        </div>
    </div>

@endsection