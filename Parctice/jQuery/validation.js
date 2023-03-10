if ( window.history.replaceState ){window.history.replaceState( null, null, window.location.href );} // stop resubmission

$(document).ready(function()
{

    if(confirmation === 1)
    {
        $("#confirmation_container").removeClass("d-none")
        $("#confirmation_text").addClass("bg-success")
        $("#confirmation_text").text("Registered Successfully!")
        setTimeout(function(){
    
        $("#confirmation_container").addClass("d-none")
    
        },3000)
    }
    else if(confirmation === 2)
    {
        $("#confirmation_container").removeClass("d-none")
        $("#confirmation_text").addClass("bg-danger")
        $("#confirmation_text").text("Username Already Exist!")
        setTimeout(function(){
        
        $("#confirmation_container").addClass("d-none")
    
        },3000)
    }
    else if(confirmation === 3)
    {
        $("#confirmation_container").removeClass("d-none")
        $("#confirmation_text").addClass("bg-danger")
        $("#confirmation_text").text("Invalid username or password!")
        setTimeout(function(){
        
        $("#confirmation_container").addClass("d-none")
    
        },3000)
    }

})

$("#mobile_number").on("input", function(){
    if ($(this).val().length > 11) {
        $(this).val($(this).val().slice(0, 11));
    }
});

$("#email").on("input", function(){
    var email = $(this).val();
    var pattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if ($(this).val().trim().length != 0 && !pattern.test(email)){
        $(this).addClass("is-invalid")
    }
    else
    {
        $(this).removeClass("is-invalid")
    }
});

$("#fname").on("input", function()
{
    if ($(this).val().trim().length != 0){
        $(this).removeClass("is-invalid")
    }
})

$("#username").on("input", function()
{
    if ($(this).val().trim().length != 0){
        $(this).removeClass("is-invalid")
    }
})

$("#password").on("input", function()
{
    if ($(this).val().trim().length != 0){
        $(this).removeClass("is-invalid")
    }
})


$("#confirm_password").on("input", function()
{
    if ($(this).val().trim().length != 0){
        $(this).removeClass("is-invalid")
    }
})

function register()
{
    var fname = $("#fname").val()
    var username = $("#username").val()
    var mobile = $("#mobile_number").val()
    var email = $("#email").val()
    var password = $("#password").val()
    var confirm_password = $("#confirm_password").val()
    var validator = true

    if(fname.trim().length === 0)
    {
        $("#fname").addClass("is-invalid")
        validator = false
    }

    if(username.trim().length === 0)
    {
        $("#username").addClass("is-invalid")
        validator = false
    }

    if(password.trim().length === 0)
    {
        $("#password").addClass("is-invalid")
        validator = false
    }

    if(confirm_password.trim().length === 0)
    {
        $("#confirm_password").addClass("is-invalid")
        $(".for_confirm_password").text("Invalid password confirmation!")
        validator = false
    }

    if(confirm_password != password)
    {
        $("#confirm_password").addClass("is-invalid")
        $(".for_confirm_password").text("Password and password confirmation doesn't match!")
        validator = false
    }

    if(validator === true)
    {
        $("#submit").prop("type", "submit");
    }

}

function login()
{
    var username = $("#username").val()
    var password = $("#password").val()
    var validator = true

    if(username.trim().length === 0)
    {
        $("#username").addClass("is-invalid")
        validator = false
    }

    if(password.trim().length === 0)
    {
        $("#password").addClass("is-invalid")
        validator = false
    }

    if(validator === true)
    {
        $("#login").prop("type", "submit");
    }
}

$("#submit").click(function(){
    register()
})


$("#login").click(function(){
   login()
   
})

$("#logout").click(function(){

    $("#logout").prop("type", "submit");
    
 })