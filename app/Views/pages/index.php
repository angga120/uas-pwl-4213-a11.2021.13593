<?= $this->extend('layout/layout'); ?>

<?= $this->section('content'); ?>
<div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#header-carousel" data-slide-to="0" class="active"><span class="small-circle"></span></li>
        <li data-target="#header-carousel" data-slide-to="1"><span class="small-circle"></span></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="single-slide-item slide1">
                <div class="container">
                    <div class="welcome-hero-content">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="single-welcome-hero">
                                    <div class="welcome-hero-txt">
                                        <h2>xiaomi Redmi Note 9</h2>
                                        <li>Nama: Xiaomi Redmi Note 9</li>
                                        <li>Berat: 199 gram (g)</li>
                                        <li>Material: Kaca depan Gorilla Glass 5, bingkai plastik</li>
                                        <li>Jenis dan Ukuran Layar: IPS 6,53 inci (rasio layar ke bodi ~83,5%)</li>
                                        <li>Resolusi Layar: 1.080 x 2.340 piksel (~395 piksel per inci)</li>
                                        <li>Chipset: Mediatek Helio G85 (12 nm)</li>
                                        <li>Prosesor: Octa-core (2x2.0 GHz Cortex-A75 + 6x1.8 GHz Cortex-A55)</li>
                                        <li>RAM: 4 GB atau 6 GB</li>
                                        <li>Memori Internal: 64 GB atau 128 GB</li>
                                        <li>Kamera Belakang: 48 MP (f/1.8, lensa wide 26mm, PDAF) + 8 MP (f/2.2, ultrawide 118 derajat) + 2 MP (f/2.4, lensa makro, AF) + 2 MP (f/2.4, depth)
Kamera Depan: 13 MP (f/2.3, lensa 29mm)</li>
                                        <li>Baterai: 5.020 mAh (fast charging 18W)</li>
                                        <li>Harga: Resmi mulai dari Rp 2.499.000</li>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="single-welcome-hero">
                                    <div class="welcome-hero-img">
                                        <img src="assets/images/slider/slider1.jpg" alt="slider image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="single-slide-item slide2">
                <div class="container">
                    <div class="welcome-hero-content">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="single-welcome-hero">
                                    <div class="welcome-hero-txt">
                                        <h2>Acer Apier 3 Slim</h2>
                                        <li>Display : 14" HD 1366 x 768 resolution Acer ComfyView™</li>
                                        <li>Processor : AMD Athlon Silver 3050U processor (2.3 GHz base frequency 1 MB cache)</li>
                                        <li>Memory : 4 GB onboard DDR4 system memory</li>
                                        <li>Hard Drive : 256 GB PCIe Gen3, 8 Gb/s ,NVMe</li>
                                        <li>Graphics : AMD Radeon™ Integrated Graphic</li>
                                        <li>Networking :  802.11a/b/g/n/ac wireless LAN, Operates at 2.4 GHz and 5 GHz + Bluetooth® 4.2</li>
                                        <li>Audio : Two built-in stereo speakers</li>
                                        <li>Camera : HD webcam with:</li>
                                        <li>Harga : 5.400.000</li>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="single-welcome-hero">
                                    <div class="welcome-hero-img">
                                        <img src="assets/images/slider/slider2.jpg" alt="slider image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>