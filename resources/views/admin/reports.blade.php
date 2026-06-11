@extends('layouts.admin')

@section('title', 'Laporan')
@section('page-title', 'Laporan')

@section('content')
@php
    $totalRevenue = \App\Models\Booking::where('payment_status', 'paid')->sum('total_price');
    $monthRevenue = \App\Models\Booking::where('payment_status', 'paid')
        ->whereMonth('created_at', date('m'))
        ->whereYear('created_at', date('Y'))
        ->sum('total_price');
    $totalBookings = \App\Models\Booking::count();
    $completedBookings = \App\Models\Booking::where('status', 'completed')->count();

    $statuses = ['pending', 'confirmed', 'ongoing', 'completed', 'cancelled'];
    $bookingsByStatus = \App\Models\Booking::selectRaw('status, count(*) as total')
        ->groupBy('status')
        ->pluck('total', 'status');

    $popularCars = \App\Models\Car::withCount('bookings')
        ->orderByDesc('bookings_count')
        ->take(5)
        ->get();
@endphp

<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="stat-card bg-blue position-relative">
            <h3>Rp {{ number_format($totalRevenue, 0, ',', '.') }}</h3>
            <p>Total Pendapatan</p>
            <i class="bi bi-cash-stack"></i>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="stat-card bg-green position-relative">
            <h3>Rp {{ number_format($monthRevenue, 0, ',', '.') }}</h3>
            <p>Pendapatan Bulan Ini</p>
            <i class="bi bi-graph-up-arrow"></i>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="stat-card bg-orange position-relative">
            <h3>{{ $totalBookings }}</h3>
            <p>Total Booking</p>
            <i class="bi bi-calendar-check"></i>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="stat-card bg-red position-relative">
            <h3>{{ $completedBookings }}</h3>
            <p>Booking Selesai</p>
            <i class="bi bi-check2-circle"></i>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-lg-6 mb-4">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Booking per Status</h5>
            </div>
            <div class="card-body">
                <table class="table mb-0">
                    <tbody>
                        @foreach($statuses as $status)
                            <tr>
                                <td class="text-capitalize">{{ $status }}</td>
                                <td class="text-end fw-bold">{{ $bookingsByStatus[$status] ?? 0 }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-lg-6 mb-4">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Mobil Terpopuler</h5>
            </div>
            <div class="card-body">
                @if($popularCars->isEmpty())
                    <p class="text-muted mb-0">Belum ada data booking.</p>
                @else
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th>Mobil</th>
                                <th class="text-end">Jumlah Booking</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($popularCars as $car)
                                <tr>
                                    <td>{{ $car->name }}</td>
                                    <td class="text-end fw-bold">{{ $car->bookings_count }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
