document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("emailForm").addEventListener("submit", function(event) {
        event.preventDefault();

        var email = document.getElementById("email").value;
        var message = document.getElementById("message").value;

        var xhr = new XMLHttpRequest();
        xhr.open("POST", "send_email.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                document.getElementById("status").innerHTML = xhr.responseText;
            }
        };
        xhr.send("email=" + email + "&message=" + message);
    });
});