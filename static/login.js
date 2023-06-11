const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const signupBtn = document.getElementById('signup-btn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});

signupBtn.addEventListener('click', () => {
    window.location.href = "signup.php"
});
