<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Information</h3>
                .
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first" style="z-index: 1 ;">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <!-- <li class="breadcrumb-item"><a href="<?= base_url() ?>"><i class="bi bi-caret-right-fill"></i>Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?= $title; ?></li> -->
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-12 col-lg-9">
                <!-- konsolidator -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Konsolidator</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p>Pihak penanggung jawab sebagai media informasi dan konsolidasi bagi SKPD jika terdapat kesulitan maupun media bertanya dalam pengisian BI dan Persediaan.
                            </p>
                            <!-- Button trigger for scrolling content modal -->
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable">
                                Lihat Konsolidator
                            </button>
                        </div>
                    </div>
                </div>
                <!-- /konsolidator -->
                <div class="card">
                    <!-- Groups section start -->
                    <section id="groups">
                        <div class="row match-height">
                            <div class="col-12 mt-3 mb-1" style="margin:30px">
                                <h4 class="section-title text-uppercase">Info Lainnya</h4>
                            </div>
                        </div>
                        <div class="row match-height">
                            <div class="col-12">
                                <div class="row justify-content-center">
                                    <div class="card-group col-md-4" style="margin:15px">
                                        <!-- RKMD -->
                                        <div class="card d-none" style="margin-left: 7px; margin-right: 7px;">
                                            <a href="https://drive.google.com/drive/folders/18eYZ2Us3g2ZmpN76l8oJ1qQZUH9mcF6u?usp=drive_link" target="_blank">
                                                <div class="card-content">
                                                    <img class="card-img-top img-fluid" src="<?= base_url('assets/'); ?>images/info/construction.png" alt="RKBMD">
                                                    <div class="card-body">
                                                        <h4 class="card-title text-center">RKBMD 2023</h4>
                                                        <p class="card-text text-center">
                                                            Form usulan RKBMD 2023
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- BPKB -->
                                        <?php
                                        $id_role_saat_ini = $user['id_role'];
                                        $id_user_saat_ini = $user['id'];
                                        $SekretariatDaerah = 'https://docs.google.com/spreadsheets/d/1-6GrWGgRkHzpvPKMQ9vl1RdowqN-lhpdgbTdfv132po/edit?usp=sharing';
                                        $SekretariatDprd = 'https://docs.google.com/spreadsheets/d/1sMTepKIlzJi0dt1OWd9BWhM4iJB_b8TnArumUCFVf10/edit?usp=sharing';
                                        $InspektoratDaerah = 'https://docs.google.com/spreadsheets/d/1R0EsNSLojwLiAPYBKBUG0I2gbwkgOTUk-8NvQkGDX2M/edit?usp=sharing';
                                        $DinasPendidikan = 'https://docs.google.com/spreadsheets/d/1pNaJfVcf-0AAxzimKXsT-loNw_e5ngPqaGu7X_Kk2FU/edit?usp=sharing';
                                        $DinasPemudaOlahRagaKebudayaanDanPariwisata = 'https://docs.google.com/spreadsheets/d/1jJUrQU1WPubCr_QQF5P4o5_v6u76wigcjvAcVDgb1l4/edit?usp=sharing';
                                        $DinasKesehatanDanKb = 'https://docs.google.com/spreadsheets/d/1j9zlSz_r056_YEt1njFmlmiI_uj2eFVP0f8E-j6Fotg/edit?usp=sharing';
                                        $DinasSosialPppa = 'https://docs.google.com/spreadsheets/d/1RkX7Z7niwMQzVwwMr-XuUQN70SzgSD4pzs-9IAo59vA/edit?usp=sharing';
                                        $DinasKependudukanDanPencatatanSipil = 'https://docs.google.com/spreadsheets/d/1YjCUTKwMH8INEerb5XSuBwGvJJe-wO09aP8QEkUj8BE/edit?usp=sharing';
                                        $DinasPemberdayaanMasyarakatDanDesa = 'https://docs.google.com/spreadsheets/d/1avIS_3Z0szSOxRjWkg8UQSEbVPNNo6ospYZalV6gRno/edit?usp=sharing';
                                        $DinasPuDanPenataanRuang = 'https://docs.google.com/spreadsheets/d/1bDrPys2lsgiw7mvNEWC8LjdC21UDGIczQ-lulJyyLSc/edit?usp=sharing';
                                        $DinasPerhubungan = 'https://docs.google.com/spreadsheets/d/17Do4_9ZPxmrhJ82-BpPwlBKeDzPXxJP5wHAA0E5Frhw/edit?usp=sharing';
                                        $SatuanPolisiPamongPrajaDanPerlindunganMasyarakat = 'https://docs.google.com/spreadsheets/d/1AknbiryipXQMzqxze-89bHQf13haF5PC6yv4CF3MUjg/edit?usp=sharing';
                                        $DinasPemadamKebakaranDanPenyelamatanDaerah = 'https://docs.google.com/spreadsheets/d/1Fl0Fpss6sAN8SJQM8mbEDhHib12RGDh2TU8EKweIf_8/edit?usp=sharing';
                                        $DinasPenanamanModalDanPelayananTerpaduSatuPintu = 'https://docs.google.com/spreadsheets/d/1L-UiOOCpGc1anzmSzZi9RQWP7Ob_pWNb40rrE06bKeQ/edit?usp=sharing';
                                        $DinasTenagaKerja = 'https://docs.google.com/spreadsheets/d/1PbTuyC78hJ3qB3KQPB4vhTJQs31lAMoTTZXz6q3IhSY/edit?usp=sharing';
                                        $DinasKoperasiPerindustrianDanPerdagangan = 'https://docs.google.com/spreadsheets/d/1ZXYBHKUZ5RIC7hgVQuBNKM1m7G-LnbGBmE-efW71BGM/edit?usp=sharing';
                                        $DinasKomunikasiDanInformatika = 'https://docs.google.com/spreadsheets/d/1ZqAdl5vkz9suYNQoaZBb794_mmD9VFcQhgHFxBEr72w/edit?usp=sharing';
                                        $DinasPertanianDanKetahananPangan = 'https://docs.google.com/spreadsheets/d/1ZzxQMhWOpJ5BA2-GJmd9robLFOu3yaOm9d4n54B2554/edit?usp=sharing';
                                        $DinasPerikanan = 'https://docs.google.com/spreadsheets/d/1kTC48n3IthVPYfEnRIhvB-N9haoqrnSMMn8JuMBj-Fo/edit?usp=sharing';
                                        $DinasLingkunganHidupPerumahanRakyatDanPermukiman = 'https://docs.google.com/spreadsheets/d/13s92vbvsNnV84C7e2AwTCUVUkN8qmo06f0tH-jxxk3o/edit?usp=sharing';
                                        $DinasKearsipanDanPerpustakaan = 'https://docs.google.com/spreadsheets/d/14Go8g0qqmvi7X-ua5TBx-Gj1kPKxhTz0O0ACT-tm9ZA/edit?usp=sharing';
                                        $BadanPerencanaanPembangunanPenelitianDanPembangunanDaerah = 'https://docs.google.com/spreadsheets/d/16vUxg0zQmXq5pr8T684ajrUlpD1rWFiLaBjJbTwnuk4/edit?usp=sharing';
                                        $BadanPendapatanPengelolaanKeuanganDanAsetDaerah = 'https://docs.google.com/spreadsheets/d/1PBaYOyuyPJRcFMf5EuEr_5qBKPtA_aiXPn_2BBSzc_s/edit?usp=sharing';
                                        $Gudang = 'https://docs.google.com/spreadsheets/d/1SER5qxUCCrX9AHfBzOGG0N-kuzo0mUuQd8Kcg_ZJ-4k/edit?usp=sharing';
                                        $BadanKepegawaianDanPengembanganSumberDayaManusia = 'https://docs.google.com/spreadsheets/d/1XXRLkru-JEHfKE4BAsvbPg7FrJ_wnIfXVuMhc-Ol9no/edit?usp=sharing';
                                        $BadanKesatuanBangsaDanPolitik = 'https://docs.google.com/spreadsheets/d/1kSBSEwIRo5znoq_pNwGdHkaTvy2PRvmN_awMisopO64/edit?usp=sharing';
                                        $BadanPenanggulanganBencanaDanPenyelamatanDaerah = 'https://docs.google.com/spreadsheets/d/1kSq9qaRoMtI_qbg5tFmweCiFOsc7xlcZ2bS3vGbVmtM/edit?usp=sharing';
                                        $RsudDrMohammadZyn = 'https://docs.google.com/spreadsheets/d/1qQH4W2qv_eBnIsnedc9YjG5zkoLthNNuEWlq5eRQVPk/edit?usp=sharing';
                                        $RsdKetapang = 'https://docs.google.com/spreadsheets/d/1W_Pm2Gk5IwJzNmMp2U5-qHTwqSP5YVUCYEwiM0PiKNk/edit?usp=sharing';
                                        $KecamatanSampang = 'https://docs.google.com/spreadsheets/d/1sYHYLwWAQCVsbHCCxXcJlgGABsi4lA7IIQU3zYP1Uaw/edit?usp=sharing';
                                        $KecamatanOmben = 'https://docs.google.com/spreadsheets/d/14A1tn4cqvG0CM4z2BzTSKziUyvBvlqLTPt1tRTpb8TM/edit?usp=sharing';
                                        $KecamatanCamplong = 'https://docs.google.com/spreadsheets/d/1H0CwpAp8a3HbiGjk2tnUnvhxCNqTQqvd25raUfB7yzc/edit?usp=sharing';
                                        $KecamatanTorjun = 'https://docs.google.com/spreadsheets/d/1Z-QT9fWhvUwENr-u5YLZaYJFLKirjFoFSfJOEp62GmI/edit?usp=sharing';
                                        $KecamatanPangarengan = 'https://docs.google.com/spreadsheets/d/1_Rzogk9BKDEK0I-muh4p87dnltpqOgLBH9JlQ8jHYXU/edit?usp=sharing';
                                        $KecamatanJrengik = 'https://docs.google.com/spreadsheets/d/1jurRRkaxk2_qcEB8ck64-C-CERpBKNrl6WcRchnDxqo/edit?usp=sharing';
                                        $KecamatanSreseh = 'https://docs.google.com/spreadsheets/d/1oJf1m6mXuB8UedBEZdy3dGRgQjGyQPThYl9X_anwHJ8/edit?usp=sharing';
                                        $KecamatanTambelangan = 'https://docs.google.com/spreadsheets/d/1rva11B0YunFFMTjIr5FsTHgGhS4CyFeDHoSfMGRSzg0/edit?usp=sharing';
                                        $KecamatanKedungdung = 'https://docs.google.com/spreadsheets/d/1sSGziuyF9FFDnbx-uKVkn8S7Q2Yp29HuHiswp1XYp4A/edit?usp=sharing';
                                        $KecamatanRobatal = 'https://docs.google.com/spreadsheets/d/1ytm0RzCFBox6v2F6-qnixMsCLfGXRtXJrzxrUxSgcJQ/edit?usp=sharing';
                                        $KecamatanKarangPenang = 'https://docs.google.com/spreadsheets/d/1z3VyZFrPfcVkuytmeMk1fi6S_lRisLz_4Wji5WX7cgI/edit?usp=sharing';
                                        $KecamatanKetapang = 'https://docs.google.com/spreadsheets/d/1JafeBuM1bfSQDkY4TUrGYc0KamptJZRU2-C6ExLDAOg/edit?usp=sharing';
                                        $KecamatanBanyuates = 'https://docs.google.com/spreadsheets/d/1DcD91QUv2tQ7PccnWJxad--lzktH2orzry60xz7hr20/edit?usp=sharing';
                                        $KecamatanSokobanah = 'https://docs.google.com/spreadsheets/d/11eLtEfPjwB-4X5E02mH1ZfSRb7KXDuKbvLbDXoyAlkE/edit?usp=sharing';

                                        // echo $id_role_saat_ini . " dan " . $id_user_saat_ini;
                                        ?>
                                        <div class="card" style="margin-left: 7px; margin-right: 7px;">
                                            <?php if ($id_role_saat_ini == 1) : ?>
                                                <a id="BPKB" href='https://drive.google.com/drive/folders/1EF7Y7_9YX9i7cWop2MuXESmkqmxkefxH?usp=sharing' target='_blank'>
                                                <?php elseif ($id_role_saat_ini == 3) : ?>
                                                    <a id="BPKB" href="#">
                                                    <?php elseif ($id_role_saat_ini == 2) :  ?>
                                                        <?php if ($id_user_saat_ini == 8) : ?><a id="BPKB" href="<?= $SekretariatDaerah ?>" target="_blank">
                                                            <?php elseif ($id_user_saat_ini == 9) : ?><a id='BPKB' href='<?= $SekretariatDprd ?>' target='_blank'>
                                                                <?php elseif ($id_user_saat_ini == 10) : ?><a id='BPKB' href='<?= $InspektoratDaerah ?>' target='_blank'>
                                                                    <?php elseif ($id_user_saat_ini == 11) : ?><a id='BPKB' href='<?= $DinasPendidikan ?>' target='_blank'>
                                                                        <?php elseif ($id_user_saat_ini == 12) : ?><a id='BPKB' href='<?= $DinasPemudaOlahRagaKebudayaanDanPariwisata ?>' target='_blank'>
                                                                            <?php elseif ($id_user_saat_ini == 13) : ?><a id='BPKB' href='<?= $DinasKesehatanDanKb ?>' target='_blank'>
                                                                                <?php elseif ($id_user_saat_ini == 14) : ?><a id='BPKB' href='<?= $DinasSosialPppa ?>' target='_blank'>
                                                                                    <?php elseif ($id_user_saat_ini == 15) : ?><a id='BPKB' href='<?= $DinasKependudukanDanPencatatanSipil ?>' target='_blank'>
                                                                                        <?php elseif ($id_user_saat_ini == 16) : ?><a id='BPKB' href='<?= $DinasPemberdayaanMasyarakatDanDesa ?>' target='_blank'>
                                                                                            <?php elseif ($id_user_saat_ini == 17) : ?><a id='BPKB' href='<?= $DinasPuDanPenataanRuang ?>' target='_blank'>
                                                                                                <?php elseif ($id_user_saat_ini == 18) : ?><a id='BPKB' href='<?= $DinasPerhubungan ?>' target='_blank'>
                                                                                                    <?php elseif ($id_user_saat_ini == 19) : ?><a id='BPKB' href='<?= $SatuanPolisiPamongPrajaDanPerlindunganMasyarakat ?>' target='_blank'>
                                                                                                        <?php elseif ($id_user_saat_ini == 20) : ?><a id='BPKB' href='<?= $DinasPemadamKebakaranDanPenyelamatanDaerah ?>' target='_blank'>
                                                                                                            <?php elseif ($id_user_saat_ini == 21) : ?><a id='BPKB' href='<?= $DinasPenanamanModalDanPelayananTerpaduSatuPintu ?>' target='_blank'>
                                                                                                                <?php elseif ($id_user_saat_ini == 22) : ?><a id='BPKB' href='<?= $DinasTenagaKerja ?>' target='_blank'>
                                                                                                                    <?php elseif ($id_user_saat_ini == 23) : ?><a id='BPKB' href='<?= $DinasKoperasiPerindustrianDanPerdagangan ?>' target='_blank'>
                                                                                                                        <?php elseif ($id_user_saat_ini == 24) : ?><a id='BPKB' href='<?= $DinasKomunikasiDanInformatika ?>' target='_blank'>
                                                                                                                            <?php elseif ($id_user_saat_ini == 25) : ?><a id='BPKB' href='<?= $DinasPertanianDanKetahananPangan ?>' target='_blank'>
                                                                                                                                <?php elseif ($id_user_saat_ini == 26) : ?><a id='BPKB' href='<?= $DinasPerikanan ?>' target='_blank'>
                                                                                                                                    <?php elseif ($id_user_saat_ini == 27) : ?><a id='BPKB' href='<?= $DinasLingkunganHidupPerumahanRakyatDanPermukiman ?>' target='_blank'>
                                                                                                                                        <?php elseif ($id_user_saat_ini == 28) : ?><a id='BPKB' href='<?= $DinasKearsipanDanPerpustakaan ?>' target='_blank'>
                                                                                                                                            <?php elseif ($id_user_saat_ini == 29) : ?><a id='BPKB' href='<?= $BadanPerencanaanPembangunanPenelitianDanPembangunanDaerah ?>' target='_blank'>
                                                                                                                                                <?php elseif ($id_user_saat_ini == 5) : ?><a id='BPKB' href='<?= $BadanPendapatanPengelolaanKeuanganDanAsetDaerah ?>' target='_blank'>
                                                                                                                                                    <?php elseif ($id_user_saat_ini == 30) : ?><a id='BPKB' href='<?= $BadanKepegawaianDanPengembanganSumberDayaManusia ?>' target='_blank'>
                                                                                                                                                        <?php elseif ($id_user_saat_ini == 31) : ?><a id='BPKB' href='<?= $BadanKesatuanBangsaDanPolitik ?>' target='_blank'>
                                                                                                                                                            <?php elseif ($id_user_saat_ini == 32) : ?><a id='BPKB' href='<?= $BadanPenanggulanganBencanaDanPenyelamatanDaerah ?>' target='_blank'>
                                                                                                                                                                <?php elseif ($id_user_saat_ini == 33) : ?><a id='BPKB' href='<?= $RsudDrMohammadZyn ?>' target='_blank'>
                                                                                                                                                                    <?php elseif ($id_user_saat_ini == 34) : ?><a id='BPKB' href='<?= $RsdKetapang ?>' target='_blank'>
                                                                                                                                                                        <?php elseif ($id_user_saat_ini == 7) : ?><a id='BPKB' href='<?= $KecamatanSampang ?>' target='_blank'>
                                                                                                                                                                            <?php elseif ($id_user_saat_ini == 35) : ?><a id='BPKB' href='<?= $KecamatanOmben ?>' target='_blank'>
                                                                                                                                                                                <?php elseif ($id_user_saat_ini == 36) : ?><a id='BPKB' href='<?= $KecamatanCamplong ?>' target='_blank'>
                                                                                                                                                                                    <?php elseif ($id_user_saat_ini == 37) : ?><a id='BPKB' href='<?= $KecamatanTorjun ?>' target='_blank'>
                                                                                                                                                                                        <?php elseif ($id_user_saat_ini == 38) : ?><a id='BPKB' href='<?= $KecamatanPangarengan ?>' target='_blank'>
                                                                                                                                                                                            <?php elseif ($id_user_saat_ini == 39) : ?><a id='BPKB' href='<?= $KecamatanJrengik ?>' target='_blank'>
                                                                                                                                                                                                <?php elseif ($id_user_saat_ini == 40) : ?><a id='BPKB' href='<?= $KecamatanSreseh ?>' target='_blank'>
                                                                                                                                                                                                    <?php elseif ($id_user_saat_ini == 41) : ?><a id='BPKB' href='<?= $KecamatanTambelangan ?>' target='_blank'>
                                                                                                                                                                                                        <?php elseif ($id_user_saat_ini == 42) : ?><a id='BPKB' href='<?= $KecamatanKedungdung ?>' target='_blank'>
                                                                                                                                                                                                            <?php elseif ($id_user_saat_ini == 43) : ?><a id='BPKB' href='<?= $KecamatanRobatal ?>' target='_blank'>
                                                                                                                                                                                                                <?php elseif ($id_user_saat_ini == 44) : ?><a id='BPKB' href='<?= $KecamatanKarangPenang ?>' target='_blank'>
                                                                                                                                                                                                                    <?php elseif ($id_user_saat_ini == 45) : ?><a id='BPKB' href='<?= $KecamatanKetapang ?>' target='_blank'>
                                                                                                                                                                                                                        <?php elseif ($id_user_saat_ini == 46) : ?><a id='BPKB' href='<?= $KecamatanBanyuates ?>' target='_blank'>
                                                                                                                                                                                                                            <?php elseif ($id_user_saat_ini == 47) : ?><a id='BPKB' href='<?= $KecamatanSokobanah ?>' target='_blank'>
                                                                                                                                                                                                                                <?php endif; ?>
                                                                                                                                                                                                                            <?php endif; ?>
                                                                                                                                                                                                                            <div class="card-content">
                                                                                                                                                                                                                                <img class="card-img-top img-fluid" src="<?= base_url('assets/'); ?>images/info/BPKB.svg" alt="BPKB Form">
                                                                                                                                                                                                                                <div class="card-body">
                                                                                                                                                                                                                                    <h4 class="card-title text-center">Form BPKB</h4>
                                                                                                                                                                                                                                    <p class="card-text text-center">
                                                                                                                                                                                                                                        Form Pengisian Data Kendaraan Dinas
                                                                                                                                                                                                                                    </p>
                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="card-group col-md-8" style="margin:15px">
                                        <div class="card" style="margin-left: 7px; margin-right: 7px;">
                                            <a href="<?= base_url('assets/'); ?>images/info/pengajuan-spm.png" target="popup" onclick="window.open('<?= base_url('assets/'); ?>images/info/pengajuan-spm.png','popup','width=600,height=600'); return false;">
                                                <div class="card-content">
                                                    <img class="card-img-top img-fluid" src="<?= base_url('assets/'); ?>images/info/pengajuan-spm.png" alt="Sleeping working">
                                                    <div class="card-body">
                                                        <h4 class="card-title text-center">Pengajuan SPM</h4>
                                                        <p class="card-text text-center">
                                                            Tata cara pengajuan SPM ke Bidang Pengelolaan Aset
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card" style="margin-left: 7px; margin-right: 7px;">
                                            <a href="<?= base_url('assets/'); ?>doc/PEDOMAN-TEKNIS.pdf" target="popup" onclick="window.open('<?= base_url('assets/doc/') ?>PEDOMAN-TEKNIS.pdf','popup','width=600,height=600'); return false;">
                                                <div class="card-content">
                                                    <img class="card-img-top img-fluid" src="<?= base_url('assets/'); ?>images/info/pdf-icon.png" alt="Sleeping working">
                                                    <div class="card-body">
                                                        <h4 class="card-title text-center">Pedoman Teknis</h4>
                                                        <p class="card-text text-center">
                                                            Standard Pelayanan Bidang Pengelolaan Aset
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="card-group col-md-8" style="margin:15px">
                                        <div class="card" style="margin-left: 7px; margin-right: 7px;">
                                            <a href="https://drive.google.com/drive/folders/1JIDy7qjH8LQKsT2XaZ9LKpLK8OjKDAxc?usp=share_link" target="_blank">
                                                <div class="card-content">
                                                    <img class="card-img-top img-fluid" src="<?= base_url('assets/'); ?>images/info/sleeping-working.png" alt="Sleeping working">
                                                    <div class="card-body">
                                                        <h4 class="card-title text-center">Form Berita Acara</h4>
                                                        <p class="card-text text-center">
                                                            Kumpulan form berita acara. (BAR Triwulan, BAR Internal, dll...)
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card" style="margin-left: 7px; margin-right: 7px;">
                                            <a href="https://drive.google.com/drive/folders/1th6Z035DF-5OtLrH91CC8jP0T2QKUDht?usp=sharing" target="_blank">
                                                <div class="card-content">
                                                    <img class="card-img-top img-fluid" src="<?= base_url('assets/'); ?>images/info/toolbox.png" alt="Sleeping working">
                                                    <div class="card-body">
                                                        <h4 class="card-title text-center">Kode Barang 108</h4>
                                                        <p class="card-text text-center">
                                                            Daftar Kode Barang 108
                                                        </p>

                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- /Groups section start -->
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Keterangan</h4>
                    </div>
                    <div class="card-content pb-4">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable">
                            <div class="recent-message d-flex px-4 py-3">
                                <div class="avatar avatar-lg">
                                    <img src="<?= base_url('assets/'); ?>images/faces/konsol.svg">
                                </div>
                                <div class="name ms-4">
                                    <h5 class="mb-1">Konsolidator</h5>
                                    <h6 class="text-muted mb-0">pihak penanggung jawab sebagai media informasi dan konsolidasi bagi SKPD jika terdapat kesulitan maupun media bertanya dalam pengisian BI dan Persediaan.</h6>
                                </div>
                            </div>
                        </a>
                        <div class="recent-message d-flex px-4 py-3">
                            <div class="avatar avatar-lg">
                                <img src="<?= base_url('assets/'); ?>images/faces/admin.svg">
                            </div>
                            <div class="name ms-4">
                                <h5 class="mb-1">Admin Website</h5>
                                <h6 class="text-muted mb-0">pihak yang bertanggung jawab jika terjadi error pada <i>website</i> ini.</h6>
                            </div>
                        </div>
                        <div class="recent-message d-flex px-4 py-3">
                            <!-- <div class="avatar avatar-lg">
                                            <img src="<?= base_url('assets/'); ?>images/faces/9.jpg">
                                        </div> -->
                            <div class="name ms-4">
                                <!-- <h5 class="mb-1">Ismail</h5> -->
                                <h6 class="mb-0"><i>Semua keterangan di atas bisa diakses pada menu.</i></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>