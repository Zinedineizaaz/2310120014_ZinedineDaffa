<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us - Dimsaykuu</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .bg-dims-gradient {
            background: linear-gradient(to right, #FFD700, #FF8C00); 
        }
        .bg-dims-gradient .navbar-nav .nav-link {
            color: #333 !important; 
            font-weight: 500;
        }
        .bg-dims-gradient .navbar-brand {
            color: #333 !important; 
        }
        .bg-dims-gradient .navbar-toggler-icon {
            filter: brightness(0.3); 
        }
        .btn-contact {
            background-color: #dc3545;
            color: white;
            border: none;
            transition: background-color 0.3s;
        }
        .btn-contact:hover {
            background-color: #c82333;
            color: white;
        }
    </style>

</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dims-gradient shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">Dimsaykuu</a> 
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/program">Program</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/team">Our Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/contact" style="color: #6a4406 !important;">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        
        <header class="text-center mb-5">
            <h1 class="display-4 fw-bold text-warning">Kontak Kami</h1>
            <p class="lead text-secondary">Kami siap membantu Anda. Hubungi kami melalui formulir, telepon, atau media sosial.</p>
        </header>

        <div class="row justify-content-center">
            
            <div class="col-lg-6 mb-4">
                <div class="card p-4 border-0 shadow-lg">
                    <h5 class="card-title text-warning mb-4">Kirim Pesan Cepat</h5>
                    
                    <form>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label">Pesan Anda</label>
                            <textarea class="form-control" id="pesan" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-contact w-100">Kirim Pesan</button>
                    </form>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card p-4 border-warning shadow-lg h-100">
                    <h5 class="card-title text-warning mb-4">Detail Kontak</h5>
                    
                    <div class="d-flex align-items-center mb-3">
                        <i class="bi bi-phone-fill text-danger fs-4 me-3"></i>
                        <div>
                            <p class="mb-0 fw-bold">Telepon/WhatsApp</p>
                            <a href="tel:083136892742" class="text-decoration-none text-dark">(0831) 3689 2742</a>
                        </div>
                    </div>

                    <hr>

                    <div class="d-flex align-items-center mb-3">
                        <i class="bi bi-envelope-fill text-danger fs-4 me-3"></i>
                        <div>
                            <p class="mb-0 fw-bold">Email</p>
                            <a href="mailto:dimsai@umkm.com" class="text-decoration-none text-dark">dimsai@umkm.com</a>
                        </div>
                    </div>
                    
                    <hr>
                    
                    <a href="https://wa.me/6283136892742" target="_blank" class="btn btn-warning mt-auto fw-bold">
                        Pesan Dimsum via WhatsApp
                    </a>

                </div>
            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</body>
</html>