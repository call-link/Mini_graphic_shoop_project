<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
    <link rel="stylesheet" href="assets/css/fontawesome-free-6.5.1-web/fontawesome-free-6.5.1-web/css/all.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-free-6.5.1-web/fontawesome-free-6.5.1-web/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/admin_style/index_2.css">
</head>
<body>
    
<!-- head name start -->
<header>
    <div class="head_name">
        <h1>
            Admin Panel
        </h1>
    </div>
</header>
<!-- head name end -->
    

<!-- sidebar start -->
    <aside>
        <div class="side_bar">
            <div class="boutton_side">
                <a href="#" class="button"> 
                    <i class="fa-solid fa-user-gear"></i>
                    <p class="botton_text">profile</p>
                </a>
                <a href="#" class="button">
                    <i class="fa-regular fa-image"></i>
                    <p class="botton_text">image</p>
                </a>
                <a href="#" class="button">
                    <i class="fa-regular fa-lightbulb"></i>
                    <p class="botton_text">skills</p>
                </a>
                <a href="#" class="button">
                    <i class="fa-solid fa-pencil"></i>
                    <p class="botton_text">about me</p>
                </a>
                <a href="#" class="button">
                    <i class="fa-solid fa-certificate"></i>
                    <p class="botton_text">Certificate</p>
                </a>
                <a href="#" class="button">
                    <i class="fa-solid fa-paper-plane"></i>
                    <p class="botton_text">contact me</p>
                </a>
            </div>
        </div>
    </aside>
<!-- sidebar end -->
 

<!-- input contact start -->
    <form action="../proccess/proccess_contact_me.php?action=edit" method="post" > 
        <div class="cont_sec">
            <h3 class="form_text">Add New Skill</h3>  
            <div class="cont_form">
                <label for="edit_btn" class="inp_btn edit_btn mar_0">Add Skill
                    <input type="submit" name="submit" value="" id="edit_btn">
                </label>
            <label for="phon_inp" class="inp">Name Skill
                <input type="text" name="phone" value="" class="color_te" id="phon_inp" required>
            </label>
                <div class="btn_sec">
                <label for="edit_btn" class="inp_btn edit_btn">Edit
                    <input type="submit" name="submit" value="" id="edit_btn">
                </label>
                <label for="edit_btn" class="inp_btn edit_btn del_color">Delete
                    <input type="submit" name="submit" value="" id="edit_btn">
                </label>
                </div>
            </div>
        </div>
    </form>
<!-- input contact end -->

    <script src="assets/js/script.js"></script>
</body>
</html>
