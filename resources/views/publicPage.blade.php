<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NISU Lemery Campus | Public Library Portal</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('template/adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/adminlte/dist/css/adminlte.min.css') }}">

<style>
body {
    background: #f4f6f9;
}

/* HEADER */
.portal-header {
    background: linear-gradient(135deg, #007bff, #1e3a8a);
    color: white;
    padding: 2.5rem 1rem;
    text-align: center;
}

.portal-header h1 {
    font-weight: 700;
}

.portal-header p {
    opacity: 0.9;
}

/* SEARCH BAR */
.search-box {
    max-width: 600px;
    margin: 20px auto;
}

/* CARD GRID */
.catalog-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    gap: 20px;
    padding: 30px;
}

/* CARD STYLE */
.catalog-card {
    background: white;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 6px 20px rgba(0,0,0,0.08);
    transition: 0.2s;
}

.catalog-card:hover {
    transform: translateY(-5px);
}

.catalog-card img {
    width: 100%;
    height: 160px;
    object-fit: cover;
}

.catalog-body {
    padding: 15px;
}

.catalog-title {
    font-weight: 600;
    font-size: 16px;
    margin-bottom: 5px;
}

.catalog-meta {
    font-size: 13px;
    color: #6c757d;
}

/* LOGIN BUTTON */
.portal-login {
    position: absolute;
    right: 20px;
    top: 20px;
}

@media (max-width: 768px) {
    .portal-login {
        position: static;
        margin-top: 10px;
    }
}
</style>

</head>

<body>

<!-- HEADER -->
<div class="portal-header position-relative">

    <div class="portal-login">
        <a href="/login" class="btn btn-light btn-sm">
            <i class="fas fa-sign-in-alt"></i> Login
        </a>
    </div>

    <h1>Northern Iloilo State University</h1>
    <h4>Lemery Campus Library Portal</h4>

    <p>Browse available books, journals, and academic resources</p>

    <!-- SEARCH -->
    <div class="search-box">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search catalog (UI only)">
            <div class="input-group-append">
                <span class="input-group-text bg-white">
                    <i class="fas fa-search"></i>
                </span>
            </div>
        </div>
    </div>

</div>

<!-- CATALOG SECTION -->
<div class="catalog-grid">

    <!-- SAMPLE CARD 1 -->
    <div class="catalog-card">
        <img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?q=80&w=800">
        <div class="catalog-body">
            <div class="catalog-title">Introduction to Computer Science</div>
            <div class="catalog-meta">Category: Technology • Available</div>
        </div>
    </div>

    <!-- SAMPLE CARD 2 -->
    <div class="catalog-card">
        <img src="https://images.unsplash.com/photo-1455885666463-8d6c4a4f8c1d?q=80&w=800">
        <div class="catalog-body">
            <div class="catalog-title">World History Vol. 1</div>
            <div class="catalog-meta">Category: History • Available</div>
        </div>
    </div>

    <!-- SAMPLE CARD 3 -->
    <div class="catalog-card">
        <img src="https://images.unsplash.com/photo-1507842217343-583bb7270b66?q=80&w=800">
        <div class="catalog-body">
            <div class="catalog-title">English Literature Anthology</div>
            <div class="catalog-meta">Category: Literature • Available</div>
        </div>
    </div>

    <!-- SAMPLE CARD 4 -->
    <div class="catalog-card">
        <img src="https://images.unsplash.com/photo-1555949963-aa79dcee981c?q=80&w=800">
        <div class="catalog-body">
            <div class="catalog-title">Basic Mathematics</div>
            <div class="catalog-meta">Category: Education • Available</div>
        </div>
    </div>

</div>

</body>
</html>