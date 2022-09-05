
function userName() {
    var input = document.getElementById("username").value.match('/^[a-zA-Z0-9_]+$/', trim(username));
    console.log(input)
}