@extends('layouts.app')

@section('title', 'Tentang Kami - Prasetya Rent Car')

@section('content')
<section class="bg-primary text-white py-5">
    <div class="container text-center">
        <h1 class="fw-bold mb-2">Tentang Kami</h1>
        <p class="mb-0 text-white-50">Mengenal lebih dekat Prasetya Rent Car</p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-6">
                <h2 class="fw-bold text-primary mb-3">Layanan Rental Mobil Terpercaya</h2>
                <p>
                    Prasetya Rent Car adalah penyedia jasa rental mobil yang berkomitmen
                    memberikan layanan terbaik dengan armada lengkap, harga terjangkau, dan
                    pelayanan profesional. Kami melayani kebutuhan transportasi untuk keluarga,
                    bisnis, maupun perjalanan wisata.
                </p>
                <p>
                    Dengan pilihan kendaraan yang terawat serta opsi sopir berpengalaman, kami
                    siap membuat perjalanan Anda nyaman dan aman.
                </p>
            </div>
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6">
                        <div class="card text-center p-4 h-100">
                            <i class="bi bi-car-front-fill text-warning fs-1"></i>
                            <h5 class="mt-2 mb-0">Armada Lengkap</h5>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card text-center p-4 h-100">
                            <i class="bi bi-cash-coin text-warning fs-1"></i>
                            <h5 class="mt-2 mb-0">Harga Terjangkau</h5>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card text-center p-4 h-100">
                            <i class="bi bi-person-badge-fill text-warning fs-1"></i>
                            <h5 class="mt-2 mb-0">Sopir Profesional</h5>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card text-center p-4 h-100">
                            <i class="bi bi-headset text-warning fs-1"></i>
                            <h5 class="mt-2 mb-0">Layanan 24 Jam</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-4">
            <div class="col-md-6">
                <div class="card h-100 p-4">
                    <h4 class="text-primary"><i class="bi bi-bullseye"></i> Visi</h4>
                    <p class="mb-0">
                        Menjadi penyedia layanan rental mobil pilihan utama yang mengutamakan
                        kenyamanan, keamanan, dan kepuasan pelanggan.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100 p-4">
                    <h4 class="text-primary"><i class="bi bi-flag-fill"></i> Misi</h4>
                    <ul class="mb-0">
                        <li>Menyediakan armada yang terawat dan siap pakai.</li>
                        <li>Memberikan harga yang transparan dan kompetitif.</li>
                        <li>Melayani pelanggan dengan ramah dan profesional.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
