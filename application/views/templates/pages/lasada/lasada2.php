<script>
    async function searchBPKB() {
        const berdasar = document.getElementById('berdasar').value;
        const kataKunci_input = document.getElementById('kataKunci').value;
        const kataKunci = upperCase(kataKunci_input);
        const url =
            `https://script.google.com/macros/s/AKfycbxD2HgdjbtuHFbUTz69xftZZOm6O5QBbNulLGFxKp48W5Dd4lotgF1gZsLbh_4pJOiLng/exec?berdasar=${berdasar}&kataKunci=${kataKunci}`; // Ganti dengan URL web app Anda

        const btnSubmit = document.getElementById("cariBPKB");
        const btnLoad = document.getElementById("loading");
        btnSubmit.classList.toggle('d-none');
        btnLoad.classList.toggle('d-none');
        document.getElementById('tempatHasil').innerHTML = "";

        try {
            const response = await fetch(url);
            const data = await response.json();

            if (data.nopol) {
                const dataHasil = `<table id="tabelHasil">
                                                    <caption class="bgText">
                                                        <h5 class="pesanError">Hasil Pencarian</h5>
                                                    </caption>
                                                    <tr>
                                                        <th class="lebar20">SKPD</th>
                                                        <td colspan="2">${data.skpd}</th>
                                                    </tr>
                                                    <tr>
                                                        <th class="lebar20">Spek Kendaraan</td>
                                                        <td>${data.spekKendaraan}</td>
                                                        <th>${data.namaKendaraan}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="lebar20">Nopol</td>
                                                        <td>${data.nopol}</td>
                                                        <td>${data.nourutBI}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="lebar20">No. Mesin</td>
                                                        <td>${data.nosin}</td>
                                                        <td>${data.nourutDB}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="lebar20">No. Rangka</td>
                                                        <td colspan="2">${data.norang}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="lebar20">No. BPKB</td>
                                                        <td>${data.noBPKB}</td>
                                                        <th>${data.masaBerlaku}</th>
                                                    </tr>
                                                    <tr>
                                                        <th class="lebar20">Pemegang</td>
                                                        <td>${data.pemegang}</td>
                                                        <td>${data.jabatan}</td>
                                                    </tr>
													<tr>
                                                        <th class="lebar20">Lokasi</td>
                                                        <td colspan="2">${data.lokasi}</td>
                                                    </tr>
                                                </table>`;
                document.getElementById('tempatHasil').innerHTML = dataHasil;
            } else {
                document.getElementById('tempatHasil').innerHTML = '<div class="bgText"><h6 class="pesanError">Data tidak ditemukan.</h6></div>';
            }
            btnSubmit.classList.toggle('d-none');
            btnLoad.classList.toggle('d-none');
        } catch (error) {
            document.getElementById('tempatHasil').innerHTML = '<div class="bgText"><h6 class="pesanError">Error fetching data.</h6></div>';
            console.error('Error:', error);
            btnSubmit.classList.toggle('d-none');
            btnLoad.classList.toggle('d-none');
        }
        document.getElementById('kataKunci').value = "";
    }

    function upperCase(teks) {
        var berdasar = document.getElementById("berdasar").value;

        if (berdasar == "Nopol") {
            // Pisahkan plat nomor menjadi bagian-bagian
            let platNomor = teks.trim().replace(/\s+/g, "");
            // Gunakan ekspresi reguler untuk memisahkan bagian-bagian plat nomor
            let match = platNomor.match(/^([a-zA-Z]+)(\d+)([a-zA-Z]+)$/);
            if (match) {
                // Ambil bagian-bagian yang ditemukan
                let bagian1 = match[1].toUpperCase();
                let bagian2 = match[2];
                let bagian3 = match[3].toUpperCase();
                // Gabungkan kembali bagian-bagian tersebut dengan format yang diinginkan
                let platNomorBaru = `${bagian1} ${bagian2} ${bagian3}`;
                return platNomorBaru;
            }
        } else {
            return teks;
        }
    }
</script>
<style>
    .bg-rent {
        background-color: #00B98E !important
    }
</style>

<?= $this->session->flashdata('message'); ?>

