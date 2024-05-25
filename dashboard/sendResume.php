<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Stardos+Stencil:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Stardos+Stencil:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <title>Send Resume</title>
</head>

<body>
    <nav class="navbar">
        <div class="logo-container">
        <i class="fa-solid fa-arrow-left back" onclick="history.back()"> </i>  
            <img src="../img/logo.png" alt="" width="200" class="logo">
        </div>
        
    </nav>
    <div class="p-5 py-0 d-flex justify-content-center">
        <div class=" p-3 m-0 w-25">
            <div class="job-container p-3 text-start text-dark rounded-3 mt-5">
                <h4 class="fw-bold text-center bg-light p-3">Attached File <i class="fa-solid fa-paperclip"></i></h4>
                <div class="py-3">
                    <label for="resume" class="form-label">Resume</label>
                    <input type="file" class="form-control" name="resume">
                    <label for="birthCert" class="form-label">Photocopy of Birth Certificate</label>
                    <input type="file" class="form-control" name="birthCert">
                    <label for="vId" class="form-label">Valid ID</label>
                    <input type="file" class="form-control" name="vId">
                </div>
                <div class="d-flex justify-content-end gap-1">
                    <button class="btn quali-container fw-bold text-light ">&nbsp Send &nbsp</button>
                    <button class="btn quali-container fw-bold text-light ">&nbsp Cancel &nbsp</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>