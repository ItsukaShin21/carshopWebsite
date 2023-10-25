<<<<<<< Updated upstream
=======
function validateForm() {
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var confirm_password = document.getElementById("confirm_password").value;

    if (username === '' || email === '' || password === '' || confirm_password === '') {
        alert("All fields must be filled.");
        return false;
    }
}

document.addEventListener('DOMContentLoaded', function () {
    var branchSelect = document.getElementById('branch');
    var buyedcarSelect = document.getElementById('buyedcar');
    
    branchSelect.addEventListener('input', function() {
        var branch = this.value;
        var formData = new FormData();
        formData.append('branch', branch);
        
        fetch('customerlistPage.php', {
            method: 'POST',
            body: formData,
        })
        .then(response => response.text())
        .then(data => {
            buyedcarSelect.innerHTML = data;
        });
    });

    branchSelect.addEventListener('focus', function() {
        var branch = this.value;
        var formData = new FormData();
        formData.append('branch', branch);
        
        fetch('customerlistPage.php', {
            method: 'POST',
            body: formData,
        })
        .then(response => response.text())
        .then(data => {
            buyedcarSelect.innerHTML = data;
        });
    });
});


>>>>>>> Stashed changes
