<?php
    session_start();
    if (!isset($_SESSION['UserID']) && !isset($_SESSION['Privileges'])) {
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <?php 
        include 'Includes/navbar.php';
    ?>
    <section class="student_panel">
    <div class="d-flex align-items-start">
  <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <button class="nav-link active" id="v-pills-dashboard-tab" data-bs-toggle="pill" data-bs-target="#v-pills-dashboard" type="button" role="tab" aria-controls="v-pills-dashboard" aria-selected="true"><i class="bi bi-columns-gap"></i> Dashboard</button>
    <button class="nav-link" id="v-pills-student profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-student-profile" type="button" role="tab" aria-controls="v-pills-student-profile" aria-selected="false"><i class="bi bi-person-lines-fill"></i> Student Profile</button>
    <button class="nav-link" id="v-pills-create-tab" data-bs-toggle="pill" data-bs-target="#v-pills-create" type="button" role="tab" aria-controls="v-pills-create" aria-selected="false"><i class="bi bi-person-plus-fill"></i> Create</button>
    <button class="nav-link" id="v-pills-update-tab" data-bs-toggle="pill" data-bs-target="#v-pills-update" type="button" role="tab" aria-controls="v-pills-update" aria-selected="false"><i class="bi bi-pencil-square"></i> Update</button>
    <button class="nav-link" id="v-pills-feedback-tab" data-bs-toggle="pill" data-bs-target="#v-pills-feedback" type="button" role="tab" aria-controls="v-pills-feedback" aria-selected="false"><i class="bi bi-chat-left-dots"></i> Feedback</button>
  </div>
  <div class="tab-content" id="v-pills-tabContent">
    <div class="tab-pane fade show active" id="v-pills-dashboard" role="tabpanel" aria-labelledby="v-pills-dashboard-tab" tabindex="0">Hello!   </div>
    <div class="tab-pane fade" id="v-pills-student-profile" role="tabpanel" aria-labelledby="v-pills-student-profile-tab" tabindex="0">...</div>
    <div class="tab-pane fade" id="v-pills-create" role="tabpanel" aria-labelledby="v-pills-create-tab" tabindex="0">...</div>
    <div class="tab-pane fade" id="v-pills-update" role="tabpanel" aria-labelledby="v-pills-update-tab" tabindex="0">...</div>
    <div class="tab-pane fade" id="v-pills-feedback" role="tabpanel" aria-labelledby="v-pills-feedback-tab" tabindex="0">...</div>
  </div>
</div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>