<div class="page-title d-md-block d-lg-none">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <p>.</p>
        </div>
        <h3>Layanan Aset</h3>
    </div>
</div>

<!-- Header Start -->
<div class="container-fluid">
    <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
        <h3 class="animated fadeIn mb-4">Find A <span style="color: #00B98E;">Proper Information</span> For Your Needs And Things</h3>
        <!-- <div class="col-md-6 p-5 mt-lg-5">
            <h3 class="animated fadeIn mb-4">Find A <span style="color: #00B98E;">Proper Information</span> For Your Needs And Things</h3>
        </div>
        <div class="container-fluid col-md-6 animated fadeIn">
            <img src="<?= base_url('assets/'); ?>images/logo/Lasada BPPKAD.svg" alt="Lasada BPPKAD" class="responsive" height="90"> <br>
        </div> -->
    </div>
    <!-- Header End -->

    <?php
    $id_role = $this->session->userdata('id_role');
    ?>
    <br>
    <div class="row d-none" id="countdown-ismail">
        <!-- Countdown Template -->
        <div class="col-12">
            <h4 class="text-center" id="result"></h4>
            <div class="row center-display">
                <div class="col-md-8 center-display rmd-countdown-box rmd-animation">
                    <div class="card-is bg-light-warning">
                        <div class="card-body px-1 py-1-1">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon bg-white rmd-icon-box">
                                        <span>
                                            <i class="fa fa-fw fa-lg fa-calendar" style="color: rebeccapurple;"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h4 class="font-extrabold mb-0" id="days"><strong>--</strong></h4>
                                    <h6 class="text-muted font-semibold">Hari</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-is bg-light-success">
                        <div class="card-body px-1 py-1-1">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon bg-white rmd-icon-box">
                                        <span>
                                            <i class="fa fa-fw fa-lg fa-hourglass-start" style="color: rebeccapurple;"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h4 class="font-extrabold mb-0" id="hours"><strong>--</strong></h4>
                                    <h6 class="text-muted font-semibold">Jam</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-is bg-light-danger">
                        <div class="card-body px-1 py-1-1">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon bg-white rmd-icon-box">
                                        <span>
                                            <i class="fa fa-fw fa-lg fa-hourglass-half" style="color: rebeccapurple;"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h4 class="font-extrabold mb-0" id="minutes"><strong>--</strong></h4>
                                    <h6 class="text-muted font-semibold">Menit</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-is" style="background-color: #aeeffc;">
                        <div class="card-body px-1 py-1-1">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon bg-white rmd-icon-box">
                                        <span>
                                            <i class="fa fa-fw fa-lg fa-hourglass-end" style="color: rebeccapurple;"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h4 class="font-extrabold mb-0" id="seconds"><strong>--</strong></h4>
                                    <h6 class="text-muted font-semibold">Detik</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>
        <!-- /Countdown Template -->
    </div>
    <script src="<?= base_url('assets/js/ismailCountdown.js') ?>"></script>

    <!-- Property List Start -->
    <div id="listLayanan" class="card" style="padding: 15px;">
        <div class="row g-0 gx-5 align-items-end">
            <div class="col-lg-12">
                <div class="text-center mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                    <h1 class="mb-3">Jenis-Jenis Layanan</h1>
                </div>
            </div>
        </div>
        <!-- <div class="tab-content"> -->
        <!-- <div id="tab-1" class="tab-pane fade show p-0 active"> -->
        <div class="row g-4 center-is">
            <div id="sewa" class="center-is col-lg-4 col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                <a href="<?= base_url($id_role == 1 ? 'admin/' : ($id_role == 2 ? 'user/' : ($id_role == 3 ? 'umum/' : 'developer/'))) . 'lasada' ?>">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front-1">
                                <div class="texture1"></div>
                                <div class="texture2"></div>
                                <p class="heading_8264">KAB. SAMPANG</p>
                                <svg class="contactless" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="36" height="36" viewBox="0 0 48 48">
                                    <path fill="#ff9800" d="M32 10A14 14 0 1 0 32 38A14 14 0 1 0 32 10Z"></path>
                                    <path fill="#d50000" d="M16 10A14 14 0 1 0 16 38A14 14 0 1 0 16 10Z"></path>
                                    <path fill="#ff3d00" d="M18,24c0,4.755,2.376,8.95,6,11.48c3.624-2.53,6-6.725,6-11.48s-2.376-8.95-6-11.48 C20.376,15.05,18,19.245,18,24z"></path>
                                </svg>
                                <img src="<?= base_url('assets/images/logo/chip.svg') ?>" alt="Chip" class="chip">
                                <img class="logoproduct" src="<?= base_url('assets/images/logo/Lasada BPPKAD.svg') ?>" alt="logo" />
                                <p class="title-flip-card">LAYANAN SEWA BMD</p>
                                <p class="date_8264">
                                    <?php
                                    date_default_timezone_set('Asia/Jakarta');
                                    echo date('m / Y');
                                    ?>
                                </p>
                            </div>
                            <div class="flip-card-back">
                                <div class="strip"></div>
                                <div class="mstrip">
                                    <p class="mcode">Layanan Sewa</p>
                                </div>
                                <div class="sstrip">
                                    <p class="code">***</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div id="kendaraan" class="center-is col-lg-4 col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                <a href="https://script.google.com/macros/s/AKfycbxa7hxzcfsZm3hdRm1hTfeSQ6vvMSJBMX3T-tzjHnDwdk9-wKfYm_FSeNuYT83st9JZpQ/exec" target="_blank">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front-2">
                                <p class="texture1"></p>
                                <p class="texture2"></p>
                                <p class="heading_8264">KAB. SAMPANG</p>
                                <svg class="contactless" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="36" height="36" viewBox="0 0 48 48">
                                    <path fill="#ff9800" d="M32 10A14 14 0 1 0 32 38A14 14 0 1 0 32 10Z"></path>
                                    <path fill="#d50000" d="M16 10A14 14 0 1 0 16 38A14 14 0 1 0 16 10Z"></path>
                                    <path fill="#ff3d00" d="M18,24c0,4.755,2.376,8.95,6,11.48c3.624-2.53,6-6.725,6-11.48s-2.376-8.95-6-11.48 C20.376,15.05,18,19.245,18,24z"></path>
                                </svg>
                                <img src="<?= base_url('assets/images/logo/chip.svg') ?>" alt="Chip" class="chip">
                                <img class="logo" src="<?= base_url('assets/images/logo/Sampang.svg') ?>" alt="logo" />
                                <p class="title-flip-card">CEK KENDARAAN DINAS</p>
                                <p class="date_8264">
                                    <?php
                                    date_default_timezone_set('Asia/Jakarta');
                                    echo date('m / Y');
                                    ?>
                                </p>
                            </div>
                            <div class="flip-card-back">
                                <div class="strip"></div>
                                <div class="mstrip">
                                    <p class="mcode">Cek Kendaraan Dinas</p>
                                </div>
                                <div class="sstrip">
                                    <p class="code">***</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div id="layananlain" class="center-is col-lg-4 col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                <a href="<?= base_url($id_role == 1 ? 'admin/' : ($id_role == 2 ? 'user/' : ($id_role == 3 ? 'umum/' : 'developer/'))) . 'layanan_lainnya#maps' ?>">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front-3">
                                <p class="texture1"></p>
                                <p class="texture2"></p>
                                <p class="heading_8264">KAB. SAMPANG</p>
                                <svg class="contactless" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="36" height="36" viewBox="0 0 48 48">
                                    <path fill="#ff9800" d="M32 10A14 14 0 1 0 32 38A14 14 0 1 0 32 10Z"></path>
                                    <path fill="#d50000" d="M16 10A14 14 0 1 0 16 38A14 14 0 1 0 16 10Z"></path>
                                    <path fill="#ff3d00" d="M18,24c0,4.755,2.376,8.95,6,11.48c3.624-2.53,6-6.725,6-11.48s-2.376-8.95-6-11.48 C20.376,15.05,18,19.245,18,24z"></path>
                                </svg>
                                <img src="<?= base_url('assets/images/logo/chip.svg') ?>" alt="Chip" class="chip">
                                <img class="logo" src="<?= base_url('assets/images/logo/Sampang.svg') ?>" alt="logo" />
                                <p class="title-flip-card">LAYANAN LAINNYA</p>
                                <p class="date_8264">
                                    <?php
                                    date_default_timezone_set('Asia/Jakarta');
                                    echo date('m / Y');
                                    ?>
                                </p>
                            </div>
                            <div class="flip-card-back">
                                <div class="strip"></div>
                                <div class="mstrip">
                                    <p class="mcode">Layanan Lainnya</p>
                                </div>
                                <div class="sstrip">
                                    <p class="code">***</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- </div> -->
        <!-- </div> -->
        <!-- Property List End -->
    </div>

    <!--Cek KDO-->

    <div class="row" style="display: flex; justify-content: center;">
        <div class="col-md-6 col-12">
            <style>
                .bgText {
                    /* position: relative; */
                    animation: bgText linear 1.3s infinite;
                }

                @keyframes bgText {
                    0% {
                        background: linear-gradient(0deg, #56d8e4 20%, #9f01ea 90%);
                        width: 100%;
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;
                    }

                    12.5% {
                        background: linear-gradient(51deg, #56d8e4 20%, #9f01ea 90%);
                        width: 100%;
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;
                    }

                    25% {
                        background: linear-gradient(102deg, #56d8e4 20%, #9f01ea 90%);
                        width: 100%;
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;
                    }

                    37.5% {
                        background: linear-gradient(154deg, #56d8e4 20%, #9f01ea 90%);
                        width: 100%;
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;
                    }

                    50% {
                        background: linear-gradient(205deg, #56d8e4 20%, #9f01ea 90%);
                        width: 100%;
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;
                    }

                    62.5% {
                        background: linear-gradient(257deg, #56d8e4 20%, #9f01ea 90%);
                        width: 100%;
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;
                    }

                    75% {
                        background: linear-gradient(308deg, #56d8e4 20%, #9f01ea 90%);
                        width: 100%;
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;
                    }

                    87.5% {
                        background: linear-gradient(320deg, #56d8e4 20%, #9f01ea 90%);
                        width: 100%;
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;
                    }

                    100% {
                        background: linear-gradient(360deg, #56d8e4 20%, #9f01ea 90%);
                        width: 100%;
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;
                    }
                }

                .pesanError {
                    background: linear-gradient(115deg, #9f01ea 30%, #56a4e4 70%);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                    position: relative;
                    display: inline-block;
                }

                .pesanError::after {
                    content: '';
                    position: absolute;
                    left: 0;
                    bottom: -5px;
                    /* Jarak dari teks */
                    width: 100%;
                    height: 5px;
                    /* Ketebalan garis */
                    background: linear-gradient(115deg, #56d8e4 10%, #9f01ea 90%);
                    /* Warna garis */
                    animation: mymove ease-in-out 1.3s infinite;
                }

                @keyframes mymove {
                    0% {
                        background: linear-gradient(115deg, #56d8e4 10%, #9f01ea 90%);
                        width: 0%;
                    }

                    12.5% {
                        background: linear-gradient(115deg, #56d8e4 10%, #9f01ea 90%);
                        width: 25%;
                    }

                    25% {
                        background: linear-gradient(115deg, #56d8e4 10%, #9f01ea 90%);
                        width: 50%;
                    }

                    37.5% {
                        background: linear-gradient(115deg, #56d8e4 10%, #9f01ea 90%);
                        width: 75%;
                    }

                    50% {
                        background: linear-gradient(115deg, #56d8e4 10%, #9f01ea 90%);
                        width: 100%;
                    }

                    62.5% {
                        background: linear-gradient(115deg, #56d8e4 10%, #9f01ea 90%);
                        width: 75%;
                    }

                    75% {
                        background: linear-gradient(115deg, #56d8e4 10%, #9f01ea 90%);
                        width: 50%;
                    }

                    87.5% {
                        background: linear-gradient(115deg, #56d8e4 10%, #9f01ea 90%);
                        width: 25%;
                    }

                    100% {
                        background: linear-gradient(115deg, #56d8e4 10%, #9f01ea 90%);
                        width: 0%;
                    }
                }

                .neumorphism {
                    padding-top: 5px;
                    color: #fc007e;
                    background-color: #e5e9f6;
                    border-radius: 20px;
                    box-shadow: inset 5px 5px 7px #d5d9e5,
                        inset -5px -5px 7px #f5f9ff;
                    caret-color: #fc007e;
                }

                .neumorphism:focus {
                    border: none;
                    background-color: #e5e9f6;
                    box-shadow: 5px 5px 7px #d5d9e5,
                        -5px -5px 7px #f5f9ff;
                }

                #cariBPKB {
                    border-radius: 50px;
                    color: #ffffff;
                    background: #0076fc;
                    box-shadow: 5px 5px 7px #d5d9e5,
                        -5px -5px 7px #f5f9ff;
                }

                #cariBPKB:hover {
                    box-shadow: inset 5px 5px 7px #006eea,
                        inset -5px -5px 7px #007eff;
                }

                #cariBPKB:active {
                    color: yellow;
                    transform: rotate(20deg);
                    font-weight: bold;
                    font-size: 1em;
                    background: #2a00fc;
                    box-shadow: inset 5px 5px 7px #2700ea,
                        inset -5px -5px 7px #2d00ff;
                }

                #tabelHasil {
                    border-collapse: collapse;
                    width: 100%;
                    font-size: 12px;
                }

                #tabelHasil caption {
                    text-align: center;
                    caption-side: top;
                    font-size: 30 px;
                    font-weight: 600;
                    font-family: "Poppins", sans-serif;
                    background: -webkit-linear-gradient(right,
                            #56d8e4,
                            #9f01ea,
                            #56d8e4,
                            #9f01ea);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                }

                #tabelHasil th,
                td {
                    text-align: left;
                    padding: 8px;
                }

                #tabelHasil td {
                    border: 1px solid #ddd;
                }

                #tabelHasil tr:nth-child(even) {
                    background-color: #f2f2f2
                }

                #tabelHasil th {
                    background: linear-gradient(115deg, #9f01ea 10%, #56d8e4 90%);
                    color: white;
                }

                #tabelHasil th .lebar20 {
                    width: 20%;
                }
            </style>
            <div class="card">
                <div class="card-header">
                    <h4>Cek Kendaraan Dinas</h4>
                </div>
                <div class="card-body">
                    <form id="myFormBPKB" onsubmit="searchBPKB(); return false;">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="berdasar">
                                    <h6 class="text-label"><i class="fa fa-fw fa-id-card-o"></i> Cari Berdasarkan
                                        <span style="color: red;">*</span>
                                    </h6>
                                </label>
                                <div class="position-relative">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <select id="berdasar" name="berdasar" class="form-select neumorphism">
                                                <option value="Nopol">Nopol</option>
                                                <option value="Nosin">Nomor Mesin</option>
                                                <option value="Norangka">Nomor Rangka</option>
                                            </select>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control neumorphism" placeholder="Masukkan Nopol ..." id="kataKunci" name="kataKunci" required autocomplete="off">
                                        </div>
                                        <script>
                                            document.getElementById("berdasar").addEventListener("change", function() {
                                                var selectedOption = this.options[this.selectedIndex].value;
                                                if (selectedOption == "Nopol") {
                                                    var isi = "Nopol";
                                                } else if (selectedOption == "Nosin") {
                                                    var isi = "Nomor Mesin";
                                                } else {
                                                    var isi = "Nomor Rangka";
                                                }
                                                document.getElementById("kataKunci").placeholder = "Masukkan " +
                                                    isi + " ...";
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex justify-content-end">
                            <button type="submit" class="btn" id="cariBPKB">
                                <span><i class="fa fa-fw fa-search"></i> Cari</span>
                            </button>
                            <button type="button" class="btn btn-info d-none" id="loading" style="border-radius: 20px;" disabled>
                                <span><i class="fa fa-spin fa-fw fa-spinner"></i> Loading</span>
                            </button>
                        </div>
                    </form>
                </div>
                <div id="tempatHasil" class="card-footer" style="overflow-x:auto;">
                    <!-- tempat hasil -->
                </div>
            </div>
        </div>
    </div>

    <!--/Cek KDO-->

    <script>
        document.addEventListener('contextmenu', function(e) {
            e.preventDefault(); // Mencegah aksi default saat klik kanan
        });
    </script>
