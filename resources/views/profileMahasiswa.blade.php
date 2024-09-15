<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoring PKL - Profil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="logo">
                <h2>Monitoring PKL</h2>
            </div>
            <nav>
                <ul>
                    <li><a href="#">Profil</a></li>
                    <li><a href="#">Dosen Pembimbing</a></li>
                    <li><a href="#">Informasi PKL</a></li>
                    <li><a href="#">Monitoring PKL</a></li>
                    <li><a href="#">Laporan</a></li>
                    <li><a href="#">Seminar</a></li>
                    <li><a href="#">Download</a></li>
                </ul>
            </nav>
        </aside>

        <main class="content">
            <header class="header">
                <div class="profile-info">
                    <img src="profile.jpg" alt="Profile Picture" class="profile-pic">
                    <div class="profile-name">
                        <p>Eunike Alfrifa MW</p>
                        <p>187345678</p>
                    </div>
                    <button class="logout">Logout</button>
                </div>
            </header>

            <section class="profile-section">
                <h2>Profil</h2>
                <div class="profile-form">
                    <form>
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" placeholder="Nama Lengkap">
                        
                        <label>NIM</label>
                        <input type="text" name="nim" placeholder="NIM">
                        
                        <label>Program Studi</label>
                        <input type="text" name="program_studi" placeholder="Program Studi">
                        
                        <label>Email</label>
                        <input type="email" name="email" placeholder="Email">
                        
                        <label>Nomor HP</label>
                        <input type="text" name="nomor_hp" placeholder="Nomor HP">
                        
                        <label>Dosen Wali</label>
                        <input type="text" name="dosen_wali" placeholder="Dosen Wali">
                    </form>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
