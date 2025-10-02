<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms & Conditions - Haritsa Babyshop</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #0062DB;
            --accent: #F7007F;
            --white: #ffffff;
            --gray-50: #f8fafc;
            --gray-100: #f1f5f9;
            --gray-200: #e2e8f0;
            --gray-300: #cbd5e1;
            --gray-400: #94a3b8;
            --gray-500: #64748b;
            --gray-600: #475569;
            --gray-700: #334155;
            --gray-800: #1e293b;
            --gray-900: #0f172a;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            line-height: 1.6;
            color: var(--gray-800);
            background: linear-gradient(135deg, var(--gray-50) 0%, #f0f9ff 100%);
            min-height: 100vh;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 5px;
        }

        .header {
            background: var(--white);
            box-shadow: 0 4px 20px rgba(0, 98, 219, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .header-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px 0;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
            color: var(--gray-900);
        }

        .logo-icon {
            width: 40px;
            height: 40px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-weight: 700;
            font-size: 18px;
            margin-left: 20px;
        }

        .logo-text {
            font-size: 20px;
            font-weight: 700;
        }

        .back-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 16px;
            background: var(--gray-100);
            color: var(--gray-700);
            text-decoration: none;
            border-radius: 10px;
            font-weight: 500;
            transition: all 0.2s ease;
        }

        .back-btn:hover {
            background: var(--gray-200);
            color: var(--gray-800);
        }

        .main {
            padding: 40px 0;
        }

        .hero {
            text-align: center;
            margin-bottom: 50px;
        }

        .hero h1 {
            font-size: 48px;
            font-weight: 700;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 16px;
        }

        .hero p {
            font-size: 18px;
            color: var(--gray-600);
            max-width: 600px;
            margin: 0 auto;
        }

        .content {
            background: var(--white);
            border-radius: 20px;
            padding: 10px;
            box-shadow: 0 10px 40px rgba(0, 98, 219, 0.08);
            border: 1px solid var(--gray-200);
        }

        .section {
            margin-bottom: 40px;
            margin-top: 20px;
        }

        .section:last-child {
            margin-bottom: 0;
        }

        .section h2 {
            font-size: 24px;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .section h2::before {
            content: '';
            width: 4px;
            height: 24px;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            border-radius: 2px;
        }

        .section h3 {
            font-size: 18px;
            font-weight: 600;
            color: var(--gray-800);
            margin: 24px 0 12px 0;
        }

        .section p {
            margin-bottom: 16px;
            color: var(--gray-700);
        }

        .section ul {
            margin: 16px 0;
            padding-left: 24px;
        }

        .section li {
            margin-bottom: 8px;
            color: var(--gray-700);
        }

        .highlight {
            background: linear-gradient(135deg, rgba(0, 98, 219, 0.05), rgba(247, 0, 127, 0.05));
            border-left: 4px solid var(--primary);
            padding: 20px;
            border-radius: 12px;
            margin: 24px 0;
        }

        .highlight p {
            margin: 0;
            font-weight: 500;
            color: var(--gray-800);
        }

        .contact-info {
            background: var(--gray-50);
            border-radius: 12px;
            padding: 24px;
            margin-top: 32px;
        }

        .contact-info h3 {
            color: var(--primary);
            margin-bottom: 16px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 12px;
        }

        .contact-item:last-child {
            margin-bottom: 0;
        }

        .contact-icon {
            width: 20px;
            height: 20px;
            color: var(--accent);
        }

        .footer {
            background: var(--gray-900);
            color: var(--white);
            text-align: center;
            padding: 40px 0;
            margin-top: 60px;
        }

        .footer p {
            opacity: 0.8;
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 36px;
            }

            .content {
                padding: 5px 15px 5px 0;
                margin: 0 10px;
            }

            .section h2 {
                font-size: 20px;
            }
        }

        ol {
            margin-left: 37px;
        }

        .section li {
            text-align: justify;
        }
    </style>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header-content">
                <a href="/" class="logo">
                    <div class="logo-icon">
                        <img src="{{ asset('own_assets/images/logo.png') }}" alt="" width="80px">
                    </div>
                </a>
                <a href="/" class="back-btn">
                    ← Kembali ke Beranda
                </a>
            </div>
        </div>
    </header>

    <main class="main">
        <div class="container">
            <div class="hero">
                <h1>Syarat & Ketentuan Pengguna</h1>
                <p>Dengan menggunakan platform Haritsa Membership, Anda menyetujui syarat dan ketentuan berikut</p>
            </div>

            <div class="content">
                <div class="section">
                    <h2>I. Definisi</h2>
                    <ol type="numeric">
                        <li>Aplikasi MyHaritsa adalah platform yang disediakan oleh PT Haritsa Pipa
                            Rezeki dimana di dalam Aplikasi MyHaritsa terdapat berbagai fitur layanan yang menunjang
                            aktivitas Pengguna.</li>
                        <li>MyHaritsa merupakan layanan sistem informasi manajemen pengelolaan member
                            yang dapat digunakan untuk untuk mengirimkan, menampilkan, menerbitkan, mendistribusikan,
                            atau menyiarkan konten dan materi di aplikasi Haritsa Member, termasuk namun tidak terbatas
                            pada teks, tulisan, video, audio,Foto,grafik,komentar, informasi pribadi, atau materi
                            lainnya, Kontribusi ini dapat dilihat secara publik oleh pengguna lain dan pihak ketiga.
                            Dengan demikian, setiap kontribusi dari Pengguna dapat diperlakukan sebagai non-rahasia dan
                            non-hak milik.</li>
                        <li>Akun MyHaritsa adalah seluruh akun yang terdaftar pada aplikasi MyHaritsa
                            oleh Pengguna dan dikuasai oleh Pengguna untuk memanfaatkan fasilitas yang disediakan oleh
                            Haritsa Member.</li>
                        <li>Status member adalah akun MyHaritsa yang terverifikasi dari poin member
                            mejadi Bronzone, Silver dan Gold.</li>
                        <li>Hari Kalender adalah seluruh hari dari hari Senin sampai dengan hari Minggu
                            termasuk didalamnya hari libur, pada kalender masehi.</li>
                        <li>Hari Kerja adalah hari (selain dari Sabtu atau Minggu atau hari libur
                            nasional) pada saat mana bank umumnya buka di Indonesia untuk transaksi bisnis perbankan
                            secara normal.</li>
                        <li>
                            Pengguna atau Pengguna MyHaritsa adalah setiap orang yang terdaftar sebagai pemilik Akun
                            Haritsa Member.
                        </li>
                        <li>
                            Pengguna Tidak Terverifikasi atau Pengguna MyHaritsa Tidak Terverifikasi adalah Pengguna
                            MyHaritsa yang belum atau tidak menyelesaikan syarat verifikasi.
                        </li>
                        <li>
                            Pengguna Terverifikasi atau Pengguna MyHaritsa Terverifikasi adalah Pengguna yang telah
                            menyelesaikan syarat verifikasi dengan cara mengunggah Foto Mesjid, Foto Wajah, Sertifikat,
                            pada akun Pengguna Haritsa Member.
                        </li>
                        <li>
                            Nomor Ponsel adalah nomor telepon seluler (handphone) atau ponsel pintar (smartphone) yang
                            didaftarkan oleh Pengguna untuk mengakses layanan Haritsa Member.
                        </li>
                        <li>
                            Perangkat Telekomunikasi adalah telepon genggam atau telepon seluler (ponsel, handphone),
                            atau ponsel pintar, komputer pribadi berbentuk tablet atau perangkat telekomunikasi lainnya
                            dan menggunakan Sistem Operasi Android atau IOS ataupun sistem operasi lain yang akan ada di
                            masa mendatang, yang teknologinya mendukung layanan MyHaritsa.
                        </li>
                        <li>
                            Poin member adalah hasil konversi dari nilai total nilai belanja pada setiap transaksi yang
                            dilakukan member Haritsa.
                        </li>
                        <li>
                            Promosi atau Promo merupakan penawaran manfaat promosi dan/atau insentif atas penggunaan
                            fitur dan layanan MyHaritsa yang memiliki syarat dan ketentuan khusus terhadap penawaran
                            manfaat promosi dan/atau insentif tersebut.
                            Penentuan jenis dan syarat Promosi merupakan kewenangan mutlak PT Haritsa Pipa Rezeki.
                            Informasi, syarat dan ketentuan terkait setiap program promosi dan/atau insentif akan
                            disediakan melalui media yang dapat diakses dengan mudah oleh Pengguna.
                            PT Haritsa Pipa Rezeki berhak menghentikan atau membatalkan program promosi dan/atau
                            insentif apabila:
                            <ul>
                                <li>terdapat pembatalan terdapat transaksi yang dilakukan oleh Pengguna</li>
                                <li>terdapat tindakan penyalahgunaan promosi/promo (abusive)</li>
                                <li>terdapat tindakan kecurangan terhadap promosi/promo (fraudulent) dan/atau ditemukan
                                    aktivitas mencurigakan lainnya.</li>
                            </ul>
                        </li>
                    </ol>
                </div>

                <div class="section">
                    <h2>II. Ketentuan Umum</h2>
                    <ol type="numeric">
                        <li>Aplikasi MyHaritsa dapat digunakan setelah Pengguna menyetujui Syarat dan Ketentuan dan
                            Kebijakan Privasi pada Aplikasi MyHaritsa, serta melakukan aktivasi atau pendaftaran dengan
                            menggunakan Nomor Ponsel (Handphone) serta memberikan informasi yang dibutuhkan.</li>
                        <li>Setiap Nomor Ponsel (Handphone) hanya dapat digunakan untuk 1 (satu) kali pendaftaran
                            member.</li>
                        <li>Pengguna dengan ini menyatakan bahwa Pengguna adalah subjek hukum yang cakap dan mampu untuk
                            mengikatkan diri dalam Perjanjian.</li>
                        <li>Setiap Pengguna sepakat untuk tidak menyalin, menggunakan atau mengunduh semua informasi,
                            tulisan, gambar, rekaman video, direktori, dokumen, database atau iklan yang ada di Aplikasi
                            MyHaritsa atau yang diperoleh melalui MyHaritsa dengan tujuan apapun termasuk dan tidak
                            terbatas pada di antaranya menjual kembali atau menyebarkan kembali isi MyHaritsa, melakukan
                            pemasaran massal (lewat email, SMS, surat biasa atau media komunikasi lainnya baik itu media
                            elektronik, sosial dan lain sebagainya), memanfaatkan MyHaritsa untuk keperluan komersial di
                            luar kegiatan transaksi di MyHaritsa.</li>
                        <li>Pengguna tidak diperbolehkan mengambil isi MyHaritsa secara sistematis untuk membuat atau
                            menyusun, baik secara langsung maupun tidak langsung, koleksi, kompilasi, database atau
                            direktori (baik menggunakan perangkat otomatis ataupun proses manual) tanpa izin tertulis
                            dari Kami.</li>
                        <li>Saat mengunjungi dan menggunakan MyHaritsa, termasuk setiap fitur dan layanannya, setiap
                            Pengguna tidak diperkenankan untuk:
                            <ol type="a">
                                <li>Melanggar setiap hukum yang berlaku (termasuk tetapi tidak terbatas pada peraturan
                                    mengenai pengawasan ekspor, perlindungan konsumen, persaingan tidak sehat, anti
                                    diskriminasi atau iklan palsu), hak-hak pihak lain baik hak intelektual, asasi, dan
                                    lainnya, dan aturan-aturan yang diatur pada Perjanjian ini.</li>
                                <li>Memberikan informasi dan konten yang salah, tidak akurat, bersifat menyesatkan,
                                    bersifat memfitnah, bersifat asusila, mengandung pornografi, bersifat diskriminasi
                                    atau rasis.</li>
                                <li>Menggunakan data, informasi dan akun-akun yang tidak benar dan yang bersifat
                                    sementara (temporary/disposable) dalam akun Pengguna Terdaftar.</li>
                                <li>Mengambil tindakan yang dapat mengacaukan sistem saran atau masukan dan atau
                                    peringkat (seperti menampilkan, mengimpor atau mengekspor informasi atau masukan
                                    dari situs luar atau menggunakannya untuk tujuan yang tidak terkait dengan
                                    MyHaritsa).</li>
                                <li>Memberikan atau mencantumkan nama akun dan/atau password miliknya di MyHaritsa
                                    (termasuk pada kolom saran atau masukan) atau kepada pihak lain tanpa sepengetahuan
                                    kami.</li>
                                <li>Menyebarkan spam, hal-hal yang tidak berasusila, atau pesan elektronik yang
                                    berjumlah besar, pesan bersambung.</li>
                                <li>Menyebarkan virus atau seluruh teknologi lainnya yang sejenis yang dapat merusak
                                    dan/atau merugikan MyHaritsa, afiliasinya dan pengguna lainnya.</li>
                                <li>Memasukkan atau memindahkan fitur pada MyHaritsa tidak terkecuali tanpa
                                    sepengetahuan dan persetujuan dari Kami.</li>
                                <li>Menyimpan, meniru, mengubah, atau menyebarkan konten dan fitur MyHaritsa, termasuk
                                    cara pelayanan, konten, hak cipta dan intelektual yang terdapat pada MyHaritsa.</li>
                                <li>Mengambil atau mengumpulkan informasi dari pengguna lain, termasuk alamat email,
                                    tanpa sepengetahuan pengguna lain.</li>
                            </ol>
                        </li>
                        <li>MyHaritsa berhak membatasi atau tidak memberikan akses, atau memberikan akses yang berbeda
                            untuk dapat membuka MyHaritsa dan fitur di dalamnya kepada masing-masing Pengguna, atau
                            mengganti salah satu fitur atau memasukkan fitur baru tanpa pemberitahuan sebelumnya.</li>
                        <li>Dengan terus melakukan akses atau terus menggunakan MyHaritsa, pengguna dianggap telah
                            membaca, memahami dan menyetujui ketentuan MyHaritsa tentang Ketentuan dan Kebijakan Privasi
                            yang mengatur masalah penggunaan informasi yang dimasukkan masing-masing Pengguna ke dalam
                            MyHaritsa. Pengguna menerima ketentuan ini serta tambahan atau setiap perubahan atau
                            pembaruannya. Pengguna memahami dan mengetahui secara sadar bahwa Kami dapat mengubah
                            ketentuan tentang Kebijakan Privasi ini sewaktu-waktu dan akan memasukkan versi terbarunya
                            di MyHaritsa. Dengan terus mengakses dan menggunakan MyHaritsa, Pengguna dianggap menerima
                            dan menyetujui ketentuan tentang Kebijakan Privasi yang tercantum di MyHaritsa pada saat
                            digunakan.</li>
                        <li>Pengguna mengetahui dan menyetujui bahwa harga yang tercantum pada MyHaritsa dapat mengalami
                            perubahan secara sewaktu-waktu dan tanpa pemberitahuan terlebih dahulu.</li>
                        <li>Pengguna mengetahui dan menyetujui bahwa apabila Pengguna mengunggah konten dalam bentuk
                            apapun, Pengguna memberikan kepada Kami hak non-eksklusif, di seluruh dunia, secara
                            terus-menerus, tidak dapat dibatalkan, bebas royalty, disublisensikan, hak untuk
                            melaksanakan setiap dan semua hak basis data dan hak kekayaan intelektual yang Pengguna
                            miliki dalam konten.</li>
                    </ol>

                </div>

                <div class="section">
                    <h2>III. Layanan MyHaritsa </h2>
                    <p style="text-align: center">
                        PT HARITSA PIPA REZEKI bersedia untuk menyediakan Layanan MyHaritsa kepada Pengguna, yang
                        meliputi semua produk, fitur, aplikasi, layanan, teknologi, dan perangkat lunak MyHaritsa yang
                        kami sediakan.
                        Layanan ini terdiri dari sejumlah aspek berikut:
                    </p>

                    <ol>
                        <li>
                            Menawarkan informasi yang dipersonalisasikan untuk membuat, menghubungkan, berkomunikasi,
                            menemukan, dan membagikan.
                            <p>
                                Setiap orang berbeda antara satu dengan yang lain. Jadi, kami menyediakan kepada Anda
                                beragam Jenis Akun dan fitur untuk membantu Anda dalam membuat, membagikan,
                                mengembangkan eksistensi Anda, dan berkomunikasi dengan orang lain baik di dalam maupun
                                di luar MyHaritsa.
                                Kami juga ingin mempererat hubungan yang Anda miliki melalui berbagi pengalaman yang
                                berarti bagi Anda.
                                Oleh karena itu, kami mencoba membangun sistem untuk mempererat dan meningkatkan
                                hubungan silahturahmi antara member dengan perusahaan untuk membantu Anda dalam membuat,
                                menemukan dan berpartisipasi dalam membagikan pengalaman-pengalaman yang berarti bagi
                                Anda yang menarik dalam menikmati MyHaritsa di Instagram.
                            </p>
                        </li>
                        <li>
                            Mendorong terciptanya Informasi dan Konten yang bersifat positif, inklusif, dan aman.
                            <p>
                                Kami mengembangkan dan menggunakan fitur serta menawarkan sumber informasi kepada para
                                pengguna yang membantu membuat pengalaman mereka secara positif dan inklusif, termasuk
                                saat kami merasa bahwa mereka mungkin memerlukan bantuan.
                                Kami juga memiliki tim dan sistem yang berfungsi untuk memerangi penyalahgunaan dan
                                pelanggaran Ketentuan dan kebijakan kami, dan menangkal perilaku yang merugikan dan
                                menyesatkan.
                                Kami menggunakan semua informasi yang kami miliki, termasuk informasi Anda, demi menjaga
                                agar platform kami tetap aman.
                                Kami juga dapat membagikan informasi mengenai penyalahgunaan konten atau konten yang
                                merugikan dan bersifat pornografi serta SARA.
                            </p>
                        </li>
                        <li>
                            Mengembangkan dan menggunakan teknologi yang membantu kami dapat berkembang secara
                            konsisten.
                            <p>
                                Mengelola dan menganalisis informasi untuk percepatan informasi merupakan dasar bagi
                                Layanan kami.
                                Bagian besar dari Layanan kami adalah membuat dan menggunakan teknologi termutakhir yang
                                dapat membantu kami dalam mempersonalisasi, melindungi, dan menyempurnakan Layanan kami
                                dalam skala yang luar biasa besar untuk komunitas global yang luas.
                                Teknologi seperti kecerdasan buatan dan pembelajaran mesin sangat mendukung kami dalam
                                menerapkan sejumlah proses yang kompleks di semua Layanan kami.
                                Teknologi otomatis juga membantu kami memastikan fungsionalitas dan integritas Layanan
                                kami.
                            </p>
                        </li>
                        <li>
                            Menghubungkan Anda dengan merek, produk, dan layanan Parenting.
                            <p>
                                Kami menggunakan data dari merek dan produk untuk menampilkan Video Konten Parenting,
                                informasi produk, informasi parenting, iklan, promo, dan konten bersponsor lain yang
                                kami yakini berarti bagi pengguna.
                                Kami juga berupaya untuk membuat konten tersebut agar relevan dengan pengalaman Anda
                                yang lain di MyHaritsa.
                            </p>
                        </li>
                        <li>
                            Penelitian dan inovasi.
                            <p>
                                Kami menggunakan informasi yang kami miliki untuk mempelajari Layanan kami dan
                                berkolaborasi dalam penelitian dengan pihak-pihak lain guna menyempurnakan Layanan kami
                                dan berkontribusi pada kesejahteraan komunitas kami.
                            </p>
                        </li>
                    </ol>

                </div>

                <div class="section">
                    <h2>IV. Fitur-Fitur MyHaritsa</h2>
                    <p style="text-align: center">
                        Pengguna MyHaritsa dapat menikmati fitur-fitur yang sangat bermanfaat untuk meningkatkan
                        kemudahaan dalam pengelolaan informasi produk dan materi parenting bagi MyHaritsa antara lain:
                    </p>

                    <ol>
                        <li>
                            <strong>Promosi</strong>
                            <p>
                                Promosi adalah fitur yang dapat digunakan oleh MyHaritsa dalam mendapatkan informasi
                                harga jual, daftar produk dan syarat ketentuan pada setiap promo yang berlangsung.
                            </p>
                        </li>
                        <li>
                            <strong>Profile Member</strong>
                            <p>
                                Profile Member adalah fitur yang memuat informasi mengenai member, foto member, status
                                member, poin member, pengaturan akun dan peringkat parenting.
                                <em>Peringkat parenting</em> adalah fitur yang dapat digunakan oleh pengguna MyHaritsa
                                yang telah terverifikasi dan hasil dari perhitungan Quiz yang diikuti pengguna
                                MyHaritsa.
                            </p>
                        </li>
                        <li>
                            <strong>Parenting</strong>
                            <p>
                                Parenting merupakan fitur yang dapat digunakan oleh pengguna terverifikasi dalam
                                mendapatkan informasi dan mengikuti Quiz parenting.
                                Poin Quiz parenting akan didapatkan oleh setiap pengguna MyHaritsa setelah menyelesaikan
                                Quiz.
                            </p>
                        </li>
                    </ol>

                </div>

                <div class="section">
                    <h2>V. Pembatasan Tanggung Jawab</h2>
                    <ol>
                        <li>
                            Kewajiban Kami hanyalah sebatas pada penyediaan aplikasi.
                        </li>
                        <li>
                            Bentuk kerugian yang dikarenakan dari tindakan Pengguna yang melanggar Perjanjian ini
                            sepenuhnya adalah tanggung jawab Pengguna di mana Pengguna melepaskan kami dari segala
                            bentuk tanggung jawab, gugatan atau tuntutan pihak-pihak yang dirugikan.
                        </li>
                        <li>
                            Bahwa tidak satupun dari Kami, pemberi lisensi, kontraktor atau pihak-pihak lain yang
                            terkait dalam pembuatan, produksi, penyampaian layanan, atau konten yang terdapat dalam
                            aplikasi yang diharuskan bertanggung jawab terhadap Pengguna ataupun setiap orang yang
                            mengajukan klaim melalui Pengguna, untuk setiap kerugian atas keuntungan atau pendapatan,
                            ketidakakuratan data, kegagalan untuk memperoleh hasil ataupun keuntungan yang diharapkan,
                            kerugian ekonomis, insidental, signifikan, hukuman, kerugian secara tidak langsung (termasuk
                            tetapi tidak terbatas pada biaya-biaya yang diperlukan untuk perbaikan) yang disebabkan
                            karena akses yang Pengguna lakukan ataupun dikarenakan kegagalan mengakses layanan atau
                            konten yang terdapat dalam aplikasi baik berdasarkan jaminan, kontrak, perbuatan melawan
                            hukum, tanggung jawab produk atau teori hukum dan kemungkinan apakah Kami mengetahui ataupun
                            tidak mengenai kemungkinan kerugian tersebut ataupun jika kemungkinan kerugian itu telah
                            dapat diperkirakan sebelumnya. Kami tidak bertanggung jawab kepada Pengguna ataupun kepada
                            pihak lainnya untuk ketidakakuratan, kesalahan, kerusakan atau kerugian yang disebabkan baik
                            oleh karena kegagalan, penundaan, terputusnya layanan dan konten sebagaimana terdapat pada
                            aplikasi, baik seluruh ataupun sebagian. Pengguna menyetujui bahwa dalam setiap kejadian,
                            Pengguna tidak dapat mengajukan klaim kepada Kami atas segala kerugian/kerusakan yang timbul
                            sehubungan dengan akses terhadap layanan atau konten yang terdapat pada aplikasi ataupun hal
                            lain yang timbul sehubungan dengan ketentuan dalam Perjanjian ini. Hal-hal tersebut di atas
                            akan tetap berlaku meskipun terjadi pengakhiran terhadap Perjanjian ini ataupun telah habis
                            jangka waktu berlakunya.
                        </li>
                    </ol>

                </div>

                <div class="section">
                    <h2>VI. Hak Milik Intelektual</h2>
                    <div class="highlight">
                        <p style="text-align: center">
                            Kami adalah pemilik tunggal atau pemegang sah semua hak atas dan isi dalam Aplikasi
                            MyHaritsa. MyHaritsa dan isinya mencakup hak milik intelektual yang dilindungi oleh
                            undang-undang hak cipta dan undang-undang yang melindungi kekayaan intelektual lainnya yang
                            berlaku di seluruh dunia. Semua hak milik dan hak milik intelektual atas aplikasi dan isinya
                            tetap pada Kami, afiliasinya atau pemilik lisensi isi aplikasi. Semua hak yang tidak
                            dicantumkan di dalam Perjanjian ini atau oleh Kami dengan ini dilindungi undang-undang.
                            Aplikasi, nama, dan ikon serta logo terkait merupakan merek dagang terdaftar di berbagai
                            wilayah hukum dan dilindungi undang-undang tentang hak cipta, merek dagang atau hak milik
                            kekayaan intelektual lainnya. Dilarang keras menggunakan, mengubah, atau memasang
                            merek-merek tersebut di atas pada media apapun tanpa persetujuan Kami.
                        </p>
                    </div>
                </div>

                <div class="section">
                    <h2>VIII. Pembaharuan</h2>
                    <p style="text-align: center">Pengguna memahami bahwa Kami sewaktu–waktu dapat melakukan perubahan (pengurangan atau penambahan) ketentuan dalam Perjanjian ini. Kami menyarankan agar Pengguna secara berkala dan seksama melihat Perjanjian ini. Dengan tetap mengakses dan/atau menggunakan Situs bkmqu, maka Pengguna dianggap telah menyetujui perubahan–perubahan dalam kebijakan privasi ini. </p>
                </div>

                <div class="section">
                    <h2>IX. Pilihan Hukum dan Penyelesaian Perselisihan</h2>
                    <p style="text-align: center">Perjanjian ini diatur dan ditafsirkan berdasarkan Hukum Indonesia. Segala perselisihan yang mungkin timbul antara Pengguna dengan Kami sehubungan dengan penggunakan aplikasi dan/atau pelaksanaan Perjanjian ini akan diselesaikan secara eksklusif dalam yurisdiksi pengadilan Republik Indonesia.</p>
                </div>

                <div class="section">
                    <h2>X. Penutup</h2>
                    <ol>
                        <li>1. Kami dan Pengguna merupakan hubungan independen dan tidak ada hubungan kagenan, kemitraan, usaha patungan, karyawan-perusahaan atau pemilik waralaba-pewaralaba yang akan dibuat atau dibuat dengan adanya Perjanjian ini.</li>
                        <li>2. Judul di dalam Perjanjian ini dibuat sebagai acuan saja, dan sama sekali tidak menetapkan, membatasi, menjelaskan atau menjabarkan apa yang ada atau tercakup dalam pasal tersebut.</li>
                    </ol>
                </div>

                <div class="contact-info">
                    <h3>Hubungi Kami</h3>
                    <div class="contact-item">
                        <span class="contact-icon">📧</span>
                        <span>Email: support@haritsa.com</span>
                    </div>
                    <div class="contact-item">
                        <span class="contact-icon">📞</span>
                        <span>Telepon: +62 21 1234 5678</span>
                    </div>
                    <div class="contact-item">
                        <span class="contact-icon">📍</span>
                        <span>Alamat: Medan, Indonesia</span>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 Haritsa Babyshop. Semua hak dilindungi undang-undang.</p>
        </div>
    </footer>
</body>

</html>
