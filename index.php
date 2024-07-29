<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YouTube</title>
    <!-- This file has been cloned from https://github.com/lailyn/uas-rw-2024 -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 56px;
            background-color: #f9f9f9;
        }
        .navbar {
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand {
            font-weight: bold;
            color: #ff0000;
        }
        .form-control {
            width: 400px;
        }
        .card {
            border: none;
            margin-bottom: 30px;
        }
        .card-img-top {
            height: 180px;
            object-fit: cover;
        }
        .card-title {
            font-size: 16px;
            font-weight: bold;
            margin-top: 10px;
        }
        .card-text {
            font-size: 14px;
            color: #606060;
        }
        .text-muted {
            font-size: 12px;
            color: #909090;
        }
       
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">

            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="red" class="bi bi-youtube" viewBox="0 0 16 16">
        <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
        </svg>
        <a class="navbar-brand" href="#">YouTube</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <form class="form-inline mx-auto">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" class="bi bi-search" >
                <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="danger" class="bi bi-mic-fill" viewBox="0 0 16 16" >
                <path d="M5 3a3 3 0 0 1 6 0v5a3 3 0 0 1-6 0z"/>
                <path d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5"/>
                </svg>
                </a>
            </form>
            <ul class="navbar-nav">
                <li class="nav-item">
                <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg"  width="23" height="23" fill="danger" class="bi bi-bell" viewBox="0 0 16 16" >
                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6"/>
                </svg> </a>
                <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg"  width="23" height="23" fill="danger" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path  d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                </svg>
                </a>
            </ul>
        </div>
    </nav>


                    <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-secondary disabled" type="button">All</button>
                <button class="btn btn-secondary disabled" type="button">Music</button>
                <button class="btn btn-secondary disabled" type="button">Gaming</button>
                <button class="btn btn-secondary disabled" type="button">Marvel</button>
                <button class="btn btn-secondary disabled" type="button">Traillers</button>
                <button class="btn btn-secondary disabled" type="button">live</button>
                <button class="btn btn-secondary disabled" type="button">Horror Comedies</button>
                <button class="btn btn-secondary disabled" type="button">Laptop Gaming</button>
                <button class="btn btn-secondary disabled" type="button">News</button>
                <button class="btn btn-secondary disabled" type="button">Apple</button>
                <button class="btn btn-secondary disabled" type="button">Tablet</button>
                <button class="btn btn-secondary disabled" type="button">AI</button>
                <button class="btn btn-secondary disabled" type="button">Sketch Comedy</button>
                <button class="btn btn-secondary disabled" type="button">Game Show</button>
                <a href="#" class="gap-20">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="danger" class="bi bi-arrow-right-circle gap-10" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
                </svg>
                </a>
                </div>

    <!-- Content -->
    <div class="content container mt-4">
        <div class="row">
            <?php
            include "tangkapData.php";
            $aksi = new Tangkap;
            $data = $aksi->setUrl("https://lailyn.github.io/uas-rw-2024/youtube_videos_20.json");            
            foreach($data as $key => $ambilData){
            ?>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="<?=$ambilData['thumbnail']?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?=$ambilData['title']?></h5>
                        <p class="card-text"><?=$ambilData['channel_name']?></p>
                        <p class="text-muted"><?=$ambilData['views']?> views • <?=$ambilData['upload_date']?></p>
                        <!-- Button to open modal -->
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#commentsModal<?=$key?>">
                            View Comments
                        </button>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="commentsModal<?=$key?>" tabindex="-1" aria-labelledby="commentsModalLabel<?=$key?>" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="commentsModalLabel<?=$key?>">Comments for <?=$ambilData['title']?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?php foreach ($ambilData['comments'] as $comment) { ?>
                                <div class="comment mb-3">
                                    <strong><?=$comment['user']?></strong> <small><?=$comment['comment_date']?></small>
                                    <p><?=$comment['comment']?></p>
                                    <p><small><?=$comment['likes']?> likes</small></p>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
