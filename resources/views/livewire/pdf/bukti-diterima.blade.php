<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>Surat_Penerimaan_{{ $pendaftar->no_pendaftaran }}</title>
    <style>
        /* RESET DASAR */
        * {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
        }

        @page {
            size: A4;
            margin: 0;
            /* Menghilangkan margin default printer */
        }

        body {
            margin: 0;
            padding: 0;
            background-color: #e0e0e0;
            font-family: "Times New Roman", Times, serif;
        }

        /* KERTAS A4 */
        .page {
            width: 210mm;
            height: 297mm;
            padding: 20mm 25mm;
            /* Margin standar surat resmi */
            margin: 10mm auto;
            background: white;
            position: relative;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        /* TABEL LAYOUT UTAMA */
        .main-table {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
            /* Mengunci lebar kolom agar tidak melar */
        }

        /* KOP SURAT */
        .header-table {
            width: 100%;
            border-bottom: 3px double #000;
            margin-bottom: 20px;
        }

        .header-text {
            text-align: center;
            vertical-align: middle;
            padding-bottom: 10px;
        }

        .header-text h1 {
            margin: 0;
            font-size: 18pt;
            text-transform: uppercase;
        }

        .header-text h2 {
            margin: 0;
            font-size: 14pt;
            text-transform: uppercase;
            font-weight: normal;
        }

        .header-text p {
            margin: 2px 0;
            font-size: 9pt;
            line-height: 1.2;
        }

        /* JUDUL SURAT */
        .doc-title {
            text-align: center;
            margin: 25px 0;
        }

        .doc-title h3 {
            margin: 0;
            font-size: 14pt;
            text-decoration: underline;
            text-transform: uppercase;
        }

        /* ISI SURAT */
        .content {
            font-size: 11pt;
            line-height: 1.6;
            text-align: justify;
        }

        /* TABEL DATA (Identitas Siswa) */
        .data-table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        .data-table td {
            padding: 6px 0;
            vertical-align: top;
        }

        /* TANDA TANGAN */
        .signature-wrapper {
            margin-top: 50px;
            width: 100%;
        }

        .signature-table {
            width: 100%;
            border-collapse: collapse;
        }

        .status-badge {
            background-color: #000 !important;
            color: #fff !important;
            padding: 3px 10px;
            font-weight: bold;
            display: inline-block;
        }

        /* WATERMARK */
        .watermark {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) rotate(-30deg);
            font-size: 80pt;
            color: rgba(0, 0, 0, 0.03);
            font-weight: bold;
            z-index: 0;
            pointer-events: none;
            white-space: nowrap;
        }

        /* FOOTER */
        .footer {
            position: absolute;
            bottom: 20mm;
            left: 25mm;
            right: 25mm;
            border-top: 1px solid #000;
            padding-top: 5px;
            font-size: 8pt;
            font-style: italic;
        }

        /* CSS KHUSUS PRINT */
        @media print {
            body {
                background: none;
            }

            .page {
                margin: 0;
                box-shadow: none;
                width: 210mm;
                height: 297mm;
            }

            .no-print {
                display: none;
            }
        }
    </style>
</head>

<body onload="window.print()">

    <div class="page">
        <div class="watermark">DITERIMA</div>

        <!-- HEADER / KOP -->
        <table class="header-table">
            <tr>
                <td class="header-text">
                    <h2>PANITIA PENERIMAAN PESERTA DIDIK BARU</h2>
                    <h1>SMK DIGITAL HARAPAN BANGSA</h1>
                    <p>SK Menkumham RI No. AHU-0012345.AH.01.04. Tahun 2026</p>
                    <p>Jl. Raya Teknologi No. 404, Jakarta Pusat | Telp: (021) 123456</p>
                    <p><b>Website: www.sekolahdigital.sch.id | Email: info@sekolahdigital.sch.id</b></p>
                </td>
            </tr>
        </table>

        <!-- JUDUL DOKUMEN -->
        <div class="doc-title">
            <h3>SURAT KETERANGAN PENERIMAAN</h3>
            <p>Nomor: {{ $pendaftar->no_pendaftaran }}/PPDB/{{ date('Y') }}</p>
        </div>

        <!-- ISI -->
        <div class="content">
            <p style="text-indent: 40px;">Panitia Penerimaan Peserta Didik Baru (PPDB) SMK Digital Harapan Bangsa
                berdasarkan hasil rapat pleno tim seleksi pada tanggal {{ date('d F Y') }}, dengan ini menyatakan bahwa
                calon siswa yang tercantum di bawah ini:</p>

            <table class="data-table">
                <tr>
                    <td width="30%">Nomor Pendaftaran</td>
                    <td width="3%">:</td>
                    <td width="67%"><strong>{{ $pendaftar->no_pendaftaran }}</strong></td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td>{{ strtoupper($pendaftar->nama_siswa) }}</td>
                </tr>
                <tr>
                    <td>NISN</td>
                    <td>:</td>
                    <td>{{ $pendaftar->nisn }}</td>
                </tr>
                <tr>
                    <td>Asal Sekolah</td>
                    <td>:</td>
                    <td>{{ $pendaftar->asal_sekolah ?? '-' }}</td>
                </tr>
                <tr>
                    <td>Status Seleksi</td>
                    <td>:</td>
                    <td>
                        <div class="status-badge">LOLOS SELEKSI / DITERIMA</div>
                    </td>
                </tr>
            </table>

            <p>Dinyatakan <b>Diterima</b> sebagai siswa baru tahun pelajaran 2026/2027. Kepada calon siswa tersebut
                diwajibkan untuk melakukan daftar ulang sesuai dengan prosedur dan jadwal yang telah ditentukan oleh
                panitia.</p>
        </div>

        <!-- TANDA TANGAN -->
        <div class="signature-wrapper">
            <table class="signature-table">
                <tr>
                    <td width="60%"></td>
                    <td width="40%" align="center">
                        <p>Ngawi, {{ date('d F Y') }}</p>
                        <p>Kepala Sekolah,</p>
                        <br><br><br><br>
                        <p><strong><u>Dr. Budi Utomo, M.Pd</u></strong></p>
                        <p>NIP. 19850101 201012 1 001</p>
                    </td>
                </tr>
            </table>
        </div>

        <!-- FOOTER -->
        <div class="footer">
            Dokumen ini sah dan diterbitkan secara elektronik oleh Sistem Informasi Akademik SMK Digital Harapan Bangsa.
            Dicetak pada: {{ date('d/m/Y H:i:s') }}
        </div>
    </div>

</body>

</html>
