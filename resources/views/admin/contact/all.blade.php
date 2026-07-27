@extends('layout.mainlayout')

@section('content')


    <style>
        /* ===============================
       CONTACT ENQUIRIES PAGE
    =================================*/

        .page-header-modern {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 1px solid #edf2f7;
        }

        .page-header-modern h3 {
            margin: 0;
            font-size: 28px;
            font-weight: 700;
            color: #0d6efd;
        }

        .page-header-modern p {
            margin: 6px 0 0;
            color: #6c757d;
            font-size: 15px;
        }

        /* Card */

        .modern-card {
            background: #fff;
            border-radius: 16px;
            padding: 20px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, .06);
        }

        /* Table */

        .table {
            margin: 0;
            border-collapse: separate;
            border-spacing: 0;
        }

        .table thead th {
            background: #0d6efd;
            color: #fff;
            font-weight: 600;
            font-size: 14px;
            padding: 16px;
            border: none;
            white-space: nowrap;
        }

        .table thead th:first-child {
            border-radius: 10px 0 0 10px;
        }

        .table thead th:last-child {
            border-radius: 0 10px 10px 0;
        }

        .table tbody td {
            padding: 16px;
            border-bottom: 1px solid #edf2f7;
            vertical-align: middle;
            font-size: 14px;
        }

        .table tbody tr {
            transition: .3s;
        }

        .table tbody tr:hover {
            background: #f8fbff;
        }

        /* Serial Number */

        .table tbody td:first-child {
            font-weight: 600;
            color: #0d6efd;
        }

        /* Name */

        .contact-name {
            font-weight: 600;
            color: #212529;
        }

        /* Email */

        .table tbody td:nth-child(3) {
            color: #0d6efd;
            font-weight: 500;
        }

        /* Subject */

        .table tbody td:nth-child(4) {
            font-weight: 600;
            color: #495057;
        }

        /* Message */

        .message-box {
            max-width: 320px;
            line-height: 1.6;
            color: #6c757d;
            word-break: break-word;
        }

        /* Delete Button */

        .action-btn {
            width: 40px;
            height: 40px;
            border: none;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: .3s;
        }

        .btn-delete {
            background: #ffe5e8;
            color: #dc3545;
        }

        .btn-delete:hover {
            background: #dc3545;
            color: #fff;
            transform: scale(1.08);
        }

        /* Empty Data */

        .table tbody h5 {
            color: #6c757d;
            margin: 20px 0;
        }

        /* Scroll */

        .table-responsive {
            border-radius: 12px;
        }

        /* Responsive */

        @media (max-width:992px) {

            .table {
                min-width: 900px;
            }

            .page-header-modern {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }
        }
    </style>


    <div class="page-wrapper">
        <div class="content">

            <div class="page-header-modern">
                <h3>Contact Enquiries</h3>
                <p class="mb-0">
                    Manage website contact form submissions
                </p>
            </div>

            <div class="modern-card">

                <div class="table-responsive">

                    <table class="table align-middle mb-0">

                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>User Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th width="100">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse($contacts as $contact)

                                <tr>

                                    <td>{{ $loop->iteration }}</td>

                                    <td>
                                        {{ $contact->username }}
                                    </td>

                                    <td>{{ $contact->email ?? '-' }}</td>

                                    <td>{{ $contact->subject }}</td>

                                    <td>
                                        <div class="message-box">
                                            {{ \Illuminate\Support\Str::limit($contact->message, 100) }}
                                        </div>
                                    </td>

                                    <td>


                                        <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="action-btn btn-delete"
                                                onclick="return confirm('Are you sure you want to delete this contact?')">
                                                <i class="ti ti-trash"></i>
                                            </button>
                                        </form>
                                        <!-- 
                                                        <button class="action-btn btn-delete delete-btn" data-id="{{ $contact->id }}">
                                                            <i class="ti ti-trash"></i>
                                                        </button> -->

                                    </td>

                                </tr>

                            @empty

                                <tr>
                                    <td colspan="6" class="text-center py-5">
                                        <h5>No  Found</h5>
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