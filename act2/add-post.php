<?php
session_start();
include 'functions/post-functions.php';

if(isset($_POST['post'])){
    addPost();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog: Add Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/main-style.css">
    <link rel="stylesheet" href="css/add-post.css">
</head>

<body>
    <header>
        <?php 
        include 'admin-menu.php';
        ?>
        <div class="container-fluid bg-primary bg-gradient text-white p-4 ps-5">
            <h2 class="display-2"><i class="fas fa-pen-nib me-3"></i>Post</h2>        
        </div>
    </header>
    <main class="container w-50 mx-auto">

        <a href="posts.php" class="text-secondary"><i class="fas fa-chevron-left fa-2x"></i></a>

        <h2 class="display-4 text-center my-4"><i class="far fa-edit me-1"></i>Add Post</h2>

        <div class="col-10 mx-auto">
            <form method="post">
                <input type="text" name="title" class="form-control mb-3" placeholder="TITLE" required autofocus>

                <input type="date" name="date_posted" class="form-control mb-3" required>

                <select name="category_id" class="form-select mb-3" required>
                    <?php
                    displayCategories();
                    ?>
                </select>

                <textarea name="message" class="form-control mb-3" rows="7" placeholder="MESSAGE"></textarea>

                <div class="input-group">
                    <span class="input-group-text bg-dark bg-opacity-75 rounded-0 text-white">Author</span>
                    <select name="author_id" class="form-select">
                        <?php
                        displayUsers();
                        ?>
                    </select>
                </div>
                
                <button type="submit" name="post" class="btn btn-dark w-100 mt-5 text-uppercase">Post</button>
            </form>
        </div>
    </main>
</body>

</html>
