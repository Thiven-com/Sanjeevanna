<?php $page = 'index'; ?>
@extends('layout.mainlayout')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">


    <div style="background:linear-gradient(135deg,#0d6efd,#4f8dfd);padding:35px;border-radius:18px;display:flex;justify-content:space-between;align-items:center;color:#fff;box-shadow:0 10px 30px rgba(13,110,253,.25);margin-top: 100px;
            margin-left: 270px; margin-bottom:-150px; margin-right: 20px;">

        <div>
            <h2 style="margin:0;font-size:32px;font-weight:700;">
                👋 Welcome, Admin
            </h2>

            <p style="margin:10px 0 0;font-size:16px;opacity:.9;">
                Manage your dashboard, monitor enquiries, and keep everything organized in one place.
            </p>
        </div>

        <div
            style="width:90px;height:90px;border-radius:50%;background:rgba(255,255,255,.15);display:flex;align-items:center;justify-content:center;font-size:42px;">
            <i class="fas fa-user"></i>
        </div>

    </div>


    <div class="dashboard-wrapper">
        <div class="row justify-content-center g-4 w-100" style="margin-left: 70px;">

            <div class="col-lg-4 col-md-5 col-sm-6">
                <div class="dashboard-card primary">
                    <div class="card-content">
                        <div>
                            <span class="card-title">Contact Enquiries</span>
                            <h2 class="card-count">{{ $contactCount }}</h2>
                        </div>

                        <div class="card-icon">
                            <i class="ti ti-address-book"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-5 col-sm-6">
                <div class="dashboard-card success">
                    <div class="card-content">
                        <div>
                            <span class="card-title">Service Enquiries</span>
                            <h2 class="card-count">{{ $serviceCount }}</h2>
                        </div>

                        <div class="card-icon">
                            <i class="ti ti-briefcase"></i>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <style>
        /* Wrapper */
        .dashboard-wrapper {
            min-height: 80vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px;
        }

        /* Card */
        .dashboard-card {
            background: #fff;
            border-radius: 18px;
            padding: 28px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .08);
            transition: .3s ease;
            overflow: hidden;
            position: relative;
        }

        .dashboard-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, .12);
        }

        /* Left Border */
        .dashboard-card.primary {
            border-left: 6px solid #0d6efd;
        }

        .dashboard-card.success {
            border-left: 6px solid #198754;
        }

        /* Content */
        .card-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Title */
        .card-title {
            display: block;
            font-size: 15px;
            font-weight: 600;
            color: #6c757d;
            margin-bottom: 8px;
        }

        /* Count */
        .card-count {
            font-size: 38px;
            font-weight: 700;
            color: #212529;
            margin: 0;
        }

        /* Icon */
        .card-icon {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 30px;
            color: #fff;
        }

        .primary .card-icon {
            background: #0d6efd;
        }

        .success .card-icon {
            background: #198754;
        }

        /* Mobile */
        @media(max-width:768px) {
            .dashboard-wrapper {
                min-height: auto;
                padding: 30px 15px;
            }

            .card-count {
                font-size: 30px;
            }

            .card-icon {
                width: 60px;
                height: 60px;
                font-size: 26px;
            }
        }
    </style>
@endsection