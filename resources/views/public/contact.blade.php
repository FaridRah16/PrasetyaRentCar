@extends('layouts.app')

@section('title', 'Kontak - Prasetya Rent Car')

@section('content')
<section class="bg-primary text-white py-5">
    <div class="container text-center">
        <h1 class="fw-bold mb-2">Hubungi Kami</h1>
        <p class="mb-0 text-white-50">Kami siap membantu kebutuhan rental mobil Anda</p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-5">
                <h3 class="fw-bold text-primary mb-3">Informasi Kontak</h3>
                <ul class="list-unstyled">
                    <li class="mb-3">
                        <i class="bi bi-geo-alt-fill text-warning fs-5"></i>
                        <span class="ms-2">Jakarta, Indonesia</span>
                    </li>
                    <li class="mb-3">
                        <i class="bi bi-telephone-fill text-warning fs-5"></i>
                        <a href="tel:+628123456789" class="ms-2 text-decoration-none text-dark">+62 812-3456-789</a>
                    </li>
                    <li class="mb-3">
                        <i class="bi bi-envelope-fill text-warning fs-5"></i>
                        <a href="mailto:info@prasetyarentcar.com" class="ms-2 text-decoration-none text-dark">info@prasetyarentcar.com</a>
                    </li>
                    <li class="mb-3">
                        <i class="bi bi-clock-fill text-warning fs-5"></i>
                        <span class="ms-2">Setiap hari, 08.00 - 22.00 WIB</span>
                    </li>
                    <li class="mb-3">
                        <i class="bi bi-whatsapp text-warning fs-5"></i>
                        <a href="https://wa.me/628123456789" target="_blank" rel="noopener" class="ms-2 text-decoration-none text-dark">Chat via WhatsApp</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-7">
                <div class="card p-4">
                    <h3 class="fw-bold text-primary mb-3">Kirim Pesan</h3>
                    <p class="text-muted">
                        Punya pertanyaan? Hubungi kami melalui telepon, email, atau WhatsApp di
                        samping. Tim kami akan dengan senang hati membantu Anda.
                    </p>
                    <a href="https://wa.me/628123456789" target="_blank" rel="noopener" class="btn btn-warning">
                        <i class="bi bi-whatsapp"></i> Hubungi via WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
