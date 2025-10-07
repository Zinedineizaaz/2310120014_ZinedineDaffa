<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Team - Dimsaykuu</title>
    
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
                        <a class="nav-link active" aria-current="page" href="/team" style="color: #6a4406 !important;">Our Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        
        <header class="text-center mb-5">
            <h1 class="display-4 fw-bold text-info">Meet Our Team</h1>
            <p class="lead text-secondary">Kami adalah tim yang bersemangat di balik setiap gigitan Dimsum lezat.</p>
        </header>

        <div class="row justify-content-center">
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 shadow border-info">
                    <div class="card-body text-center">
                        <h4 class="card-title text-dark mt-2 fw-bold">Agus Saputra Hamzah</h4>
                        <p class="text-info mb-1 fw-semibold">2310120018</p>
                        <span class="badge bg-light text-secondary">Developer</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 shadow border-info">
                    <div class="card-body text-center">
                        <h4 class="card-title text-dark mt-2 fw-bold">Khairan Noor Fadhlillah</h4>
                        <p class="text-info mb-1 fw-semibold">2310120022</p>
                        <span class="badge bg-light text-secondary">Designer</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 shadow border-info">
                    <div class="card-body text-center">
                        <h4 class="card-title text-dark mt-2 fw-bold">Zinedine Daffa Izaaz</h4>
                        <p class="text-info mb-1 fw-semibold">2310120014</p>
                        <span class="badge bg-light text-secondary">Product Manager</span>
                    </div>
                </div>
            </div>

        </div>
        
        <div class="text-center mt-4">
            <p class="text-muted">Kelompok mahasiswa pengembang proyek Dimsaykuu.</p>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>