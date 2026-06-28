<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <title>NISU Lemery Campus | Public Library Portal</title>

    <!-- AdminLTE -->
    <link rel="stylesheet" href="{{ asset('template/adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/adminlte/dist/css/adminlte.min.css') }}">

    <style>
        body {
            background: #f4f6f9;
        }

        /* HEADER */
        .portal-header {
            position: relative;
            height: 280px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;

            background: url('{{ asset("images/school.jpg") }}') center/cover no-repeat;
        }

        .portal-header::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg,
                    rgba(13, 110, 253, 0.85),
                    rgba(30, 58, 138, 0.85));
        }

        .header-content {
            position: relative;
            z-index: 2;
        }

        .portal-login {
            position: absolute;
            right: 20px;
            top: 20px;
            z-index: 3;
        }

        /* TOOLBAR */
        .toolbar {
            max-width: 1100px;
            margin: 20px auto;
            padding: 0 15px;
        }

        .filter-btn {
            margin: 3px;
            border-radius: 20px;
        }

        /* GRID */
        .catalog-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
            gap: 20px;
            padding: 20px;
            max-width: 1200px;
            margin: auto;
        }

        .card-catalog {
            border-radius: 10px;
            overflow: hidden;
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
            transition: 0.2s;
        }

        .card-catalog:hover {
            transform: translateY(-5px);
        }

        .card-catalog img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }
    </style>
</head>

<body>

<!-- HEADER -->
<div class="portal-header">

    <div class="portal-login">
        <a href="/login" class="btn btn-light btn-sm">
            <i class="fas fa-sign-in-alt"></i> Login
        </a>
    </div>

    <div class="header-content">
        <h2>Northern Iloilo State University</h2>
        <h4>Lemery Campus Library Portal</h4>
        <p>Browse available books and academic resources</p>
    </div>

</div>

<!-- TOOLBAR -->
<div class="toolbar">

    <!-- SEARCH -->
    <div class="input-group mb-3">
        <input type="text" id="searchInput" class="form-control" placeholder="Search books...">
        <div class="input-group-append">
            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
        </div>
    </div>

    <!-- FILTER -->
    <div class="text-center">
        <button class="btn btn-primary btn-sm filter-btn" onclick="filterCat('all')">All</button>
        <button class="btn btn-outline-primary btn-sm filter-btn" onclick="filterCat('tech')">Tech</button>
        <button class="btn btn-outline-primary btn-sm filter-btn" onclick="filterCat('history')">History</button>
        <button class="btn btn-outline-primary btn-sm filter-btn" onclick="filterCat('literature')">Literature</button>
        <button class="btn btn-outline-primary btn-sm filter-btn" onclick="filterCat('math')">Math</button>
    </div>
</div>

<!-- GRID -->
<div class="catalog-grid">

    <div class="card card-catalog tech">
        <img src="https://images.unsplash.com/photo-1518770660439-4636190af475">
        <div class="card-body">
            <b class="title">Computer Science Basics</b>
        </div>
    </div>

    <div class="card card-catalog tech">
        <img src="https://images.unsplash.com/photo-1555949963-aa79dcee981c">
        <div class="card-body">
            <b class="title">Programming Fundamentals</b>
        </div>
    </div>

    <div class="card card-catalog history">
        <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa">
        <div class="card-body">
            <b class="title">World History Vol. 1</b>
        </div>
    </div>

    <div class="card card-catalog literature">
        <img src="https://images.unsplash.com/photo-1455885666463-8d6c4a4f8c1d">
        <div class="card-body">
            <b class="title">English Literature</b>
        </div>
    </div>

    <div class="card card-catalog math">
        <img src="https://images.unsplash.com/photo-1509228468518-180dd4864904">
        <div class="card-body">
            <b class="title">Basic Mathematics</b>
        </div>
    </div>

</div>

<!-- PAGINATION -->
<div class="d-flex justify-content-center mt-3">
    <button class="btn btn-outline-primary btn-sm mr-2" onclick="prevPage()">Prev</button>
    <span id="pageInfo"></span>
    <button class="btn btn-outline-primary btn-sm ml-2" onclick="nextPage()">Next</button>
</div>

<!-- FOOTER -->
<footer style="background:#1f2937; color:#e5e7eb; padding:40px 20px; margin-top:30px;">

    <div class="container">

        <div class="row">

            <div class="col-md-4 mb-3">
                <h5 style="font-weight:700; color:#fff;">
                    Northern Iloilo State University
                </h5>
                <p style="margin-bottom:5px;">
                    Lemery Campus Library Portal
                </p>
                <small>
                    Republic of the Philippines<br>
                    Higher Education Institution (HEI)
                </small>
            </div>

            <div class="col-md-4 mb-3">
                <h6 style="font-weight:600; color:#fff;">Quick Links</h6>
                <ul style="list-style:none; padding:0;">
                    <li><a href="/" style="color:#e5e7eb;">Home</a></li>
                    <li><a href="/login" style="color:#e5e7eb;">Login</a></li>
                    <li><a href="#" style="color:#e5e7eb;">Catalog</a></li>
                </ul>
            </div>

            <div class="col-md-4 mb-3">
                <h6 style="font-weight:600; color:#fff;">Legal</h6>
                <ul style="list-style:none; padding:0;">
                    <li><a href="#" style="color:#e5e7eb;">Privacy Policy</a></li>
                    <li><a href="#" style="color:#e5e7eb;">Terms</a></li>
                </ul>
            </div>

        </div>

        <hr style="border-color:#374151;">

        <div class="d-flex justify-content-between">
            <small>© {{ now()->year }} NISU Lemery Campus</small>
            <small>Library Portal v1.0</small>
        </div>

    </div>
</footer>

<!-- SCRIPT -->
<script>
let currentCategory = 'all';
let currentPage = 1;
let perPage = 4;

function getItems() {
    let search = document.getElementById('searchInput').value.toLowerCase();
    let items = Array.from(document.querySelectorAll('.card-catalog'));

    return items.filter(item => {
        let title = item.querySelector('.title').innerText.toLowerCase();
        let matchCat = item.classList.contains(currentCategory) || currentCategory === 'all';
        let matchSearch = title.includes(search);
        return matchCat && matchSearch;
    });
}

function render() {
    let items = getItems();
    let totalPages = Math.ceil(items.length / perPage);

    if (currentPage > totalPages) currentPage = totalPages || 1;
    if (currentPage < 1) currentPage = 1;

    document.querySelectorAll('.card-catalog').forEach(el => el.style.display = 'none');

    let start = (currentPage - 1) * perPage;
    let end = start + perPage;

    items.slice(start, end).forEach(el => el.style.display = 'block');

    document.getElementById('pageInfo').innerText =
        `Page ${currentPage} of ${totalPages || 1}`;
}

function filterCat(cat) {
    currentCategory = cat;
    currentPage = 1;
    render();
}

document.getElementById('searchInput').addEventListener('keyup', () => {
    currentPage = 1;
    render();
});

function nextPage() {
    currentPage++;
    render();
}

function prevPage() {
    currentPage--;
    render();
}

render();
</script>

</body>
</html>